<?php
defined('BASEPATH') or exit('No direct script access allowed');

class common_model extends CI_Model
{
    public function get($where, $table)
    {

        return $this->db->where($where)->get($table)->row();
    }
    public function adddata($table, $where)
    {
        return $this->db->insert($table, $where);
    }
    public function update($where, $data, $table)
    {
        return $this->db->where($where)->update($table, $data);
    }
}