<?php
class posting extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_posting');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_posting->tampil_data();
        $this->template->load('template','posting/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses posting
            $judul       =   $this->input->post('judul');
            $kategori   =   $this->input->post('kategori');
            $deskripsi      =   $this->input->post('deskripsi');
            $data       = array('judul'=>$judul,
                                'id_kategori'=>$kategori,
                                'deskripsi'=>$deskripsi);
            $this->model_posting->post($data);
            redirect('posting');
        }
        else{
            $this->load->model('model_kategori');
            $data['kategori']=  $this->model_kategori->tampilkan_data()->result();
            //$this->load->view('posting/form_input',$data);
            $this->template->load('template','posting/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses posting
            $judul       =   $this->input->post('judul');
            $kategori   =   $this->input->post('kategori');
            $deskripsi      =   $this->input->post('deskripsi');
            $data       = array('judul'=>$judul,
                                'id_kategori'=>$kategori,
                                'deskripsi'=>$harga);
            $this->model_posting->edit($data,$id);
            redirect('posting');
        }
        else{
            $id=  $this->uri->segment(4);
            $this->load->model('model_kategori');
            $data['kategori']   =  $this->model_kategori->tampilkan_data()->result();
            $data['record']     =  $this->model_posting->get_one($id)->row_array();
            //$this->load->view('posting/form_edit',$data);
            $this->template->load('template','posting/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_posting->delete($id);
        redirect('posting');
    }
}