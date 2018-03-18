<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MobilController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
        $this->load->helper('url_helper');
        $this->load->library('datatables');
    }
 
	public function index()
	{
        $data['mobil'] = $this->Mobil_model->getData();
        $data['title'] = "Mobil";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
        $this->load->view('mobil/index',$data);
        $this->load->view('templates/footer',$data);
        
        $this->datatables->select('*');
        $this->datatables->from('mobil');
    }

    public function create(){
        $this->Mobil_model->create();
        redirect('/mobil', 'refresh');
    }
    public function read($id_mobil){
		$data['mobil'] = $this->Mobil_model->read($id_mobil);
		$this->load->view('mobil/edit', $data);
        redirect('/mobil', 'refresh');
    }

    public function update($id_mobil){
		$this->Mobil_model->update($id_mobil);
        redirect('/mobil', 'refresh');
    }

    public function delete($id_mobil){
        $this->Mobil_model->delete($id_mobil);
        redirect('/mobil', 'refresh');
        return;
    }
}
