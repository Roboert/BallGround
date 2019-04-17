<?php 
include_once('db.php');
 
 
?>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title> 東華大學-球場使用狀況 </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl pace-done">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">東華大學</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--<li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>-->
        <!--Notification Menu-->
        <!--<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>-->
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <!--<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>-->
            <li><a class="dropdown-item" href="page-login.php"><i class="fa fa-user fa-lg"></i> 管理者登入 </a></li>
            <!--<li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>-->
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <?=include_once('test.php')?>
    </aside>
    <?php
          $sql = "SELECT * FROM `BallGround_machine` INNER JOIN `BallGround_reader_id_list` ON `BallGround_machine`.`MAC_address` = `BallGround_reader_id_list`.`Address_MAC` WHERE `BallGround_machine`.`MAC_address` = '{$_GET['address_mac']}' AND  `BallGround_machine`.`meter_id` = '{$_GET['meter_id']}' ORDER BY `BallGround_machine`.`id` DESC LIMIT 1";
          $ps = $PDO->query($sql);
          $r = $ps->fetch();
    ?>
  
    <main class="app-content"> 
      <div class="app-title">
        <div>
        

		  
          <h2><i class="fa fa-dashboard"></i> 球場:
            <input type="text" size="15"  name="" value="<?=$r['Ground_title']?>" readonly>
            <br/>
            <br/>
            <input type="text" size="10" value="<?=str_replace($r['Ground_title'],' ',$r['title'])?>" readonly>
		  <?=$prodname ?>  
			 

		 
		  </h2>
          <!--<h1><p></p></h1>-->
        </div>
        <!--<ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>-->
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">

          <!--<div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>-->
            <div class="info">
              <h4></h4>
              <p><b></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <!--<div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>-->
            <div class="info">
              <h4></h4>
              <p><b></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <!--<div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>-->
            <div class="info">
              <h4></h4>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <!--<div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>-->
            <div class="info">
              <h4></h4>
              <p><b></b></p>
            </div>
          </div>
        </div>
      </div>
        <div class="row">              
            </div>	  
          </div>
      </div>
      <?php
        $sql = "SELECT * FROM `BallGround_io_log` WHERE  `Address_MAC` = '{$_GET['address_mac']}' AND `meter_id` = '{$_GET['meter_id']}' ORDER BY `id` DESC LIMIT 1";
        $ps = $PDO->query($sql);
        $r = $ps->fetch();
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class=""></i> </h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right"></h5>
                </div>
              </div>
                <?php
                  date_default_timezone_set("Asia/Taipei");
                  $time = getdate();
                  unset($time[0]);
                  $a = [$time['hours'],$time['minutes'],$time['seconds']];
                  $b = [$time['year'],$time['mon'],$time['mday']];
                  $datetime = date("h:i:s",strtotime($r['EndDate']) - strtotime($r['created_at']));
                  $datetime = explode(":",$datetime);
                  $datetime[0] = $datetime[0] - 8;
                  $now_time = strtotime(implode("/",$b).implode(":",$a));
                  if($now_time > strtotime($r['created_at']) && $now_time < strtotime($r['EndDate'])){
                    $real_time = date("h:i:s",strtotime($r['EndDate']) - $now_time);
                    $real_time = explode(":",$real_time);
                    $real_time[0] = str_pad($real_time[0] - 8,2,0,STR_PAD_LEFT);
                    $ok_time = implode(":",$real_time);
                  }else{
                    $ok_time = "";
                  }
                ?>
                <input type="time" step="2" id="datetime" value="<?=$ok_time?>" hidden/>
                <div class="form-group">
                  <label for="exampleInputEmail1">開始時間</label>
                  <input class="form-control" id="start" value="<?=$r['created_at']?>" type="text"  readonly>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">結束時間</label>
                  <input class="form-control" id="end" value="<?=$r['EndDate']?>" type="text" readonly>
                </div>
                <br><br>
               
                
              <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h1>剩餘時間:</h1>
              <h1 id="show_time"></h1>
              <script>
                var time = datetime.value.split(":")
                var sec = time[2]
                var min = time[1]
                var hour = time[0]
                setInterval(function(){          
                  if(sec >= 1){
                    sec--;
                  }else{
                    sec = 59;
                    if(min >= 1){
                      min--;
                    }else{
                      min = 59;
                      if(hour >= 1){
                        hour--;
                      }else{
                        hour = 0;
                      }
                    }
                  }
                  show_time.innerHTML =  ((hour.toString().length == 1) ? "0" + hour : hour) +" : "+ ((min.toString().length == 1) ? "0" + min : min) +" : "+((sec.toString().length == 1) ? "0" + sec : sec)
                },1000)
              </script>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">

                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
      <!--<div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Features</h3>
            <ul>
              <li>Built with Bootstrap 4, SASS and PUG.js</li>
              <li>Fully responsive and modular code</li>
              <li>Seven pages including login, user profile and print friendly invoice page</li>
              <li>Smart integration of forgot password on login page</li>
              <li>Chart.js integration to display responsive charts</li>
              <li>Widgets to effectively display statistics</li>
              <li>Data tables with sort, search and paginate functionality</li>
              <li>Custom form elements like toggle buttons, auto-complete, tags and date-picker</li>
              <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
            </ul>
            <p>Vali is a free and responsive admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.</p>
            <p>Vali is is light-weight, expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme colors and functionality.</p>
            <p class="mt-4 mb-4"><a class="btn btn-primary mr-2 mb-2" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
          </div>
        </div>-->
        <!--<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Compatibility with frameworks</h3>
            <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
            <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
            <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
          </div>
        </div>-->
      </div>
    </main>
<?php include('common/footer.php'); ?>
</body>
				
        </html>