<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DatosController extends CI_Controller
{
    public function index()
    {
        $nombreA = $_POST['nombresA'];
        $temperaturaA = $_POST['temperaturaA'];
        $humedadA = $_POST['humedadA'];

        $nombreB = $_POST['nombresB'];
        $temperaturaB = $_POST['temperaturaB'];
        $humedadB = $_POST['humedadB'];

        $nombreC = $_POST['nombresC'];
        $temperaturaC = $_POST['temperaturaC'];
        $humedadC = $_POST['humedadC'];

        $dataA['nombreSensor']=$nombreA;
        $dataA['temperatura']=$temperaturaA;
        $dataA['humedad']=$humedadA;

        $dataB['nombreSensor'] = $nombreB;
        $dataB['temperatura'] = $temperaturaB;
        $dataB['humedad'] = $humedadB;

        $dataC['nombreSensor'] = $nombreC;
        $dataC['temperatura'] = $temperaturaC;
        $dataC['humedad'] = $humedadC;

        $data['nombreSensor'] = $nombreA;
        $data['temperatura'] = $temperaturaA;
        $data['humedad'] = $humedadA;

        $this->datosModel->insertData($data);
        $this->datosModel->insertData($dataB);
        $this->datosModel->insertData($dataC);
    }

}