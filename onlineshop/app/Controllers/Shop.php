<?php
namespace App\Controllers;

use App\Models\LagerverwaltungModel;

class Shop extends BaseController
{
    public function __construct()
    {


        $this->lager_service_url = "http://localhost/lagerverwaltung/public/index.php/api/";
        $this->lager_service_key = "1234";
    }


    private function daten_produkte()
    {
        $curl = curl_init($this->lager_service_url . "produkte/" . $this->lager_service_key);
        //Als String zurückgeben
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        //SSL Verifizierung deaktivieren
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $results = curl_exec($curl);
        curl_close($curl);
        return json_decode($results, true);
    }
    public function getIndex()
    {
        $data1 = [
            'title' => 'Shop Page',
            'cssFile' => 'shop.css',
            'jsFile' => 'shop.js',
        ];
        $data['records'] = $this->daten_produkte();
        echo view('templates/header', $data1);
        echo view('pages/shop', $data);
        echo view('templates/footer');

    }

    public function postBestellen($id)
    {
        $curl = curl_init($this->lager_service_url . "bestellen/" . $this->lager_service_key . "/" . $id);
        curl_setopt($curl, CURLOPT_POST, 1);
        $data = $_POST;
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        //Als String zurückgeben
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        //SSL Verifizierung deaktivieren
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $results = curl_exec($curl);
        curl_close($curl);
        $results = json_decode($results, true);
        if (isset($results['code']) && $results['code'] != 200) {
            //Fehlermeldung ausgeben

            echo $results['message'];
            echo "Bestellung konnte nicht erstellt werden.";
        } else {
            echo "Bestellung erfolgreich erstellt.";
            return redirect()->to(site_url('shop'));
        }
    }

}