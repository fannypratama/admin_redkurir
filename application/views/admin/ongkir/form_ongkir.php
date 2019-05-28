<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3>Admin</h3>
                    <p></p>
                    <strong></strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard')?>" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dasboard</span></i></a>
                            </li>
                        <li class="nav-item"><a href="#" ><i class="fa fa-male sub-icon-mg"></i> <span class="mini-dn">Pelanggan</span></i></a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('welcome/katalog')?>"<i class="menu-icon fa fa-picture-o"></i> <span class="mini-dn">Katalog</span></a>
                        </li>
                        <li class="nav-item"><a href="#"><i class="menu-icon fa fa-shopping-cart"></i> <span class="mini-dn">Order</span></a>
                        </li>
                        <li class="nav-item"><a href="#"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Tarif Pengiriman</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Red kurir</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1><span class="table-project-n">Tarif Pengiriman</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
<div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Barang</h4>
            </div>
            <form action="<?= base_url('welcome/tambah_ongkir')?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="nm_brg">ID Ongkir</label>
                  <input type="text" name="nm_brg" class="form-control" id="nm_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="hrg_brg">Kecamatan</label>
                  <input type="number" name="hrg_brg" class="form-control" id="hrg_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="ktgr_brg">Kode Pos</label>
                  <input type="text" name="ktgr_brg" class="form-control" id="ktgr_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Tarif</label>
                  <input type="number" name="stok_brg" class="form-control" id="stok_brg" >
                </div>
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" class="btn" name="submit" value="Simpan">
              </div>
            </form>
            
          </div>
        </div>
      </div><div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM ARTIKEL</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('admin/tambah_artikel')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Judul</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="judul">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="tanggal">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="author">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Isi</label>
											<div class="controls">
													<textarea class="span8" rows="5" name="isi"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="kategori">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Views</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="views">
											</div>
										</div>
										<div class="control-group">
											<label class="controls" for="basicinput" style="color: red;"><i>*Isi data dengan lengkap dan benar</i></label>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" name="submit" value="Simpan">
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
