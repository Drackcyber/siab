<!-- page content wrapper -->
<div class="page-content-wrap bg-light">
    <!-- page content holder -->
    <div class="page-content-holder no-padding">
        <!-- page title -->
        <div class="page-title">
            <h1>Artikel Kebencanaan</h1>
            <!-- breadcrumbs -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Artikel</li>
            </ul>
            <!-- ./breadcrumbs -->
        </div>
        <!-- ./page title -->
    </div>
    <!-- ./page content holder -->
</div>
<div class="page-content-wrap">
    <!-- page content holder -->
    <div class="page-content-holder">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3 pull-right">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Artikel</div>
                    <div class="panel-body">
                        <div class="list-group list-group-contact">
                        <?php $i=1; foreach ($artikel as $a) { ?>
                            <a href="#<?php echo $a->judul ?>" class="list-group-item"><?php echo $a->judul ?></a>
                        <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /SIDEBAR -->
            <!-- ARTIKEL KONTEN -->
            <?php foreach ($artikel as $a) { ?>
            <div class="col-md-9">
                <div class="blog-content">
                    <div class="panel panel-default" id="<?php echo $a->judul ?>">
                        <div class="panel-heading">
                            <h2><?php echo $a->judul ?>
                            <span class="blog-date pull-right"><span class="fa fa-calendar"></span> <?php echo $a->tgl_post ?> |<span class="fa fa-user"></span>  Admin</span></h2>
                        </div>
                        <div class="panel-body">
                            <?php echo $a->isi; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- ./ ARTIKEL KONTEN -->
        </div>
    </div>
</div>
<!-- ./page content holder -->