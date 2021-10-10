
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
                        <i class="fa fa-certificate"></i>
                    </div>
                    <div class="media-body">
                    <p></p>
                      
                        <h4>Add Marks</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form action="<?php echo base_url();?>//exams/addstudentmarkspersubjectloadstudents" method="post">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Select Exam And Class  </h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                  <div class="form-group row">
                                        <label class="col-sm-3 control-label">Class</label>
                                        
                                        <div class="col-sm-9">
                                        
                                        <select name="class" class="form-control" required="">

                                            <option selected>SELECT CLASS</option>

                                           <?php

                                            $classptions = '' ;
                                             foreach ($classes as $class) {

                                              $classoptions .= '<option value="' . $class->classesID . '">' . $class->classes . '</option>';

                                              

                                             }

                                             echo $classoptions;

                                             
                                             ?>

                                        </select>
                                          </div>
                                        </div><!-- form-group -->

                                        <div class="form-group row">
                                        <label class="col-sm-3 control-label">Stream</label>
                                        
                                        <div class="col-sm-9">
                                        
                                        <select name="stream" class="form-control" required="">

                                            <option selected>Select Stream</option>

                                           <?php 

                                            $streamoptions = '' ;

                                             foreach ($streams as $stream) {

                                              $streamoptions .= '<option value="' . $stream->Streamid . '">' . $stream->stream . '</option>';

                                              
                                             }

                                             echo $streamoptions; 

                                             
                                             ?>

                                        </select>
                                          </div>
                                        </div><!--form-group -->

                                        <div class="form-group row">
                                        <label class="col-sm-3 control-label">Exam</label>
                                        
                                        <div class="col-sm-9">
                                        
                                        <select name="exam" class="form-control"  required="">

                                            <option selected>Select Exam</option>

                                           <?php

                                            $examoptions = '';

                                             foreach ($exams as $exam) {

                                              $examoptions .= '<option value="' . $exam->Examid . '">' . $exam->classes . ' ' . $exam->term . ' ' . $exam->name . '</option>';

                                              

                                             }

                                             echo $examoptions;

                                             
                                             ?>

                                        </select>
                                          </div>
                                        </div><!-- form-group -->

                                        <div class="form-group row">
                                        <label class="col-sm-3 control-label">Subject</label>
                                        
                                        <div class="col-sm-9">
                                        
                                        <select name="subject" class="form-control" required="">

                                            <option selected>SELECT  Subject</option>

                                           <?php 

                                         $subjectoptions = '';

                                             foreach ($subjects as $subject) {

                                              $subjectoptions .= '<option value="' . $subject->id . '">' . $subject->subject . '</option>';

                                              
                                              
                                             }

                                             echo $subjectoptions;
                                             
                                             ?>

                                        </select>
                                          </div>
                                        </div> <!--form-group -->
                                            
                                        </div>

                                       

                                      

                                          
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                              <div id="addmrkscomm" style="text-align:center"></div>
                                <div class="col-sm-9 col-sm-offset-3">
                                    
                                    <button  class="btn btn-primary mr5" id="btnaddmarks">Load Students </button>
                                    
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div><!-- panel -->
                        </form>
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->

            </div>
    </div>
      </div>
    </div>
</body>
</html>
