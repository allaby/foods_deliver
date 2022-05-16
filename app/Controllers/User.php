<?php

namespace App\Controllers;

class User extends BaseController
{


    public function index()
    {
        $data['page_title'] = "Mon profil || " . self::SITE_NAME;
        $data['title'] = "Mon profil";
        $data['activebigmenu'] = "";
        $data['activemenu'] = "profile";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/user/profile.php', $data);
        echo view('templates/back_footer.php');
    }

    public function users()
    {
        $data['page_title'] = "Les utilisateurs || " . self::SITE_NAME;
        $data['title'] = "Les utilisateurs";
        $data['activebigmenu'] = "";
        $data['activemenu'] = "users";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/user/profile.php', $data);
        echo view('templates/back_footer.php');
    }


    public function cust_profile($user)
    {
        $data['page_title'] = "Mon compte || " . self::SITE_NAME;
        echo view('templates/font_header', $data);
        echo view('templates/font_footer');
    }
}
