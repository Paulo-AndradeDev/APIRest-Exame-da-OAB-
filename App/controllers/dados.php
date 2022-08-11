<?php

use App\core\Controller;


class Dados extends Controller
{


	public function Index() {
		
		$dados = [];
		
		$this->view('home/index', $dados = ['registros'=>$dados]);
		}
		
	public function exame($id = ''){ 

			$data = $this->model('Api');

			$dados = $data->findExame($id); 

			$this->view('dados/estado', $dados = ['registros' => $dados]); 
		
		}



	public function estado($id = ''){

			$data = $this->model('Api');

			$dados = $data->findEstado($id); 

			$this->view('dados/estado', $dados = ['registros' => $dados]); 	

		
		}

	public function cidade($id = '') {

			$data = $this->model('Api');

			$dados = $data->findCidade($id); 

			$this->view('dados/cidade', $dados = ['registros' => $dados]); 	
		}


		public function faculdade($id = '') { 

			$data = $this->model('Api');

			$dados = $data->findFaculdade($id); 

			$this->view('dados/faculdade', $dados = ['registros' => $dados]); 
		}



}