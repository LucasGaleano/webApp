<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i>
      </a>

        <a class="brand nav-icons" href="index.php">
          <img src="images/dhl-logo.png">
        </a>

      <div class="nav-collapse collapse navbar-inverse-collapse">
        <ul class="nav nav-icons">
          <li><a href="#">
            <i class="icon-envelope"></i>
          </a></li>
          <li><a href="#">
            <i class="icon-eye-open"></i>
          </a></li>
          <li><a href="#">
            <i class="icon-bar-chart"></i>
          </a></li>
        </ul>

        <form class="navbar-search pull-left input-append" action="#">
          <input type="text" class="span3">
          <button class="btn" type="button">
            <i class="icon-search"></i>
          </button>
        </form>

        <ul class="nav pull-right">
          <li><a href="#">
            Support
          </a></li>
          <li class="nav-user dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php
                echo $_SESSION['username'];
              ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Your Profile</a></li>
              <li><a href="#">Edit Profile</a></li>
              <li><a href="#">Account Settings</a></li>
              <li class="divider"></li>
              <li><a href="php/logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div><!-- /navbar -->
