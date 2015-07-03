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
                <li class="active">Dashboard</li>
            </ul>
            <!-- ./breadcrumbs -->
        </div>
        <!-- ./page title -->
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->
<!-- page content wrapper -->
<div class="page-content-wrap bg-img-2 light-elements">
    <!-- page content holder -->
    <div class="page-content-holder">
        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
            <img src="<?php echo base_url() ?>assets/home/img/head.png">
            <div class="block-heading-text"></div>
        </div>
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->
<!-- page content wrapper -->
<div class="page-content-wrap">
    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>
    <!-- page content holder -->
    <div class="page-content-holder this-animate" data-animate="fadeIn">
        <!-- START KIRIM PESAN -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="text-center"><strong>Kirim Pesan</strong></h5>
                </div>
                <form action="<?php base_url() ?>home/index" method="POST">
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <p class="text-justify">Informasikan kepada kami jika anda mengetahui terjadi suatu bencana, atau bisa menghubungi kami via Telepon</p>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Email</label>
                                    <div class=" col-md-10">
                                        <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Nama</label>
                                    <div class=" col-md-10">
                                    <input type="text" class="form-control" name="pengirim" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">No. HP</label>
                                    <div class=" col-md-10">
                                    <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Subjek</label>
                                    <div class=" col-md-10">
                                    <input type="text" class="form-control" name="subjek" placeholder="Subjek" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Pesan</label>
                                    <div class=" col-md-10">
                                    <textarea name="kontent" class="form-control" rows="3" placeholder="Isi Pesan" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right col-md-10">
                            <button class="btn btn-success" data-container="body" data-toggle="popover" data-placement="top" data-content="Thank you my friend! :)"><span class="fa fa-envelope-o"></span> Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END KIRIM PESAN -->
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->