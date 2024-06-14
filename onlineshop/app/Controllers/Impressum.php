<?php
namespace App\Controllers;

class Impressum extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Impressumg Page',
            'cssFile' => 'impressum.css'
        ];

        echo view("templates/header", $data);
        echo view("pages/impressum.php");
        echo view("templates/footer");
    }
}