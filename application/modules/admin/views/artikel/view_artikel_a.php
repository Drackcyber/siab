<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Artikel PRB</a></li>
    <li class="active">View</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List Data Artikel PRB</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-7">Judul</th>
                            <th class="col-md-2">Tanggal Post</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no =1;
                        foreach ($artikel as $t) { ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $t->judul ?></td>
                            <td><?php echo $t->tgl_post ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>admin/edit_artikel/<?php echo $t->id_artikel ?>" class="btn btn-sm btn-warning" title="Edit Artikel"><span class="fa fa-edit"></span></a>
                                <a href="<?php echo base_url() ?>admin/view_artikel/<?php echo $t->id_artikel ?>" class="btn btn-sm btn-success" title="Lihat Artikel"><span class="fa fa-eye"></span></a>
                            <a href="<?php echo base_url() ?>admin/del_artikel/<?php echo $t->id_artikel ?>" class="btn btn-sm btn-danger" title="Hapus Artikel"><span class="fa fa-trash-o"></span></a> </td>
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