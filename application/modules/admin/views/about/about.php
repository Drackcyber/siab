<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Halaman</a></li>
    <li class="active">Edit About Us</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <form role="form" action="<?php echo base_url() ?>admin/update_about" method="POST">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Edit About Us</strong></h3>
                    </div>
                        <?php foreach ($data_about as $a) { ?>
                            <input name="id_about" type="hidden" value="<?php echo $a->id_about ?>" class="form-control"/>
                    <div class="panel-body">
                            <textarea class="summernote" name="isi" ><?php echo $a->isi ?></textarea>
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