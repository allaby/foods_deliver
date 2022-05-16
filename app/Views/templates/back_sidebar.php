<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/backoffice/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/backoffice/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $activemenu == 'dashboard' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de Bord
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $activebigmenu == 'recipee' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Recette
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/recipee/list') ?>" class="nav-link <?= $activemenu == 'menu_list' ? "active" : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nouvel ajout</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/recipee/ingredient') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ingredient</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('admin/orders/list') ?>" class="nav-link <?= $activemenu == 'orders' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Commandes
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/user/list') ?>" class="nav-link <?= $activemenu == 'users' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Utilisateur
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/user/list') ?>" class="nav-link <?= $activemenu == 'pubs' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Annonces
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/user/profile') ?>" class="nav-link <?= $activemenu == 'profile' ? "active" : "" ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Mon Profil
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>