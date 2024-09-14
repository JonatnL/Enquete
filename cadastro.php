<?php
include "navbar.php";
?>
      
    <!--Fim do navbar-->


    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-5">

    <main class="form-signin w-100 m-auto p-5">
        <form method="POST">
          <img class="mb-4" src="./img/imghome.webp" alt="" width="130" height="150">
          <h1 class="h3 mb-3 fw-normal">Realize o seu Cadastro</h1>

          <div class="form-floating">
            <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Informe seu nome">
            <label for="floatingInput">Nome</label>
          </div>

          <div class="form-floating">
            <input type="date" name="nascimento" class="form-control" id="floatingInput" placeholder="Informe sua data de nascimento">
            <label for="floatingInput">Data de nascimento</label>
          </div>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Endereço de E-mail</label>
          </div>
          <div class="form-floating">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
          </div>
      
          <input class="btn btn-primary w-100 py-2" type="submit" name="cadastrar" value="Cadastrar">
          <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
      </main>
            </div>
        </div>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

<?php
// Verifica se o formulario foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtém os dados do formulário
  $nome = $_POST['nome'];
  $nascimento = $_POST['nascimento'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
// Conexão com o banco de dados
  include "bd.php";

  if (isset($_POST['cadastrar'])){
    //remove blackslashes
    $query ="SELECT * FROM contatos WHERE email='$email'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);

    if($rows==0){

      //Prepara e executa SQL
      $query = "INSERT INTO contatos (id, nome, nascimento, email, senha)
      VALUES ('NULL', '$nome', '$nascimento', '$email', '$senha')";

      $query = mysqli_query($conn,$query);

      echo "<script>
      alert('Seu cadastro foi ralizado com sucesso!');
      window.location='login.php';
      </script>";

    }else {
      echo "<script>
      alert('Erro ao cadastrar: O seu E-mail já está cadastrado!');
      window.location='cadastro.php';
      </script>";
    }
    }
  }

?>
