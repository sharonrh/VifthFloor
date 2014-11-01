<?php
class Home extends CI_Controller
{

	public function _home()
	{
		parent::_home();
	}

	function index()
	{
		$this->load->helper('url');
		$data['title'] = "Halo semuanya";
		$data['headline'] = "Halo";
		$data['content'] = "Buatlah suatu permainan pada halaman Web, sebut saja “TangkapTikus”, dengan
							Spesifikasi:
							1. Buatlah petak-petak berukuran 5x5
							2. Petak-petak tersebut digunakan sebagai tempat kemunculan gambar (sang
							‘tikus’) secara acak pada kurun waktu tertentu (misalkan 3 menit, yaitu
							lamanya permainan ini)
							3. Pada saat permainan user mengklik gambar (sang ‘tikus’) dan program
							menghitung keberhasilan dan kegagalan user menangkap sang ‘tikus’
							tersebut.
							4. Setelah waktu bermain habis, program menampilkan berapa kali user berhasil
							menangkap ‘tikus’ dan berapa kali gagal. Permainan dimulai kembali apabila
							user memilih menu refresh/reload.
							5. Program dapat mencatat identitas user serta dapat menampilkan 5 orang Top
							Scorer setiap akhir permainan.
							6. Program memiliki fasilitas untuk mengganti-ganti style (minimal 3 macam
							style). Mekanisme penggantian diserahkan pada anda dan merupakan salah
							satu komponen yang dinilai.";
		$data['bullet'] = array('satu satu','dua dua','tiga tiga','empat empat');
		$this->load->view('home', $data);
	}

	function profile() 
	{
		$this->load->helper('url');
		$this->load->view('profil');
	}
}
?>