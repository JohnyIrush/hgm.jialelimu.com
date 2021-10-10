

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

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

        body {
    background-color: #eee
}

.form-control:focus {
    color: #495057;
    background-color: rgba(207, 0, 15, 1);
    border-color: rgba(207, 0, 15, 1);
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25) !important
}

.btn-secondary:focus {
    box-shadow: 0 0 0 0rem rgba(207, 0, 15, 1) !important
}

.close:focus {
    box-shadow: 0 0 0 0rem rgba(207, 0, 15, 1) !important
}

.mt-200 {
    margin-top: 200px
}

.mt-100{
    margin-top: 100px
}
}
    </style>

    

    <div class="row"> 



      <div class="content-wrapper container">

      <div class="mainpanel">

    <div class="row d-flex justify-content-center mt-100"> 
                    <div class="col-md-11 panel">
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1">Step 1<br /><small>Principal Remarks</small></a></li>
                            <li><a href="#step-2">Step 2<br /><small>Teachers Remarks</small></a></li>
                            <li><a href="#step-3">Step 3<br /><small>English Remarks</small></a></li>
                            <li><a href="#step-4">Step 4<br /><small>Swahili Remarks</small></a></li>
                        </ul>
                        <div class="mt-4">
                            <div id="step-1">

                                <div class="row form-group mb-100">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Set Remarks</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">  
                                            <?php
                                             
                                             foreach ($remarks as $remark) {
                                              echo 
                                        '<form action="/exams/updateremarks" method="post">
                                        <div class="form-group row">
                                             <label class="col-sm-3 control-label">'. $remark->name .'<br> </label>
                                             <div class="col-sm-9">
                                             <input type="hidden" name="" value="">
                                                 <input type="text" name="'. $remark->id .'" class="form-control grademarks" value="'. $remark->HeadTeacherremarks .'">
                                             </div>
                                         </div><!-- form-group -->';
                                             }
                                         ?>
                                                                                         

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    
                                </div>
                                </div>

                            </div>

                            <div id="step-2">
                            <div class="row form-group mb-200">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Set Remarks</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">  
                                        <?php
                                             
                                             foreach ($remarks as $remark) {
                                              echo 
                                        '
                                        <div class="form-group row">
                                             <label class="col-sm-3 control-label">'. $remark->name .'<br> </label>
                                             <div class="col-sm-9">
                                             <input type="hidden" name="" value="">
                                                 <input type="text" name="'. $remark->id .'" class="form-control grademarks" value="'. $remark->HeadTeacherremarks .'">
                                                 <input type="hidden" name="Gradeid" value="'. $remark->Gradeid .'">
                                             </div>
                                         </div><!-- form-group -->';
                                             }
                                         ?>
                                                                                       

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
                                </div>
                                </div>
                            </div>
                            <div id="step-3" class="">
                            <div class="row form-group mb-200">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Set Remarks</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">  
                                        <?php
                                             
                                             foreach ($remarks as $remark) {
                                              echo 
                                        '
                                        <div class="form-group row">
                                             <label class="col-sm-3 control-label">'. $remark->name .'<br> </label>
                                             <div class="col-sm-9">
                                             <input type="hidden" name="" value="">
                                                 <input type="text" name="'. $remark->id .'" class="form-control grademarks" value="'. $remark->HeadTeacherremarks .'">
                                             </div>
                                         </div><!-- form-group -->';
                                             }
                                         ?>
                                                                                          

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
                                </div>
                                </div>
                            </div>
                            <div id="step-4" class="">
                            <div class="row form-group mb-200">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Set Remarks</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">  
                                        <?php
                                             
                                             foreach ($remarks as $remark) {
                                              echo 
                                        '
                                        <div class="form-group row">
                                             <label class="col-sm-3 control-label">'. $remark->name .'<br> </label>
                                             <div class="col-sm-9">
                                             <input type="hidden" name="" value="">
                                                 <input type="text" name="'. $remark->id .'" class="form-control grademarks" value="'. $remark->HeadTeacherremarks .'">
                                             </div>
                                         </div><!-- form-group -->';
                                             }
                                         ?>
                                                                                         

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
                                            </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>


      </div>
</div>
</div>
    </div>
</div>
    <script>
        $(document).ready(function(){

$('#smartwizard').smartWizard({
selected: 0,
theme: 'arrows',
//autoAdjustHeight:true,
transitionEffect:'fade',
showStepURLhash: false,

});

});
    </script>

</body>

</html>

