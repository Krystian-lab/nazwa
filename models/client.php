<?php
class Client extends Model {
	
	public function Index() {
		return;
	}
	public function get($id) {
		if(intval($id) > 0) {
			$this->query('SELECT * FROM klient WHERE id_user  = :id;');
			$this->bind(':id', $id);

			$result= $this->single();
			if($result){
				return $result;
			}
			else
			return false;
		
		}

		return null;
	}
}