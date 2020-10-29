<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TransmisionModel extends CI_Model
{
    public function transmisionList()
    {
        $query = $this->db->query("select * from vwTransmisionDatos;");
        return $query;
    }
    public function TransmisorCreate($data)
    {
        $this->db->insert('transmision_datos', $data);
    }
    public function recuperarTransmisor($id)
    {
        $this->db->select('*');
        $this->db->from('transmision_datos');
        $this->db->where('idTransmisor', $id);
        return $this->db->get();
    }
    public function modificartransmisor($id, $data)
    {
        $this->db->where('idTransmisor', $id);
        $this->db->update('transmision_datos', $data);
    }
    public function eliminadoLogicoTransmisor($id, $data)
    {
        $this->db->where('idTransmisor', $id);
        $this->db->update('transmision_datos', $data);
    }
}
