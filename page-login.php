<?php
  session_start();
  include_once('db.php');
  

	if(!empty($_POST["user_id"]))
	{
		
		$id = $_POST["user_id"];
		$pwd = $_POST["user_pw"];
		
		$sql = "select * from admin where id = '$id' and pwd = password('$pwd')";
		$ro = $PDO->prepare($sql);
		$ro->execute(array($id , $pwd));
		$cnt = $ro->fetch();
		
		
			if($cnt == 0)
	{
		echo "<script>alert('登入失敗');</script>";
	}
	else
	{
		$_SESSION["id"] = $id;
		if($id == 'ball_admin1')
		{
		header('location:charts.php');
		}
		else
		{
	  echo"登入失敗!";	
		}
	}
		
	}	


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>東華大學 一 球場登入系統</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>會員帳號</h3>
          <div class="form-group">
            <label class="control-label">帳號 一 USERNAME</label>
            <input class="form-control" type="text" name = "user_id" placeholder="帳號" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">密碼 一 PASSWORD</label>
            <input class="form-control" type="password" name = "user_pw" placeholder="密碼">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!--<label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>-->
              </div>
              <!--<p class="semibold-text mb-2"><a href="#" data-toggle="flip">忘記密碼?</a></p>-->
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>登入</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>