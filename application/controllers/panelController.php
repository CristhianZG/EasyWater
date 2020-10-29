<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PanelController extends CI_Controller
{
    public function index()
    {
        $this->load->view('panel/panelHeader');
        $this->load->view('panel');
        $this->load->view('panel/panelFooter');
    }
    public function equipoView()
    {
        $this->load->view('panel/panelHeader');
        $this->load->view('equipoView');
        $this->load->view('panel/panelFooter');
    }
}
