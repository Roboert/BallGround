<?php include('common/header.php'); ?>
<?php include('common/nav.php'); ?>
<?php 
  $BallTitle = $_GET[BallTitle];
  $MAC_address = $_GET[MAC_address];
  $NowDatess = date("Y-m-d H:i:s");
?>
<main class="app-content"> 
  <div class="app-title">
    <div>
      <h2><i class="fa fa-dashboard"></i>  <?php echo $BallGroundMachineArrayName[$MAC_address]; ?> </h2>
      <!--<h1><p></p></h1>-->
    </div>
    <!--<ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>-->
  </div>
    <div class="row">
        <!-- 迴圈 -->
        <?php 
        $ballground_machine_sql="select * from BallGround_machine where MAC_address = '".$MAC_address."' ";
        $ballground_machine_rs=$PDOLink->Query($ballground_machine_sql);
        $ballground_machine_rs->setFetchMode(PDO::FETCH_ASSOC);
        $PowerStatusTypes = array(0 => '錯誤',1 => '關',2 => '正在使用中',3 => '尚未開始使用');	
        $BallMachineStatusType = array(1 => '可使用',2 => '可使用','' => '可使用');
        $BallMachineStatusType2 = array(1 => 'be usable',2 => 'be usable','' => 'be usable');
        while($ballground_machine_row=$ballground_machine_rs->Fetch()) { 
        $CenterId = $ballground_machine_row[reader_id]; //捕到 16碼 + 000
        $Reader_Id=$ballground_machine_row[reader_id];
        $MeterId = $ballground_machine_row[meter_id];   
        $PowerStatus = $ballground_machine_row[power_status];       
        ?>
        <div class="col-md-6">
          <div class="tile">
              <h3><?php echo $ballground_machine_row[title]; ?></h3>
              <?php 
              /* 球場使用狀態(log),  */ 
              $sqlWashinStatus = "SELECT power_status,EndDate FROM BallGround_io_log WHERE Address_MAC = '".$Reader_Id."' and meter_id = '".$MeterId."' order by created_at desc ";   
              $stmtWashinStatus = $PDOLink->prepare($sqlWashinStatus);  
              $stmtWashinStatus->execute(); 
              $rowWashinStatus = $stmtWashinStatus->fetch();
              $status = $rowWashinStatus[power_status]; 
              $EndDate = $rowWashinStatus[EndDate]; 
              $EndDateString = date("H:i分",strtotime($EndDate)); 
              ?>
              <?php if($status == 2 && $NowDatess < $EndDate){ ?>   
              開始時間：<span id="start_pad"></span><br>
              結束時間：<span id="end_pad"></span><br>
              剩餘時間：<span id="pad"></span>
              <?php } else { ?>
              Off
              <?php } ?>
          </div>
        </div>
        <script language="javascript">  
          var startDate = new Date();
          var endDate = new Date(2019,8,24,12,25);
          var spantime = (endDate - startDate)/1000;
          function getString(dt){
              return dt.getFullYear() + "年" + (dt.getMonth()+1) + "月" +    dt.getDate() + "日" + dt.getHours() + "时" + dt.getMinutes() + "分";
          }
          function cal(){
              spantime --;
              var d = Math.floor(spantime / (24 * 3600));
              var h = Math.floor((spantime % (24*3600))/3600);
              var m = Math.floor((spantime % 3600)/(60));
              var s = Math.floor(spantime%60);
              str = d + "天 " + h + "时 " + m + "分 " + s + "秒 ";
              document.getElementById("pad").innerHTML = str;
          }
          window.onload = function(){
              document.getElementById("start_pad").innerHTML = getString(startDate);
              document.getElementById("end_pad").innerHTML = getString(endDate);
              setInterval(cal, 1000);
          } 
        </script>
        <?php } ?>
        <!-- 迴圈 End -->
      </div>
    </div>
  </div>
</main>
<?php include('common/footer.php'); ?>