<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_book');
	}

	public function index() {
		$data= $this->session->userdata;
		$msg = $this->session->flashdata('msg_load');
		$data['dataBook'] = $this->M_book->getBook();
		if($msg!=''){
			$data['msg_load'] 	= "sukses";
			$data['msg'] 		= $this->session->flashdata('msg');
		}
		$this->template->views('book/index', $data);
	// var_dump($this->M_hewan->getHewan());
	}

	//Tambah Data Hewan
	public function tambahData() {
        $data= $this->session->userdata;
        $data['dataType'] = $this->M_book->getType();
		$this->template->views('book/tambah', $data);
	}

	//Validasi Tambah Data Hewan
	public function validasiAddBook() {
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');

		if($this->form_validation->run() == TRUE){
			$data = array(
				'title'          =>strip_tags($this->input->post('title')),
				'author'         =>strip_tags($this->input->post('author')),
				'date_published' =>strip_tags($this->input->post('date_published')),
                'number_page'    =>strip_tags($this->input->post('number_page')),
                'type'           =>strip_tags($this->input->post('type'))
			);

			$result = $this->M_book->addBook($data);

			if($result>0){
				$this->session->set_flashdata('msg_load','sukses');
				$this->session->set_flashdata('msg','Added successfully');
				redirect("Books");
			}
		}
		else{
			$data = $this->session->userdata;
			$data['msg']=show_validation_msg(validation_errors());
			$this->template->views('book/tambah', $data);
		}
	}

	//Validasi Ubah Data Hewan
	public function validasiUbahData() {
		$id = $this->input->post('id');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');

		if($this->form_validation->run() == TRUE){
			$data = array(
				'title'          =>strip_tags($this->input->post('title')),
				'author'         =>strip_tags($this->input->post('author')),
				'date_published' =>strip_tags($this->input->post('date_published')),
                'number_page'    =>strip_tags($this->input->post('number_page')),
                'type'           =>strip_tags($this->input->post('type'))
			);
			$result = $this->M_book->editBook($data,$id);
			if($result>0){
				$this->session->set_flashdata('msg_load','sukses');
				$this->session->set_flashdata('msg','Sukses mengubah data');
				redirect("Books");
			}
		} else {
			$msg=show_validation_msg(validation_errors());
			$this->ubahData($id,$msg);
		}
	}

	// Ubah Data Hewan
	public function ubahData($id,$msg='') {
		$data= $this->session->userdata;
		$data['msg_err'] = $msg;
        $data['dataBooks'] = $this->M_book->getBookByID($id);
        $data['dataType'] = $this->M_book->getType();
		$this->template->views('book/ubah', $data);
		// var_dump($this->M_hewan->getHewanByID($id));
		
	}


	// Hapus Data Hewan
	public function deleteBooks() {
		$id = $this->input->post('id');
		$result = $this->M_book->deleteBook($id);
		if($result>0){
			$data['status']='berhasil';
			echo json_encode($data);
		}
		else{
			$data['status']='gagal';
			echo json_encode($data);
		}
	}
	
}