<?php
class User extends Model 
{
	
	public function register() {
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		 function isPeselOk($pesel){
		
			$arr = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
			$intSum = 0;
			for ($i = 0; $i < 10; $i++) {
			$intSum += $arr[$i] * $pesel[$i]; 
			}
			$int = 10 - $intSum % 10; 
			$intControlNr = ($int == 10)?0:$int;
			if ($intControlNr == $pesel[10]){
			   return true;
			}
			return false;
			}

			function isNIPOk($nip) {
				$nipWithoutDashes = preg_replace("/-/","",$nip);
				$reg = '/^[0-9]{10}$/';
				if(preg_match($reg, $nipWithoutDashes)==false)
					return false;
				else
				{
					$digits = str_split($nipWithoutDashes);
					$checksum = (6*intval($digits[0]) + 5*intval($digits[1]) + 7*intval($digits[2]) + 2*intval($digits[3]) + 3*intval($digits[4]) + 4*intval($digits[5]) + 5*intval($digits[6]) + 6*intval($digits[7]) + 7*intval($digits[8]))%11;
			 
					return (intval($digits[9]) == $checksum);
				}
			}

			if($post['name_firm'] == '' || $post['street'] == ''|| $post['localNo'] == ''|| $post['place'] == ''|| $post['postCode'] == ''|| $post['phonePrefix'] == ''
			|| $post['phone'] == ''|| $post['Email'] == ''|| $post['PESEL_NIP'] == '')
			{
				Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
				return;
			}
				

	if($post['firm'] == 0){
	if(!isPeselOk($post['PESEL_NIP']))
	{
		Messages::setMsg('Suma kontrolna numeru PESEL nie jest poprawna', 'error');
		return;

	}
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
			if(!isNIPOk($post['PESEL_NIP']))
	{
		Messages::setMsg('Suma kontrolna numeru NIP nie jest poprawna', 'error');
		return;

	}
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