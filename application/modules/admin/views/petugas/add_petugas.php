<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Petugas</a></li>
    <li class="active">Tambah Petugas</li>
</ul>
<!-- END BREADCRUMB -->
<div class="rows">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">Tambah Petugas</span>
            </div>
            <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo base_url() ?>admin/save_petugas" method="POST">
                <div class="block">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Jabatan Di PMI</label>
                            <div class="col-md-4">
                                <select name="jab" class="form-control select" required>
                                    <option value="1">PMR</option>
                                    <option value="2" selected>KSR</option>
                                    <option value="3">TRS</option>
                                    <option value="4">Staff</option>
                                    <option value="5">Pengurus</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Lengkap</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Username</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">E-mail</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control" placeholder="E-mail Address">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nomor <i>Handphone</i></label>
                            <div class="col-md-4">
                                <input type="text" name="hp" class="form-control" placeholder="Nomor Handphone" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tempat Lahir</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir"/>
                                <span class="help-block">Contoh: Gunungkidul</span>
                            </div>
                            <label class="col-md-2 control-label">Tanggal Lahir</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" name="tgl_lahir" class="form-control datepicker" value="">
                                </div>
                                <span class="help-block">Contoh: 2000-12-31</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Jenis Kelamin</label>
                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="check"><input type="radio" class="iradio" name="jk" value="1" checked="checked"/> Laki-laki</label>
                                </div>
                                <div class="col-md-2">
                                    <label class="check"><input type="radio" class="iradio" name="jk" value="0" /> Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat Tinggal</label>
                                <div class="col-md-10">
                                    <textarea type="text" name="alamat" class="form-control" row="2" required></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="reset" class="btn btn-primary pull-left">Clear Form</button>
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>