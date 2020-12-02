<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DatosModel extends CI_Model
{

    public function insertData($data)
    {
        $this->db->insert('capturas', $data);
    }
    public function getDatos()
    {
        /*$query = $this->db->query("SELECT *
        FROM capturas;");
        return $query;*/
        $query = $this->db->query("SELECT max(idcapturas),temperatura
        from capturas
        where idcapturas= (SELECT max(idcapturas) from capturas);;");
        return $query;
    }
    public function getHora()
    {
        $query = $this->db->query("SELECT tiempo
        FROM capturas;");
        return $query;
    }
    public function getValor()
    {
        $query = $this->db->query("SELECT temperatura
        FROM capturas;");
        return $query;
    }
}