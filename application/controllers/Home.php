<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("TrackingModel");
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function trackResi()
    {
        $resi = $this->input->post("resi");

        $data = [
            "track" => $this->TrackingModel->getTrackingByResi($resi),
            "track_ket" => $this->TrackingModel->getTrackingByResiArray($resi),
        ];
        
        $this->load->view('resi_track', $data);
    }
}
