<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrackingModel extends CI_Model
{
    private $table = "log_tracking";

    public function input($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getTrackingByResi($resi)
    {
        return $this->db->query("SELECT * FROM $this->table WHERE resi='$resi'")->row();
    }

    public function getTrackingByResiArray($resi)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('resi', $resi);
        return $this->db->get()->result_array();
    }

    public function getTracking()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by("resi", "ASC");
        return $this->db->get()->result_array();
    }

    public function delete($no_input)
    {
        return $this->db->delete($this->table, array('no_input' => $no_input));
    }

    public function update($data, $no_input)
    {
        return $this->db->update($this->table, $data, array('no_input' => $no_input));
    }
}
