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
}
