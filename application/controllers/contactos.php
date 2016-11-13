<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
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
    public function home() {
       $this->load->library('breadcrumbs');
      
       $this->breadcrumbs->unshift('Home', '/');
         $this->load->view('front/front-site');
    } 
   
    

}
