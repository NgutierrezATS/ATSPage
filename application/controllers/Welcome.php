<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('maquina_model', 'maquina');
        $this->load->model('tipo_model', 'tipo');
        $this->load->model('contacto_model', 'contacto');
    }

    public function index()
    {
        // die(var_dump($this->maquina->all()));
        $data['tipos'] = $this->tipo->all();
        $data['modelos'] = $this->maquina->getModelos();
        $this->load->view('templates/header');
        $this->load->view('slider');
        $this->load->view('filtro', $data);
        $this->load->view('inicio', $data);
        $this->load->view('templates/footer');
    }

    public function buscartipo()
    {
        $data['tipos'] = $this->tipo->all();
        $data['modelos'] = $this->maquina->getModelos();
        if ($this->input->post()) {
            $id = $this->input->post('id_tipo');
            $this->session->set_userdata('id_tipo', $id);
        } else {
            $id = $this->session->userdata('id_tipo');
        }
        $data['tipo'] = (object)$this->tipo->getTipo($id);
        $data['maquinas'] = $this->maquina->filtroTipo($id);
        // die(var_dump($data));
        $this->load->view('templates/header');
        $this->load->view('filtro', $data);
        $this->load->view('maquinas/tipomaquina', $data);
        $this->load->view('templates/footer');
    }

    public function buscarmodelo()
    {
        $data['tipos'] = $this->tipo->all();
        $data['modelos'] = $this->maquina->getModelos();
        if ($this->input->post()) {
            $result = $this->input->post('modelo');
            $this->session->set_userdata('result', $result);
            $result_explode = explode('|', $result);
            $modelo = $result_explode[0];
            $id_tipo = $result_explode[1];
        } else {
            $result = $this->session->userdata('result');
            $result_explode = explode('|', $result);
            $modelo = $result_explode[0];
            $id_tipo = $result_explode[1];
            // die(var_dump($result));
        }

        $data['maquina'] = $this->maquina->filtroModelo($modelo, $id_tipo);
        $this->session->set_userdata('modelo', $data['maquina']->MODELO);
        // die(var_dump($data));

        $this->load->view('templates/header');
        $this->load->view('filtro', $data);
        $this->load->view('maquinas/modelomaquina', $data);
        $this->load->view('templates/footer');

    }

    public function maquinaria()
    {
        $data['tipos'] = $this->tipo->all();
        $data['modelos'] = $this->maquina->getModelos();
        $this->load->view('templates/header');
        $this->load->view('filtro', $data);
        $this->load->view('templates/footer');
    }

    public function Contacto()
    {
        $this->load->view('templates/header');
        $this->load->view('contacto/contacto');
        $this->load->view('templates/footer');
    }

    public function contactoNew()
    {
        if ($this->input->post()) {
            $nombre = $this->input->post('nombre');
            $correo = $this->input->post('email');
            $numero = $this->input->post('numero');
            $empresa = $this->input->post('empresa');
            $asunto = $this->input->post('asunto');
            $mensaje = $this->input->post('mensaje');

            if ((empty($nombre)) || (empty($correo)) || (empty($asunto)) || (empty($mensaje)) || (empty($numero)) || (empty($empresa))) {
                redirect('welcome/contacto', 'refresh ');
            } else {
                $now = date('Y-m-d H:i:s');
                $data = array(
                    'NOMBRE' => $nombre,
                    'CORREO' => $correo,
                    'NUMERO' => $numero,
                    'EMPRESA' => $empresa,
                    'FECHA_CONTACTO' => $now,
                    'ASUNTO' => $asunto,
                    'MENSAJE' => $mensaje
                );
                $this->contacto->insert($data);
                $this->sendEmailUser($data);
                $this->sendEmailClient($data);
                redirect('contacto/success', 'refresh');
            }
        }

    }

    public function contactoSuccess()
    {
        $this->load->view('templates/header');
        $this->load->view('contacto/success');
        $this->load->view('templates/footer');
    }

    public function sendEmailUser($data)
    {
        $this->load->library("email");
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
        $this->email->initialize($configGmail);
        $this->email->from('contacto@ats.cl');
        $this->email->to($data['CORREO']);
        $this->email->subject('Contacto desde ATS.cl');
        $this->email->message($this->contacto->bodyUser($data));
        $this->email->send();
    }

    public function sendEmailClient($data)
    {
        $this->load->library("email");
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
        $this->email->initialize($configGmail);
        $this->email->from('contacto@ats.cl');
        $this->email->to($data['CORREO']);
        $this->email->subject('Contacto desde ATS.cl');
        $this->email->message($this->contacto->bodyClient($data));
        $this->email->send();
    }

    public function empresa()
    {
        $this->load->view('templates/header');
        $this->load->view('empresa/empresa');
        $this->load->view('templates/footer');
    }

}
