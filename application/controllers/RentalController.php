<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RentalController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rental_model');
        $this->load->model('Kendaraan_model');
        $this->load->helper('url_helper');
    }

  public function index()
	{
    $data['rental']     = $this->Rental_model->getData();
    $data['kendaraan']  = $this->Kendaraan_model->getData();
    $data['todayCount'] = $this->Rental_model->todayCount();
    $data['today']      = $this->Rental_model->today();
    $data['weekCount']  = $this->Rental_model->weekCount();
    $data['week']       = $this->Rental_model->week();
    $data['title']      = "Administrasi Rental";
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('rental/index', $data);
    $this->load->view('templates/footer',$data);
  }

  public function report(){
    $data['rental'] = $this->Rental_model->getData();
    $data['title']  = "Data Laporan Rental";
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('rental/index', $data);
    $this->load->view('templates/footer',$data);
  }

    public function create(){
        $this->Rental_model->create();
        redirect('', 'refresh');
    }

    public function read($id_rental){
		$data['rental'] = $this->Rental_model->read($id_rental);
        $data['kendaraan'] = $this->Kendaraan_model->getData();
		$this->load->view('rental/read', $data);
    }

    public function update($id_rental){
		$this->Rental_model->update($id_rental);
        redirect('', 'refresh');
    }

    public function delete($id_rental){
        $this->Rental_model->delete($id_rental);
        redirect('', 'refresh');
        return;
    }
}
