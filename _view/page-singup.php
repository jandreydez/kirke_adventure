<?php
	require_once ("../_class/DAO/userDAO.php"); 
	require_once ("../_class/Entity/user.php"); 
	require_once("../_class/DAO/connection.php");
	$userDAO = new userDAO();
	$user = new User();

	include "../header.php"; 
?>
<div class="box-enter">
      <div class="container">
        <div class="row">
			<form action="" method="POST">
				<div class="col-md-7 col-md-offset-3">
					<h2>Sing Up</h2>
					<input type="text" placeholder="Nome" name="name">
					<input type="text" placeholder="Sobrenome" name="lastname">
					<input type="email" placeholder="E-mail" name="email">
					<input type="text" placeholder="sexo" name="sexo">
					<input type="text" placeholder="Password" name="password">
					<input type="submit" name="btnSubmit">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include "../footer.php" ?>
<?php if(isset($_POST['btnSubmit'])){
	$user->setName($_POST['name']);
	$user->setSexo($_POST['sexo']);
	$user->setLastname($_POST['lastname']);
	$user->setEmail($_POST['email']);
	$user->setPassword($_POST['password']);
	//$userDAO->register($user);
	if($userDAO->register($user)){
		?>
		<script>alert("cadastrado");</script>
		<?php
	}
	else{?>
		<script>alert("nao foi");</script>
		<?php
	}
}