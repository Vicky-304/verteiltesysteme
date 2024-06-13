<?php
namespace App\Controllers;

use App\Models\MainModel;
use CodeIgniter\HTTP\ResponseInterface;

class Api extends BaseController
{
    public function __construct()
    {
        $this->mainModel = new MainModel();
        $this->apiKey = 1234;
    }

    private function apiKeyPruefen($key)
    {
        if ($key == $this->apiKey) {
            return true;
        } else {
            return false;
        }
    }

    private function getResponse($responseBody, $code = ResponseInterface::HTTP_OK)
    {
        return $this->response->setStatusCode($code)->setJSON($responseBody);
    }
    public function getProdukte($key = null)
    {
        if ($this->apiKeyPruefen($key)) {
            $produkte = $this->mainModel->getProdukte();
            //für jedes Produkt in produkte den img_pfad durch den kompletten Pfad zum Bild ersetzen
            foreach ($produkte as $key => $produkt) {
                $produkte[$key]['img_pfad'] = base_url('pictures/') . $produkt['img_pfad'];
            }
            return $this->getResponse($produkte);
        } else {
            return $this->getResponse(['error' => 'Ungültiger API key'], ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }
}

// Link zur API-Schnittstelle: http://localhost/lagerverwaltung/public/index.php/api/produkte/1234