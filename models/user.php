<?php
class User extends Model 
{
	public function register() {
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		

		
		if($post['firm'] == 0){
			$this->query('INSERT INTO klient (imie_i_nazwisko,ulica,nr_domu,Miejscowosc,kod_pocztowy,wojewodztwo,telefon_prefix,telefon,email,pesel) VALUES(:name,:street,:localNo,:place,:postCode,:voivodeship,:phonePrefix,:phone,:Email,:PESEL)');
			$this->bind(':name', $post['name_firm']);
			$this->bind(':street', $post['street']);
			$this->bind(':localNo', $post['localNo']);
			$this->bind(':place', $post['place']);
			$this->bind(':postCode', $post['postCode']);
			$this->bind(':voivodeship', $post['voivodeship']);
			$this->bind(':phonePrefix', $post['phonePrefix']);
			$this->bind(':phone', $post['phone']);
			$this->bind(':Email', $post['Email']);
			$this->bind(':PESEL', $post['PESEL_NIP']);
			
			$this->execute();
		}
		if($post['firm'] == 1){
			$this->query('INSERT INTO klient (Firma,ulica,nr_domu,Miejscowosc,kod_pocztowy,wojewodztwo,telefon_prefix,telefon,email,NIP) VALUES(:name_company,:street,:localNo,:place,:postCode,:voivodeship,:phonePrefix,:phone,:Email,:NIP)');
			$this->bind(':name_company', $post['name_firm']);
			$this->bind(':street', $post['street']);
			$this->bind(':localNo', $post['localNo']);
			$this->bind(':place', $post['place']);
			$this->bind(':postCode', $post['postCode']);
			$this->bind(':voivodeship', $post['voivodeship']);
			$this->bind(':phonePrefix', $post['phonePrefix']);
			$this->bind(':phone', $post['phone']);
			$this->bind(':Email', $post['Email']);
			$this->bind(':NIP', $post['PESEL_NIP']);
			$result=$this->execute();
			
		}
			// Verify
		if($this->lastInsertId()){
				$id=$this->lastInsertId();
				
				return true;
			}
		
		return false;
	}

	public function login() {
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	//	$password = $this->hashPassword($post['password'], $post['login']);

		
			// Compare Login
			$this->query('SELECT * FROM account WHERE login = :login');
			$this->bind(':login', $post['login']);
			
			$row = $this->single();
			
			if($row) {
				if ($post['password']==$row['password']) {
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data'] = array(
						"id"	=> $row['id_account'],
						"login"	=> $row['login'],
					);
				return true;
				
			}
		}
		$row='admin';
		return false;
	}
}