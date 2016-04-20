<?php 
	class User{
		private $name;
		private $lastname;
		private $email;
		private $sexo;
		private $date_bird;
		private $password;

		/*..............GET...............*/
		/*....................................*/
		public function getName(){
			return $this->name;
		}
		/*....................................*/
		public function getLastname(){
			return $this->lastname;
		}
		/*....................................*/	
		public function getEmail(){
			return $this->email;
		}
		/*....................................*/
		public function getSexo(){
			return $this->sexo;
		}
		/*....................................*/
		public function getDate_bird(){
			return $this->date_bird;
		}
		/*....................................*/
		public function getPassword(){
			return $this->password;
		}

		/*...............SET.................*/
		/*....................................*/
		public function setName($name){
			$this->name = $name;
		}
		/*....................................*/
		public function setLastname($lastname){
			$this->$lastname = $lastname;
		}
		/*....................................*/
		public function setEmail($email){
			$this->$email = $email;
		}
		/*....................................*/
		public function setSexo($sexo){
			$this->$sexo = $sexo;
		}
		/*....................................*/
		public function setDate_bird($date_bird){
			$this->$date_bird = $date_bird;
		}
		/*....................................*/
		public function setPassword($password){
			$this->$password = $password;
		}

	}
