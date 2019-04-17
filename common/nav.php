<?php include_once("config/db.php");?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <?php if(!$admin) { ?>
  <aside class="app-sidebar">
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> 首頁 </span></a></li>
      <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label"> 客服中心 </span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> 客服問題中心專區 </a></li>
        </ul>
      </li>  -->
      <?php  
      $sql="select var_name,var_value1 from var_list where var_type = '球場分類' order by var_value asc  ";
      $rs=$PDOLink->Query($sql);
      $rs->setFetchMode(PDO::FETCH_ASSOC);
      $i=0;
      $j=1;	
      while($row=$rs->Fetch()) { ?>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> <?php echo $row[var_name]; ?></span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <?php 
          /* 球場機器(Machine),  */ 
          $ballground_machine_sql="select * from ballground_machine where category_id = '".$row[var_value1]."' ";
		  echo $sql;
          $ballground_machine_rs=$PDOLink->Query($ballground_machine_sql);
          $ballground_machine_rs->setFetchMode(PDO::FETCH_ASSOC);
          $PowerStatusTypes = array(0 => '錯誤',1 => '關',2 => '正在使用中',3 => '尚未開始使用');	
          $BallMachineStatusType = array(1 => '可使用',2 => '可使用','' => '可使用');
          $BallMachineStatusType2 = array(1 => 'be usable',2 => 'be usable','' => 'be usable');
          while($ballground_machine_row=$ballground_machine_rs->Fetch()) {
          ?>
            <li><a class="treeview-item" href="PublicBallGroundshow.php?BallTitle=<?php echo $ballground_machine_row[title]; ?>&MAC_address=<?php echo $ballground_machine_row[MAC_address]; ?>"><i class="icon fa fa-circle-o"></i> <?php echo $ballground_machine_row[title]; ?></a></li>
          <?php } ?>
        </ul>
      </li>
      <?php 
      $i++;
      $j++;	 } 
      ?>
    </ul>
  </aside>
  <?php } else { ?>
  <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">首頁</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">球場查詢</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="pay_list.php"><i class="icon fa fa-circle-o"></i> 扣款時間查詢</a></li>
            <li><a class="treeview-item" href="home.php"><i class="icon fa fa-circle-o"></i> 球場狀態查詢</a></li>
            <!--<li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>-->
          </ul>
        </li>
        <li><a class="app-menu__item active" href="log_list.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">球場Logo紀錄</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">球場時段設定</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="openclose2.php"><i class="icon fa fa-circle-o"></i> 球場強制控制水銀燈開關</a></li>
          </ul>
        </li>
        <!--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">球場位置控制</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->
          <ul class="treeview-menu">           
            <!--<li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>-->
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">球場管理員列表</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="admin_list.php"><i class="icon fa fa-circle-o"></i> 球場管理員列表</a></li>
            <li><a class="treeview-item" href="addadmin.php"><i class="icon fa fa-circle-o"></i> 新增球場管理員</a></li>
          </ul>
        </li>
      </ul>
    </aside>
  <?php } ?>