<?php 

use App\core\Controller;
use App\Auth;

class Home extends Controller
{

	public function Index() {
		
		$dados = [];
		
		$this->view('home/index', $dados = ['registros'=>$dados]);
		}

}

?>