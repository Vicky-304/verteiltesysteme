<?php
namespace App\Controllers;

use App\Models\MainModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->mainModel = new MainModel();
    }

    public function getIndex()
    {
        echo view('pages/login.php');
    }
    public function postProcess()
    {
        $username = $_POST['username'];
        $passwort = hash('sha256', $_POST['passwort']);
        $query = $this->mainModel->loginPruefen($username, $passwort);
        if ($query == 0) {
            echo view('pages/login.php');
            echo "Login fehlgeschlagen";
        } else {
            echo "Login erfolgreich";
            echo view('templates/header.php');
            echo view('pages/index.php');
            echo view('templates/footer.php');
            setcookie('login', 'true');
        }

    }

    public function seiteAnzeigen()
    {
        echo view('pages/index');
    }

}
//TESTLOGIN: vicky, 123