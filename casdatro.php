<!doctype html>
<html lang="en">
  <head>
  	<title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
	</head>
	<body>
        <h1 style="text-align: center;">Cadastro</h1>
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPasswordRep4"> Repita a senha</label>
                <input type="password" class="form-control" id="inputPasswordRep4" placeholder="Repita a senha">
              </div>
              <div class="form-group col-md-4">
                <label for="inputBairro4">Bairro</label>
                <input type="text" class="form-control" id="inputBairro4" placeholder="Nome do bairro">
              </div>
              <div class="form-group col-md-4">
                <label for="inputRua4">Rua</label>
                <input type="text" class="form-control" id="inputRua4" placeholder="Nome da rua">
              </div>
              <div class="form-group col-md-4">
                <label for="inputComplemento">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento4" placeholder="Digite o complemento.EX: casa, apartamento.....">
              </div>
              <div class="form-group col-md-1">
                <label for="inputNumero4">Numero</label>
                <input type="number" class="form-control" id="inputNumero4" placeholder=" Digite o numero">
              </div>
            
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                    <option>......</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amap??</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Cear??</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Esp??rito Santo</option>
                    <option value="GO">Goi??s</option>
                    <option value="MA">Maranh??o</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Par??</option>
                    <option value="PB">Para??ba</option>
                    <option value="PR">Paran??</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piau??</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rond??nia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">S??o Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">
              </div>
            </div>
          </div>
            
            <a class="btn btn-primary" href="proximoCadas.php" role="button">proximo</a>
            <a class="btn btn-danger" href="index.php" role="button">cancelar</a>
          </form>
          
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

