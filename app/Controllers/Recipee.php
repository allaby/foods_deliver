<?php

namespace App\Controllers;

class Recipee extends BaseController
{



    public function details()
    {
        $data['page_title'] = "Recette || " . self::SITE_NAME;
        $data['title'] = "";
        echo view('templates/font_header.php', $data);
        echo view('pages/recipees/detail', $data);
        echo view('templates/font_footer.php');
    }



    public function list(){
        $data['page_title'] = "Listes des recettes || " . self::SITE_NAME;
        $data['title'] = "Liste des recettes";
        $data['activebigmenu'] = "recipee";
        $data['activemenu'] = "menu_list";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/recipees/list.php', $data);
        echo view('templates/back_footer.php');
    }
}