<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Halaman</a></li>
    <li class="active">Edit Hubungi Kami</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php base_url() ?>admin/update_contact" class="form-horizontal" rule="form" method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Edit Info Hubungi Kami</h2>
                    </div>
                    <?php foreach ($data_contact as $c) { ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Alamat</label>
                            <div class="col-md-10">
                                <input type="hidden" name="" value="<?php echo $c->id_contact ?>">
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $c->alamat ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">No Telepon 1</label>
                            <div class="col-md-4">
                                <input type="text" name="no_telp_1" class="form-control" placeholder="Masukkan Nomor Telepon Markas" value="<?php echo $c->no_telp_1 ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">No Telepon 2</label>
                            <div class="col-md-4">
                                <input type="text" name="no_telp_2" class="form-control" placeholder="Masukkan Nomor Telepon 118" value="<?php echo $c->no_telp_2 ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">E-mail</label>
                            <div class="col-md-10">
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat E-mail PMI Kab. Gunungkidul" value="<?php echo $c->email ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Website</label>
                            <div class="col-md-10">
                                <input type="url" name="website" class="form-control" placeholder="Masukkan Alamat Website" value="<?php echo $c->website ?>" required>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>