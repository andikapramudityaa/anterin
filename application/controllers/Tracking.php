<?php
class Tracking extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("TrackingModel");
    }

    public function insert_data()
    {
        $resi = $this->input->post("resi");
        $kodeServis = $this->input->post("kodeServis");
        $pengirim = $this->input->post("pengirim");
        $alamat_pengirim = $this->input->post("alamat_pengirim");
        $penerima = $this->input->post("penerima");
        $alamat_penerima = $this->input->post("alamat_penerima");

        $data = array(
            "resi" => $resi,
            "kode_servis" => $kodeServis,
            "pengirim" => $pengirim,
            "alamat_pengirim" => $alamat_pengirim,
            "penerima" => $penerima,
            "alamat_penerima" => $alamat_penerima,
        );
        $this->TrackingModel->input($data, 'log_tracking');
        redirect('../admin');
    }

    public function report()
    {
        $data['log_tracking'] = $this->TrackingModel->getTracking();
        $this->load->view('admin/admin_dashboard', $data);
    }
}
