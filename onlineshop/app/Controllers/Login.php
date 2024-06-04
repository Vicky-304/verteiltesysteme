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
            echo 'Login fehlgeschlagen';
        } else {
            echo "Login erfolgreich";
            //login cookie setzen
            setcookie('login', 'true', time() + 3600, '/');
            return redirect()->to(site_url());
        }

    }

    public function seiteAnzeigen()
    {
        echo view('pages/index');
    }

}
//TESTLOGIN: vicky, 123