<?php
namespace App\Controllers;

class Kontakt extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Contact Page',
            'cssFile' => 'contact.css'
        ];
        echo view("templates/header", $data);
        echo view("pages/kontakt.php");
        echo view("templates/footer");
    }
    public function getKontaktformular()
    {
        $data = [
            'title' => 'Contactformular Page',
            'cssFile' => 'contactforumlar.css',
            'jsFile' => 'contactforumlar.js'
        ];
        echo view("templates/header", $data);
        echo view("pages/kontaktformular.php");
        echo view("templates/footer", $data);
    }
}