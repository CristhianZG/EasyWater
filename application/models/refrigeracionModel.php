<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RefrigeracionModel extends CI_Model
{
    public function refrigeracionList()
    {
        $query = $this->db->query("select * from vwModuloRefrigeracion;");
        return $query;
    }
    public function refrigeracionCreate($data)
    {
        $this->db->insert('modulo_refrigeracion', $data);
    }
    public function recuperarRefrigeracion($id)
    {
        $this->db->select('*');
        $this->db->from('modulo_refrigeracion');
        $this->db->where('idModulo', $id);
        return $this->db->get();

    }
    public function modificarRefrigeracion($id,$data)
    {
        $this->db->where('idModulo', $id);
        $this->db->update('modulo_refrigeracion', $data);
    }
    public function eliminadoLogicoRefrigeracion($id,$data)
    {
        $this->db->where('idModulo', $id);
        $this->db->update('modulo_refrigeracion', $data);
    }
   
}
