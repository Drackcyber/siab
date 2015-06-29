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
                <a href="<?php echo base_url() ?>admin/inbox" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success">3</span></a>
                <a href="<?php echo base_url() ?>admin/send" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
                <a href="<?php echo base_url() ?>admin/delete" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">1.4k</span></a>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title"><strong>From : </strong> John Doe <small>johndoe@domain.com</small></h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button>
                </div>
            </div>
            <div class="panel-body">
                <!-- START Message Title -->
                <h3>Re: Product development <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Today, Sep 18, 14:33</small></h3>
                <hr />
                <!-- END Message Title -->
                <!-- Start Isi Pesan -->
                <p>Hello Dmitry,</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
                <p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
                <p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
                <p class="text-muted"><strong>Best Regards<br/>John Doe</strong></p>
                <!-- End Isi Pesan -->
                <hr>
                <div class="form-group push-up-30">
                    <label>Balas Cepat</label>
                    <form role="form" action="<?php echo base_url() ?>admin/" method="POST">
                        <div class="form-group">
                            <label class="col-md-1 control-label">To :</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="to_reply" value="sender@siab.com" disabled="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control summernote_lite" name="isi_reply" rows="1" placeholder="Click untuk membalas pesan"></textarea>
                            <button type="submit" name="send_reply" class="btn btn-info pull-left"><span class="glyphicon glyphicon-send"></span></span> Send Reply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->