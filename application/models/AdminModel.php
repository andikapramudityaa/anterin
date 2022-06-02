<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    private $table = "administrator";

    public function findAdmin($col, $val)
    {
        return $this->db->get_where($this->table, [$col => $val])->row();
    }
}
