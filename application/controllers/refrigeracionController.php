<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RefrigeracionController extends CI_Controller
{
   public function index()
   {
        $listarRegrigeracion = $this->refrigeracionModel->refrigeracionList();
        $data['refrigeracion'] = $listarRegrigeracion;
        $this->load->view('panel/panelHeader');
        $this->load->view('refrigeracion/refrigeracionView', $data);
        $this->load->view('panel/panelFooter');
   }
    public function crearRefrigeracionView()
    {
        $this->load->view('panel/panelHeader');
        $this->load->view('refrigeracion/refrigeracionNew');
        $this->load->view('panel/panelFooter');
    }
    public function crearRefrigeracionBd()
    {
        $nombre=$_POST['nombre'];
        $modelo=$_POST['modelo'];

        $data['nombreModulo']=$nombre;
        $data['modelo'] = $modelo;

        $this->refrigeracionModel->refrigeracionCreate($data);
        redirect('refrigeracionController/index', 'refresh');

    }
    public function modificarRefrigeracionView()
    {
        $id = $_POST['idModulo'];
        $data['infoRefrigeracion'] = $this->refrigeracionModel->recuperarRefrigeracion($id);
        $this->load->view('panel/panelHeader');
        $this->load->view('refrigeracion/refrigeracionEdit', $data);
        $this->load->view('panel/panelFooter');
    }
    public function guardarRefrigeracionBd()
    {
        $id = $_POST['idModulo'];
        $nombre = $_POST['nombre'];
        $modelo = $_POST['modelo'];

        $data['nombreModulo'] = $nombre;
        $data['modelo'] = $modelo;

        $this->refrigeracionModel->modificarRefrigeracion($id, $data);
        redirect('refrigeracionController/index', 'refresh');
    }
    public function eliminarRefrigeracion()
    {
        $id = $_POST['idModulo'];

        $data['estado'] = 0;
        $this->refrigeracionModel->eliminadoLogicoRefrigeracion($id, $data);
        redirect('refrigeracionController/index', 'refresh');
    }
}
