<!-- page content wrapper -->
<div class="page-content-wrap bg-light">
    <!-- page content holder -->
    <div class="page-content-holder no-padding">
        <!-- page title -->
        <div class="page-title">
            <h1>Dashboard</h1>
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
                            <h2 class="heading-underline">Daftar Bencana Alam Gunungkidul</h2>
                            <div class="block-heading-text">
                                Aenean enim ipsum, suscipit sit amet nisl vitae, convallis vehicula urna. Duis iaculis nunc at enim ultrices pharetra. Maecenas consectetur orci ut condimentum porttitor. Vivamus massa lorem, sollicitudin ac rhoncus ut, fringilla eget purus. In finibus nisl sed neque pulvinar.
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <!-- START BASIC TABLE SAMPLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Bencana</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bencana</th>
                                <th>Kecamatan</th>
                                <th>Tanggal Bencana</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach ($assesment as $s) { ?>
                            
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $s->nm_bencana ?></td>
                                <td><?php echo $s->kecamatan ?></td>
                                <td><?php echo $s->tgl_kejadian ?></td>
                                <td><a href="<?php echo base_url() ?>home/detail_bencana/<?php echo $s->id_assesment ?>">Lihat Detail</a></td>
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