<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Petugas</a></li>
    <li class="active">View Profile</li>
</ul>
<!-- END BREADCRUMB -->
<div class="rows">
<?php foreach ($petugas as $p) { ?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">View Profile</span>
            </div>
            <div class="panel-body">
                <div class="block form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Jabatan Di PMI</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->jabatan ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Lengkap</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->nama ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Username</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->user ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">E-mail</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->email ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nomor <i>Handphone</i></label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->no_hp ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Tempat, Tanggal Lahir</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->tmp_lahir ?>, <?php echo $p->tgl_lahir ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Jenis Kelamin</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->jk ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Alamat Tinggal</label>
                        <label class="control-label col-md-8 text-left"><?php echo $p->alamat ?></label>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="<?php echo base_url() ?>" class="btn btn-info pull-left"><span class="fa fa-mail-reply"></span> Kembali</a>
            </div>
        </div>
    </div>
<?php } ?>
</div>