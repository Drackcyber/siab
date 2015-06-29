<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Pesan</a></li>
    <li class="active">Inbox</li>
</ul>
<!-- END BREADCRUMB -->
<!-- START CONTENT FRAME -->
<div class="content-frame">
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-inbox"></span> Inbox <small>(3 unread)</small></h2>
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
                <a href="<?php echo base_url() ?>admin/inbox" class="list-group-item li-info active"><span class="fa fa-inbox"></span> Pesan Masuk <span class="badge badge-success">3</span></a>
                <a href="<?php echo base_url() ?>admin/send" class="list-group-item list-info"><span class="fa fa-rocket"></span> Pesan Terkirim</a>
                <a href="<?php echo base_url() ?>admin/delete" class="list-group-item"><span class="fa fa-trash-o"></span> Pesan Dihapus <span class="badge badge-default">1.4k</span></a>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="check mail-checkall">
                    <input type="checkbox">
                </label>
                <div class="btn-group">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                </div>
                <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>
                <div class="pull-right" style="width: 150px;">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                        <input class="form-control datepicker" type="text" data-orientation="left"/>
                    </div>
                </div>
            </div>
            <div class="panel-body mail">
                <ul class="list-group">
                    <li class="mail-item list-group-item">
                        <div class="mail-checkbox">
                            <input type="checkbox" >
                        </div>
                        <div class="mail-user">Dmitry Ivaniuk</div>
                        <a href="<?php echo base_url() ?>admin/lihat_pesan" class="mail-text">Product development</a>
                        <div class="mail-date">Today, 11:21</div>
                    </li>
                    <li  class="mail-item list-group-item">
                        <div class="mail-checkbox">
                            <input type="checkbox" >
                        </div>
                        <div class="mail-user">HTC</div>
                        <a href="<?php echo base_url() ?>admin/lihat_pesan" class="mail-text">New updates on your phone HD7</a>
                        <div class="mail-date">Sep 13,2015</div>
                        <div class="mail-attachments">
                            <span class="fa fa-paperclip"></span> 58Mb
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <div class="btn-group">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                </div>
                <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>
                
                <ul class="pagination pagination-sm pull-right">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->
