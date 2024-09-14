<?php
include "navbar.php";
?>
      <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-5">

    <main class="form-signin w-100 m-auto p-5">
        <form method="post">
          <img class="mb-4" src="./img/imghome.webp" alt="" width="100" height="120">
          <h1 class="h3 mb-3 fw-normal">Faça seu login</h1>
      
          <div class="form-floating">
            <input type="email" name="E-mail" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Endereço de E-mail</label>
          </div>
          <div class="form-floating">
            <input type="password" name="Senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
          </div>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Lembrar senha
            </label>
          </div>
          <input class="btn btn-primary w-100 py-2" type="submit" name="Entrar" value="Entrar">
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
error_reporting(0);

include('bd.php');
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];


if (isset($_POST['enttrar'])){

  $sql = "SELECT * FROM usuarios WHERE  email='$email' AND senha='$senha'";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_num_rows($result);

  if(rows==1){
    $_SESSION['email'] = $email;

    header("Locatio: portal.php");
  }else{
    echo"<script>
    alert('Não possível entrar: E-mail ou senha estão errados, ou não existe)
    window.location='login.php';
    </script>"; 
  }
}
?>