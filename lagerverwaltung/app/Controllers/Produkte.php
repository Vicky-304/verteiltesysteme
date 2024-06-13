<?php
namespace App\Controllers;

use App\Models\MainModel;

class Produkte extends BaseController
{
    public function __construct()
    {

        $this->mainModel = new MainModel();

    }
    public function getIndex($id = null)
    {
        $this->ansicht($id);
    }

    public function postCreate()
    {
        if ($this->validation->run($_POST, 'produkt')) {
            $this->store();
            $this->mainModel->produktEinfuegen();
            return redirect()->to(site_url('produkte/'));
        } else {
            $data['errors'] = $this->validation->getErrors();
            $this->ansicht("neu", $data);
        }
    }


    public function postUpdate($id)
    {
        if ($this->validation->run($_POST, 'produkt')) {
            $_POST['id'] = $id;
            $this->store();

            $this->mainModel->produktBearbeiten($_POST);
            $this->ansicht($id);

        } else {
            $data['errors'] = $this->validation->getErrors();
            $this->ansicht($id, $data);
        }
    }

    public function getDelete($id)
    {
        $this->mainModel->produktLoeschen($id);
        return redirect()->to(site_url('produkte/'));
    }

    private function store()
    {
        $file = $this->request->getFile('img');
        if ($file->isValid() && !$file->hasMoved()) {
            $name = $file->getName();
            $file->move('pictures/', $name);
            $_POST['img_pfad'] = $name;
        } else {
            $_POST['img_pfad'] = null;
        }
    }




    private function ansicht($id = null, $data = [])
    {
        if ($id == null) {
            $data['produkte'] = $this->mainModel->getProdukte();
            echo view('templates/header');
            echo view('pages/produkte', $data);
            echo view('templates/footer');
        } else {
            if ($id != "neu") {
                $data['produkt'] = $this->mainModel->getProdukt($id);
                echo view('templates/header');
                echo view('pages/produkt', $data);
                echo view('templates/footer');
            } else if ($id == "neu") {
                echo view('templates/header');
                echo view('pages/produkt', $data);
                echo view('templates/footer');
            }
        }
    }
}