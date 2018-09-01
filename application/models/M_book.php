<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_book extends CI_Model {
	
	function getBook() {
		return $this->db->get('book')->result();
	}

	function getBookByID($id) {
		return $this->db->from('book')->where('id',$id)->get()->result();
	}

	function addBook($data) {
		return $this->db->insert('book',$data);
	}

	function editBook($data,$id) {
		return $this->db->where('id', $id)->update('book', $data);
	}

	function deleteBook($id){
		return $this->db->where('id', $id)->delete('book');
    }
    
    function getType() {
		return $this->db->get('type')->result();
	}
}
?>