<?php

namespace App\Controllers;

class Pages extends BaseController{



    function index(){
        echo view('templates/font_header.php');
        echo view('pages/home.php');
        echo view('templates/font_footer.php');
    }

    public function about(){
        echo view('templates/font_header.php');
        echo view('pages/home.php');
        echo view('templates/font_footer.php');
    }

    public function hiw(){
        
    }



}