<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo constant('URLCSS');?>login.css">
</head>
<body>
	<div class="login">
	<h1 id="tituloLogin">Login Administrador</h1>
    <form method="post">
    	<input type="email" name="u" id="username" placeholder="Correo" required="required" />
        <input type="password" id="password" name="p" placeholder="Clave" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" id="submit-login">Entrar</button>
    </form>
    <div class="container">
  <h1>¿Que eres?</h1>
  <div id="radios">
    <label for="Administrador" class="material-icons">
      <input type="radio" name="mode" id="switch" value="Administrador" checked/>
      <span class="material-icons-outlined">
engineering
</span>
      
    </label>                
    <label for="Estudiante" class="material-icons">
      <input type="radio" name="mode" id="switch" value="Estudiante" />
      <span class="material-icons-outlined">
			school
	  </span>
    </label>
    <label for="Docente" class="material-icons">
      <input type="radio" name="mode" id="switch" value="Docente" />
      <span class="material-icons-outlined">
		person_outline
		</span>
    </label>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo constant('URLJS');?>login.js?18"></script>
</body>
</html>