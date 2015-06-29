<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Assesment Bencana</a></li>
    <li class="active">Jenis Bencana</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" action="<?php echo base_url() ?>admin/save_tipe" method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Jenis Bencana</strong></h3>
                    </div>
                    <div class="panel-body">
                        <p align="justify">Anda memasuki form panel untuk mengisi tipe bencana pada Sistem Informasi Assesment Bencana, Silahkan memasukkan data tipe bencana dengan tepat. Terimakasih (<b>Admin</b>)</p>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Jenis Bencana</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input name="tipe" type="text" class="form-control"/>
                                </div>
                                <span class="help-block"><i>Bencana Alam, Konflik, Kecelakaan</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default">Clear Form</button>
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Jenis Bencana</h3>
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
                                <th class="col-md-9">Jenis Bencana</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            foreach ($tipe as $t) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $t->nama ?></td>
                                <td><a href="<?php  echo base_url() ?>admin/edit_tipe/<?php echo $t->id_tipe ?>" class="btn btn-success btn-sm"><span class="fa fa-edit"></span> Edit </a>  <a href="<?php  echo base_url() ?>admin/del_tipe/<?php echo $t->id_tipe ?>" class="btn btn-danger btn-sm"><span class="fa fa-minus-square"></span> Hapus</a> </td>
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