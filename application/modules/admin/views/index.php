<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">5 Bencana Terakhir</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table tabel-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-md-1">Tanggal Kejadian</th>
                                <th class="col-md-7">Nama Kejadian</th>
                                <th class="col-md-3">Jenis Bencana</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $i=1; foreach ($assesment as $s) { ?>
                                <tr>
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $s->tgl_kejadian ?></td>
                                    <td><?php echo $s->nm_bencana ?></td>
                                    <td>
                                    <?php 
                                        //echo $s->jenis_bencana
                                        $bencana=$this->db_utama->show_all_where('siab_tipe','id_tipe',$s->jenis_bencana);
                                        foreach ($bencana as $b) {
                                           echo $b->nama;
                                        }
                                        ?>
                                    </td>
                                </tr>
                               
                            <?php  $i++; } ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="row">
                <div class="col-md-8">
                    <!-- START SALES BLOCK -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Sales</h3>
                                <span>Sales activity by period you selected</span>
                            </div>
                            <ul class="panel-controls panel-controls-title">
                                <li>
                                    <div id="reportrange" class="dtrange">
                                        <span></span><b class="caret"></b>
                                    </div>
                                </li>
                                <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="row stacked">
                                <div class="col-md-4">
                                    <div class="progress-list">
                                        <div class="pull-left"><strong>In Queue</strong></div>
                                        <div class="pull-right">75%</div>
                                        <div class="progress progress-small progress-striped active">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                                        </div>
                                    </div>
                                    <div class="progress-list">
                                        <div class="pull-left"><strong>Shipped Products</strong></div>
                                        <div class="pull-right">450/500</div>
                                        <div class="progress progress-small progress-striped active">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                                        </div>
                                    </div>
                                    <div class="progress-list">
                                        <div class="pull-left"><strong class="text-danger">Returned Products</strong></div>
                                        <div class="pull-right">25/500</div>
                                        <div class="progress progress-small progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">5%</div>
                                        </div>
                                    </div>
                                    <div class="progress-list">
                                        <div class="pull-left"><strong class="text-warning">Progress Today</strong></div>
                                        <div class="pull-right">75/150</div>
                                        <div class="progress progress-small progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                        </div>
                                    </div>
                                    <p><span class="fa fa-warning"></span> Data update in end of each hour. You can update it manual by pressign update button</p>
                                </div>
                                <div class="col-md-8">
                                    <div id="dashboard-map-seles" style="width: 100%; height: 200px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SALES BLOCK -->
                </div>
                <div class="col-md-4">
                    <!-- START PROJECTS BLOCK -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Projects</h3>
                                <span>Projects activity</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50%">Project</th>
                                            <th width="20%">Status</th>
                                            <th width="30%">Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Atlant</strong></td>
                                            <td><span class="label label-danger">Developing</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gemini</strong></td>
                                            <td><span class="label label-warning">Updating</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Taurus</strong></td>
                                            <td><span class="label label-warning">Updating</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Leo</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Virgo</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Aquarius</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PROJECTS BLOCK -->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->