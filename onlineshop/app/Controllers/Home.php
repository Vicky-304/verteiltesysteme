<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'cssFile' => 'index.css',
            'jsFile' => 'index.js',
        ];

        echo view("templates/header", $data);
        echo view("pages/index");
        echo view("templates/footer", $data);
    }


}
?>