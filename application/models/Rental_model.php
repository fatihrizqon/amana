<?php
class Rental_model extends CI_Model {
    public function __construct()
    {
       $this->load->database();
    }

    public function getData()
    {
        $this->db->select ( '*' );
        $this->db->from ( 'rental' );
        $this->db->join ( 'kendaraan', 'kendaraan.id_kendaraan = rental.id_kendaraan');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function read($id_rental){
        $query = $this->db->where('id_rental', $id_rental);
        $query = $this->db->get('rental');
        return $query->row_array();
    }

    public function create()
    {
    $data = array(
        'nama' => $this->input->post('nama'),
        'telepon' => $this->input->post('telepon'),
        'id_kendaraan' => $this->input->post('id_kendaraan'),
        'tanggal_pesan' => $this->input->post('tanggal_pesan'),
        'pembayaran' => $this->input->post('pembayaran'),
        'tanggal_sewa' => $this->input->post('tanggal_sewa'),
        'tanggal_kembali' => $this->input->post('tanggal_kembali'),
        'id_users' => '1'
    );
    return $this->db->insert('rental', $data);
    }

    public function update($id_rental){

    $data = array(
        'nama' => $this->input->post('nama'),
        'telepon' => $this->input->post('telepon'),
        'pembayaran' => $this->input->post('pembayaran'),
        'tanggal_kembali' => $this->input->post('tanggal_kembali'),
    );
    $this->db->where('id_rental', $id_rental);
    return $this->db->update('rental', $data);
    }

    public function delete($id_rental){
        $this->db->where('id_rental', $id_rental);
        $this->db->delete('rental');
        return;
    }

    public function today(){
        $date = date('Y-m-d H:i:s');
        $this->db->where('tanggal_sewa', $date);
        $this->db->get('rental');
        return;
        
    }

    public function week(){
        // Get Last Month
        $date = new DateTime();
        $date->modify("last day of previous week");
        $last_week = $date->format("Y-m-d");

        // Your Query
        $this->db->select('*');
        $this->db->from('rental');
        $this->db->where('tanggal_sewa', $last_week);
        $query = $this->db->get();
        return $query->result();
    }
}
