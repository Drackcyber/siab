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
                            <th class="col-md-1 text-center">No</th>
                            <th class="col-md-2 text-center">Username</th>
                            <th class="col-md-2 text-center">Nama Lengkap</th>
                            <th class="col-md-2 text-center">E-mail</th>
                            <th class="col-md-2 text-center">No Handphone</th>
                            <th class="col-md-1 text-center">Jabatan</th>
                            <th class="col-md-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no =1;
                        foreach ($petugas as $p) { ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $p->user ?></td>
                            <td><?php echo $p->nama ?></td>
                            <td><?php echo $p->email ?></td>
                            <td><?php echo $p->no_hp ?></td>
                            <td>
                                <?php
                                switch ($p->jabatan) {
                                    case '1':
                                        echo "PMR";
                                        break;
                                    case '2':
                                        echo "KSR";
                                        break;
                                    case '3':
                                        echo "TRS";
                                        break;
                                    case '4':
                                        echo "Staff";
                                        break;
                                    case '5':
                                        echo "Pengurus";
                                        break;
                                    
                                    default:
                                        echo "Program Error";
                                        break;
                                }

                            ?></td>
                                
                            <td>
                                <a href="<?php echo base_url() ?>admin/edit_petugas/<?php echo $p->id_petugas ?>" class="btn btn-sm btn-warning fa fa-edit" title="Edit Petugas"></a>
                                <a href="<?php echo base_url() ?>admin/view_petugas/<?php echo $p->id_petugas ?>" class="btn btn-sm btn-success fa fa-eye" title="Lihat Petugas"></a>
                                <a href="<?php echo base_url() ?>admin/del_petugas/<?php echo $p->id_petugas ?>" class="btn btn-sm btn-danger fa fa-trash-o" title="Hapus Petugas"></a>
                            </td>
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