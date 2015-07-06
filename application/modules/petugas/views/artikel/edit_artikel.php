<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Artikel PRB</a></li>
    <li class="active">Edit Artikel</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <form role="form" action="<?php echo base_url() ?>petugas/update_artikel " method="POST">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Edit Artikel</strong></h3>
                    </div>
                        <?php foreach ($data_artikel as $da) { ?>
                    <div class="panel-body">
                        <div class="form-group input-group-lg">
                            <label>Judul Artikel</label>
                            <input type="text" name="judul" value="<?php echo $da->judul ?>" class="form-control"/>
                            <input name="id_artikel" type="hidden" value="<?php echo $da->id_artikel ?>" class="form-control"/>
                        </div>
                        <br />
                        <textarea class="summernote" name="isi"><?php echo $da->isi ?></textarea>
                    </div>
                        <?php } ?>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>