<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=<?php echo site_url();?>><img id="brand" src=<?php echo base_url("/assets/images/logo-web.png");?> alt="Vifth Floor Logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href=<?php echo site_url("dashboard");?>>DASHBOARD</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOWCASE <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href=<?php echo site_url("dashboard/game");?>>VIEW ALL SHOWCASES</a></li>
                    <li><a href=<?php echo site_url("dashboard/game/new");?>>ADD SHOWCASE </a></li>
                    <li><a href=<?php echo site_url("dashboard/game/slider");?>>CHANGE SLIDER </a> </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">NEWS <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href=<?php echo site_url("dashboard/news");?>>VIEW ALL NEWS</a></li>
                    <li><a href=<?php echo site_url("dashboard/news/new");?>>ADD NEWS</a></li>
                  </ul>
                </li>
                <li><a href=<?php echo site_url("dashboard/donasi");?>>UPDATE DONASI</a></li>
                <li><a href=<?php echo site_url("login/logout");?>>LOGOUT</a></li>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>