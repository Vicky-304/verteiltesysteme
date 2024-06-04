<?php
namespace App\Controllers;

use App\Models\MainModel;

class Diy extends BaseController
{
    public function __construct()
    {
        $this->mainModel = new MainModel();
    }

    public function getIndex()
    {
        echo view("templates/header");
        echo view("pages/diy.php");
        echo view("templates/footer");
    }
}