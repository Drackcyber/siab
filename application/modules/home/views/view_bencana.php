<!-- page content wrapper -->
<div class="page-content-wrap bg-light">
    <!-- page content holder -->
    <div class="page-content-holder no-padding">
        <!-- page title -->
        <div class="page-title">
            <h1>Dashboard</h1>
            <!-- breadcrumbs -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Data Bencana</a></li>
                <li><a href="#">Daftar Bencana</a></li>
                <li class="active">View Detail</li>
            </ul>
            <!-- ./breadcrumbs -->
        </div>
        <!-- ./page title -->
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- page content holder -->
    <div class="page-content-holder">
        <?php foreach ($assesment as $s) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Lihat Detail Assessment</h3>
            </div>
            <div class="panel-body">
                <div class="pull-right col-md-12">
                    <?php echo $map['html']; ?>
                </div>
                <!-- START ISI KONTEM -->
                <!-- START CONTENT STEP1 -->
                <div class="form-horizontal col-md-12">
                <div class="form-group">
                    <hr>
                </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Koordinat</label>
                        <div class="col-md-9">
                            <input type="hidden" name="" value="<?php echo $s->id_assesment ?>">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->lat ?>, <?php echo $s->lng ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Lokasi Bencana</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-9 "> : <?php echo $s->lokasi_bencana ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Jenis Bencana</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : 
                            <?php 
                                        $jenis=$this->db_utama->show_all_where('siab_tipe','id_tipe',$s->jenis_bencana);
                                        foreach ($jenis as $j) {
                                            echo $j->nama;
                                        }
                                    ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Nama Bencana</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->nm_bencana ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Waktu Kejadian</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->waktu ?> WIB,<?php echo $s->tgl_kejadian ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Sarana Umum</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->sarana_umum ?></label>
                        </div>
                    </div>
                    <hr>
                    <!-- END CONTENT STEP 1 -->
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Korban Jiwa</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-3 ">Meninggal Dunia</label><label style="text-align: left;" class="control-label">: <?php echo $s->meninggal ?> Orang</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Luka Berat</label><label style="text-align: left;" class="control-label">: <?php echo $s->lk_berat ?> Orang</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Luka Ringan</label><label style="text-align: left;" class="control-label">: <?php echo $s->lk_ringan ?> Orang</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Hilang</label><label style="text-align: left;" class="control-label">: <?php echo $s->hilang ?> Orang</label>
                        </div>
                    </div>
                    <!-- html comment -->
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Kerusakan</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-3 ">Rumah Hancur</label><label style="text-align: left;" class="control-label">: <?php echo $s->rmh_hancur ?> Buah</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Rumah Rusak Berat</label><label style="text-align: left;" class="control-label">: <?php echo $s->rmh_berat ?> Buah</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Rumah Rusak Ringan</label><label style="text-align: left;" class="control-label">: <?php echo $s->rmh_ringan ?> Buah</label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Akses Jalan</label><label style="text-align: left;" class="control-label">: <?php echo $s->akses_jalan ?></label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Akses Jembatan</label><label style="text-align: left;" class="control-label">: <?php echo $s->akses_jembatan ?></label><br>
                            <label style="text-align: left;" class="control-label col-md-3 ">Akses Transportasi</label><label style="text-align: left;" class="control-label">: <?php echo $s->akses_transport ?></label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Nama Pengungsian</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->pengungsian ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-md-3 control-label ">Alamat Pengungsian</label>
                        <div class="col-md-9">
                            <label style="text-align: left;" class="control-label col-md-8 "> : <?php echo $s->almt_pengungsi ?></label>
                        </div>
                    </div>
                </div>
                <!-- END ISI KONTEM -->
            </div>
            <div class="panel-footer">
                <a href="<?php echo base_url() ?>home/list" class="btn btn-info">Kembali</a>
            </div>
        </div>
        <?php  } ?>
    </div>
    <!-- ./page content holder -->
</div>
<!-- END PAGE CONTENT WRAPPER -->