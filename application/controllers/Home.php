<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model(['blogmodel']);
    }
    
    public function index()
    {
        $data = [];
        $data['valtozo'] = 56;
        $data['bejegyzesek'] = $this->blogmodel->getBlogBejegyzesek();
        $this->load->view('home', $data);

    }

    public function item($id) 
    {
        $id = (int)$id;
        $data = [];
        $data['bejegyzes'] = $this->blogmodel->getBejegyzesById($id);
        $this->load->view('item', $data);
    }
}
