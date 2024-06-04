<?php
namespace App\Controllers;

use App\Models\MainModel;

class Shop extends BaseController
{
    public function getIndex()
    {
        echo view("templates/header");
        echo view("pages/shop.php");
        echo view("templates/footer");
    }
}