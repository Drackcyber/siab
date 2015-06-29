<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Assessment</a></li>
    <li class="active">Daftar Pengungsian</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Daftar Pengungsian</h3>
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
                            <th class="col-md-2 text-center">Nama Pengungsian</th>
                            <th class="col-md-2 text-center">Lokasi Pengungsian</th>
                            <th class="col-md-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no =1;
                        foreach ($assesment as $a) { ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $a->nm_pengungsi ?></td>
                            <td><?php echo $a->lokasi_pengungsi ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>pengungsi/view<?php echo $a->id_pengungsian ?>" class="btn btn-sm btn-warning" title="Edit Assessment"><span class="fa fa-edit"></span></a>
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