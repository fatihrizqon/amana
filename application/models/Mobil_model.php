<?php
class Mobil_model extends CI_Model {
    public function __construct()
    {
       $this->load->database();
    }

    public function getData()
    {
        $query = $this->db->get('mobil');
        return $query->result_array();
    }
    public function read($id_mobil){
        $query = $this->db->where('id_mobil', $id_mobil);
        $query = $this->db->get('mobil');
        return $query->row_array();
    }
    public function create()
    {
    $data = array(
        'tipe' => $this->input->post('tipe'),
        'plat_nomor' => $this->input->post('plat_nomor'),
        'warna' => $this->input->post('warna'),
        'transmisi' => $this->input->post('transmisi'),
        'harga' => $this->input->post('harga')
    );

    return $this->db->insert('mobil', $data);
    }

    public function update($id_mobil){
        $data = array(
            'tipe' => $this->input->post('tipe'),
            'plat_nomor' => $this->input->post('plat_nomor'),
            'warna' => $this->input->post('warna'),
            'transmisi' => $this->input->post('transmisi'),
            'harga' => $this->input->post('harga')
        );
        $this->db->where('id_mobil', $id_mobil);
        return $this->db->update('mobil', $data);
    }
    
    public function delete($id_mobil){
            $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
    return;
    }


}