<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Assessment</a></li>
    <li class="active">Daftar Assessment</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Daftar Assessment</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th class="col-md-1 text-center">No</th>
                            <th class="col-md-2 text-center">Tanggal</th>
                            <th class="col-md-2 text-center">Nama Bencana</th>
                            <th class="col-md-2 text-center">Kecamatan</th>
                            <th class="col-md-2 text-center">Jenis Bencana</th>
                            <th class="col-md-1 text-center">Petugas</th>
                            <th class="col-md-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no =1;
                        foreach ($assesment as $a) { ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $a->tgl_kejadian ?></td>
                            <td><?php echo $a->nm_bencana ?></td>
                            <td><?php echo $a->kecamatan ?></td>
                            <td>
                                <?php 
                                        //echo $s->jenis_bencana
                                        $bencana=$this->db_utama->show_all_where('siab_tipe','id_tipe',$a->jenis_bencana);
                                        foreach ($bencana as $b) {
                                           echo $b->nama;
                                        }
                                        ?>
                                </td>
                            <td></td>
                            <td>
                                <a href="<?php echo base_url() ?>admin/edit_assessment/" class="btn btn-sm btn-warning fa fa-edit" title="Edit Assessment"></a>
                                <a href="<?php echo base_url() ?>assesment/view_assessment/" class="btn btn-sm btn-warning fa fa-eye" title="Lihat Detail"></a>
                                <a href="<?php echo base_url() ?>admin/del_assessment/" class="btn btn-sm btn-danger fa fa-trash-o" title="Hapus Assessment"></a> </td>
                        </tr>
                        <?php  $no++;  }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END PAGE CONTENT WRAPPER -->