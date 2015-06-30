<!-- page content wrapper -->
<div class="page-content-wrap bg-light">
    <!-- page content holder -->
    <div class="page-content-holder no-padding">
        <!-- page title -->
        <div class="page-title">
            <h1>Daftar Bencana</h1>
            <!-- breadcrumbs -->
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Data Bencana</a></li>
                <li class="active">Daftar Bencana</li>
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
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline">Daftar Bencana di Gunungkidul</h2>
            <div class="block-heading-text">
                Menampilkan data bencana yang ada di wilayah Kabupaten Gunungkidul
            </div>
        </div>
    </div>
    <!-- ./page content holder -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- START BASIC TABLE SAMPLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Bencana</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover" id="bencana">
                        <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-4">Nama Bencana</th>
                                <th class="col-md-3">Kecamatan</th>
                                <th class="col-md-2">Jenis Bencana</th>
                                <th class="col-md-2">Tanggal Bencana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($assesment as $s) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="<?php echo base_url() ?>home/detail_bencana/<?php echo $s->id_assesment ?>" title="Klik untuk detail"><?php echo $s->nm_bencana ?></a></td>
                                <td><?php echo $s->kecamatan ?></td>
                                <td>
                                    <?php 
                                        $bencana=$this->db_utama->show_all_where('siab_tipe','id_tipe',$s->jenis_bencana);
                                        foreach ($bencana as $b) {
                                            echo $b->nama;
                                        }
                                    ?>
                                </td>
                                <td><?php echo $s->tgl_kejadian ?></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE SAMPLE -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->