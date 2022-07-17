<?php
defined('BASEPATH') or exit('NO DIRECT ACCESS SCRIPT ALLOWED');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Makanan_model');
        $this->load->model('Favorit_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Profil";
        $data['title'] = "Profil";
        $data['user'] = $this->userrole->getBy();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/vw_profil', $data);
        $this->load->view('layout/footer');
    }

    public function makanan()
    {
        $data['user'] = $this->userrole->getBy();
        $data['makanan'] = $this->Makanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/vw_makanan', $data);
        $this->load->view('layout/footer', $data);
    }

    public function favorit($id)
    {
        $data['favorit'] = $this->Favorit_model->get();
        $data['user'] = $this->userrole->getBy();
        $data['makanan'] = $this->Makanan_model->getById($id);
        $this->form_validation->set_rules('id', 'id', 'required', ['required' => 'keterangan Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('profil/vw_detail_makanan', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_makanan' => $this->input->post('id'),
            ];

            $this->Favorit_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Makanan Berhasil Ditambahkan ke Favorit!</div>');
            redirect('Profil/detail');
        }
    }

    public function detail()
    {
        $data['favorit'] = $this->Favorit_model->get();
        $data['user'] = $this->userrole->getBy();
        $data['makanan'] = $this->Makanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/vw_favorit', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->Favorit_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Makanan Berhasil Dihapus!</div>');
        redirect('Profil/detail');
    }
}
