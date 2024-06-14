<?php
namespace App\Controllers;

use App\Models\mainModel;
use App\Models\lagerverwaltungModel;

class Diy extends BaseController
{
    public function __construct()
    {
        $this->mainModel = new MainModel();
        $this->lagerverwaltungModel = new LagerverwaltungModel();
    }

    public function getIndex()
    {
        $data1 = [
            'title' => 'DIY Page',
            'cssFile' => 'diy.css',
            'jsFile' => 'diy.js'
        ];

        $data['diys'] = $this->mainModel->getAllDiys();
        $data['products'] = $this->lagerverwaltungModel->getAllProductsName();

        echo view("templates/header", $data1);
        echo view("pages/diy", $data);
        echo view("templates/footer", $data1);
    }

    public function postCreateDiy() {
        $this->store();
        $query = $this->mainModel->createDiy($_POST, $_COOKIE['id']);
        $this->getIndex();
    }

    public function postEditDiy() {
        $this->store();
        $query = $this->mainModel->editDiy($_POST);
        $this->getIndex();
    }

    public function getCurrentDiy() {
        $data['diys'] = $this->mainModel->getAllDiy();
        $data['products'] = $this->lagerverwaltungModel->getAllProductsName();
        $data['diy'] = $this->mainModel->getDiyProdukte($_POST['id']);
        echo view("pages/diy", $data);
    }

    public function getDelete($post_id) {
        $query = $this->mainModel->deleteDiy($post_id);
        echo("DIY wurde gelöscht");
        $this->getIndex();
    }

    private function store() {
        $file = $this->request->getFile('img');
        if ($file->isValid() && !$file->hasMoved()) {
            $name = $file->getName();
            if(!file_exists('pictures/diy/' + $name)) {
                $file->move('pictures/diy/', $name);
                $_POST['img_pfad'] = $name;
            } else {
                $_POST['img_pfad'] = null;
            }
        } else {
            $_POST['img_pfad'] = null;
        }
    }
}