<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Artikel PRB</a></li>
    <li class="active">Tambah Artikel</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <form role="form" action="<?php echo base_url() ?>petugas/save_artikel " method="POST">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Tambah Artikel</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group input-group-lg">
                            <label>Judul Artikel</label>
                            <input type="text" name="judul" class="form-control  m-b-sm input-lg"/>
                        </div>
                        <br />
                        <textarea class="summernote" name="isi" ></textarea>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
