<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Pesan</a></li>
    <li class="active">Pesan Terkirim</li>
</ul>
<!-- END BREADCRUMB -->
<!-- START CONTENT FRAME -->
<div class="content-frame">
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-rocket"></span> Pesan Terkirim</h2>
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
                <a href="<?php echo base_url() ?>admin/inbox" class="list-group-item"><span class="fa fa-inbox"></span> Pesan Masuk</a>
                <a href="<?php echo base_url() ?>admin/sent" class="list-group-item active"><span class="fa fa-rocket"></span> Pesan Terkirim</a>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-right" style="width: 150px;">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                        <input class="form-control datepicker" type="text" data-orientation="left"/>
                    </div>
                </div>
            </div>
            <div class="panel-body mail">
            <ul class="list-group">
            <?php $i=1; foreach ($sent as $s) { ?>
                <li class="mail-item list-group-item">
                    <div class="mail-checkbox">
                        <a href="<?php echo base_url() ?>admin/del_pesan/<?php echo $s->id_sent ?>" class="btn btn-sm btn-danger fa fa-trash-o"></a>
                    </div>
                    <div class="mail-user col-md-2"><?php echo $s->penerima ?></div>
                    <a href="<?php echo base_url() ?>admin/lihat_pesan_terkirim/<?php echo $s->id_sent ?>" class="mail-text">Re: <?php echo $s->subjek ?></a>
                    <div class="mail-date"><?php echo $s->tgl_sent ?>, <?php echo $s->waktu ?></div>
                </li>
            <?php $i++; } ?>
            </ul>
            </div>
            <div class="panel-footer">
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
