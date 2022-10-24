<?php
class AdminController extends Controller{
	protected function Index(){
		$model = new Admin();
		$this->returnView('index', $model->Index());
	}

	protected function getName() {
		return 'admin';
	}


	protected function edit($id) {
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'admin');
		}
		
		$model = new Admin();
		$this->returnView('edit', $model->get($id));
	}

	protected function change($id) {
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'admin');
		}

		$model = new Admin();
		if ($model->change($id)) {
			Messages::setMsg('Zmieniono dane', 'success');
		}
		else {			
			Messages::setMsg('Nie zmieniono danych', 'error');
		}
		
		$this->redirect('admin');
	}

	protected function remove($id) {
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'admin');
		}

		$model = new Admin();
		if ($model->remove($id)) {
			Messages::setMsg('Usunięcto dane', 'success');
		}
		else {			
			Messages::setMsg('Nie udało się usunąć danych', 'error');
		}
		
		$this->redirect('admin');
	}

}