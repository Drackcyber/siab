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
<!-- ./page content wrapper -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- page content holder -->
    <div class="page-content-holder">
        <?php foreach ($assesment as $s) {
            # code...
        } ?>
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <h2 class="heading-underline"><?php echo $s->nm_bencana ?></h2>
            <div class="block-heading-text">
                <?php echo $s->ket_umum ?>
            </div>
        </div>

    </div>
    <!-- ./page content holder -->

</div>
<!-- END PAGE CONTENT WRAPPER -->