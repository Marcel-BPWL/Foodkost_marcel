<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Makanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Makanan_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Makanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['makanan'] = $this->Makanan_model->get();
        $this->load->view("layout/header.php", $data);
        $this->load->view("makanan/vw_makanan", $data);
        $this->load->view("layout/footer.php", $data);
    }


    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Makanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['makanan'] = $this->Makanan_model->get();
        $this->form_validation->set_rules('nama', 'Nama Makanan', 'required', ['required' => 'Nama makanan Wajib di isi']);
        $this->form_validation->set_rules('deskripsi', 'Stok', 'required', ['required' => 'Stok Wajib di isi']);
        $this->form_validation->set_rules('bahan', 'Jurusan', 'required', ['required' => 'Harga Wajib di isi']);
        $this->form_validation->set_rules('cara_membuat', 'Ukuran', 'required', ['required' => 'Ukuran Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('makanan/vw_tambah_makanan', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'bahan' => $this->input->post('bahan'),
                'cara_membuat' => $this->input->post('cara_membuat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/makanan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Makanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Makanan Berhasil Ditambah!</div>');
            redirect('Makanan');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['makanan'] = $this->Makanan_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Makanan', 'required', ['required' => 'Nama makanan Wajib di isi']);
        $this->form_validation->set_rules('deskripsi', 'Stok', 'required', ['required' => 'Stok Wajib di isi']);
        $this->form_validation->set_rules('bahan', 'Jurusan', 'required', ['required' => 'Harga Wajib di isi']);
        $this->form_validation->set_rules('cara_membuat', 'Ukuran', 'required', ['required' => 'Ukuran Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('makanan/vw_ubah_makanan', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'bahan' => $this->input->post('bahan'),
                'cara_membuat' => $this->input->post('cara_membuat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/makanan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Makanan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data makanan Berhasil Diubah!</div>');
            redirect('Makanan');
        }
    }

    public function detail($id)
    {
        $data['user'] = $this->userrole->getBy();
        $data['makanan'] = $this->Makanan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view('makanan/vw_detail_makanan', $data);
        $this->load->view("layout/footer", $data);
    }

    public function hapus($id)
    {
        $this->Makanan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Makanan Berhasil Dihapus!</div>');
        redirect('Makanan');
    }
}
