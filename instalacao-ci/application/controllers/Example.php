<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Example extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Example_model');
		$this->load->library('form_validation');
		$this->load->library('parser');
		

	}

	function Index(){
		/*
		$data['title'] = "CI | Título da página";
		$data['content'] = "Conteúdo da página amarela";
		$data['domains'] = array('www.casadocodigo.com.br','www.livrocodeigniter.com.br');
		$this->load->view('home', $data);
		*/
		
		$data = array(
        //'blog_title'   => 'My Blog Title',
        'blog_heading' => 'My Blog Heading',
        'domains' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
        )
		);
		$data['title'] = "CI | Título da página";
		//$data['domains'] = 'www.casadocodigo.com.br';


		//var_dump($data); die;
		$this->parser->parse('home', $data);

		//$this->parser->parse('home', $data);
	}

	function Login(){
		$this->load->view('login');
		//echo "login";
	}



} ///Close class