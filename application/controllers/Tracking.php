<?php
class Tracking extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("TrackingModel");

        $data['log_tracking'] = $this->TrackingModel->getTracking();
        $this->admin = $this->TrackingModel->getTracking();
    }

    public function insert_data()
    {
        $resi = $this->input->post("resi");
        $kodeServis = $this->input->post("kodeServis");
        $pengirim = $this->input->post("pengirim");
        $alamat_pengirim = $this->input->post("alamat_pengirim");
        $penerima = $this->input->post("penerima");
        $alamat_penerima = $this->input->post("alamat_penerima");
        $ket = $this->input->post("ket");

        $data = array(
            "resi" => $resi,
            "kode_servis" => $kodeServis,
            "pengirim" => $pengirim,
            "alamat_pengirim" => $alamat_pengirim,
            "penerima" => $penerima,
            "alamat_penerima" => $alamat_penerima,
            "ket" => $ket,
        );
        $this->TrackingModel->input($data, 'log_tracking');
        redirect('../admin');
    }

    public function update_data()
    {
        $no_input = $this->input->post("no_input");
        $resi = $this->input->post("resi");
        $kodeServis = $this->input->post("kodeServis");
        $pengirim = $this->input->post("pengirim");
        $alamat_pengirim = $this->input->post("alamat_pengirim");
        $penerima = $this->input->post("penerima");
        $alamat_penerima = $this->input->post("alamat_penerima");
        $ket = $this->input->post("ket");

        $data = array(
            "no_input" => $no_input,
            "resi" => $resi,
            "kode_servis" => $kodeServis,
            "pengirim" => $pengirim,
            "alamat_pengirim" => $alamat_pengirim,
            "penerima" => $penerima,
            "alamat_penerima" => $alamat_penerima,
            "ket" => $ket,
        );

        if ($this->TrackingModel->update($data, $no_input) == 1) {
            echo "
                <script>
                alert('Data berhasil diubah');
                window.history.go(-2);
                </script>";
        } else {
            echo "
                <script>
                alert('Data gagal diubah');
                window.history.go(-1);
                </script>";
        }
    }

    public function report()
    {
        $data['log_tracking'] = $this->TrackingModel->getTracking();
        $this->load->view('admin/admin_tracking', $data);
    }

    public function edit($no_input)
    {
        $data = [
            "admin" => $this->admin,
            "admin" => $this->TrackingModel->change($no_input),
            "error" => " "
            ];

        $this->load->view('admin/admin_edit', $data);
    }

    public function del_track($no_input)
    {
        if ($this->TrackingModel->delete($no_input) != 1) {
            echo "
                <script>
                alert('Data gagal dihapus');
                window.history.go(-1);
                </script>";
        }

        echo "
            <script>
            alert('Data berhasil dihapus');
            window.history.go(-1);
            </script>";
    }

    public function trackResi()
    {
        $resi = $this->input->post("resi");
        if ($this->TrackingModel->getTrackingByResi($resi) == null) {
            echo "
                <script>
                alert('No Resi tidak ditemukan');
                window.history.go(-1);
                </script>";
        } else {
            $data = [
                "track" => $this->TrackingModel->getTrackingByResi($resi),
                "track_ket" => $this->TrackingModel->getTrackingByResiArray($resi),
            ];

            $this->load->view('resi_track', $data);
        }
    }
}
