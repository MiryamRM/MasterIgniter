<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Model {
        public $table = "posts";
        public $table_id = "post_id";

        public function __construct(){
                parent::__construct();
        }

	
}