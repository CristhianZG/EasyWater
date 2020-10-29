<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlacaBaseModel extends CI_Model
{
    public function placaList()
    {
        $query = $this->db->query("select * from vwPlacaBase;");
        return $query;
    }
    public function placaCreate($data)
    {
        $this->db->insert('placa_base', $data);
    }
    public function recuperarPlaca($id)
    {
        $this->db->select('*');
        $this->db->from('placa_base');
        $this->db->where('idPlaca', $id);
        return $this->db->get();
    }
    public function modificarPlaca($id,$data)
    {
        $this->db->where('idPlaca', $id);
        $this->db->update('placa_base', $data);
    }
    public function eliminadoLogicoPlaca($id,$data)
    {
        $this->db->where('idPlaca', $id);
        $this->db->update('placa_base', $data);
    }
}
