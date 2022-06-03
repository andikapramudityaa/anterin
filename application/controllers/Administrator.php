<?php
class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");

        if ($this->session->userdata("login") == null) {
            redirect(base_url('adm-login'));
        }
        $this->user = $this->AdminModel->findAdmin("id", $this->session->userdata("login"));
    }

    public function adminProfil()
    {
        $this->load->view('admin/admin_profil');
    }

    public function adminDashboard()
    {
        $this->load->view('admin/admin_dashboard');
    }
}