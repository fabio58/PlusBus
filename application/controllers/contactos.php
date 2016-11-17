<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        $this->load->library('breadcrumbs');
        $this->breadcrumbs->push('Home', '/');
        $this->breadcrumbs->push('Paginas Web', '/paginas-web');

        $data = array(
            'title' => 'Contacte con nosotros',
            'descri' => 'Contacte con plusmedia, solicite su presupuetos',
            'content' => 'contactos/index'
        );
        $this->load->view('front/front-content', $data);
    }

    public function enviar() {
//Descargar la libreria
        $this->load->library('email');
        $config=array('mailtype' => 'html');
        $this->email->initialize($config);

        $nombre = $this->input->post('nombre'); // capturo los campos del formulario
        $telefono = $this->input->post('telefono'); // capturo los campos del formulario
        $email = $this->input->post('email'); // capturo los campos del formulario
        $mensaje = $this->input->post('mensaje'); // capturo los campos del formulario
        $this->email->from($email, 'Contacto'); //email desde donde envio
        $this->email->to('info@plusmedia.com.py'); // email a donde envio
        $asunto="<h1>Pagina de Plusmedia</h2> ";
        $this->email->subject($nombre);
        $this->email->subject($telefono);
        $this->email->subject($email);
        $this->email->subject($asunto);
        $this->email->subject($mensaje);
        $this->email->send();
        $this->index; // Se direcciona a la pagina de contacto donde dentro de esta esta la vista emailcontacto dentro de la carpeta contacto
    }

}
