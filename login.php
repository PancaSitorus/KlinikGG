<?php 
    session_start(); 
    include_once('functions.php'); 
    if(isset($_SESSION['is_logged_in'])){ 
    redirect('index.php'); 
    } 
    open_page('Login');
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link  href="css/bootstrap-responsive.min.css"  rel ="stylesheet"> 
        <link rel="shoutcut icon" href="logo.png">
    <style type="text/css">
        * {
  padding: 0px;
  margin: 0px;
  font-family: arial;
}

#login {
  width: 100%;
  height: 100vh;
  background-image: url("images/background.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  position: absolute;
}

.center {
  width: 350px;
  height: 400px;
  margin: 0 auto;
  margin-top: 100px;
  background-color:   #5F9EAD ;
  box-shadow: 4px 2px 16px 0px #757575;
  padding: 40px;
}

.center h2 {
  font-size: 30px;
  text-align: center;
  color: #ffffff;
  padding-bottom: 40px;
}

.fl {
  width: 100%;
}

.itpw {
  width: 100%;
  padding: 13px 15px;
  margin: 5px 0px;
  background-color: #ffffff;
  border: 3px solid #dbdbdb;
  color: #757575;
  transition: all 0.7s;
}

.its {
  width: 99.7%;
  font-size: 19px;
  color: #f5f5f5;
  padding: 12px;
  margin: 5px 0;
  background-color: #008B8B;
  border: none;
  transition: all 0.4s;
}

.itpw:focus {
  border-bottom: 7px solid #5F9EAD;
  color: #004d40
}

.its:hover , .its:focus {
  opacity: 0.7;
  cursor: pointer;
}

.center p {
  margin: 20px 0;
  text-align: center;
  font-size: 14px;
}

.center p a {
  color: #757575;
}

@media screen and (min-width:1500px) {

  .center {
    width: 350px;
  }

}

@media screen and (max-width:900px) {
  #login {
    background-size: 100% 100%;
  }

  .its {
    width: 100%;
  }

  .itpw {
    font-size: 14px;
    width: 90%;
    padding: 13px 3%;
  }

  .center {
    width: 230px;
  }

  .center p {
    font-size: 12px;
  }

}

@media screen and (max-width:350px) {
  .center {
    padding: 20px;
    width: 75%;
  }
}
    </style>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>

    <div id="login">
      <div class="center">

          <h2>Form Login</h2> 

          <form class="fl" action="login_process.php" method="post" class="form-horizontal">
            <input class="itpw" type="text" name="username" placeholder="Username" id="1" required ><br>

            <input class="itpw" id="2" type="password" name="password" placeholder="Password"><br>


            <input class="its" type="submit" name="login" value="LOGIN">
          </form>

      </div>
    </div>

  </body>
</html>

<?php 
    close_page(); 
?> 