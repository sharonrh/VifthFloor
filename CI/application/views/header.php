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
            <a class="navbar-brand" href="home"><img id="brand" src=<?php echo base_url("/assets/images/logo-web.png");?> alt="Vifth Floor Logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href=<?php echo site_url("home");?>>HOME</a></li>
                <li><a href=<?php echo site_url("profile");?>>PROFIL</a></li>
                <li><a href=<?php echo site_url("game");?>>SHOWCASE</a></li>
                <li><a href=<?php echo site_url("news");?>>NEWS</a></li>
                <li><a href=<?php echo site_url("donasi");?>>DONASI</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>