
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
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><i class="fa fa-pencil-square-o"></i></li>
                                    <li>Edit Student</li>
                                </ul>
                                <h4>Edit Student</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">
                           <div class="col-md-3">
                           </div>

                            <!--edit school-->
                            <div class="col-md-6">
                              <form action="" method="post" class="form-horizontal " enctype="multipart/form-data">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Change Student Profile</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label sec-bg-color"> Choose Image <span class="asterisk">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="file" class="form-control sec-bg-color" id="fname" placeholder="e.g. Komba" maxlength="50">
                                                </div>
                                            </div><!-- form-group -->

                                            

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    
                                    <div class="panel-footer">
                                        <div id="addstdcomm" style="text-align:center"></div>
                                      <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">                                            
                                            <button name="member" class="btn btn-primary mr5" id="btnaddstaff">Change Profile Image</button>
                                        </div>
                                      </div>
                                    </div><!-- panel-footer -->  
                                </div></form><!-- panel -->
                                                                
                            </div><!-- col-md-6 -->


                        </div><!--row --> 
                    </div><!-- contentpanel -->
                </div>
          
          <!--end-->
      </div>
    </div>
</body>
</html>
