<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container"> 
  <h1>Registrar usuario</h1>
    
    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputUsuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="txtUsu">
  </div>

  <div class="col-md-6">
    <label for="inputClave" class="form-label">Clave</label>
    <input type="password" class="form-control" id="txtCla">
  </div>
  <div class="col-12">
  <input type="button" onClick = "login()" class="btn btn-primary" value="Login">
  </div>
  </div>

  </form>
<script>
  const usuario = "admin";
  const clave = "12345";

  function login() {
    let usu = document.getElementById("txtUsu").value;
    let cla = document.getElementById("txtCla").value;

    if (usu === usuario && cla === clave) {
      alert("Bienvenido");
      window.location.href = "productos.html";
    } else {
      alert("Usuario incorrecto");
    }
  }
</script>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html> 