<!doctype html>
<html lang="en">
  <head>
  	<title>lista de cadastro de atendimento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
  <?php include "conexao.php"?>


	</head>
	<body>
        
        <nav class="navbar navbar-dark bg-dark">
            <button type="button" class="btn btn btn-light" data-toggle="modal" data-target="#exampleModalCenter2">
                <input type="image" src="Icon_usuario.png" alt="Submit" style="float:right" width="60" height="60">
            </button>
            <h1 style="text-align: center;">lista de atendimentos</h1>
            
            <button type="button" class="btn btn-warning float-right ml-19" data-toggle="modal" data-target="#exampleModalCenter">
                adicionar

            </button>
          </nav>
        
     
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Cras justo odio
                  <span class="badge badge-success badge-pill">marcado</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Dapibus ac facilisis in
                  <span class="badge badge-primary badge-pill">em andamento</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Morbi leo risus
                  <span class="badge badge-danger badge-pill">marcação não aprovada</span>
                </li>
              </ul>

        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">adiciocar um Estabelecimento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group col-md-10">
                <label for="inputData4">Data</label>
                <input type="number" class="form-control" id="inputDatar4" placeholder="digite a data do atendimento">
            </div>
            <div class="form-group col-md-10">
                <label for="inputHorario4">Horario</label>
                <input type="number" class="form-control" id="inputHorario4" placeholder="digite o Horario com o fuso da região">
            </div>
            <div class="form-group col-md-10">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                    <option>escolha um atendimento</option>
                </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
          <button type="button" class="btn btn-primary">salvar</button>
        </div>
      </div>
    </div>
  </div>    
    <!-- moda 2 -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dados do usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="list-group list-group-flush">
            <?php
            $sql = "SELECT Email FROM cadastro";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<br> id: ". $row["Email"] . "<br>";
                }
            } else {
                echo "0 results";
            }
            
            $conn->close();
            
            ?>
                <li class="list-group-item"></li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
          <button type="button" class="btn btn-primary">salvar</button>
        </div>
      </div>
    </div>
  </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

