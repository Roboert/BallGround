<?php 
  include_once('db.php');
  check_login();
 
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
    <title>東華球場-後台系統</title>
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
    <header class="app-header"><a class="app-header__logo" href="index.html">管理員</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--Notification Menu-->
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="out.php"><i class="fa fa-sign-out fa-lg"></i> 管理員登出</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
     <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">首頁</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">球場查詢</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--<li><a class="treeview-item" href="paymoney.php"><i class="icon fa fa-circle-o"></i> 扣款時間查詢</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> 扣款月份查詢</a></li>-->
            <li><a class="treeview-item" href="index.php"><i class="icon fa fa-circle-o"></i> 球場狀態查詢</a></li>
            <!--<li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>-->
          </ul>
        </li>
       <!--<li><a class="app-menu__item active" href="ball_log.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">球場Logo紀錄</span></a></li>-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">球場時段設定</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--<li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> 球場開放時</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> 球場週期時段管理</a></li>-->
            <li><a class="treeview-item" href="openclose.php"><i class="icon fa fa-circle-o"></i> 球場控制水銀燈開關</a></li>
            <!--<li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>-->
          </ul>
        </li>
        <!--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">球場位置控制</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->
          <ul class="treeview-menu">           
            <!--<li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>-->
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">悠遊卡消費紀錄</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="paymoney.php"><i class="icon fa fa-circle-o"></i> 悠遊卡消費紀錄列表</a></li>       
          </ul>
        </li>
      </ul>
    </aside>
    <!--<main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i>扣款查詢</h1>
          <p>扣款查詢一時間</p>

    <select class="form-control" size="1" name="reader_id">
			<option value="">請選擇</option>
      <option value="B827EB5B8CBA">社區球場A 一 A1 近藍 </option>
      <option value="B827EBE400F8">社區球場A 一 A2 遠藍</option>
      <option value="B827EB307F46">社區球場二 一 遠藍 </option>
      <option value="B827EB3F6053">社區球場二 一 近排女</option>
      <option value="B827EBCDFEF2">社區球場二 一 遠排 </option>
      <option value="B827EB83001F">社區球場二 一 近藍</option>
      <option value="B827EB8F928D">棒、足球場A 一 棒、足球場A</option>
      <option value="B827EBDD78DD">綜合球場二 一 1-5 </option>
      <option value="B827EB6EF962">綜合球場二 一 2-1 </option>
      <option value="B827EB5B8CBA">綜合球場二 一 3-3 </option>
      <option value="B827EBE400F8">綜合球場二 一 4-6 </option>
      <option value="B827EB307F46">綜合球場二 一 5-2 </option>
      <option value="B827EB3F6053">綜合球場二 一 6-4 </option>
      <option value="B827EBCDFEF2">社區球場 一 B1-遠網   </option>
      <option value="B827EB83001F">社區球場 一 B2-近網 </option>
      <option value="B827EB8F928D">體育館旁網球場 一 1 </option>
      <option value="B827EBDD78DD">體育館旁網球場 一 2 </option>
      <option value="B827EB6EF962">棒、足球場 一 B </option>
      <option value="B827EB5B8CBA">綜合球場C 一 網F </option>
      <option value="B827EBE400F8">綜合球場C 一 網C </option>
      <option value="B827EB307F46">綜合球場C 一 網E </option>
      <option value="B827EB3F6053">綜合球場C 一 網D </option>
      <option value="B827EBCDFEF2">綜合球場B 一 網球B </option>
      <option value="B827EB83001F">綜合球場B 一 網球A  </option>
      <option value="B827EB8F928D">綜合球場B 一 籃球C </option>
      <option value="B827EBDD78DD">綜合球場B 一 籃球D  </option>
      <option value="B827EB6EF962">綜合球場B 一 籃球E  </option>
      <option value="B827EB5B8CBA">綜合球場B 一 籃球F  </option>
      <option value="B827EBE400F8">綜合球場A 一 藍A </option>
      <option value="B827EB307F46">綜合球場A 一 藍B </option>
      <option value="B827EB3F6053">綜合球場A 一 排A </option>
      <option value="B827EBCDFEF2">綜合球場A 一 排B </option>
      <option value="B827EB83001F">綜合球場A 一 排C </option>
      <option value="B827EB8F928D">綜合球場A 一 排D </option>
      <option value="B827EBDD78DD">綜合球場A 一 排E </option>
      <option value="B827EB6EF962">綜合球場A 一 排F </option>
    </select><br><br>-->


    <!--開始時間 : <input class="form-control" type="date" placeholder="開始時間：yyyy-mm-dd" size="20" name="kw_start" value="">  <br>  結束時間 : <input class="form-control" type="date" placeholder="開始時間：yyyy-mm-dd" size="20" name="kw_start" value=""><br><br>-->


  <!--<button type="button" class="btn btn-outline-primary">查詢</button>　<button type="button" class="btn btn-outline-secondary">重設</button>　<button type="button" class="btn btn-outline-success">球場扣款紀錄匯出</button>-->
  <?php
    $get_page = 1;
    $sql = "SELECT * FROM BallGround_pay_log";
    $ps = $PDO->query($sql);
    $r = $ps->fetchall();
    $count = count($r);
    $per = 10;
    $pages = ceil($count / $per);
    if(!isset($_GET['page'])){
      $page = 1;
    }else{
      $page = intval($_GET['page']);
    }
    $start = ($page-1)*$per;
    $result = $PDO->query("SELECT * FROM BallGround_pay_log LIMIT $start , $per");
  ?>
 <main class="app-content">
  <div class="app-title">
    <div>
      <h1>悠遊卡消費紀錄列表</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
        <?php 
          /*$ro = $PDO->query("SELECT * FROM BallGround_pay_log");
          $rr = $ro->fetchAll();    */         
        ?> 
          <table class="table table-hover">
            <thead>
              <tr><br><br>
                  <th>序號</th>
                  <th>時間</th>
                  <th>交易卡的序號/交易卡機序號</th>
                  <th>扣款狀態</th>
                  <th>交易金額</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <?php
                    foreach ($result->fetchall() as $row){                        
                  ?>
                  <td> <?=$row["id"]?> </td>
                  <td> <?=$row["date_time"]?> </td>
                  <td> <?=$row["cardnum"]?> / <?=$row["reader_id"]?> </td>
                  <td align="center"> <?=$row["postive"]?> </td>
                  <td align="center"> <?=$row["PayValue"]?> </td>           
                </tr> 
                <?php }  ?> 
            </tbody>
          </table>
          <div class="text-right">
          <span class="text-muted mr-2">共<?=$count?>筆</span>
            <div class="btn-group">
              <a href="?page=<?=$get_page++?>"><button class="btn btn-primary btn-sm" type="button">上一頁</button></a>
              <a href="?page=<?=$get_page--?>"><button class="btn btn-primary btn-sm" type="button">下一頁</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>











    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>