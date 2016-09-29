<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Invernadero</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

  <link rel="shortcut icon" href="img/ico.ico"/>


</head>

<body>

  <div class="login-card">

    <div>
      <img src="img/logo.png"/><br>
    </div>
    
  <form action="setPoint.php" method="post">
    <input title="Temperatura" type="text" name="TempInterna" placeholder="Temperatura" pattern="[a-zA-Z0-9]+" required autocomplete>
    <input title="Humedad" type="text" name="HumInterna" placeholder="Humedad" pattern="[a-zA-Z0-9]+" required autocomplete>
    <input title="Tolerancia en %" type="text" name="ToleranciaInt" placeholder="Tolerancia en %" pattern="[a-zA-Z0-9]+" required autocomplete>

    <input type="submit" name="login" class="login login-submit" value="Set!" autofocus  onclick="return true;">
  </form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>