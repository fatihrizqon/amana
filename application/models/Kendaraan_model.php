<?php
class Kendaraan_model extends CI_Model {
    public function __construct()
    {
       $this->load->database();
    }

    public function getData()
    {
        $query = $this->db->get('kendaraan');
        return $query->result_array();
    }

    public function getReadyCar()
    {
        $query = $this->db->where('status', '1');
        $query = $this->db->get('kendaraan');
        return $query->result_array();
    }

    public function getRentCar()
    {
        $query = $this->db->where('status', '0');
        $query = $this->db->get('kendaraan');
        return $query->result_array();
    }

    public function read($id_kendaraan){
        $query = $this->db->where('id_kendaraan', $id_kendaraan);
        $query = $this->db->get('kendaraan');
        return $query->row_array();
    }
    public function create()
    {
    $data = array(
        'tipe'       => $this->input->post('tipe'),
        'plat_nomor' => $this->input->post('plat_nomor'),
        'warna'      => $this->input->post('warna'),
        'transmisi'  => $this->input->post('transmisi'),
        'tahun'      => $this->input->post('tahun'),
        'harga'      => $this->input->post('harga')
    );

    return $this->db->insert('kendaraan', $data);
    }

    public function update($id_kendaraan){
        $data = array(
            'tipe' => $this->input->post('tipe'),
            'plat_nomor' => $this->input->post('plat_nomor'),
            'warna' => $this->input->post('warna'),
            'transmisi' => $this->input->post('transmisi'),
            'harga' => $this->input->post('harga')
        );
        $this->db->where('id_kendaraan', $id_kendaraan);
        return $this->db->update('kendaraan', $data);
    }
    
    public function delete($id_kendaraan){
        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->delete('kendaraan');
        return;
    }


}