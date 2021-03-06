<!DOCTYPE html>
<html lang="en">

<?php
require_once('php/import.php');
require_once('php/session.php');
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('php/title.php') ?>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
  <?php
  include('navbar.php');
  ?>
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="span3">
          <?php
          include('sidebar.html');
          ?>
        </div>
        <!--/.span3-->
        <div class="span9">
          <div class="content">
            <div class="btn-controls">
              <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                  <p class="text-muted">
                    Growth</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                  <p class="text-muted">
                    New Users</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                  <p class="text-muted">
                    Profit</p>
                </a>
              </div>
              <div class="btn-box-row row-fluid">
                <div class="span8">
                  <div class="row-fluid">
                    <div class="span12">
                      <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                      </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                      </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                      </a>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="span12">
                      <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                      </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                      </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                          Rate</b> </a>
                    </div>
                  </div>
                </div>
                <ul class="widget widget-usage unstyled span4">
                  <li>
                    <p>
                      <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                    </p>
                    <div class="progress tight">
                      <div class="bar" style="width: 78%;">
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>
                      <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                    </p>
                    <div class="progress tight">
                      <div class="bar bar-success" style="width: 56%;">
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>
                      <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                    </p>
                    <div class="progress tight">
                      <div class="bar bar-warning" style="width: 44%;">
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>
                      <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                    </p>
                    <div class="progress tight">
                      <div class="bar bar-danger" style="width: 67%;">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!--/#btn-controls-->
            <div class="module hide">
              <div class="module-head">
                <h3>
                  Adjust Budget Range</h3>
              </div>
              <div class="module-body">
                <div class="form-inline clearfix">
                  <a href="#" class="btn pull-right">Update</a>
                  <label for="amount">
                    Price range:</label>
                  &nbsp;
                  <input type="text" id="amount" class="input-" />
                </div>
                <hr />
                <div class="slider-range">
                </div>
              </div>
            </div>
            <div class="module">
              <div class="module-head">
                <h3>
                  Users</h3>
              </div>
              <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                  <thead>
                    <?php
                                traerHeaders('users');
                                ?>
                  </thead>
                  <tbody>
                    <?php
                                traerTabla('users');
                                ?>
                  </tbody>
                  <tfoot>
                    <?php
                                traerHeaders('users');
                                ?>
                  </tfoot>
                </table>
              </div>
            </div>
            <!--/.module-->
          </div>
          <!--/.content-->
        </div>
        <!--/.span9-->
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.wrapper-->
  <?php
              include('footer.html');
              ?>
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="js/flot/jquery.flot.resize.js" type="text/javascript"></script>
  <script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>

</body>
