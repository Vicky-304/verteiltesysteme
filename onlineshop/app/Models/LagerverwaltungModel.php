<?php
namespace App\Models;

use CodeIgniter\Model;

class LagerverwaltungModel extends Model
{
    protected $table = 'produkt'; // Table name
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'preis', 'img_pfad', 'kategorie', 'bestand', 
        'groesse', 'gewicht', 'gewicht_einheit', 'beschreibung'
    ];

    protected $DBGroup = 'lagerverwaltung'; // Specify the database connection group

    public function getAllProducts()
    {
        return $this->findAll();
    }
    public function getAllProductsName()
    {
        $query = $this->db->query("SELECT `name`,`id` FROM `produkt`");
        return $query->getResultArray();
    }

    public function decreaseProduct($id)
    {
        $query = $this->db->query("UPDATE `produkt` SET `bestand` = `bestand` - '1' WHERE `produkt`.`id` = ? ", [$id]);
        return $query;
    }
}