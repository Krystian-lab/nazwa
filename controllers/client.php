<?php
class ClientController extends Controller{	
	protected function getName() {
		return 'client';
	}

	protected function Index(){
		$model = new Client();
		$this->returnView('index', $model->Index());
	}


	protected function html($id) {
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'admin');
		}
		
		$model = new Client();
		if (!$model->get($id)) {
			Messages::setMsg('nie znaleziono klienta', 'error');
			$this->redirect('client');
		}
		else
		$this->returnView('html', $model->get($id));
	}

	protected function json($id) {
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'admin');
		}
		
		$model = new Client();
		$this->returnView('json', $model->get($id));
	}
}