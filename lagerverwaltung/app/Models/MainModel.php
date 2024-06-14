<?php

namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{
    public function getProdukte()
    {
        $query = $this->db->query("SELECT * FROM produkt");
        return $query->getResultArray();
    }

    public function getProdukt($id)
    {
        $query = $this->db->query("SELECT * FROM produkt WHERE id = ?", [$id]);
        return $query->getRowArray();
    }

    public function produktBearbeiten($data)
    {
        $query = $this->db->query("UPDATE produkt SET name = ?, preis = ?,  kategorie = ?, bestand = ?, datum_mod =?, gewicht = ?, gewicht_einheit = ?, beschreibung = ?, groesse = ?, img_pfad = COALESCE(?, img_pfad)  WHERE id = ?", [
            $data['name'],
            $data['preis'],
            $data['kategorie'],
            $data['bestand'],
            date('Y-m-d H:i:s'),
            $data['gewicht'],
            $data['gewicht_einheit'],
            $data['beschreibung'],
            $data['groesse'],
            $data['img_pfad'],
            $data['id']
        ]);
        return $query;
    }

    public function produktLoeschen($id)
    {
        $query = $this->db->query("DELETE FROM produkt WHERE id = ?", [$id]);
        return $query;
    }

    public function produktEinfuegen()
    {
        $query = $this->db->query("INSERT INTO produkt SET name = ?, preis = ?, kategorie = ?, bestand = ?, datum_mod = ?, gewicht = ?, gewicht_einheit = ?, beschreibung = ?, groesse = ?, img_pfad = COALESCE(?, img_pfad)", [
            $_POST['name'],
            $_POST['preis'],
            $_POST['kategorie'],
            $_POST['bestand'],
            date('Y-m-d H:i:s'),
            $_POST['gewicht'],
            $_POST['gewicht_einheit'],
            $_POST['beschreibung'],
            $_POST['groesse'],
            $_POST['img_pfad']
        ]);
        return $query;
    }

    public function bestellen($data)
    {
        $bestandNeu = $data['bestand'] - 1;
        $query = $this->db->query(
            "UPDATE produkt SET bestand = ? WHERE id = ?",
            [
                $bestandNeu,
                $data['id']
            ]
        );
        return $query;
    }
}