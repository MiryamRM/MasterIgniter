<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
        $view['titulo'] = "Bienvenido al master en CodeIgniter";
        $view['header'] = $this->load->view('template/header',null,TRUE) ;
        $view['navega'] = $this->load->view('template/nav',null,TRUE) ;
        $view['footer'] = $this->load->view('template/footer',null,TRUE)  ;
        $view['body'] = $this->load->view('dashboard',null,TRUE) ;
        $this->parser->parse('home',$view);
	}
}
