<?php 

class About extends Controller {

	public function index($nama = 'fery', $pekerjaan = 'Programmer', $umur= 20 )
	{
		$data['nama'] = $nama;
		$data['perkerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = 'page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}