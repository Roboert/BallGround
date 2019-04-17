<?php 
	include_once('db.php');
	check_login();
	$count = 1;

	$getstartTime = $_GET["prodid"];
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
    <header class="app-header"><a class="app-header__logo" href="index.html">球場水銀燈開關</a>
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

		
    <main class="app-content"> 
      <div class="app-title">
      	<div>
		
				<?php
					$prodname="";  // default value 					  			  
					if(!empty($_GET["prodname"])) { $prodname="(".$_GET["prodname"].")";  } // select name
				?>  	
		  
          
         
			<?php		  
				$sql = "select * from BallGround_machine order by title asc";	
				$ro = $PDO->query($sql); 
				$rr = $ro->fetchall();	
				$options="<option value=''>請選擇球場</option>";
				foreach($rr as $row){
					$ball = $row["MAC_address"].$row["meter_id"];
					$title=$row["title"];
					$id = $row["id"];
					if($row["control_power"]==1){$control="開燈";} else if($row['control_power'] == 0){$control="關燈";}else{$control="禁用";}
					$options.="<option data-value='{$row["MAC_address"]}' data-value1='{$row["meter_id"]}' value='$id'".($row['title'] == $_GET['prodname'] ? 'selected' : '').">$title</option>";
				}			
			?> 	
						

			<h2><i class="fa fa-dashboard"></i> 球場位置: 
			<select id='prodlist' name='prodlist' onchange="ffChange()">
				<?=$options?>
			</select>	  	  	 
        </div>
        <ul class="app-breadcrumb breadcrumb">

        </ul>
      </div>
			<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="tile">		
            <h4 class="tile-title">模式設定：</h4>
            <!--Radio Button Markup-->
            <div class="animated-radio-button">
							<form class="was-validated" method="post"> 							
							<?php
								$prodname="";  // default value 					  			  
							if(!empty($_GET["prodname"])) { $prodname="(".$_GET["prodname"].")";  } // select name	  
								$sql = "select * from BallGround_machine order by title asc";	
								$ro = $PDO->query($sql); 
								$rr = $ro->fetchall();	
								$options="<option value=''>請選擇球場</option>";
								foreach($rr as $row){
									//var_dump($row);
									$ball = $row["MAC_address"].$row["meter_id"];
									$title=$row["title"];
									$id = $row["id"];
									
									if($row["control_power"]==1){$control="開燈";} else if($row['control_power'] == 0){$control="關燈";}else{$control="禁用";}
									$options.="<option value='$id'>$title $control</option>";
								}						
							?> 					
						<script> 
							function ffChange(){
								prod_id=document.getElementById("prodlist").value;							
								//--- selectindex
								let x=document.getElementById("prodlist").selectedIndex;
								let y=document.getElementById("prodlist").options;
								let mac_address = y[x].getAttribute("data-value");
								let meter_id = y[x].getAttribute("data-value1");
								prod_name=y[x].text; // select name 						
								document.location.href="https://www.aotech.com.tw/ballground/openclose.php?prodid="+prod_id+"&prodname="+prod_name+"&mac_address="+mac_address+"&meter_id="+meter_id;                        
							}
						</script>
				</div>													
				<?php 
					if(isset($_POST['btn1'])){
					$sql = "UPDATE `BallGround_machine` SET `Status_mod` = '{$_POST['status_mod']}' , `control_power` = '{$_POST['control_power']}' WHERE `MAC_address` = '{$_GET['mac_address']}' AND meter_id = '{$_GET['meter_id']}'";
						//echo $sql;
						$PDO->query($sql);
					}
					$sql = "SELECT * FROM `BallGround_machine` WHERE `title` = '{$_GET['prodname']}'";
					$ps = $PDO->query($sql);
					$row = $ps->fetch();				
				?>
				<h3>模式：<select name="status_mod" id="prodlist" onchange="" > 
			<option value="AA">....切換模式......</option>			
			<option value="0" <?=($row['Status_mod'] == 0) ? "selected" : ""?>> 0強制 </option>
			<option value="1" <?=($row['Status_mod'] == 1) ? "selected" : ""?>> 1計費 </option>
		  </select>
			　　　　手動開燈：<select name="control_power" id="prodlist" onchange="" > 
			<option value="AA" >...強制控制開關燈...</option>
			<option value="-1" <?=($row['control_power'] == -1) ? "selected" : ""?>>-1手動開燈 </option>
			<option value="0" <?=($row['control_power'] == 0) ? "selected" : ""?>>0強制關燈 </option>
			<option value="1" <?=($row['control_power'] == 1) ? "selected" : ""?>>1強制開燈 </option>
		  											</select><br><br>
			　　<input type="submit" name="btn1" class="btn btn-primary" value="確認更新">		
		  </form>

				<!--<div class="toggle-flip">							
						<input type="radio" name="open" value="1"><i class="fa fa-fw fa-lg fa-check-circle"></i>開燈</a>
						<input type="radio" name="open" value="0"><i class="fa fa-fw fa-lg fa-times-circle"></i>關燈</a>
						<input type="radio" name="open" value="-1"><i class="fa fa-hand-paper-o"></i>禁用</a><br><br><br>
						<input type="submit" class="btn btn-primary" value="確認更新">		
				      
				</div>-->
			</div>
		</div>
		<?php
			if(isset($_POST['btn2'])){
				if(strtotime($_POST['open_startTime']) < strtotime($_POST['open_endTime'])){
					$sql = "UPDATE `BallGround_machine` SET `open_startTime` = '{$_POST['open_startTime']}',`open_endTime` = '{$_POST['open_endTime']}',`price` = '{$_POST['price']}' WHERE `title` = '{$_GET['prodname']}'";
					$PDO->query($sql);
				}else{
					echo "<script>alert('結束時間要大於營業時間')</script>";
				}
			}
			$sql = "SELECT * FROM `BallGround_machine` WHERE `MAC_address` = '{$_GET['mac_address']}' AND `meter_id` = '{$_GET['meter_id']}'";
			$ps = $PDO->query($sql);
			$r = $ps->fetch();
		?>
		<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
			<div class="tile">
					<h3 class="tile-title">開放時間：</h3>
					<form method="POST" id="form1" class="was-validated">
						<br>
						<h3>時間開放：<input type="time" id="start_open_time" step="01" value="<?=$r['open_startTime']?>" name="open_startTime" required/>　
						結束時間：<input type="time" id="end_open_time" step="01" value="<?=$r['open_endTime']?>"  name="open_endTime" required/><br><br>
						<h3>平時費率:<input class="price" type="number" value="<?=$r['price']?>" min="1" name="price" <?=($r['schedule_is_del'] == 1) ? "disabled" : ""?>/>
						<br>
						<br>
						<input type="submit" name="btn2" class="btn btn-primary" value="確認更新">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">   	
          	<div class="tile">          
              <h3 class="title">時程管理設定</h3>     
            <div class="tile-body"> 
								
				
					
		</div><br><br>				
		<?php 
		if(isset($_POST['id']) && !isset($_POST['day'])){
			$sql = "UPDATE `BallGround_schedule` SET `schedule_is_del` = 1 WHERE `id` = '{$_POST['id']}'";
			$PDO->query($sql);
		}
		if(isset($_POST['day'])){
			$sql = "UPDATE `BallGround_schedule` SET `startTime` = '{$_POST['startTime']}',`endTime` = '{$_POST['endTime']}',`price` = '{$_POST['price']}',`Status_mod` = '{$_POST['Status_mod']}',`schedule_is_del` = 0 WHERE `id` = '{$_POST['id']}'";
			$PDO->query($sql);
		}
			if(count($_GET) != 0){
				$sql4 = "SELECT * FROM `BallGround_schedule` WHERE `Address_MAC` = '{$_GET["mac_address"]}' AND `meter_id` = {$_GET['meter_id']}";
				$ro4 = $PDO->query($sql4);
				$rr4 = $ro4->fetchall();
				foreach($rr4 as $r){
		?>
		<?php 
			if(!empty($r['remark'])){
				$count = 1;
		?>
			<div id="">			
				<h1>星期<?=intTostr($r['weekNumber'])?></h1>	
			</div>
		<?php }?>
		<form method="post" onsubmit="ballground_update(event)">	
    	<div class="row align-items-center">     
					<input type="hidden"  name="id" value="<?=$r['id']?>">
					　　　<label>	<input onchange="change(event)" type="checkbox" name="day" value="0" <?=($r['schedule_is_del'] == 0) ? "checked" : ""?>>啟用<span class="label-text"></span></label>
					<br><br>　　　
					<h4>排程<?=intTostr($count++)?></h4>　　開始時間:　　　<input class='form-control, start_time' type='time' name='startTime' value="<?=$r['startTime']?>" placeholder="hrs:mins" <?=($r['schedule_is_del'] == 1) ? "disabled" : ""?>>　　結束時間:　
					<input class='form-control,end_time' type='time' name='endTime' value="<?=$r['endTime']?>" placeholder="hrs:mins" <?=($r['schedule_is_del'] == 1) ? "disabled" : ""?>>　　模式選擇:　　　<select class='form-control, reader_id' name="Status_mod" <?=($r['schedule_is_del'] == 1) ? "disabled" : ""?>>		
						<option value="not">請選擇模式狀態</option>
						<option value="1" <?=($r['Status_mod'] == 1 ) ? "selected" : ""?>>計費</option>
						<option value="0" <?=($r['Status_mod'] == 0 ) ? "selected" : ""?>>免費</option>
						<option value="-1" <?=($r['Status_mod'] == -1 ) ? "selected" : ""?>>禁用</option>
					</select>
				　　請選擇費率:　　	<input class="form-control, price" type="number" value="<?=$r['price']?>" min="1" name="price" <?=($r['schedule_is_del'] == 1) ? "disabled" : ""?>/>
				　<br><br>
				<input type="submit" name="btn3" class="btn btn-primary" value="確認更新"><br><br>
			</div>
		</form>
		<?php 
				}
			}
		?>
		<script>
		var a;
			function change(e){
				if(e.target.parentElement.parentElement.children[5].disabled == false){
					e.target.parentElement.parentElement.children[5].disabled = true;
					e.target.parentElement.parentElement.children[6].disabled = true;
					e.target.parentElement.parentElement.children[7].disabled = true;
					e.target.parentElement.parentElement.children[8].disabled = true;
				}else{
					e.target.parentElement.parentElement.children[5].disabled = false;
					e.target.parentElement.parentElement.children[6].disabled = false;
					e.target.parentElement.parentElement.children[7].disabled = false;
					e.target.parentElement.parentElement.children[8].disabled = false;
				}
			}
			function ballground_update(e){
				e.preventDefault();
				if(e.target.children[0].children[1].children[0].checked){
					let week = e.target.children[0].children[4].innerHTML;
					let date = new Date();
					let Year = date.getFullYear();
					let month = date.getMonth() + 1;
					let day = date.getDate();
					let full_date = Year + "-" + month + "-" + day;		
					if(week == "排程一"){
						let next_el = e.target.nextElementSibling;
						let is_open = next_el.children[0].children[1].children[0].checked
						let startTime1 = (e.target.children[0].children[5].value.split(":").length == 3) ?  e.target.children[0].children[5].value : e.target.children[0].children[5].value + ":00"
						let endTime1 = (e.target.children[0].children[6].value.split(":").length == 3) ?  e.target.children[0].children[6].value : e.target.children[0].children[6].value + ":00"		
						let openTime = start_open_time.value
						let endTime = end_open_time.value				
						if(is_open){						
							let startTime2 = (next_el.children[0].children[5].value.split(":").length == 3) ? next_el.children[0].children[5].value : next_el.children[0].children[5].value + ":00"	
							let endTime2 = (next_el.children[0].children[6].value.split(":").length == 3) ? next_el.children[0].children[6].value : next_el.children[0].children[6].value + ":00"	
					
							if(((Date.parse(full_date + " " + openTime)).valueOf() <= (Date.parse(full_date + " " + startTime1)).valueOf())){
								if(((Date.parse(full_date + " " + endTime1)).valueOf() <= (Date.parse(full_date + " " + startTime2)).valueOf()) && ((Date.parse(full_date + " " + endTime2)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf())){
									e.target.submit();
								}else{
									alert('時間設定錯誤');
								}
							}else{
								alert('時間設定錯誤');
							}					
						}else{					
							if(((Date.parse(full_date + " " + openTime)).valueOf() <= (Date.parse(full_date + " " + startTime1)).valueOf()) && ((Date.parse(full_date + " " + endTime1)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf())){
								e.target.submit()
							}else{
								alert('時間設定錯誤');
							}
						}
					}else{
						let next_el = e.target.previousElementSibling;
						let is_open = next_el.children[0].children[1].children[0].checked
						let startTime1 = (e.target.children[0].children[5].value.split(":").length == 3) ?  e.target.children[0].children[5].value : e.target.children[0].children[5].value + ":00"
						let endTime1 = (e.target.children[0].children[6].value.split(":").length == 3) ?  e.target.children[0].children[6].value : e.target.children[0].children[6].value + ":00"	
						let openTime = start_open_time.value
						let endTime = end_open_time.value
						if(is_open){				
							let startTime2 = (next_el.children[0].children[5].value.split(":").length == 3) ? next_el.children[0].children[5].value : next_el.children[0].children[5].value + ":00"			
							let endTime2 = (next_el.children[0].children[6].value.split(":").length == 3) ? next_el.children[0].children[6].value : next_el.children[0].children[6].value + ":00"				
							if(((Date.parse(full_date + " " + openTime)).valueOf() <= (Date.parse(full_date + " " + startTime2)).valueOf())){
								if(((Date.parse(full_date + " " + endTime2)).valueOf() <= (Date.parse(full_date + " " + startTime1)).valueOf()) && ((Date.parse(full_date + " " + endTime1)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf()) && ((Date.parse(full_date + " " + startTime1)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf())){
									e.target.submit();
								}else{
									alert('時間設定錯誤');
								}
							}else{
								alert('時間設定錯誤');
							}					
						}else{
							if(((Date.parse(full_date + " " + openTime)).valueOf() <= (Date.parse(full_date + " " + startTime1)).valueOf()) && ((Date.parse(full_date + " " + endTime1)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf()) && ((Date.parse(full_date + " " + startTime1)).valueOf() <= (Date.parse(full_date + " " + endTime)).valueOf())){
								console.log(openTime,startTime1,endTime1,endTime)
								e.target.submit();
							}else{
								alert('時間設定錯誤');
							}
						}			
					}
				}else{
					e.target.submit();
				}	
				a = e.target;
			}
		</script>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
	  
	  <?php
		if(!empty($alert))	echo "alert(`".$alert."`)";
	?>
	
	$("#prodlist2").on("change", function(){
		var val = $(this).val();
		$.post("aj.php", {prodlist2:val}, function(r){
			console.log(r)
			var arr = JSON.parse(r);
			for(var i =0;i<arr.length;i++){
				var day = arr[i]["weekNumber"];
				var time = arr[i]["weektime"];
				console.log("day"+day+" time"+time);
				console.log(arr[i]["price"] );
				
				$("#day"+day).find(".time"+time).find(".price").val( arr[i]["price"] )
				$("#day"+day).find(".time"+time).find(".start_time").val( arr[i]["startTime"] )
				$("#day"+day).find(".time"+time).find(".end_time").val( arr[i]["endTime"] )
			}
		}, "text")
	})
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