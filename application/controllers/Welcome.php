<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function saludo(){
		$this->load->model('task');

		$data['resultados'] = $this->task->consultar_tareas();		

		//	echo var_dump($data);

		$this->load->view('saludo',$data);
	}

	public function agregar(){
		$this->load->model('task');

		$this->task->agregar();

		$this->load->view('tarea');
	}
}
