
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

      <div class="content-wrapper container">
                   <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-calculator"></i></li>
                            <li>Set Remarks</li>
                        </ul>
                        <h4>Set Remarks</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="" method="post" action="/exams/updateremarks">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Set Remarks</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">     
                                    <?php
                                    
                                    foreach ($data as $value) {
                                        echo 
                                            '<div class="form-group row">
                                                <label class="col-sm-3 control-label">A<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="1" value="">
                                                    <input type="text" name="1" class="form-control grademarks" value="' . $value->a . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">A-<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="2" class="form-control grademarks" value="' . $value->aminus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">B+<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="3" class="form-control grademarks" value="' . $value->bplus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">B<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="4" class="form-control grademarks" value="' . $value->b . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">B-<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="5" class="form-control grademarks" value="' . $value->bminus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">C+<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="6" class="form-control grademarks" value="' . $value->cplus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">C<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="7 class="form-control grademarks" value="' . $value->c . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">C-<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="8" class="form-control grademarks" value="' . $value->cminus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">D+<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="9" class="form-control grademarks" value="' . $value->dplus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">D<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="10" class="form-control grademarks" value="' . $value->d . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">D-<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="11" class="form-control grademarks" value="' . $value->dminus . '">
                                                </div>
                                            </div><!-- form-group --><div class="form-group row">
                                                <label class="col-sm-3 control-label">E<br> </label>
                                                <div class="col-sm-9">
                                                <input type="hidden" name="subid[]" value="">
                                                    <input type="text" name="12" class="form-control grademarks" value="' . $value->e . '">
                                                </div>
                                            </div>' ; }?>
                                            <!-- form-group -->                                                

                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="setgradescomm"></div>
                                    <button class="btn btn-primary mr5" id="btnsetgrades">Update Remarks</button>
                                    <button type="reset" class="btn btn-dark">Clear</button>
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div></form><!-- panel -->
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->

            </div><!-- contentpanel -->
            
        </div>
      </div>
    </div>
</body>
</html>
