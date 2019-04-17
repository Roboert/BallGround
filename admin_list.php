<?php include('common/header.php'); ?>
<?php include('common/nav.php'); ?>
<!-- admin_list.php -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> 球場管理員列表</h1>
          <!--<p>Table to display analytical data effectively</p>-->
        </div>
        <!--<ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>-->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>帳號</th>
                    <th>密碼</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody> 
                  <!-- Table 迴圈 -->    
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                   <!-- Table 迴圈 End -->    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
<!--  admin_list.php End -->
<?php include('common/footer.php'); ?>