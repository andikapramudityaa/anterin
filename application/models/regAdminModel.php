<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegAdminModel extends CI_Model
{
    private $table = "regist_admin";
    private $table2 = "administrator";

    public function findAdmin($col, $val)
    {
        return $this->db->get_where($this->table2, [$col => $val])->row();
    }

    public function input($data, $table)
    {
        return $this->db->insert($this->table, $data);
    }
}
