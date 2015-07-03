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
                <li class="active">Hubungi Kami</li>
            </ul>
            <!-- ./breadcrumbs -->
        </div>
        <!-- ./page title -->
    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper --><!-- page content wrapper -->
<div class="page-content-wrap">

    <?php echo $map['html']; ?>

</div>
<!-- ./page content wrapper -->

<!-- page content wrapper -->
<div class="page-content-wrap">

    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>

    <!-- page content holder -->
    <div class="page-content-holder">

        <div class="row">
            <div class="col-md-7 this-animate" data-animate="fadeInLeft">

                <div class="text-column">
                    <h4>Contact Us</h4>
                    <div class="text-column-info">
                    </div>
                </div>
                <form action="<?php echo base_url() ?>" method="POST" accept-charset="utf-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name <span class="text-hightlight">*</span></label>
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail <span class="text-hightlight">*</span></label>
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Subject <span class="text-hightlight">*</span></label>
                            <input type="text" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Message <span class="text-hightlight">*</span></label>
                            <textarea class="form-control" rows="8"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg pull-right">Send Message</button>
                    </div>
                </div>
                </form>

            </div>
            <div class="col-md-5 this-animate" data-animate="fadeInRight">

                <div class="text-column text-column-centralized">
                    <div class="text-column-icon">
                        <span class="fa fa-home"></span>
                    </div>
                    <h4>Markas PMI Kabupaten Gunungkidul</h4>
                    <?php foreach ($data_contact as $c) { ?>
                    <div class="text-column-info">
                        <p><strong><span class="fa fa-map-marker"></span> Alamat: </strong><?php echo $c->alamat ?></p>
                        <p><strong><span class="fa fa-phone"></span> Office: </strong><?php echo $c->no_telp_1 ?></p>
                        <p><strong><span class="fa fa-phone"></span> Emergency Call: </strong><?php echo $c->no_telp_2 ?></p>
                        <p><strong><span class="fa fa-envelope"></span> E-mail: </strong> <a href="mailto:<?php echo $c->email ?>"><?php echo $c->email ?></a></p>
                        <p><strong><span class="fa fa-envelope"></span> Website: </strong> <a href="<?php echo $c->website ?>"><?php echo $c->website ?></a></p>
                    </div>
                    <?php } ?>
                </div>

                <div class="text-column text-column-centralized">
                    <div class="text-column-icon">
                        <span class="fa fa-clock-o"></span>
                    </div>
                    <h4>Bussines Hours</h4>
                    <div class="text-column-info">
                        <p><strong>Monday &mdash; Friday</strong>: 10:00am - 6:00pm</p>
                        <p><strong>Saturday &mdash; Sunday</strong>: 10:00am - 2:00pm</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- ./page content holder -->
</div>
<!-- ./page content wrapper -->