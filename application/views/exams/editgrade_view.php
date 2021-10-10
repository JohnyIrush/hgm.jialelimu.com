

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

    <style type="text/css">

        @media print

        {

            .no-print, .no-print *

            {

                display: none !important;

            }

        }

    </style>

    

    <div class="row"> 



      <div class="content-wrapper">

                   <div class="mainpanel">

            <div class="pageheader">

                <div class="media">

                    <div class="pageicon pull-left">

                        <i class="fa fa-pencil"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-pencil"></i></li>

                            <li>Edit Grades</li>

                        </ul>

                        <h4>Edit Grades</h4>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row" style="background:url('images/back.png');">

                   <div class="col-md-3">

                   </div>



                    <!--edit school-->

                    <div class="col-md-6">
                    <?php

                    foreach ($grades as $grade) {
                    
                       echo
                    
                    '<form action="/exams/updategrade/' . $grade->id . '" method="post">

                        <div class="panel panel-default">

                            <div class="panel-heading">

                                <div class="panel-btns" style="display: none;">

                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                </div><!-- panel-btns -->

                                <h4 class="panel-title">Edit Grade</h4>

                            </div><!-- panel-heading -->

                            <div class="panel-body">

                                <div class="row">

                                    <div id="addstdcomm" style="text-align:center;"></div>

                                    <form action="/exams/updategrade/' . $grade->id . '">
                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label"> Grade Name <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" name="name" class="form-control" id="gradename" placeholder="e.g. A" maxlength="50" value="' . $grade->name . '">

                                        </div>

                                    </div><!-- form-group -->

                                    

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">No of Points <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" name="points" class="form-control" id="points" placeholder="e.g. 12" maxlength="2" value="' . $grade->points . '">

                                        </div>

                                    </div><!-- form-group -->


                                    <div class="form-group row">

                                    <label class="col-sm-3 control-label">Marks <span class="asterisk">*</span></label>

                                    <div class="col-sm-9">

                                        <input type="text" name="marks" class="form-control" id="points" placeholder="e.g. 12" maxlength="2" value="' . $grade->marks . '">

                                    </div>

                                </div><!-- form-group -->



                                </div><!-- row -->

                            </div><!-- panel-body -->

                            

                            <div class="panel-footer">

                              <div class="row">

                                <div class="col-sm-9 col-sm-offset-3">                                            

                                    <button class="btn btn-primary mr5" id="btnaddexam">Submit</button>

                                    <button type="reset" class="btn btn-dark">Clear</button>

                                </div>

                              </div>

                            </div><!-- panel-footer -->  

                        </div></form>';
                    }

                    ?>
                        <!-- panel -->

                        

                        

                    </div><!-- col-md-6 -->





                </div><!--row -->



                                

            </div><!-- contentpanel -->

            

        </div>

      </div>

    </div>

</body>

</html>

