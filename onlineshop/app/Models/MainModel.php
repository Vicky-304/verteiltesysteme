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

    public function getUserId($username, $passwort)
    {
        $query = $this->db->query("SELECT `id` FROM login WHERE username = ? AND passwort = ?", [$username, $passwort]);
        return $query->getResultArray();
    }

    public function loginEinfuegen($username, $passwort)
    {
        $query = $this->db->query("INSERT INTO login (username, passwort) VALUES (?, ?)", [$username, $passwort]);
        return $query;
    }

    public function getAllDiys() {
        $query = $this->db->query("SELECT * FROM diy");
        return $query->getResultArray();
    }

    public function getDiyProdukte($id) {
        $query = $this->db->query("SELECT `produkte` FROM diy WHERE `id` = ? ", [$id]);
        return $query->getRowArray();
    }

    public function deleteDiy($post_id) {
        $query = $this->db->query("DELETE FROM diy WHERE `post_id` = ?", [$post_id]);
        return $query;
    }

    public function createDiy($data, $user_id) {
        $query = $this->db->query("INSERT INTO `diy` SET `user_id` = ?, `titel` = ?, `beschreibung` = '', `produkte` = ?, `img_pfad` = COALESCE(?, img_pfad), `datum_mod` = ?, `post_id` = NULL",[
                                    $user_id,
                                    $data['titel'],
                                    $data['produkte'],
                                    $data['img_pfad'],
                                    date('Y-m-d H:i:s')
                                    ]);
        return $query;
    }
    public function editDiy($data) {
        $query = $this->db->query("UPDATE `diy` SET  `titel` = ?, `produkte` = ? WHERE `post_id` = ? ",[
                                    $data['titel'],
                                    $data['produkte'],
                                    $data['img_pfad'],
                                    date('Y-m-d H:i:s')
                                    ]);
        return $query;
    }
}