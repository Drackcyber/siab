<!-- page content wrapper -->
<div class="page-content-wrap bg-light">
    <!-- page content holder -->
    <div class="page-content-holder no-padding">
        <!-- page title -->
        <div class="page-title">
            <h1>Tentang Aplikasi</h1>
            <!-- breadcrumbs -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="active">Tentang Aplikasi</li>
            </ul>
            <!-- ./breadcrumbs -->
        </div>
        <!-- ./page title -->
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->
<!-- page content wrapper -->
<div class="page-content-wrap">
    <!-- page content holder -->
    <div class="page-content-holder">

        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <img src="<?php echo base_url() ?>assets/home/img/siab.png">
            <h2></h2>
            <h2 class="heading-underline">Sistem Informasi Assessment Bencana</h2>
            <div class="block-heading-text">
                <?php foreach ($about as $t) { ?>
                <div><?php echo $t->isi ?></div>
                <?php } ?>
            </div>
        </div>

    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->