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
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"></a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Red Kurir</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="<?= base_url('Login/logout')?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                            </ul>
                                        </li>
                                                        </div>
                                                    </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Edit Data Pengiriman</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <?php foreach($ongkir as $o) { ?>
                                                    <form action="<?= base_url('welcome/update'); ?>" method="post">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">ID</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="id_ongkir" value="<?php echo $o->id_ongkir ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Kecamatan</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="Kecamatan" value="<?php echo $o->Kecamatan ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Kode Pos</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="number" class="form-control" name="kode_pos" value="<?php echo $o->kode_pos ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Tarif</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="number" class="form-control" name="Tarif" value="<?php echo $o->Tarif ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            <button class="btn btn-white" type="submit">Cancel</button>
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form End-->
 <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169;RED KURIR </a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>