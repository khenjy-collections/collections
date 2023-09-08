<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	//HALAMAN ADMIN--------------------------------------------------------------------------------------------------------------------------------------------------------
	public function index($id = 0)
	{
		$data = array(
			"judul" => "Login",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
		);
		$this->load->view('login', $data);
	}

	public function home($id = 0)
	{
		$data = array(
			"judul" => "Dashboard",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"konten" => "v_dashboard"
		);
		$this->load->view('template', $data);
	}

	//HALAMAN MENU--------------------------------------------------------------------------------------------------------------------------------------------------------
	public function menu($id = 0)
	{
		$data = array(
			"judul" => "Master Menu",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"menu" => $this->ksr->tampil_data("menu")->result(),
			"konten" => "v_menu",
			"menu_akses" => "menu_admin"
		);
		$this->load->view('template', $data);
	}

	public function menu_baru($id = 0)
	{
		$data = array(
			"judul" => "Tambah Menu",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"konten" => "menu_form_add"
		);
		$this->load->view('template', $data);
	}

	public function menu_simpan()
	{
		//settingan untuk upload//
		$config['upload_path'] = "./assets/upload";
		$config['allowed_types'] = "jpg|jpeg|png|gif|svg|webp";

		//panggil fungsi untuk upload//
		$this->load->library('upload', $config);

		//ambil data nama dan ukuran gambar//
		$gambar = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];

		if ($ukuran > 0) {
			$this->upload->do_upload("gambar");
		}

		$data = array(
			"id_menu" => "",
			"nama" => $this->input->post("nama"),
			"kategori" => $this->input->post("kategori"),
			"harga_jual" => $this->input->post("karga"),
			"gambar" => $gambar
		);

		$this->ksr->simpan_data("menu", $data);

		redirect(site_url("menu"));
	}

	public function menu_edit($kode, $id = 0)
	{
		$data = array(
			"judul" => "Tambah Menu",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"menu" => $this->ksr->tampil_kondisi("menu", array("id_menu" => $kode))->result(),
			"konten" => "menu_form_edit"
		);
		$this->load->view('template', $data);
	}

	public function menu_update()
	{
		//settingan untuk upload//
		$config['upload_path'] = "./assets/upload";
		$config['allowed_types'] = "jpg|jpeg|png|gif|svg|webp";

		//panggil fungsi untuk upload//
		$this->load->library('upload', $config);

		//ambil data nama dan ukuran gambar//
		$gambar = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];

		if ($ukuran > 0) {
			$this->upload->do_upload("gambar");
		} else {
			$gambar = $this->input->post("txtgambar");
		}

		$data = array(
			"nama" => $this->input->post("nama"),
			"kategori" => $this->input->post("kategori"),
			"harga_jual" => $this->input->post("karga"),
			"gambar" => $gambar
		);

		$this->ksr->update_data("menu", array("id_menu" => $this->input->post("kode")), $data);

		redirect(site_url("menu"));
	}

	public function menu_hapus($kode)
	{
		$this->ksr->hapus_data("menu", array("id_menu" => $kode));

		redirect(site_url("menu"));
	}

	//HALAMAN USER--------------------------------------------------------------------------------------------------------------------------------------------------------
	public function user($id = 0)
	{
		$data = array(
			"judul" => "Master User",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"user" => $this->ksr->tampil_data("user")->result(),
			"konten" => "v_user",
			"menu_akses" => "menu_admin"
		);
		$this->load->view('template', $data);
	}

	public function user_baru($id = 0)
	{
		$data = array(
			"judul" => "Tambah Menu",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"konten" => "menu_form_add"
		);
		$this->load->view('template', $data);
	}

	public function user_simpan()
	{
		//settingan untuk upload//
		$config['upload_path'] = "./assets/upload/user/";
		$config['allowed_types'] = "jpg|jpeg|png|gif|svg|webp";

		//panggil fungsi untuk upload//
		$this->load->library('upload', $config);

		//ambil data nama dan ukuran gambar//
		$gambar = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];

		if ($ukuran > 0) {
			$this->upload->do_upload("gambar");
		}

		$data = array(
			"id_user" => "",
			"nama" => $this->input->post("nama"),
			"level" => $this->input->post("level"),
			"password" => $this->input->post("password"),
			"foto" => $gambar
		);

		$this->ksr->simpan_data("user", $data);

		redirect(site_url("user"));
	}

	public function user_edit($kode, $id = 0)
	{
		$data = array(
			"judul" => "Tambah User",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"user" => $this->ksr->tampil_kondisi("user", array("id_user" => $kode))->result(),
			"konten" => "menu_form_edit"
		);
		$this->load->view('template', $data);
	}

	public function user_update()
	{
		//settingan untuk upload//
		$config['upload_path'] = "./assets/upload";
		$config['allowed_types'] = "jpg|jpeg|png|gif|svg|webp";

		//panggil fungsi untuk upload//
		$this->load->library('upload', $config);

		//ambil data nama dan ukuran gambar//
		$gambar = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];

		if ($ukuran > 0) {
			$this->upload->do_upload("gambar");
		} else {
			$gambar = $this->input->post("txtgambar");
		}

		$data = array(
			"nama" => $this->input->post("nama"),
			"level" => $this->input->post("level"),
			"password" => $this->input->post("password"),
			"foto" => $gambar
		);

		$this->ksr->update_data("user", array("id_user" => $this->input->post("id")), $data);

		redirect(site_url("user"));
	}

	public function user_hapus($kode)
	{
		$this->ksr->hapus_data("user", array("id_user" => $kode));

		redirect(site_url("user"));
	}

	public function ceklogin()
	{
		$where = array(
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pass')
		);
		$login = $this->usr->ceklogin("user", $where);

		if ($login->num_rows() > 0) {
			$user = $login->result();

			//print_r($user);
			$nama = $user[0]->nama;
			$level = $user[0]->level;
			$foto = $user[0]->foto;

			$this->session->set_userdata("nama", $nama);
			$this->session->set_userdata("akses", $level);
			$this->session->set_userdata("foto", $foto);

			redirect('welcome/home');
		} else {
			redirect('welcome');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(site_url('welcome'));
	}
	//HALAMAN TRANSAKSI--------------------------------------------------------------------------------------------------------------------------------------------------------
	public function transaksi($id = 0)
	{
		$data = array(
			"judul" => "Transaksi",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"menu" => $this->ksr->tampil_data("menu")->result(),
		);
		$this->load->view('transaksi', $data);
	}

	//HALAMAN ORDER--------------------------------------------------------------------------------------------------------------------------------------------------------

	//HALAMAN PENGATURAN--------------------------------------------------------------------------------------------------------------------------------------------------------
	public function pengaturan_edit($id = 0)
	{
		$data = array(
			"judul" => "Tambah User",
			"pengaturan" => $this->ptr->tampil_kondisi("pengaturan", array("id" => $id))->result(),
			"konten" => "pengaturan_form_edit"
		);
		$this->load->view('template', $data);
	}

	public function pengaturan_update()
	{
		//settingan untuk upload//
		$config['upload_path'] = "./assets/upload";
		$config['allowed_types'] = "jpg|jpeg|png|gif|svg|webp";

		//panggil fungsi untuk upload//
		$this->load->library('upload', $config);

		//ambil data nama dan ukuran gambar//
		$favicon = $_FILES['favicon']['name'];
		$ukuran_favicon = $_FILES['favicon']['size'];
		$logo = $_FILES['logo']['name'];
		$ukuran_logo = $_FILES['logo']['size'];

		if ($ukuran_favicon > 0 || $ukuran_logo > 0) {
			$this->upload->do_upload("favicon");
			$this->upload->do_upload("logo");
		} else {
			$favicon = $this->input->post("txtfavicon");
			$logo = $this->input->post("txtlogo");
		}

		$data = array(
			"judul" => $this->input->post("judul"),
			"favicon" => $favicon,
			"logo" => $logo,
			"alamat" => $this->input->post("alamat"),
			"email" => $this->input->post("email"),
			"telp" => $this->input->post("telp"),
			"metadesc" => $this->input->post("metadesc"),
			"fb" => $this->input->post("fb"),
			"ig" => $this->input->post("ig"),
		);

		$this->ksr->update_data("pengaturan", array("id" => $this->input->post("id")), $data);

		redirect(site_url("user"));
	}
}
