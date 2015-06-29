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
<div class="page-content-wrap">
    <!-- page content holder -->
    <div class="page-content-holder padding-v-30">
        <?php foreach ($artikel as $a) { ?>
            
        <div class="row">
            <div class="col-md-9">
                <div class="blog-content">
                    <h2><?php echo $a->judul ?></h2>
                    <span class="blog-date"><?php echo $a->tgl_post ?></span>
                    <?php echo $a->isi; ?>
                </div>
        <?php } ?>

    </div>
</div>
</div>
</div>
<!-- ./page content holder -->