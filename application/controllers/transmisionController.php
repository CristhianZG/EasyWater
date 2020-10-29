<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TransmisionController extends CI_Controller
{
    public function index()
    {
        $listarTransmision = $this->transmisionModel->transmisionList();
        $data['transmision'] = $listarTransmision;
        $this->load->view('panel/panelHeader');
        $this->load->view('transmision/transmisionView', $data);
        $this->load->view('panel/panelFooter');
    }
    public function crearTransmisorView()
    {
        $this->load->view('panel/panelHeader');
        $this->load->view('transmision/transmisionNew');
        $this->load->view('panel/panelFooter');
    }
    public function creartransmisorBd()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $data['nombre'] = $nombre;
        $data['descripcion'] = $descripcion;

        $this->transmisionModel->TransmisorCreate($data);
        redirect('transmisionController/index', 'refresh');
    }
    public function modificarTransmisorView()
    {
        $id = $_POST['idTransmisor'];
        $data['infoTransmisor'] = $this->transmisionModel->recuperarTransmisor($id);
        $this->load->view('panel/panelHeader');
        $this->load->view('transmision/transmisionEdit', $data);
        $this->load->view('panel/panelFooter');
    }
    public function guardarTransmisorBd()
    {
        $id = $_POST['idTransmisor'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $data['nombre'] = $nombre;
        $data['descripcion'] = $descripcion;

        $this->transmisionModel->modificartransmisor($id, $data);
        redirect('transmisionController/index', 'refresh');
    }
    public function eliminarTransmisor()
    {
        $id = $_POST['idTransmisor'];

        $data['estado'] = 0;
        $this->transmisionModel->eliminadoLogicoTransmisor($id, $data);
        redirect('transmisionController/index', 'refresh');
    }
}
