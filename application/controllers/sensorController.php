<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SensorController extends CI_Controller
{
   public function index()
   {
        $listarSensores = $this->sensorModel->sensorList();
        $data['sensores'] = $listarSensores;   
        $this->load->view('panel/panelHeader');
        $this->load->view('sensor/sensorView',$data);
        $this->load->view('panel/panelFooter');
   }
   public function crearSensorView()
   {
        $this->load->view('panel/panelHeader');
        $this->load->view('sensor/sensorNew');
        $this->load->view('panel/panelFooter');

   }
   public function crearSensorBd()
   {
        $modelo=$_POST['modelo'];
        $descripcion=$_POST['descripcion'];

        $data['modeloSensor']=$modelo;
        $data['descripcion']=$descripcion;

        $this->sensorModel->sensorCreate($data);
        redirect('sensorController/index','refresh');
   }
    public function modificarSensorView()
    {
        $id=$_POST['idSensor'];
        $data['infoSensor']= $this->sensorModel->recuperarSensor($id);
        $this->load->view('panel/panelHeader');
        $this->load->view('sensor/sensorEdit', $data);
        $this->load->view('panel/panelFooter');
    }
    public function guardarSensorBd()
    {
        $id=$_POST['idSensor'];
        $modelo=$_POST['modelo'];
        $descripcion=$_POST['descripcion'];

        $data['modeloSensor']=$modelo;
        $data['descripcion']=$descripcion;

        $this->sensorModel->modificarSensor($id, $data);
        redirect('sensorController/index', 'refresh');
    }
    public function eliminarSensor()
    {
        $id = $_POST['idSensor'];

        $data['Estado'] = 0;
        $this->sensorModel->eliminadoLogicoSensor($id, $data);
        redirect('sensorController/index', 'refresh');

    }
}
