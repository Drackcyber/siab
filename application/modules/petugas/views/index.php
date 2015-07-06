<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">5 Bencana Terakhir</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table tabel-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-md-1">Tanggal Kejadian</th>
                                <th class="col-md-7">Nama Kejadian</th>
                                <th class="col-md-3">Jenis Bencana</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i=1; foreach ($assesment as $s) { ?>
                            <tr>
                                <td><?php echo $i  ?></td>
                                <td><?php echo $s->tgl_kejadian ?></td>
                                <td><?php echo $s->nm_bencana ?></td>
                                <td>
                                    <?php
                                        $bencana=$this->db_utama->show_all_where('siab_tipe','id_tipe',$s->jenis_bencana);
                                        foreach ($bencana as $b) {
                                        echo $b->nama;
                                        }
                                    ?>
                                </td>
                            </tr>

                            <?php  $i++; } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END DEFAULT DATATABLE -->
    <div class="row">
        <div class="col-md-8">
            <!-- START SALES BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Grafik Bencana</h3>
                        <span>Data Statistik Bencana</span>
                    </div>
                    <ul class="panel-controls panel-controls-title">
                        <li>
                            <div id="reportrange" class="dtrange">
                                <span></span><b class="caret"></b>
                            </div>
                        </li>
                        <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                <!-- MENAMPILKAN GRAFIK -->

                    <?php 
                        $isi="";
                        if (isset($grafik)) {  
                            foreach ($grafik as $g) {
                                $jumlah=$this->db_utama->show_all_where('siab_tipe','id_tipe',$g->jenis_bencana);
                                foreach ($jumlah as $j) {
                                    $isi=$isi."'".$j->nama."',";
                                }
                                

                            }
                            $data_grafik="";
                            foreach ($id_bencana as $i) {
                                //echo $i->jenis_bencana."<br>"; 
                                $jumlah=$this->db_petugas->show_data_count($i->jenis_bencana);
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
                                            height : "350px",
                                            width : "100%",
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
                    <!-- END MENAMPILKAN GRAFIK -->
                    <div>
                        <center>
                            <canvas id="canvas"></canvas>
                        </center>
                    </div>
                </div>
            </div>
            <!-- END SALES BLOCK -->
        </div>
        <div class="col-md-4">
            <!-- START PROJECTS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Artikel Kebencanaan</h3>
                        <span>5 Artikel Kebencanaan Terbaru</span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <div class="list-group list-group-contact">
                            <?php $i=1; foreach ($artikel as $a) { ?>
                            <a href="<?php base_url() ?>home/artikel" class="list-group-item"><?php echo $a->judul ?></a>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROJECTS BLOCK -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
