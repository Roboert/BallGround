<?php include('common/header.php'); ?>
<?php include('common/nav.php'); ?>
<?php include_once('db.php'); ?>


<!-- home -->
<main class="app-content">
      <div class="app-title">
        <div>
          <h2><i class="fa fa-dashboard"></i> 東華大學球場 </h2>
          <h1><p></p></h1>
        </div>
        <!--<ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php"></a></li>
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
              <p><b></b></p>
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
      <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">新增管理員</h3>
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">新增帳號</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="請輸入:新增帳號">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">新增密碼</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="email" placeholder="請輸入:新增密碼">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Male
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Female
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <!--<label class="control-label col-md-3">Identity Proof</label>-->
                  <div class="col-md-8">
                    <!--<input class="form-control" type="file">-->
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <!--<label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I accept the terms and conditions
                      </label>-->
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>送出</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>重新</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--<div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>-->
        <!--</div>-->
        <!--<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>-->
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
        </div>
      </div>-->
    </main>
<!-- home End -->
<?php include('common/footer.php'); ?>