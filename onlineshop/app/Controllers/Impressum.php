<?php
namespace App\Controllers;

class Impressum extends BaseController
{
    public function getIndex()
    {
        echo view("templates/header");
        echo view("pages/impressum.php");
        echo view("templates/footer");
    }
}