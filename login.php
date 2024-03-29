<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>東華大學 一 球場登入系統</title>
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
        <form class="login-form" name="form2" onsubmit="return chk_admin();" enctype="multipart/form-data" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>管理員帳號</h3>
          <div class="form-group">
            <label class="control-label">帳號 一 USERNAME</label>
            <input class="form-control" type="text" name="id" placeholder="帳號" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">密碼 一 PASSWORD</label>
            <input class="form-control" type="password" name="pwd" placeholder="密碼">
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
            <input name='send2' type="submit" class="btn btn-primary btn-block" value="登入">
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

    function chk_admin()
	{
		if(document.getElementsByName("form2")[0].send2.value)
		{
			var admin_id=document.getElementsByName("form2")[0].id;
			if(!admin_id.value)
			{
				alert('請輸入帳號');
				admin_id.focus();
				return false;
			}
			var admin_pwd=document.getElementsByName("form2")[0].pwd;
			if(!admin_pwd.value)
			{
				alert('請輸入密碼');
				admin_pwd.focus();
				return false;
			}														
			document.getElementsByName("form2")[0].action='login_add.php';
			document.getElementsByName("form2")[0].target='';
		}
	}
    </script>
  </body>
</html>