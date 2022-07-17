<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Favorit_model extends CI_Model
{
    public $table = 'favorit';
    public $id = 'favorit.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $id = $this->session->userdata('id');
        $this->db->select('k.*, s.nama as nama, s.gambar as gambar');
        $this->db->from('favorit k');
        $this->db->join('makanan s', 'k.id_makanan = s.id');
        $this->db->where('k.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);;
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function delete_all($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_user', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
