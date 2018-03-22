<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KendaraanController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kendaraan_model');
        $this->load->helper('url_helper');
        $this->load->library('datatables');
    }
 
	public function index()
	{
        $data['kendaraan'] = $this->kendaraan_model->getData();
        $data['title'] = "Kendaraan";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
        $this->load->view('kendaraan/index',$data);
        $this->load->view('templates/footer',$data);
        
        $this->datatables->select('*');
        $this->datatables->from('kendaraan');
    }

    public function create(){
        $this->Kendaraan_model->create();
        redirect('/kendaraan', 'refresh');
    }
    public function read($id_kendaraan){
		$data['kendaraan'] = $this->Kendaraan_model->read($id_kendaraan);
		$this->load->view('kendaraan/edit', $data);
        redirect('/kendaraan', 'refresh');
    }

    public function update($id_kendaraan){
		$this->Kendaraan_model->update($id_kendaraan);
        redirect('/kendaraan', 'refresh');
    }

    public function delete($id_kendaraan){
        $this->Kendaraan_model->delete($id_kendaraan);
        redirect('/kendaraan', 'refresh');
        return;
    }
}
