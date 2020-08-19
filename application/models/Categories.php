<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Model {

    public $table = "categories";
    public $table_id = "category_id";

    public function __construct(){
        parent::__construct();
    }

	
}