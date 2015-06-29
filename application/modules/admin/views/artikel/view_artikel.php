<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Artikel PRB</a></li>
    <li class="active">View</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <?php foreach ($artikel as $a) { ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body posts">
                    <div class="post-item">
                        <div class="post-title">
                            <?php echo $a->judul ?>
                        </div>
                        <div class="post-date"><span class="fa fa-calendar"></span> <?php echo $a->tgl_post ?> /  <a href="#">by admin</a></div>
                        <div class="post-text">
                            <?php echo $a->isi ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--
        <div class="col-md-3">
            <div class="panel panel-default">
            <div class="panel-heading">
                    <h4>Artikel Terbaru</h4>
            </div>
                <div class="panel-body">
                    <?php foreach ($artikel as $a) { ?>
                    <div class="list-group">
                        <a href="#" class="list-group-item" ><?php echo $a->judul ?></a>
                    </div>
                    <?php } ?>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        -->
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->