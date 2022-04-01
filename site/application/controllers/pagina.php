<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');


	}
	
	
	public function index() {
		$dados['titulo'] = 'Jm Sports';
        $this->load->view('home.php', $dados);

	}

	public function sobre() {
		$dados['titulo'] = 'Sobre - Jm Sports';
        $this->load->view('about.php', $dados);

	}

	public function contato() {
		$this->load->helper('form');
		$dados['titulo'] = 'Contato - Jm Sports';
        $this->load->view('contact.html', $dados);

	}

	public function produtos() {
		$dados['titulo'] = 'Produtos - Jm Sports';
        $this->load->view('products', $dados);
		#redirect(base_url('Products/'));

	}

	public function login() {
		$dados['titulo'] = 'Login - Jm Sports';
        $this->load->view('login2.html', $dados);

	}
	public function result() {
		$dados['titulo'] = 'Login - Jm Sports';
        $this->load->view('result-contato.php', $dados);

	}
	public function camisa_1() {
		$dados['titulo'] = 'Jm Sports';
        $this->load->view('camisa_1.html', $dados);

	}

	#public function cart() {
		#$dados['titulo'] = 'Jm Sports';
        #$this->load->view('cart/index', $dados);

	#}



}