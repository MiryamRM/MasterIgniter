<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct(){
                parent::__construct();
        }

	public function index(){
                
                $view['titulo'] = "Bienvenido al master en CodeIgniter";
                $view['header'] = $this->load->view('template/header',null,TRUE) ;
                $view['navega'] = $this->load->view('template/nav',null,TRUE) ;
                $view['footer'] = $this->load->view('template/footer',null,TRUE)  ;
                $view['body'] = $this->load->view('dashboard',null,TRUE) ;
                $this->parser->parse('home',$view);

        }
        public function post_list() {

                $data["posts"] = $this->Posts->findAll();
                $view['titulo'] = "Bienvenido al master en CodeIgniter";
                $view['header'] = $this->load->view('template/header',null,TRUE) ;
                $view['navega'] = $this->load->view('template/nav',null,TRUE) ;
                $view['footer'] = $this->load->view('template/footer',null,TRUE)  ;
                $view['body'] = $this->load->view('admin/post/list',$data,TRUE) ;
                $this->parser->parse('home',$view);
        }

        public function post_delete($post_id = null){
                if ($post_id == null) {
                        echo 0;
                } else {
                        $this->Posts->delete($post_id);
                        echo 1;
                }
        }
}
