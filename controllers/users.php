<?php
class UsersController extends Controller{	
	protected function getName() {
		return 'users';
	}

	public function register() {
		$this->returnView('register');
	}

	public function createAccount() {
		$model = new User();
		if ($model->register()) {
			Messages::setMsg("Klient dodany do bazy", "success");
			$this->redirect('users', 'register');
		}
		else {
			Messages::setMsg("Klient nie został dodany", "error");
			$this->redirect('users', 'register');
		}
	}

	public function login(){
		$this->returnView('login');
	}
	
	public function authenticate(){
		$model = new User();
		if ($model->login()) {
			Messages::setMsg("Zalogowano $row", "success");
			$this->redirect('home');
		}
		else {
			Messages::setMsg("Nie udało się zalogować $row", "error");
			$this->redirect('users', 'login');
		}
	}

	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		Messages::setMsg('Wylogowano', 'success');
		// Redirect
		header('Location: '.ROOT_URL);
	}
}