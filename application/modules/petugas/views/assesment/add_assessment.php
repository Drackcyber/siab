<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Assessment Bencana</a></li>
    <li class="active">Tambah Assessment</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START WIZARD WITH SUBMIT BUTTON -->
            <div class="block">
                <form id="jvalidate" action="<?php echo base_url() ?>petugas/save_assesment" role="form" class="form-horizontal" method="POST">
                    <div class="wizard show-submit">
                        <!-- START NAVIGASI -->
                        <ul>
                            <li>
                                <a href="#step-1">
                                <span class="stepNumber">1</span>
                                <span class="stepDesc">Informasi Umum<br /><small>Data Umum Bencana</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                <span class="stepNumber">2</span>
                                <span class="stepDesc">Dambak Bencana<br /><small>Informasi Dampak Bencana</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                <span class="stepNumber">3</span>
                                <span class="stepDesc">Pengungsian<br /><small>Informasi Data Pengungsian</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-4">
                                <span class="stepNumber">4</span>
                                <span class="stepDesc">Kebutuhan<br /><small>Informasi Kebutuhan</small></span>
                                </a>
                            </li>
                        </ul>
                        <!-- END NAVIGASI -->
                        <!-- START STEP 1 -->
                        <div id="step-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Informasi Umum</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- START CONTENT STEP1 -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Koordinat</label>
                                        <div class="col-md-10">
                                            <div class="col-md-12 form-group">
                                                <?php echo $map['html']; ?>
                                            </div>

                                            <div class="col-md-5 form-group">
                                                <input id="latFld" type="text" name="lat" class="form-control" placeholder="Latitude" required>
                                                <span class="help-block">Latitude</span>
                                            </div>
                                            <div class="col-md-5">
                                                <input id="lngFld" type="text" name="lng" class="form-control" placeholder="Longtitude" required>
                                                <span class="help-block">Longtitude</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Lokasi Bencana</label>
                                        <div class="col-md-10">
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" name="lokasi_bencana" placeholder="Alamat Lokasi Bencana" rows="2" required></textarea>
                                            </div>
                                            <div class="col-md-5 form-group">
                                                <input type="text" name="kec" class="form-control" id="kec" autocomplete="off" spellcheck="false" placeholder="Kecamatan" required>
                                                <span class="help-block">Contoh : Wonosari</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jenis Bencana</label>
                                        <div class="col-md-4">
                                            <select name="jenis_bencana" class="form-control select" required>
                                                <option value="0" selected="">Pilih Jenis Bencana</option>
                                                <?php $i=1; foreach ($tipe as $t) { ?>
                                                    <option value="<?php echo $i ?>"><?php echo $t->nama ?></option>
                                                <?php $i++; } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nama Bencana</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nm_bencana" placeholder="Nama Bencana">
                                            <span class="help-block">Mis : Longsor Watu Gajah</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Intensitas Kejadian</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="inten_kejadian" placeholder="Intensitas Kejadian">
                                            <span class="help-block">Mis : Ketinggian Air 1 m</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Waktu Kejadian</label>
                                        <div class="col-md-10 form-group">
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                                    <input type="text" name="waktu" class="form-control timepicker24" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" name="tgl_kejadian" class="form-control datepicker" placeholder="Tanggal Kejadian" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sarana Umum</label>
                                        <div class="col-md-8">
                                            <select name="sarana_umum[]" class="form-control select" multiple="multiple" required>

                                                <option value="Lapangan" selected="">Lapangan</option>
                                                <option value="Sekolah" >Sekolah</option>
                                                <option value="Balai Desa" >Balai Desa</option>
                                                <option value="Tempat Ibadah" >Tempat Ibadah</option>
                                                <option value="Rumah Sakit / Fasilitas Kesehatan" >Rumah Sakit / Fasilitas Kesehatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Keterangan</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="ket_umum" placeholder="Keterangan Tambahan Jika Perlu" rows="2"></textarea>
                                            
                                        </div>
                                    </div>
                                    <!-- END CONTENT STEP 1 -->
                                </div>
                            </div>
                        </div>
                        <!-- END STEP 1 -->
                        <!-- START STEP 2 -->
                        <div id="step-2">
                            <div class="panel panel-default">
                                <!-- START HEAD CONTENT STEP 2 -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Dampak Bencana</h3>
                                </div>
                                <!-- END HEAD CONTENT STEP 2 -->
                                <!-- START CONTENT STEP 2 -->
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Korban Jiwa</label>
                                        <hr class="col-md-10" />
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Meninggal</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" value="0" name="meninggal" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Luka Berat</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" value="0" name="lk_berat" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Luka Ringan</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" value="0" name="lk_ringan" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Hilang</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" value="0" name="hilang" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- html comment -->
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Kerusakan</label>
                                        <hr class="col-md-10" />
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Rumah Hancur</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" name="rmh_hancur" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Rumah Rusak Berat</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" name="rmh_berat" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Rumah Rusak Ringan</label>
                                                    <div class="col-md-2">
                                                        <input type="number" min="0" step="1" name="rmh_ringan" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Akses Jalan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_jalan" value="1" checked="checked"/> Berfungsi</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_jalan" value="0" /> Tidak Berfungsi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Akses Jembatan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_jembatan" value="1" checked="checked"/> Berfungsi</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_jembatan" value="0" /> Tidak Berfungsi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Akses Transportasi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_transport" value="1" checked="checked"/> Ada</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" class="iradio" name="akses_transport" value="0" /> Tidak Ada</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- html comment -->
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Keterangan</label>
                                        <div class="col-md-11">
                                            <textarea class="form-control" name="ket_kerusakan" rows="2" placeholder="Tambahkan Keterangan Jika Diperlukan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- START STEP 3 -->
                        <div id="step-3">
                            <div class="panel panel-default">
                                <!-- START HEAD CONTENT STEP 3 -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Pengungsian</h3>
                                </div>
                                <!-- END HEAD CONTENT STEP 3 -->
                                <!-- START CONTENT STEP 3 -->
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nama Pengungsian</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="pengungsian" placeholder="Nama Pengungsian">
                                            <span class="help-block">Misal : Balai Desa Watu Gajah</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Alamat Pengungsian</label>
                                        <div class="col-md-10">
                                            <textarea name="almt_pengungsi" class="form-control" rows="2" placeholder="Alamat Pengungsian"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah Pengungsi</label>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="label-control col-md-2">Laki-laki</label>
                                                <div class="col-md-2">
                                                    <input type="number" min="0" step="1" name="pengungsi_l" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label-control col-md-2">Perempuan</label>
                                                <div class="col-md-2">
                                                    <input type="number" min="0" step="1" name="pengungsi_p" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Kontak Person</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-offset-1 col-md-11">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nama Lengkap</label>
                                                    <div class="form-group col-md-8">
                                                        <input type="text" class="form-control" name="nm_kontak" placeholder="Nama Lengkap Kontak Person">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">No Handphone</label>
                                                    <div class="form-group col-md-4">
                                                        <input type="text" class="form-control" name="hp_kontak" placeholder="Nomor Handphone Kontak Person">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Jabatan</label>
                                                    <div class="form-group col-md-8">
                                                        <input type="text" class="form-control" name="jab_kontak" placeholder="Jabatan Kontak Person">
                                                        <span class="help-block">Mis : Kepala Desa</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Keterangan</label>
                                        <div class="col-md-10">
                                            <textarea name="ket_pengungsi" class="form-control" rows="2" placeholder="Tambahkan Keterangan Jika Diperlukan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- END CONTENT STEP 3 -->
                            </div>
                        </div>
                        <!-- END STEP 3 -->
                        <!-- START STEP 4 -->
                        <div id="step-4">
                            <div class="panel panel-default">
                                <!-- START HEAD CONTENT STEP 4 -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Kebutuhan</h3>
                                </div>
                                <!-- END HEAD CONTENT STEP 4 -->
                                <!-- START CONTENT STEP 4 -->
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Tambah Kebutuhan</label>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">1.</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="tmbh_keb1" placeholder="Nama Kebutuhan"></input>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <input type="number" name="jml_keb1" class="form-control" min="0" step="1"></input>
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-1">2.</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="tmbh_keb2" placeholder="Nama Kebutuhan"></input>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <input type="number" name="jml_keb2" class="form-control" min="0" step="1"></input>
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-1">3.</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="tmbh_keb3" placeholder="Nama Kebutuhan"></input>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <input type="number" name="jml_keb3" class="form-control" min="0" step="1" value="0"></input>
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-1">4.</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="tmbh_keb4" placeholder="Nama Kebutuhan"></input>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <input type="number" name="jml_keb4" class="form-control" min="0" step="1"></input>
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-1">5.</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="tmbh_keb5" placeholder="Nama Kebutuhan"></input>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <input type="number" name="jml_keb5" class="form-control" min="0" step="1"></input>
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Keterangan</label>
                                        <div class="col-md-10">
                                            <textarea name="ket_keb" class="form-control" rows="2" placeholder="Tambahkan Keterangan Jika Diperlukan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- END STEP 4 -->
                            </div>
                        </div>
                    </div>
                    <!-- END WIZARD WITH SUBMIT BUTTON -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<!-- Modal -->
<div id="openmap" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Peta Gunungkidul</h4>
            </div>
            <div class="modal-body">
                asasas
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL MAP  -->