<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login()
    {
        // debug($_REQUEST);
        if (isset($_REQUEST)) {
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            if (empty($email) || empty($password)) {
                $resul['codeError'] = "warning";
                $resul['message'] = "Fill all required fields";
            } else {
                $user = $this->userModel->checkEmail($email);
                // debug($checkemail);exit;
                if ($user['rows'] == 1) {
                    if (password_verify($password, $user['data'][0]->password)) {
                        $this->session->set('is_logged', true);
                        $sess_data = array();
                        foreach ($user['data'][0] as $key => $value) {
                            $sess_data[$key] = $value;
                        }
                        $this->session->set($sess_data);
                        $last_login_data = array(
                            'lastLogin' => date('Y-m-d H:i:s')
                        );
                        $attempt_login = $this->userModel->last_login($last_login_data, $user['data'][0]->user_id);
                        $resul['codeError'] = "success";
                        $resul['message'] = "Connexion Successfully";
                    } else {
                        $resul['codeError'] = "error";
                        $resul['message'] = "Wrong password, please provide your password or reset for a new one";
                    }
                } else {
                    $resul['codeError'] = "warning";
                    $resul['message'] = "This account doesn't exist in our database, please create a new account";
                }
            }
        }
        echo json_encode($resul);
    }

    public function register()
    {
        
        $result = array();
        if (isset($_REQUEST)) {
            $firstname = $_REQUEST['firstname'];
            $lastname = $_REQUEST['lastname'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $pass1 = $_REQUEST['pass1'];
            $pass2 = $_REQUEST['pass2'];
            if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($pass1) || empty($pass2)) {
                $result['codeError'] = "warning";
                $result['message'] = "Fill all required fields";
            } else if ($pass1 != $pass2) {
                $result['codeError'] = "warning";
                $result['message'] = "Passwords don't match, please provide the same passwords";
            } else {
                $checkEmail = $this->userModel->checkEmail($email);
                if ($checkEmail['rows'] == 0) {
                    $password = password_hash($pass1, PASSWORD_DEFAULT);
                    $user_data = array(
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'phone' => $phone,
                        'password' => $password,
                        'customer' => 1,
                        'creation_date' => date('Y-m-d H:i:s'),
                        'active' => 1,
                    );
                    $insertUser = $this->userModel->addUser($user_data);
                    // debug($insertUser);exit;
                    if ($insertUser['result']) {
                        $result['codeError'] = "success";
                        $result['message'] = "Sign in successfully";
                    } else {
                        $result['codeError'] = "error";
                        $result['message'] = "Error, please try it again";
                    }
                } else {
                    $result['codeError'] = "warning";
                    $result['message'] = "This email address is already used, please reset your password";
                }
                // debug($checkEmail);exit;
            }
        }
        echo json_encode($result);
        exit;
    }
}
