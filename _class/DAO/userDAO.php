<?php 
	require_once("connection.php");

	class userDAO{
		function __construct(){
			$this->conn = new Connection();
			$this->pdo = $this->conn->Connect();
		}
		function register(User $entUser){
			//$sth = $this->pdo->prepare("INSERT INTO USER (name) VALUES('jandrey2')");
			//return $sth->execute();
			
			try{
				$sth = $this->pdo->prepare("INSERT INTO USER VALUES('', :name, :sexo, :lastname, :email, :date_bird, :password)");
				//$sth = $this->pdo->prepare("INSERT INTO USER (sexo) VALUES('')");
				$param = array(
					":name" 		=> $entUser->getName(),
					":sexo" 		=> $entUser->getSexo(),
					":lastname" 	=> $entUser->getLastname(),
					":email" 		=> $entUser->getEmail(),
					":date_bird" 	=> date("Y/m/s"),
					":password" 	=> $entUser->getPassword()
				);
				return $sth->execute($param);
			} catch(PDOException $ex){
				echo "Erro no sistema" . $ex->getMessage();
			}			
		}

	}