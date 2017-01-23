<?php if (isset($adult)): ?>
<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>MI</b>EC</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Ecole Citoyenne</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="connexion/deconnecter" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> Se déconnecter<b class="caret"></b></a>

                </li>

            </ul>

        </div>
    </nav>
</header>
<?php else: ?>

<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>MI</b>EC</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Ecole Citoyenne</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="connexion/" class="dropdown-toggle" data-toggle="dropdown">
                       <span class="glyphicon glyphicon-user"></span> Connection</a>

                </li>

            </ul>
        </div>
    </nav>
</header>
<?php endif;?>