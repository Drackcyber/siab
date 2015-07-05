<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Pesan</a></li>
    <li class="active">Lihat Pesan</li>
</ul>
<!-- END BREADCRUMB -->
<!-- START CONTENT FRAME -->
<div class="content-frame">
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-file-text"></span> Message</h2>
        </div>
        <div class="pull-right">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>
    </div>
    <!-- END CONTENT FRAME TOP -->
    <!-- START CONTENT FRAME LEFT -->
    <div class="content-frame-left">
        <div class="block">
            <div class="list-group border-bottom">
                <a href="<?php echo base_url() ?>admin/inbox" class="list-group-item"><span class="fa fa-inbox"></span> Inbox</a>
                <a href="<?php echo base_url() ?>admin/sent" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="panel panel-default">
            <?php foreach ($pesan as $p) { ?>
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title"><strong>From : </strong> <?php echo $p->nama ?> <small><?php echo $p->email ?></small></h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button>
                </div>
            </div>
            <div class="panel-body">
                <!-- START Message Title -->
                <h3>Subject: <?php echo $p->subjek ?> <small class="pull-right text-muted"><span class="fa fa-clock-o"></span><?php echo $p->tgl_post ?>,<?php echo $p->waktu ?></small></h3>
                <hr />
                <!-- END Message Title -->
                <!-- Start Isi Pesan -->
                <?php echo $p->isi ?>
                <input type="hidden" name="id_inbox" value="<?php echo $p->id_inbox ?>">
                <!-- End Isi Pesan -->
                <hr>


                <div class="form-group push-up-30">
                    <label>Balas Cepat</label>
                    <form role="form" action="<?php echo base_url() ?>admin/reply" method="POST">
                        <div class="form-group">
                            <label class="col-md-2 control-label">To :</label>
                            <div class="col-md-10">
                                <input type="hidden" name="id_inbox" value="<?php echo $p->id_inbox ?>">
                                <input type="text" class="form-control" name="penerima" value="<?php echo $p->email ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Subject :</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="subjek" value="<?php echo $p->subjek ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control summernote_lite" name="isi" rows="1" placeholder="Click untuk membalas pesan"></textarea>
                            <button type="submit" name="send_reply" class="btn btn-info pull-left"><span class="glyphicon glyphicon-send"></span></span> Send Reply</button>
                        </div>
                            <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->