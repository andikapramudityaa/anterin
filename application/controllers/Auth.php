<?php
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function post_login()
    {
        $id = $this->input->post("id");
        $password = $this->input->post("password");
        $admin = $this->AdminModel->findAdmin("id", $id);
        if ($admin != null) {
            if (password_verify($password, $admin->password)) {
                $this->session->set_userdata(["login" => $admin->id]);
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
