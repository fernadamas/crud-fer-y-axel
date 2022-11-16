<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Compradores</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./Estilos/crud.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Lista de <b>Compradores</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Comprador</span></a>				
					</div>
				</div>
			</div>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "joyeria";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->conne<ct_error);
			}
			
			$sql = "SELECT * FROM compradores";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			  // output data of each row
			  echo "<table class='table table-striped table-hover'>";
			  echo "<tr>";
			  echo "<th>ID</th> <th>Nombre</th> <th>Email</th> <th>Direccion</th> <th>Telefono</th> <th>Acciones</th>";
			  echo "</tr>";
			  while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row["id"]."</td> <td>".$row["nombre"]."</td> <td>".$row["email"]."</td> <td>".$row["direccion"]."</td> <td>".$row["telefono"]."</td>";
				echo "<td>
				<a class='edit' title='Editar' data-toggle='tooltip' href='./Modificar/formcompradores.php?id=".$row["id"]."&nombre=".$row["nombre"]."&email=".$row["email"]."&direccion=".$row["direccion"]."&telefono=".$row["telefono"]."'><i class='material-icons'>&#xE254;</i></a>
				<a class='delete' title='Eliminar' data-toggle='tooltip' href='./Eliminar/eliminarcompradores.php?id=".$row["id"]."'><i class='material-icons'>&#xE872;</i></a>
				</td>";
				echo "</tr>";
			  }
			  echo "</table>";
			} else {
			  echo "0 results";
			}
			$conn->close();
			?>
			<div class="clearfix">
				<div class="hint-text">Mostrar <b>5</b> de <b>25</b> elementos</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Anterior</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./Insertar/InsertCompradores.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Comprador</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombre" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Direccion</label>
						<textarea name="direccion" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Telefono</label>
						<input type="text" name="telefono" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>