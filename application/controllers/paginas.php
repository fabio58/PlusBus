<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function home() {
        $this->load->view('front/front-site');
    }
 }


