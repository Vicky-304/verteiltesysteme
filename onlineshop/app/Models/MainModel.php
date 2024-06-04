<?php
namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{
    public function loginPruefen($username, $passwort)
    {
        $query = $this->db->query("SELECT * FROM login WHERE username = ? AND passwort = ?", [$username, $passwort]);
        return $query->getNumRows();
    }

    public function loginEinfuegen($username, $passwort)
    {
        $query = $this->db->query("INSERT INTO login (username, passwort) VALUES (?, ?)", [$username, $passwort]);
        return $query;
    }
}