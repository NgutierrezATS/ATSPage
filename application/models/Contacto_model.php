<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_model extends CI_Model
{

    private $table = 'contacto';
    private $nombre = 'NOMBRE';
    private $correo = 'CORREO';
    private $numero = 'NUMERO';
    private $empresa = 'EMPRESA';
    private $fecha_contacto = 'FECHA_CONTACTO';
    private $asunto = 'ASUNTO';
    private $mensaje = 'MENSAJE';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($contacto)
    {
        $this->db->insert('contacto', $contacto);
    }

    public function bodyUser($data)
    {
        $body =
            '<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="utf-8"/>
		</head>
		<body style=" color:#666;background:#fff;font-size:15px;">
		<!--style cont email-->
		<h3>Contacto desde ATS.cl</h3>
		Estimado ' . $data['NOMBRE'] . ',<br /><br />
		Gracias por contactarse con nosotros. Le responderemos a la brevedad posible.<br /><br />
		Saludos cordiales<br /><br />
		www.ats.cl
		<!--style cont email-->
		</body>
		</html> ';
        return $body;

    }

    public function bodyClient($data)
    {
        $body = '<!doctype html>';
        $body .= '<html lang="en">';
        $body .= '<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">';
        $body .= '</head>';
        $body .= '<body style=" color:#666;background:#fff;font-size:15px;">';
        $body .= '<h3>Contacto desde ATS&reg;</h3>';
        $body .= '<table width="100%">';
        $body .= '<tr>';
        $body .= '<td valign="top"><strong>Contacto Desde</strong></td>';
        $body .= '<td valign="top">:</td>';
        $body .= '<td valign="top">ATS.cl</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Nombre</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['NOMBRE'] . '</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Email</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['CORREO'] . '</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Numero Contacto</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['NUMERO'] . '</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Fecha</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['FECHA_CONTACTO'] . '</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Empresa</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['EMPRESA'] . '</td>';
        $body .= '</tr>';
        $body .= '<tr>';
        $body .= '<td><strong>Asunto</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['ASUNTO'] . '</td>';
        $body .= '</tr>';

        $body .= '<tr>';
        $body .= '<td><strong>Mensaje</strong></td>';
        $body .= '<td>:</td>';
        $body .= '<td>' . $data['MENSAJE'] . '</td>';
        $body .= '</tr>';
        $body .= '</table>';
        $body .= '</body>';
        $body .= '</html>';

        return $body;
    }

}

/* End of file contacto.php */
/* Location: ./application/models/maquina.php */