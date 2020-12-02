<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TipoSensorController extends CI_Controller
{
    public function index()
    {
        $listarTipoSensores = $this->tipoSensorModel->sensorList();
        $data['tipoSensor'] = $listarTipoSensores;
        $this->load->view('panel/panelHeader');
        $this->load->view('tipoSensor/tipoSensorView', $data);
        $this->load->view('panel/panelFooter');

        $this->load->library('form_validation');
    }
    public function crearTipoSensorView()
    {
        //0 => todo correcto
        //1 => datos vacios
        //2 => caracteres por demas

        $data['msg'] = 0;
        $this->load->view('panel/panelHeader');
        $this->load->view('tipoSensor/tipoSensorNew', $data);
        $this->load->view('panel/panelFooter');
    }
    public function crearTipoSensorBd()
    {

        $tipo = $_POST['tipo'];
        $medida = $_POST['medida'];

        if ($tipo == "" || $medida == "") {
            $val['msg'] = 1;
            $this->load->view('panel/panelHeader');
            $this->load->view('tipoSensor/tipoSensorNew', $val);
            $this->load->view('panel/panelFooter');
        } else {
            $cantTipo = strlen($tipo);
            $cantMedida = strlen($medida);

            if ($cantTipo > 32 || $cantMedida > 65) {
                $val['msg'] = 2;
                $this->load->view('panel/panelHeader');
                $this->load->view('tipoSensor/tipoSensorNew', $val);
                $this->load->view('panel/panelFooter');
            } else {
                $data['nombreTipoSensor'] = $tipo;
                $data['unidadMedida'] = $medida;

                $this->tipoSensorModel->tipoSensorCreate($data);
                redirect('tipoSensorController/index', 'refresh');
            }
        }
    }
    public function modificarTipoSensorView()
    {
        $id = $_POST['idSensor'];
        $data['msg'] = 0;
        $data['infoSensor'] = $this->tipoSensorModel->recuperarTipoSensor($id);
        $this->load->view('panel/panelHeader');
        $this->load->view('tipoSensor/tipoSensorEdit', $data);
        $this->load->view('panel/panelFooter');
    }
    public function guardarTipoSensorBd()
    {
        $id = $_POST['idSensor'];
        $tipo = $_POST['tipo'];
        $medida = $_POST['medida'];

        if ($tipo == "" || $medida == "") {
            $val['msg'] = 1;
            $val['infoSensor'] = $this->tipoSensorModel->recuperarTipoSensor($id);
            $this->load->view('panel/panelHeader');
            $this->load->view('tipoSensor/tipoSensorEdit', $val);
            $this->load->view('panel/panelFooter');
        } else {
            $cantTipo = strlen($tipo);
            $cantMedida = strlen($medida);

            if ($cantTipo > 32 || $cantMedida > 100) {
                $val['msg'] = 2;
                $val['infoSensor'] = $this->tipoSensorModel->recuperarTipoSensor($id);
                $this->load->view('panel/panelHeader');
                $this->load->view('tipoSensor/tipoSensorEdit', $val);
                $this->load->view('panel/panelFooter');
            } else {
                $data['nombreTipoSensor'] = $tipo;
                $data['unidadMedida'] = $medida;

                $this->tipoSensorModel->modificarTipoSensor($id, $data);
                redirect('tipoSensorController/index', 'refresh');
            }
        }
    }
    public function eliminarTipoSensor()
    {
        $id = $_POST['idSensor'];

        $data['Estado'] = 0;
        $this->tipoSensorModel->eliminadoLogicoTipoSensor($id, $data);
        redirect('tipoSensorController/index', 'refresh');
    }
}
