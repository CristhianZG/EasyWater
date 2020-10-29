<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlacaBaseController extends CI_Controller
{
    public function index()
    {
        $listaPlacas = $this->placaBaseModel->placaList();
        $data['placas'] = $listaPlacas;  
        $this->load->view('panel/panelHeader');
        $this->load->view('placaBAse/placaBaseView', $data);
        $this->load->view('panel/panelFooter');

    }
    public function crearPlacaView()
    {
        $this->load->view('panel/panelHeader');
        $this->load->view('placaBase/placaBaseNew');
        $this->load->view('panel/panelFooter');
    }
    public function crearPlacaBd()
    {
        $nombre = $_POST['nombre'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];

        $data['nombrePlaca'] = $nombre;
        $data['modelo'] = $modelo;
        $data['descripcion'] = $descripcion;

        $this->placaBaseModel->placaCreate($data);
        redirect('placaBaseController/index', 'refresh');
    }
    public function modificarPlacaView()
    {
        $id = $_POST['idPlaca'];
        $data['infoplaca'] = $this->placaBaseModel->recuperarPlaca($id);
        $this->load->view('panel/panelHeader');
        $this->load->view('placaBase/placaBaseEdit', $data);
        $this->load->view('panel/panelFooter');
    }
    public function guardarPlacaBd()
    {
        $id = $_POST['idPlaca'];
        $nombre = $_POST['nombre'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];

        $data['nombrePlaca'] = $nombre;
        $data['modelo'] = $modelo;
        $data['descripcion'] = $descripcion;

        $this->placaBaseModel->modificarPlaca($id, $data);
        redirect('placaBaseController/index', 'refresh');
    }
    public function eliminarplaca()
    {
        $id = $_POST['idPlaca'];

        $data['estado'] = 0;
        $this->placaBaseModel->eliminadoLogicoPlaca($id, $data);
        redirect('placaBaseController/index', 'refresh');
    }
}
