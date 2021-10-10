<div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> Timetable --r</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('teacher_time_table'); ?></h3>
                        <div class="box-tools pull-right"></div>
                    </div>

                    <div class="box-body">
                        <?php
                        //if (!empty($schtimetables)) {
                             $this->load->view('timetable/timetables_view');
                            ?>
                             
                            <?php
                        //} else {
                            ?>
                            <div class="alert alert-info">
                            <?php echo $this->lang->line('no_record_found'); ?>
                            </div>
                            <?php
                        //}
                        ?>



                    </div>


                </div>
            </div>
        </div>
    </section>
</div>

