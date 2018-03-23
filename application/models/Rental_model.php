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

    public function todayCount(){
        $date = new DateTime("now");
        $current_date = $date->format('Y-m-d ');
        $this->db->select('COUNT(*) as total');
        $this->db->from('rental'); 
        $this->db->where('DATE(tanggal_sewa)',$current_date);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function today(){
        $date = new DateTime("now");
        $date = $date->format('Y-m-d');
        $this->db->select('*');
        $this->db->from('rental'); 
        $this->db->like('tanggal_sewa', $date);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function weekCount(){
        $lastWeek = (new DateTime("now"))->sub(new DateInterval('P7D'))->format('Y-m-d');
        $this->db->select('COUNT(*) as total');
        $this->db->from('rental'); 
        $this->db->where('DATE(tanggal_sewa)',$last_week);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function week(){
        $date = new DateTime("now");
        $last_week = date('Y-m-d',time()-(7*86400));
        $this->db->select('*');
        $this->db->from('rental'); 
        $this->db->where('DATE(tanggal_sewa)', $last_week);
        $query = $this->db->get();
        return $query->result_array();
    }
}
