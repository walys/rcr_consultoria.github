<?php
include ("action.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>RCR - Cosultoria</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<script type="text/javascript"></script>

<body>

		
	<div class="container">
		<div class="jumbotron">
			<h2>Teste de Avaliação - RCR Consultoria</h2>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Cadastro de Usuario</div>
					<div class="painel-body">
						<?php
						//$obj->select_data("")
						if(isset($_GET["update"])){
							$id = $_GET["id"] ?? null;
							$where = array("id"=>$id,);	     
							$row = $obj->select_record("users",$where); 
							
						?>

						<form action="action.php" method="POST">
							<table class="table">

								<tr>
									<td><input class="form-control" type="hidden" value="<?php echo $id;?>" name="id"></td>
								</tr>
								<tr>
									<td><i class="glyphicon glyphicon-user"> Nome</i></td>
									<td><input class="form-control" type="text" value="<?php echo $row["nome"];?>" name="nome" placeholder="Digite seu Nome"></td>
								</tr>
								<tr>	
									<td><i class="glyphicon glyphicon-envelope"> Email</i></td>
									<td><input class="form-control" type="email" value="<?php echo $row["email"];?>" name="email"
										placeholder="Digite seu e-mail"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input class="btn btn-primary" type="submit" name="submit" value="Update">
									</td>
								</tr>
								
							</table>
						</form>
						<?php

						}else{
						
						?>	
							<form action="action.php" method="POST">
							<table class="table">

								<tr>
									<td><i class="glyphicon glyphicon-user"> Nome</i></td>
									<td><input class="form-control" type="text" name="nome" placeholder="Digite seu Nome"></td>
								</tr>
								<tr>	
									<td><i class="glyphicon glyphicon-envelope"> Email</i></td>
									<td><input class="form-control" type="email" name="email"
										placeholder="Digite seu e-mail"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input class="btn btn-primary" type="submit" name="submit" value="Cadastar">
									</td>
								</tr>
								
							</table>
						</form>

						

						<?php

						}

						?>
						
					</div>
				</div>
			</div>

			<div class="col-md-3">
				
			</div>
		</div>
		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-2"> </div>

			<div class="col-md-8"> 
				<table class="table table-bordered">
					<tr align="center">
						<th>#</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
					<?php
					$myrow = $obj->fetch_record("users");
					foreach ($myrow as $row){

						?>
					<tr align="center">
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nome'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><a href="index.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info glyphicon glyphicon-pencil"></a></td>
						<td><a href="action.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
					</tr>

					<?php
						
					}

					?>
					
				</table>
			</div>

			<div class="col-md-2"> </div>
		</div>
		
	</div>



<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>