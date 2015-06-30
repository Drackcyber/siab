<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Manajemen Petugas</a></li>
    <li class="active">View Profile</li>
</ul>
<!-- END BREADCRUMB -->
<div class="rows">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">View Profile</span>
            </div>
            <div class="panel-body">
                <?php foreach ($data_petugas as $d) { ?>
                <div class="block form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Jabatan Di PMI</label>
                        <label class="control-label col-md-8 text-left"> :
                            <?php
                                                            switch ($d->jabatan) {
                                                                case '1':
                                                                    echo "PMR";
                                                                    break;
                                                                case '2':
                                                                    echo "KSR";
                                                                    break;
                                                                case '3':
                                                                    echo "TRS";
                                                                    break;
                                                                case '4':
                                                                    echo "Staff";
                                                                    break;
                                                                case '5':
                                                                    echo "Pengurus";
                                                                    break;
                                                                
                                                                default:
                                                                    echo "Program Error";
                                                                    break;
                            } ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Nama Lengkap</label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->nama ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Username</label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->user ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">E-mail</label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->email ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Nomor <i>Handphone</i></label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->no_hp ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Tempat, Tanggal Lahir</label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->tmp_lahir ?>,
                            <?php
                                    function TanggalIndo($tgl_lahir){
                                    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                    
                                    $tahun = substr($tgl_lahir, 0, 4);
                                    $bulan = substr($tgl_lahir, 5, 2);
                                    $tgl   = substr($tgl_lahir, 8, 2);
                                    
                                    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
                                    return($result);
                                    }
                                    echo TanggalIndo($d->tgl_lahir);
                            ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Jenis Kelamin</label>
                        <label class="control-label col-md-8 text-left"> :
                            <?php
                                switch ($d->jk) {
                                case '1':
                                    echo "Laki - Laki";
                                    break;
                                case '0' :
                                    echo "Perempuan";
                                    break;
                                default   :
                                    echo "Tidak Diketahui";
                                    break;
                            } ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label text-left">Alamat Tinggal</label>
                        <label class="control-label col-md-8 text-left"> : <?php echo $d->alamat ?></label>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="panel-footer">
                <a href="<?php echo base_url() ?>admin/list_petugas" class="btn btn-info pull-left"><span class="fa fa-mail-reply"></span> Kembali</a>
            </div>
        </div>