<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Misa Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <br>
    <div class = "col-md-offset-4">
    <img src = "img/logo.png" height="200" width="465">
    </div>
    <div id="wrapper" class="container">
      <div class="row">
        <div id="register" class="col-md-offset-4 col-md-4">
          <div class= "col-md-offset-3">
          <img src = "img\MISA.png" height= "60" width= "200">
          </div>
          <form id="form" action="submit.php" method="post">
            <div class="row">
              <div class="col-md-5">
               <label for="id_number">ID NUMBER</label>
              </div>
              <div class="col-md-7">
              <input type="number" class="form-control" id="id_number" name="id_number" min="110000" max="160000" autocomplete="off" placeholder="101010" required>
              <p id="idnumber_warning" class="warning">Please input a valid ID Number.</p>
              </div>
            </div> 
            <button type="submit" id="submit" class="btn">ENTER</button>
          </form>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>