<?php
class Auth extends CI_Controller
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

    public function post_login()
    {
        $id = $this->input->post("id");
        $password = $this->input->post("password");
        $admin = $this->AdminModel->findAdmin("id", $id);
        if ($admin != null) {
            if (password_verify($password, $admin->password)) {
                $this->session->set_userdata(["login" => $admin->id]);
                $this->session->set_userdata(["admin" => true]);
                redirect(base_url('admin'));
            } else {
                echo "
                    <script>
                    alert('Password salah');
                    document.location.href = 'adm-login';
                    </script>";
            }
        } else {
            echo "
                <script>
                alert('ID Tidak Terdaftar dalam Database');
                document.location.href = 'adm-login';
                </script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('adm-login'));
    }
}
