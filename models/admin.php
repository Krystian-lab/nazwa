<?php
class Admin extends Model {
	public function Index() {
		$this->query('SELECT * FROM klient');
		$rows = $this->resultSet();
		return $rows;
	}

	public function get($id) {
		if(intval($id) > 0) {
			$this->query('SELECT * FROM klient WHERE id_user = :id;');
			$this->bind(':id', $id);

			return $this->single();
		}

		return null;
	}

	

public function change($id) {
	// Sanitize POST
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	
		if($post['firm'] == 0){
			if($post['name'] == '' || $post['street'] == ''|| $post['localNo'] == ''|| $post['place'] == ''|| $post['postCode'] == ''|| $post['voivodeship'] == ''|| $post['phonePrefix'] == ''
	|| $post['phone'] == ''|| $post['Email'] == ''|| $post['PESEL_NIP'] == ''){
		Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
		return;
	}
			

			$this->query('UPDATE klient SET imie_i_nazwisko = :name, ulica = :street,nr_domu=:localNo,Miejscowosc=:place,kod_pocztowy=:postCode,wojewodztwo=:voivodeship,telefon_prefix=:phonePrefix,telefon=:phone,email=:Email,PESEL=:PESEL WHERE id_user = :id');
			$this->bind(':name', $post['name']);
			$this->bind(':street', $post['street']);
			$this->bind(':localNo', $post['localNo']);
			$this->bind(':place', $post['place']);
			$this->bind(':postCode', $post['postCode']);
			$this->bind(':voivodeship', $post['voivodeship']);
			$this->bind(':phonePrefix', $post['phonePrefix']);
			$this->bind(':phone', $post['phone']);
			$this->bind(':Email', $post['Email']);
			$this->bind(':PESEL', $post['PESEL_NIP']);
			$this->bind(':id', $id);
		 $this->execute();
		
		if($this->rowCount() > 0){
			return true;
		}
	}

if($post['firm'] == 1){
	if($post['name'] == '' || $post['street'] == ''|| $post['localNo'] == ''|| $post['place'] == ''|| $post['postCode'] == ''|| $post['voivodeship'] == ''|| $post['phonePrefix'] == ''
	|| $post['phone'] == ''|| $post['Email'] == ''|| $post['PESEL_NIP'] == ''){
		Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
		return;
	}

		$this->query('UPDATE klient SET Firma = :name, ulica = :street,nr_domu=:localNo,Miejscowosc=:place,kod_pocztowy=:postCode,wojewodztwo=:voivodeship,telefon_prefix=:phonePrefix,telefon=:phone,email=:Email,NIP=:PESEL WHERE id_user = :id');
		$this->bind(':name', $post['name']);
		$this->bind(':street', $post['street']);
		$this->bind(':localNo', $post['localNo']);
		$this->bind(':place', $post['place']);
		$this->bind(':postCode', $post['postCode']);
		$this->bind(':voivodeship', $post['voivodeship']);
		$this->bind(':phonePrefix', $post['phonePrefix']);
		$this->bind(':phone', $post['phone']);
		$this->bind(':Email', $post['Email']);
		$this->bind(':PESEL', $post['PESEL_NIP']);
		$this->bind(':id', $id);
		$this->execute();
	
	if($this->rowCount() > 0){
		return true;
	}
}


	return false;

}
	public function remove($id) {
		if(intval($id) > 0) {
			
			$this->query('SELECT * FROM klient WHERE id_user = :id ');
			$this->bind(':id', $id);

			$row = $this->single();

			if($row) {
				$this->query('DELETE FROM klient WHERE id_user = :id;');
				$this->bind(':id', $id);
				$this->execute();

				return true;
			}
		}

		return false;
	}
	
}