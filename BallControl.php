<?php include('common/header.php'); ?>
<?php include('common/nav.php'); ?>
<!-- openclose2.php -->
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> 球場系統設定</h1>
        </div>
      </div>
      <div class='row'>
			<div  style="margin-top: 25px;" class='col-lg-6'>
                <h4>球場開關切換</h4>
                <form class="was-validated" action="#" method="post"> 
                    <select class='form-control' name="reader_id" >
                        <option value="not">請選擇 </option>
                        <?php 
                            //$BallGroundMachineSql="select DISTINCT reader_id from BallGround_machine";
                            $BallGroundMachineSql="select * from BallGround_machine order by title asc";
                            $BallGroundMachineRs=$PDOLink->Query($BallGroundMachineSql);
                            while($BallGroundMachineRow=$BallGroundMachineRs->Fetch()){
                            print "
                                <option value='".$BallGroundMachineRow[reader_id]."".$BallGroundMachineRow[meter_id]."'>".$BallGroundMachineRow[title]."</option>";                     
                            }
                        ?>
                    </select>
                    <div class="form-check">
                            <input type="checkbox" class="form-check-input userroomBoxChangeAll" name="status" value="update_all" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">請先勾選</label><br><br>
                    </div>
                    <div class="center"> 
                        <div class="switch_demo">
                            <input type="checkbox" name="switch_demo" class="switch_demo-checkbox" id="switch_demo" checked>
                                <label class="switch_demo-label" for="switch_demo">
                                <span class="switch_demo-inner"></span>
                                <span class="switch_demo-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div style="text-align: center;" class="col-12"><br>
                            <input  type="submit" class="btn btn-primary" value="確認更新">
                    </div>
                </form>
            </div><br><br>
            <div style="margin-top: 25px;" class='col-lg-6'>
                <h4>球場時段模式建立</h4>
                <form class="was-validated" action="#" method="post">
                <select class='form-control' name="reader_id" >
                    <option value="not">請選擇 </option>
                        <?php 
                            //$BallGroundMachineSql="select DISTINCT reader_id from BallGround_machine";
                            $BallGroundMachineSql="select * from BallGround_machine order by title asc";
                            $BallGroundMachineRs=$PDOLink->Query($BallGroundMachineSql);
                            while($BallGroundMachineRow=$BallGroundMachineRs->Fetch()){
                                print "
                                    <option value='".$BallGroundMachineRow[reader_id]."".$BallGroundMachineRow[meter_id]."'>".$BallGroundMachineRow[title]."</option>";                                    
                                }
                        ?>
                    </select>
                    <div class="form-check">
                            <input type="checkbox" class="form-check-input userroomBoxChangeAll" name="status" value="update_all" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">請先勾選</label><br><br>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'> 選擇模式 </label>
                        <select class='get_price form-control' name="select_price">
                                <option selected value="not">請選擇</option>
                                <option selected value="1">計費</option>
                                <option selected value="0">免費</option>
                                <option selected value="-1">停用</option>
                        </select>
                    </div>
                    <div class='select_price form-group'> <!-- step="10" -->
                            <label for='exampleInputEmail1'> 輸入金額 </label>
                            <input  class='form-control' type="number" value="100" min="0" name='price'>
                    </div>
                    <div class='row'>
                        <div class="col-6">  
                            開始時間：<input class='form-control' type='time' name='start_time' value="06:00" placeholder="hrs:mins">
                        </div>
                        <div class="col-6">
                            結束時間：<input class='form-control' type='time' name='end_time' value="23:59">
                        </div>
                    </div>
                    <div style="text-align: center;" class="col-12"><br>
                            <input  type="submit" class="btn btn-primary" value="確認送出">
                    </div>
                </form>
            </div>
      </div>
    </div>
</main>
<!--  openclose2.php End -->
<?php include('common/footer.php'); ?>