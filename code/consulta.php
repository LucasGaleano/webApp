<!DOCTYPE html>
<html lang="en">

<?php
require_once('php/import.php');
require_once('php/session.php');
?>

<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('title.php') ?>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'rel='stylesheet'>
        <?php require_once 'php/functions.php'; ?>


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
                    <div class="span9">
                      <div class="module">
          							<div class="module-head">
          								<h3>Query</h3>
          							</div>
          							<div class="module-body table">
          								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                            <div class="form-group">
                                  <textarea class="form-control"></textarea>
                            </div>
          								</table>
          							</div>
          						</div>
                    </div>

                    <!--/.span3-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="js/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/common.js" type="text/javascript"></script>

    </body>
