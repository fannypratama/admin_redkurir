

      
<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    
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
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Order</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            
            <!-- tempat fitur -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1><span class="table-project-n">Data</span> Order</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                	<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button> -->
                                	<a class="btn btn-success" data-toggle="modal" data-target="#tambah">TAMBAH DATA</a>
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th>No</th>
                                                    <th>ID Barang</th>
                                                    <th>ID Pelanggan</th>
                                                    <th>Tanggal Pembelian</th>
                                                    <th>Status</th>
                                                    <th>Total Pembelian</th>
                                                    <th>Opsi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                            	 $no = 1;
                                            	 	
													foreach ($order as $data) :
                                            	?>
                                            	<tr>
                                            		<!-- <td></td> -->
                                            		<td><?= $no++;?></td>
                                                    <td><?= $data->id_barang?></td>
                                                    <td><?= $data->id_pelanngan?></td>
                                            		<td><?= $data->tanggal_pembelian?></td>
                                            		<td><?= $data->Status?></td>
                                            		<td><?= $data->total_pembelian?></td>
                                            		
                                            		<td>
                                            			<a href="<?php echo base_url('welcome/hapus_Order/'.$data->id_barang)?>" onclick="javascript: return confirm('Hapus data?')"">Hapus</a>
                                            			<a class="btn btn-success" data-toggle="modal" data-target="#edit" href="<?php echo base_url('welcome/edit_Order/'.$data->id_barang)?>">Edit</a>
                                            		</td>


                                            	</tr>
                                            	<?php
                                            endforeach;
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
            <form action="<?= base_url('order/add')?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="nm_brg">ID Barang</label>
                  <select class="form-control" name="id_brg">                      
                        <option>Pilih Barang</option>
                        <?php foreach( $barang as $row) :?>
                            <option value="<?php echo $row->id_barang ?>"><?php echo $row->nama_barang ?> - <?php echo $row->harga_barang ?></option>                            
                        <?php endforeach; ?>                      
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label" for="nm_brg">ID Pelanggan</label>
                  <select class="form-control" name="id_plng">                      
                        <option>Pilih Pelanggan</option>
                        <?php foreach( $pelanngan as $row) :?>
                            <option value="<?php echo $row->id_pelanngan ?>"><?php echo $row->nama_pelanngan ?></option>
                        <?php endforeach; ?>                      
                    </select>
                </div>                
                <div class="form-group">
                  <label class="control-label" for="status">Status</label>
                  <select class="form-control" name="status">
                      <option value="lunas">Lunas</option>
                      <option value="pending">Pending</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label" for="ktgr_brg">Total Pembelian</label>
                  <input type="number" name="total" class="form-control" id="total" >
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
              <h4 class="modal-title">Edit Data Barang</h4>
            </div>
            <form action="<?= base_url('welcome/edit_Order'.$Order->id_barang)?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="hrg_brg">ID Barang</label>
                  <input type="number" name="id_brg" class="form-control" id="id_brg" value="<?php echo set_value('id_brg', $Order->id_barang)?>">
                </div>
                <div class="form-group">
                  <label class="control-label" for="ktgr_brg">ID Pelanggan</label>
                  <input type="number" name="id_pelanggan" class="form-control" id="id_pelanggan" value="<?php echo set_value('id_pelanngan', $Order->id_pelanngan)?>">
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Tanggal Pembelian</label>
                  <input type="number" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" value="<?php echo set_value('tanggal_pembelian', $Order->tanggal_pembelian)?>">
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Status</label>
                  <input type="text" name="status" class="form-control" id="status" value="<?php echo set_value('status', $Order->status)?>">
                </div>
                <div class="form-group">
                  <label class="control-label" for="stok_brg">Total Pembelian</label>
                  <input type="number" name="total_pembelian" class="form-control" id="total_pembelian" value="<?php echo set_value('total_pembelian', $Order->total_pembelian)?>">
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