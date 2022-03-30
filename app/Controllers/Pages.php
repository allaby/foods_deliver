<?php

namespace App\Controllers;

class Pages extends BaseController
{



    function index()
    {
        // $this->session;
        echo view('templates/font_header');
        echo view('pages/home');
        echo view('templates/font_footer');
    }

    public function about()
    {
        echo view('templates/font_header.php');
        echo view('pages/about.php');
        echo view('templates/font_footer.php');
    }

    public function hiw()
    {
    }

    public function login_page()
    {
        $data['page_title'] = "Login || " . self::SITE_NAME;
        echo view('pages/login', $data);
    }

    public function reset_page()
    {
        $data['page_title'] = "Reset Password || " . self::SITE_NAME;
        echo view('pages/reset', $data);
    }

    public function register_page()
    {
        $data['page_title'] = "Register || " . self::SITE_NAME;
        echo view('pages/register', $data);
    }
}
