<?php
namespace App\Controllers;

class Kontakt extends BaseController
{
    public function getIndex()
    {
        echo view("templates/header");
        echo view("pages/kontakt.php");
        echo view("templates/footer");
    }
    public function getKontaktformular()
    {
        echo view("templates/header");
        echo view("pages/kontaktformular.php");
        echo view("templates/footer");
    }
}