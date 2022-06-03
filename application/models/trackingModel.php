<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrackingModel extends CI_Model
{
    private $table = "log_tracking";

    public function input($data, $table)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getTracking()
    {
        $this->db->select('*');
        $this->db->from('log_tracking');
        $this->db->order_by("resi", "ASC");
        return $this->db->get()->result_array();
    }
}
