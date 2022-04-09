<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Order extends BaseController
{


    public function list()
    {
        $data['page_title'] = "Listes des commandes || " . self::SITE_NAME;
        $data['title'] = "Liste des commandes";
        $data['activebigmenu'] = "";
        $data['activemenu'] = "orders";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/orders/list.php', $data);
        echo view('templates/back_footer.php');
    }
}
