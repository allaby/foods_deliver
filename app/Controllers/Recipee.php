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



    public function list()
    {
        $data['page_title'] = "Listes des recettes || " . self::SITE_NAME;
        $data['title'] = "Liste des recettes";
        $data['activebigmenu'] = "recipee";
        $data['activemenu'] = "menu_list";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/recipees/list.php', $data);
        echo view('templates/back_footer.php');
    }


    public function ingredient()
    {
        $data['page_title'] = "Listes des ingredient || " . self::SITE_NAME;
        $data['title'] = "Liste des ingredient";
        $data['activebigmenu'] = "recipee";
        $data['activemenu'] = "";
        echo view('templates/back_header.php', $data);
        echo view('templates/back_sidebar.php', $data);
        echo view('admin/recipees/ingredient.php', $data);
        echo view('templates/back_footer.php');
    }

    public function addIngredient()
    {
        // debug($_REQUEST);
        $responce = array();
        if ($_REQUEST) {
            $name = $_REQUEST['name'];
            $unit = $_REQUEST['unit'];
            $qty = $_REQUEST['qty'];
            $description = $_REQUEST['description'];
            if (empty($name) || empty($qty)) {
                $responce['success'] = false;
                $responce['message'] = "Veillez remplir tous les champs obligatoires";
            } else {

                $checkIngredient = $this->recipeeModel->getIngrbyName($name);
                // debug($checkIngredient);
                if ($checkIngredient['rows'] >= 1) {
                    $responce['success'] = false;
                    $responce['message'] = "Vous aviez déjâ ajouter cet ingrédient, veillez en ajouter un autre";
                } else {
                    $data = array(
                        "title" => $name,
                        "unit" => $unit,
                        "quantity" => $qty,
                        "creation_date" => date('Y-m-d H:i:s'),
                        "description" => $description
                    );

                    $newIngredient = $this->recipeeModel->addIngredient($data);
                    // debug($newIngredient);
                    if ($newIngredient['result']) {
                        $responce['success'] = true;
                        $responce['message'] = "Ingrédient ajouté !";
                    } else {
                        $responce['success'] = false;
                        $responce['message'] = "Erreur, veillez reéssayer !";
                    }
                }
            }
        }
        echo json_encode($responce);
    }
}
