<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function index(){
        $data= $this->mod->GetTable('datauser');
        $this->load->view('templates/header');
		$this->load->view('viewcrud', array('data'=>$data));
		$this->load->view('templates/footer');

	}
	public function insert()
	{
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');
	
			$data = array('nik'=>$nik, 'Nama'=>$nama, 'alamat'=>$alamat,'nohp'=>$nohp); //data yang akan di insert

			$this->mod->InsertData('datauser', $data);
			
			redirect('user'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}

	public function delete(){
        $nik = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('datauser','nik',$nik); //menghapus data
        redirect('user'); //mengalihkan ke tampbali
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$alamat= $this->input->post('alamat');
			$nohp = $this->input->post('nohp');
			
			$data = array('nik'=>$nik, 'Nama'=>$nama, 'alamat'=>$alamat,'nohp'=>$nohp); //data yang akan di update

			$this->mod->UpdateData('datauser', $data,'nik',$nik); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('user'); //mengalihkan ke tampbali
		}else{
			$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('datauser','nik',$nik)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('r'=>$data)); //menampilkan views updatecrud
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->mod->cariDatauser($keyword);
    	$this->load->view('cari', $data);
    }



}
