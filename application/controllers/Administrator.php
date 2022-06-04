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
        $this->admin = $this->AdminModel->findAdmin("id", $this->session->userdata("login"));
    }

    public function adminProfil()
    {
        $data = [
            "admin" => $this->AdminModel->findAllByAdmin($this->admin->id),
            "error" => " "
        ];

        $this->load->view('admin/admin_profil', $data);
    }

    public function adminDashboard()
    {
        $this->load->view('admin/admin_dashboard');
    }
}
