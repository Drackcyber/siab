<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>SIAB - Sistem Informasi Assessment Bencana</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/revolution-slider/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/styles.css" media="screen" />
    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            <!-- page header -->
            <div class="page-header">
                <!-- page header holder -->
                <div class="page-header-holder">
                    <!-- page logo -->
                    <div class="logo">
                        <a href="<?php echo base_url() ?>home"></a>
                    </div>
                    <!-- ./page logo -->
                    <!-- search -->
                    <div class="search">
                        <div class="search-button"><span class="fa fa-search"></span></div>
                        <div class="search-container animated fadeInDown">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..."/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ./search -->
                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->
                    <!-- navigation -->
                    <ul class="navigation">
                        <li>
                            <a href="<?php echo base_url() ?>home">Home</a>
                        </li>
                        <li>
                            <a href="#">Data Bencana</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>#">Daftar Bencana</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Artikel</a></li>
                        <li>
                            <a href="#">About Us</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>#">Tentang Aplikasi</a></li>
                                <li><a href="<?php echo base_url() ?>#">Hubungi Kami</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ./navigation -->
                </div>
                <!-- ./page header holder -->
            </div>
            <!-- ./page header -->
            <!-- page content -->
            <div class="page-content">
                <?php echo $content ?>
            </div>
            <!-- ./page content -->
            <!-- page footer -->
            <div class="page-footer">
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                        <div class="row">
                            <!-- about -->
                            <div class="col-md-3 pull-left">
                                <h3>SIAB</h3>
                                <p>Sistem Informasi Assessment Bencana</p>
                            </div>
                            <!-- ./about -->
                            <!-- contacts -->
                            <div class="col-md-4  pull-right">
                                <h3>Contacts</h3>
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        <strong class="text-primary">Office</strong><br>
                                        Jl. Nusa Indah No.3, Wonosari<br/>
                                        Gunungkidul, D.I.Yogyakarta.
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        <strong class="text-primary">Emergency Service PMI Kab. Gunungkidul</strong><br>
                                        (0274) 391-118
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong class="text-primary">SIAB Administrator</strong><br>
                                        <a href="mailto:#">siab@pmi-gunungkidul.or.id</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./contacts -->
                        </div>
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        <!-- copyright -->
                        <div class="copyright">
                            <a href="<?php echo base_url() ?>/index">&copy; 2015 Sistem Informasi Assessment Bencana</a>
                        </div>
                        <div class="copyright pull-right">
                            <a href="pmi-gunungkidul.or.id">PMI Kabupaten Gunungkidul</a>
                        </div>
                        <!-- ./copyright -->
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
            </div>
            <!-- ./page footer -->
        </div>
        <!-- ./page container -->
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/appear/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/actions.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/slider.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <!-- ./page scripts -->
    </body>
</html>