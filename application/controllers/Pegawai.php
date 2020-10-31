<?php 


class Pegawai extends CI_Controller{


public function __construct(){

    parent::__construct();
    $this->load->model('Pegawai_model');
    $this->load->library('form_validation');

}


    public function index(){
        $data['judul']="halaman pegawai";
        $data['pegawai']= $this->Pegawai_model->getAllPegawai(); 
        $this->load->view('templates/header',$data);
        $this->load->view('pegawai/index',$data);
        $this->load->view('templates/footer');
    }

    public function detail($id){
        
    $data['judul']="Halaman Detail";
    $data['pegawai']= $this->Pegawai_model->getPegawaiById($id);
    $this->load->view('templates/header.php',$data);
    $this->load->view('pegawai/detail.php',$data);
    $this->load->view('templates/footer.php');
    
    }

    public function hapus($id){

        $this->Pegawai_model->hapusDataPegawai($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('pegawai');
    }

    public function tambah(){
        $data['judul']= "Form Tambah Data Pegawai";    
        
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('pegawai/tambah');
            $this->load->view('templates/footer');
        }
        else{
            // echo 'berhasil';
            $this->Pegawai_model->tambahDataPegawai();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pegawai');
        }
        
        }

}