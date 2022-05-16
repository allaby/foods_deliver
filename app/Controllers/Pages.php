<?php

namespace App\Controllers;


class Pages extends BaseController
{

    // private $sess = $this->session;

    // public function __construct()
    // {
    //     $this->sess = \Config\Services::session();
    // }




    function index()
    {
        // var_dump(session('user_id'));exit;
        $data['page_title'] = "Accueil || " . self::SITE_NAME;
        echo view('templates/font_header', $data);
        echo view('pages/home');
        echo view('templates/font_footer');
    }

    public function about()
    {
    }

    public function hiw()
    {
        $data['page_title'] = "Comment ça marche || " . self::SITE_NAME;
        echo view('templates/font_header.php', $data);
        echo view('pages/how.php');
        echo view('templates/font_footer.php');
    }

    public function login_page()
    {
        // $password = password_hash('azerty123', PASSWORD_DEFAULT);
        // debug($this->session);
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

    public function recepee()
    {
        $data['page_title'] = "Nos Recette || " . self::SITE_NAME;
        $data['title'] = "Nos Recettes";
        echo view('templates/font_header.php', $data);
        echo view('pages/recepee.php', $data);
        echo view('templates/font_footer.php');
    }

    public function recepee_week()
    {
        $data['page_title'] = "Menus de la semaine || " . self::SITE_NAME;
        $data['title'] = "Menus de la semaines";
        echo view('templates/font_header.php', $data);
        echo view('pages/recipee_week.php', $data);
        echo view('templates/font_footer.php');
    }


    public function contact()
    {
        $data['page_title'] = "Contact || " . self::SITE_NAME;
        $data['title'] = "Contact";
        echo view('templates/font_header.php', $data);
        echo view('pages/contact.php', $data);
        echo view('templates/font_footer.php');
    }
}
