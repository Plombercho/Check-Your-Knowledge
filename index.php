<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Начало</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Въведи име.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("Въведи училище.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Невалиден имейл адрес.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Въведи парола.");return false;}if(a.length<5 || a.length>25){alert("Паролата трябва да е с дължина от 5 до 25 символа.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Паролите не съвпадат.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Провери знанията си</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Вход</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Вход</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Имейл" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Парола" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Затвори</button>
        <button type="submit" class="btn btn-primary">Вход</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Име" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Пол" class="form-control input-md" >
   <option value="Male">Пол</option>
  <option value="M">Мъж</option>
  <option value="F">Жена</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Училище" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Имейл" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Телефон" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Парола" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Потвърди паролата" class="form-control input-md" type="password">
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Регистрирай се" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!-- Footer Section -->
<div class="row footer">
  <div class="col-md-3 box">
    <a href="https://pgee-plovdiv.com/" target="_blank">Относно</a>
  </div>
  <div class="col-md-3 box">
    <a href="#" data-toggle="modal" data-target="#login">Вход за Admin</a>
  </div>
  <div class="col-md-3 box">
    <a href="#" data-toggle="modal" data-target="#developers">Разработчици</a>
  </div>
  <div class="col-md-3 box">
    <a href="feedback.php" target="_blank">Обратна връзка</a>
  </div>
</div>

<!-- Modal For Developers-->
<div class="modal fade" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" style="color:orange;">Разработчици</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <img src="" width="100" height="100" class="img-rounded">
          </div>
          <div class="col-md-5">
            <a style="color:#202020; font-size:18px;">Клуб "Програмиране за интернет"</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Admin Login -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" style="color:orange;">Вход</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="admin.php?q=index.php">
          <div class="form-group">
            <input type="text" name="uname" maxlength="20" placeholder="Admin email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" maxlength="15" placeholder="Парола" class="form-control">
          </div>
          <div class="form-group" align="center">
            <input type="submit" name="login" value="Вход" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Footer start
<div class="row footer">
<div class="col-md-3 box">
<a href="https://pgee-plovdiv.com/" target="_blank">Относно</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Вход за Admin</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Разработчици</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Обратна връзка</a></div></div>
 Modal For Developers
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Разработчици</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="" width=100 height=100  class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="" style="color:#202020; font-family:'typo' ; font-size:18px">Клуб "Програмиране за интернет"</a>
		
		</p>
      </div>
    
    </div> /.modal-content
  </div> /.modal-dialog 
</div> /.modal 

Modal for admin login

	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo'">Вход</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post">
<div class="form-group">
<input type="text" name="uname" maxlength="20" placeholder="Admin ID" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Парола" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Вход" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   here they are commented
      </div>
    </div>/.modal-content 
  </div> /.modal-dialog 
</div>/.modal 
footer end-->

</body>
</html>
