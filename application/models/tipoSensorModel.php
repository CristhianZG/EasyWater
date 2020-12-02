<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TipoSensorModel extends CI_Model
{
    public function sensorlist()
    {
        $query = $this->db->query("select * from vwTipoSensor;");
        return $query;
    }
    public function tipoSensorCreate($data)
    {
        $this->db->insert('tipo_sensor', $data);
    }
    public function recuperarTipoSensor($id)
    {
        $this->db->select('*');
        $this->db->from('tipo_sensor');
        $this->db->where('idTipoSensor', $id);
        return $this->db->get();
    }
    public function modificarTipoSensor($id, $data)
    {
        $this->db->where('idTipoSensor', $id);
        $this->db->update('tipo_sensor', $data);
    }
    public function eliminadoLogicoTipoSensor($id, $data)
    {
        $this->db->where('idTipoSensor', $id);
        $this->db->update('tipo_sensor', $data);
    }
}

