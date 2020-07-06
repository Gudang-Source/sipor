<?php

class Admin_model extends CI_Model
{
    function deleteUsers($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function updateStatus($id, $where)
    {
        $this->db->set('status', $where);
        $this->db->where('id', $id);
        $this->db->update('laporan');
    }

    public function getAll()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit('8');
        $query = $this->db->get('laporan');
        return $query->result();
    }
    public function createLaporan($data)
    {
        $this->db->insert('laporan', $data);
        return $this->db->affected_rows();
    }

    public function kirimPesan($data)
    {
        $this->db->insert('contact', $data);
    }

    public function get_detail($id = NULL)
    {
        $query = $this->db->get_where('laporan', array('id' => $id))->row();
        return $query;
    }
}
