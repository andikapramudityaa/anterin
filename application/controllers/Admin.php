<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("RegAdminModel");
    }

    public function insert_account()
    {
        $id = $this->input->post("id");
        $lokasi = $this->input->post("lokasi");
        $password = password_hash(
            $this->input->post("password"),
            PASSWORD_DEFAULT
        );
        $admin = $this->RegAdminModel->findAdmin("id", $id);
        if ($admin != null) {
            echo "
            <script>
            alert('Username telah terdaftar, pilih username lain');
            document.location.href = '../adm-register';
            </script>";
        } else {
            $data = array(
                "id" => $id,
                "lokasi" => $lokasi,
                "password" => $password,
            );
            $this->RegAdminModel->input($data, 'admin');
            if ($admin == 'admin') {
                redirect(base_url('admin'));
            } else {
                redirect(base_url('admin'));
            }
        }
    }

    public function adminRegister()
    {
        $this->load->view('admin/admin_register');
    }

    public function adminLogin()
    {
        $this->load->view('admin/admin_login');
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
