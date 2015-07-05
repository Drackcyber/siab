<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>SIAB - Sistem Informasi Assessment Bencana</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        <!-- STYLE TEMPLATE -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/revolution-slider/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/styles.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/home/css/datatable/data.css" media="screen" />
        <!-- ./STYLE TEMPLATE -->
        <!-- TRIGGER MAP GOOGLE -->
        <?php
            if (isset($map)) {
                echo $map['js'];
                } else { }
        ?>
        <!-- END TRIGGER MAP GOOGLE -->
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
                                        <button class="btn btn-primary fa fa-search"></button>
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
                                <li><a href="<?php echo base_url() ?>home/peta">Peta Bencana</a></li>
                                <li><a href="<?php echo base_url() ?>home/list_bencana">Daftar Bencana</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url() ?>home/artikel">Artikel</a></li>
                        <li>
                            <a href="#">About Us</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>home/about">Tentang Aplikasi</a></li>
                                <li><a href="<?php echo base_url() ?>home/contact">Hubungi Kami</a></li>
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
                            <div class="pull-left col-md-3">
                                <form action="<?php echo base_url() ?>login/login_adm" method="POST" rule="form">
                                    <div  class="form-horizontal">
                                        <h3>Log In</h3>
                                        <p>Please fill in your basic personal information in the folowing fields:</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4 pull-right">
                                                <button class="btn btn-success btn-block">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/dataTables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/chart.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#bencana').dataTable( {
                    "pagingType": "full_numbers"
                } );
            } );
        </script>
        <?php 
            $isi="";
            if (isset($grafik)) {  
                foreach ($grafik as $g) {
                    $isi=$isi."'".$g->nama."',";

                }
                $data_grafik="";
                foreach ($id_bencana as $i) {
                    //echo $i->jenis_bencana."<br>"; 
                    $jumlah=$this->db_home->show_data_count($i->jenis_bencana);
                    foreach ($jumlah as $j) {
                        //echo $j->jumlah."<br>";
                        $data_grafik=$data_grafik."".$j->jumlah.",";
                    }
                }


                //echo $isi."<br> ";
                $max=strlen($isi);
                $tipe=substr($isi,0,$max-1);
                $max2=strlen($data_grafik);
                $grafik=substr($data_grafik,0,$max2-1);

                ?>
                <script>
                    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

                    var barChartData = {
                        labels : [<?php echo $tipe ?>],
                        datasets : [
                            {
                                fillColor : "rgba(220,220,220,0.5)",
                                strokeColor : "rgba(220,220,220,0.8)",
                                highlightFill: "rgba(220,220,220,0.75)",
                                highlightStroke: "rgba(220,220,220,1)",
                                data : [<?php echo $grafik ?>]
                            }
                        ]

                    }
                    window.onload = function(){
                        var ctx = document.getElementById("canvas").getContext("2d");
                        window.myBar = new Chart(ctx).Bar(barChartData, {
                            responsive : true
                        });
                    }

                </script>
            <?php } else {
            }
            
         ?>
        
        <!-- ./page scripts -->
    </body>
</html>