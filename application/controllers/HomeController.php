<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rental_model');
        $this->load->model('Kendaraan_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
        $data['rental'] = $this->Rental_model->getData();
        $data['kendaraan'] = $this->Kendaraan_model->getData();
        $data['title'] = "Beranda";
        $this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
        $this->load->view('index/index', $data);
		$this->load->view('templates/footer',$data);
    }
    
    public function showData(){
        $data['rental'] = $this->Rental_model->getData();
    }

    public function addRental(){
        $this->Rental_model->addRental();
    }

    public function editRental($id_rental){
        $data['rental'] = $this->Rental_model->getData();
        $data['kendaraan'] = $this->Kendaraan_model->getData();
		$this->load->view('rental/edit', $data);
        
    }

    public function deleteRental($id_rental){
        $this->Rental_model->deleteRental($id_rental);
        redirect('', 'refresh');
        return;
    }

}
