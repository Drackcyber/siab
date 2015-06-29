<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>SIAB Gunungkidul</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
        <?php 
            if (isset($map)) {
                 echo $map['js']; 
            } else {
            }

        ?>
            
           
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url() ?>admin">SIAB</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                        <img src="<?php echo base_url() ?>assets/assets/images/users/avatar.jpg" alt="PMI Kab. Gunungkidul"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url() ?>assets/assets/images/users/avatar.jpg" alt="PMI Kab. Gunungkidul"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">PMI Kabupaten Gunungkidul</div>
                                <div class="profile-data-title">Sistem Informasi Assessment Bencana</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?php echo base_url() ?>admin/inbox" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">Pendataan Bencana</li>
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Assesment Bencana</span></a>
                        <ul>
                            <li><a href="<?php echo base_url() ?>admin/add_assessment"><span class="fa fa-plus"></span> Tambah Assesment </a></li>
                            <li><a href="<?php echo base_url() ?>admin/daftar_assessment"><span class="fa fa-table"></span> Daftar Assesment </a></li>
                            <li><a href="<?php echo base_url() ?>admin/peta_assessment"><span class="fa fa-table"></span> Peta Bencana </a></li>
                            <li><a href="<?php echo base_url() ?>admin/add_tipe"><span class="fa fa-th-list"></span>Jenis / Tipe Bencana </a></li>
                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text"></span><span class="xn-text">Artikel Bencana</span></a>
                        <ul>
                            <li><a href="<?php echo base_url() ?>admin/add_artikel"><span class="fa fa-file-text-o"></span>Tambah Artikel</a></li>
                            <li><a href="<?php echo base_url() ?>admin/view_artikel_a"><span class="fa fa-th-list"></span>Daftar Artikel</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Pesan Pengunjung</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope-o"></span><span class="xn-text"> Manajemen Pesan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url() ?>admin/inbox"><span class="fa fa-inbox"></span> Pesan Masuk</a></li>
                            <li><a href="<?php echo base_url() ?>admin/send"><span class="fa fa-paper-plane"></span> Pesan Terkirim</a></li>
                            <li><a href="<?php echo base_url() ?>admin/delete"><span class="fa fa-trash-o"></span> Pesan Dihapus</a></li>
                        </ul>
                    </li>

                    <li class="xn-title">Manajemen Petugas</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Manajemen Petugas</span></a>
                        <ul>
                            <li><a href="<?php echo base_url() ?>admin/add_petugas"><span class="fa fa-user"></span> Tambah Petugas</a></li>
                            <li><a href="<?php echo base_url() ?>admin/list_petugas"><span class="fa fa-th-list"></span> Daftar Petugas</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- TASKS -->
                    <li class="pull-right">
                        <a href="#">Hallo, Admin <span class="fa fa-user"></span></a>
                        
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-user"></span> Profile</h3>
                                <div class="pull-right">
                                    <span class="label label-success">Haris Sudrajat</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll">
                                <a class="list-group-item" href="<?php echo base_url() ?>admin/edit_profile">
                                    <span class="fa fa-edit"></span>
                                    <strong>Edit Profile</strong>    
                                </a>
                                <a class="list-group-item" href="<?php echo base_url() ?>admin/view_profile">
                                    <span class="fa fa-eye"></span>
                                    <strong>View Profile</strong>    
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <small>&copy; 2015 - Sistem Informasi Assessment Bencana</small>
                            </div>
                        </div>
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <?php echo $content; ?>

            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Apakah anda yakin ingin keluar dari halaman ini?</p>
                        <p>Tekan NO jika anda masing ingin melanjutkan pekerjaan. Tekan Yes jika ingin keluar dari admin panel.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="#" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" href="<?php echo base_url() ?>assets/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" href="<?php echo base_url() ?>assets/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<script type='text/javascript' src='<?php echo base_url() ?>assets/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/rickshaw/d3.v3.js"></script>  -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='<?php echo base_url() ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='<?php echo base_url() ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script type='text/javascript' src='<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type='text/javascript' src='<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap-timepicker.min.js'></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/owl/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>


<!-- Datatables -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/summernote/summernote.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/fileinput/fileinput.min.js"></script>
<!-- end datatables -->


<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/actions.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/demo_dashboard.js"></script> -->
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>