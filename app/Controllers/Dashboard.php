<?php

namespace App\Controllers;

class Dashboard extends BaseController
{


    public function index()
    {
        $data['page_title'] = "Menus de la semaine || " . self::SITE_NAME;
        $data['title'] = "Menus de la semaines";
        $data['activemenu'] = "dashboard";
        $data['activebigmenu'] = "";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/dashboard.php', $data);
        echo view('templates/back_footer.php');
    }
}
