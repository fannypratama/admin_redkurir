

      
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
                                <div class="sparkline13-graph">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#tambah">TAMBAH DATA</a>
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th>No</th>
                                                    <th>ID </th>
                                                    <th>Kecamatan</th>
                                                    <th>Kode pos</th>
                                                    <th>Tarif</th>
                                                    <th>Opsi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                 $no = 1;
                                                    if(!empty($ongkir)){
                                                    foreach ($ongkir as $data) {
                                                ?>
                                                <tr>
                                                    <!-- <td></td> -->
                                                    <td><?= $no++;?></td>
                                                    <td><?php echo $data->id_ongkir;?></td>
                                                    <td><?php echo $data->Kecamatan?></td>
                                                    <td><?php echo $data->kode_pos?></td>
                                                    <td><?php echo $data->Tarif?></td>
                                                    <td>
                                                       <a href="<?php echo base_url('welcome/edit/'.$data->id_ongkir)?>">
                                                    <u>Edit</u>
                                                </a>
                                               <a href="<?php echo base_url('welcome/hapus_ongkir/'.$data->id_ongkir)?>" onclick="javascript: return confirm('Hapus data?')">Hapus</a>
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
              <h4 class="modal-title">Tambah Data Pengiriman</h4>
            </div>
            <form action="<?= base_url('welcome/tambah_ongkir')?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="g">ID</label>
                  <input type="text" name="id_ongkir" class="form-control"  >
                </div>
                <div class="form-group">
                  <label class="control-label" for="hrg_brg">Kecamatan</label>
                  <input type="text" name="Kecamatan" class="form-control"  >
                </div>
                <div class="form-group">
                  <label class="control-label" for="ktgr_brg">Kode Pos</label>
                  <input type="number" name="kode_pos" class="form-control"  >
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Tarif</label>
                  <input type="number" name="Tarif" class="form-control"  >
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