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
  <body class="app sidebar-mini rtl">
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
      <!--<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>-->
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> 首頁 </span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 1. 球場 - 社區球場二 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 社區球場二 一 遠藍</a></li>
            <li><a class="treeview-item" href="ballA_blueout.php"><i class="icon fa fa-circle-o"></i> 社區球場二 一 近排女</a></li>
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 社區球場二 一 遠排</a></li>
            <li><a class="treeview-item" href="ballA_blueout.php"><i class="icon fa fa-circle-o"></i> 社區球場二 一 近藍</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 2.球場 - 綜合球場二 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 1-5 </a></li>
            <li><a class="treeview-item" href="ball2_girlin.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 2-1 </a></li>
            <li><a class="treeview-item" href="ball2_outin.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 3-3  </a></li>
            <li><a class="treeview-item" href="ball2_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 4-6 </a></li>
            <li><a class="treeview-item" href="ball2_outin.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 5-2  </a></li>
            <li><a class="treeview-item" href="ball2_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場二 一 6-4 </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 3.球場 - 體育館旁網球場 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 體育館旁網球場1 </a></li>
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 體育館旁網球場2 </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 4.球場 - 壘球場 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 壘球場</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 5.球場 - 棒球場 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 棒球場 </a></li>           
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 6.球場 - 綜合球場A </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 藍A </a></li>
            <li><a class="treeview-item" href="gym2.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 藍B </a></li>
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排A </a></li>
            <li><a class="treeview-item" href="gym2.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排B </a></li>
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排C </a></li>
            <li><a class="treeview-item" href="gym2.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排D </a></li>
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排E </a></li>
            <li><a class="treeview-item" href="gym2.php"><i class="icon fa fa-circle-o"></i> 綜合球場A 一 排F </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 7.球場 - 綜合球場B </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 網球B</a></li>
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 網球A</a></li>
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 籃球C</a></li>
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 籃球D</a></li>
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 籃球E</a></li>
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場B 一 籃球F</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 8.球場 - 綜合球場C </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 綜合球場C 一 網F </a></li>
            <li><a class="treeview-item" href="ballC_C.php"><i class="icon fa fa-circle-o"></i> 綜合球場C 一 網C </a></li>
            <li><a class="treeview-item" href="ballC_E.php"><i class="icon fa fa-circle-o"></i> 綜合球場C 一 網E </a></li>
            <li><a class="treeview-item" href="ballC_D.php"><i class="icon fa fa-circle-o"></i> 綜合球場C 一 網D </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 9. 球場 - 社區球場A </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 社區球場 一 A1 近藍 </a></li>
            <li><a class="treeview-item" href="ballB_A.php"><i class="icon fa fa-circle-o"></i> 社區球場 一 A2 遠藍 </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> 10. 球場 - 社區球場B </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ballA_bluein.php"><i class="icon fa fa-circle-o"></i> 社區球場一B1-遠網 </a></li>
            <li><a class="treeview-item" href="ballA_blueB.php"><i class="icon fa fa-circle-o"></i> 社區球場一B2-近網 </a></li>
           </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label"> Language： </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="index.php"><i class="icon fa fa-circle-o"></i> 繁體中文 </a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> English </a></li>
          </ul>
        </li>
      </ul>
    </aside>


    <main class="app-content"> 
      <div class="app-title">
        <div>
		
		  <?php
		     //$prodname="";  // default value 					  			  
			 //if(!empty($_GET["prodname"])) { $prodname="(".$_GET["prodname"].")";  } // select name
		  ?>  	
		  
          <h2><i class="fa fa-dashboard"></i> 球場:
         
 		 
          <input type="text" name="" value="　　社區球場二">
				
		  </select>　一 近排女
	  	  	  
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
            
			<?php  
				// sql:select    
                 // $prodid="";  // default value 					  			  
				 //if(!empty($_GET["prodid"])) { $prodid=$_GET["prodid"]; } // select value
				  
				  //$sql = "select * from BallGround_machine where reader_id like '$prodid' "; 
				  //echo $sql;
				 //$ro = $PDO->query($sql);
				 // $rr = $ro->fetchAll();       
				 // foreach ($rr as $row){    
	        ?>				
			
		   	
           
				<?php
				
				//	$mac = $row["MAC_address"];
				//	$meter = $row["meter_id"];
				
				
				//	$sql2 = "select * from BallGround_io_log  where Address_MAC='$mac' and meter_id = '$meter' order by id desc limit 1";	
          //echo $sql2;         
				//	$ro2 = $PDO->query($sql2);
        //  $rr2 = $ro2->fetch(); 
				?>
          
					
            
           
                </body>
				
              </html>
            </div>
			
		<?php//  } ?>	  
          </div>
		  

      </div>

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
              <div class="row invoice-info">
                <div class="col-4">
                  <address><strong><h3>開始時間:</h3></strong><br><br><br></address>
                </div>
                <div class="col-4">
                  <address><strong></strong><br><br><br></address>
                </div>
                <div class="col-4"><b><h3>結束時間:</h3></b><br><br><b></b><br><b></b></div>
              </div>
              <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
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