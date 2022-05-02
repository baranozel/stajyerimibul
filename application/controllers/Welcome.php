<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('stajyerimibul');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function profil()
	{
		$this->load->view('profil');
	}

	public function profilSettings()
	{
		$this->load->view('profil_settings');
	}
}
