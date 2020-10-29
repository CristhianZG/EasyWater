<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SensorModel extends CI_Model
{
   public function sensorlist()
   {
        $query= $this->db->query("select * from vwSensores;");
        return $query;

   }
    public function sensorCreate($data)
    {
        $this->db->insert('sensores', $data);
    }
    public function recuperarSensor($id)
    {
        $this->db->select('*');
        $this->db->from('sensores');
        $this->db->where('idSensor', $id);
        return $this->db->get();

    }
    public function modificarSensor($id,$data)
    {
        $this->db->where('idSensor', $id);
        $this->db->update('sensores', $data);
    }
    public function eliminadoLogicoSensor($id,$data)
    {
        $this->db->where('idSensor', $id);
        $this->db->update('sensores', $data);
    }
}
