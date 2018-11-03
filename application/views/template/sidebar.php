<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="<?= base_url() ?>/assets/images/221.jpg" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username"><?= $_SESSION['email']?></a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small><?= $_SESSION['level']; ?></small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                

                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Edit Proflie</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="<?= base_url('Logout_tos/index') ?>">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        
        <li class="has-submenu">
          <a href="<?= base_url('Home_tos/index') ?>" >
            <i class="fa fa-dashboard"></i>
            <span class="menu-text">Dashboards</span>
          </a>
        </li>
        
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="fa fa-users"></i>
            <span class="menu-text">User</span>
            <span></span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('Admin_tos') ?>"><span class="menu-text">Admin</span></a></li>
            <li><a href="<?= base_url('Pengajar_tos') ?>"><span class="menu-text">Pengajar</span></a></li>
            <li><a href="<?= base_url('Siswa_tos') ?>"><span class="menu-text">Siswa</span></a></li>
            <li><a href="<?= base_url('Orang_tua_tos') ?>"><span class="menu-text">Orang Tua</span></a></li>
            <li><a href="<?= base_url('Pengguna_tos') ?>"><span class="menu-text">Pengguna</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="<?= base_url('Matpel_tos') ?>" >
            <i class="fa fa-navicon"></i>
            <span class="menu-text">Matapelajaran</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="<?= base_url('Mapel_pengajar_tos') ?>" >
            <i class="fa fa-suitcase"></i>
            <span class="menu-text">Pengajar</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="fa fa-book"></i>
            <span class="menu-text">Materi</span>
            <span></span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('Materi_tos') ?>"><span class="menu-text">Data Materi</span></a></li>
            <li><a href="<?= base_url('Video_tos') ?>"><span class="menu-text">Video</span></a></li>
            <li><a href="<?= base_url('Audio_tos') ?>"><span class="menu-text">Audio</span></a></li>
            <li><a href="<?= base_url('Dokument_tos') ?>"><span class="menu-text">Document</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="<?= base_url('Pokjar_tos') ?>" >
            <i class="fa fa-institution"></i>
            <span class="menu-text">Pokjar</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="<?= base_url('Nilai_tos') ?>">
            <i class="fa fa-graduation-cap"></i>
            <span class="menu-text">Nilai</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="fa fa-file"></i>
            <span class="menu-text">Quis</span>
            <span></span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('Quis_tos') ?>"><span class="menu-text">Data Quis</span></a></li>
            <li><a href="<?= base_url('List_quis_tos') ?>"><span class="menu-text">List Quis</span></a></li>
          </ul>
        </li>

        

        <li class="has-submenu">
          <a class="submenu-toggle">
            <i class="fa fa-print"></i>
            <span class="menu-text">Laporan</span>
            <span></span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('Laporan_tos/laporan') ?>" ><span class="menu-text">Nilai</span></a></li>
            <li><a href="<?= base_url() ?>"><span class="menu-text">Quis</span></a></li>
            
          </ul>
        </li>  
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search<?= base_url() ?>."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->