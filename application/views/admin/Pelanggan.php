

      
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
                            <a href="<?= base_url('welcome')?>" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dasboard</span></i></a>
                            </li>
                        <li class="nav-item"><a href="#" ><i class="fa fa-male sub-icon-mg"></i> <span class="mini-dn">Pelanggan</span></i></a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('welcome/katalog')?>"<i class="menu-icon fa fa-picture-o"></i> <span class="mini-dn">Katalog</span></a>
                        </li>
                        <li class="nav-item"><a href="#"><i class="menu-icon fa fa-shopping-cart"></i> <span class="mini-dn">Order</span></a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('welcome/ongkir')?>"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Tarif Pengiriman</span></a>
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

            <!-- tempat fitur -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1><span class="table-project-n">Data</span> Pelanggan</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                	<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button> -->
                                	
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>No. telp</th>
                                                    <th>Alamat</th>
                                                    <th>Kecamatan</th>
                                                    <th>Kode Pos</th>
                                                    <th>Opsi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                            	 $no = 1;
                                            	 	if(!empty($pelanggan)){
													foreach ($pelanggan as $data) {
                                            	?>
                                            	<tr>
                                            		<!-- <td></td> -->
                                            		<td><?= $no++;?></td>
                                                    <td><?= $data->username?></td>
                                                    <td><?= $data->email?></td>
                                                    <td><?= $data->password?></td>
                                                    <td><?= $data->nama_pelanngan?></td>
                                                    <td><?= $data->telp?></td>
                                                    <td><?= $data->Alamat?></td>
                                                    <td><?= $data->kecamatan?></td>
                                                    <td><?= $data->kode_pos?></td>
                                                    <td>
                                                    	<a href="<?= base_url('welcome/hapus_pelanggan/'.$data->id_pelanngan)?>" onclick="javascript: return confirm('Hapus data?')"">Hapus</a>
                                            			<a class="btn btn-success" href="<?php echo base_url('welcome/edit_data_pelanggan/'.$data->id_pelanngan)?>">Edit</a>
                                            		</td>
                                            	</tr>
                                            	<?php
                                                }
		                                    }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <form action="<?= base_url('welcome/tambah_katalog')?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="nm_brg">Nama Barang</label>
                  <input type="text" name="nm_brg" class="form-control" id="nm_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="hrg_brg">Harga Barang</label>
                  <input type="number" name="hrg_brg" class="form-control" id="hrg_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="ktgr_brg">Kategori Barang</label>
                  <input type="text" name="ktgr_brg" class="form-control" id="ktgr_brg" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Stok Barang</label>
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
      </div>

      <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Data Pelanggan</h4>
            </div>
            <form action="<?php echo base_url('welcome/pelanggan/'.$pelanggan->kode_pos)?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="no">No</label>
                  <!-- <input type="text" name="no" class="form-control" id="no" value="<?php echo set_value('no', $Pelanggan->nama_barang)?>" > -->
                </div>
                <div class="form-group">
                  <label class="control-label" for="nm">Nama</label>
                  <!-- <input type="number" name="nm class="form-control" id="nm" value="<?php echo set_value('nm', $katalog->harga_barang)?>"> -->
                </div>
                <div class="form-group">
                  <label class="control-label" for="eml">Email</label>
                  <input type="text" name="ktgr_brg" class="form-control" id="ktgr_brg" value="">
                </div>
                <div class="form-group">
                  <label class="control-label" for="tlp">Telp/Wa</label>
                  <input type="number" name="stok_brg" class="form-control" id="stok_brg" value="">
                </div>
                <div class="form-group">
                  <label class="control-label" for="almt>Alamat</label>
                  <input type="number" name="stok_brg" class="form-control" id="stok_brg" value="">
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" class="btn" name="submit" value="Simpan">
              </div>
            </form>
            
          </div>
        </div>
      </div>