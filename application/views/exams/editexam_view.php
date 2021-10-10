
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
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-pencil-square-o"></i></li>
                            <li>Edit Exams</li>
                        </ul>
                        <h4>Edit Exams</h4>
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

                        foreach ($exams as $exam) {

                         echo
                        '<form action="/exams/updateexam/' . $exam->Examid . '" method="post">';

                        }?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add New Exam</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                            <div id="addstdcomm" style="text-align:center;"></div>
                            <div class="form-group row">
                                    <label class="col-sm-3 control-label">Term: <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                            
                                        <select id="fruitss" name="termid" data-placeholder="Choose Term" class="form-control width100p select2-offscreen" required="" tabindex="-1" title="">
                                             
                                             <option selected>Select Term</option>

                                          <?php

                                            $options = '';

                                           foreach ($terms as $term) {
                                               
                                             $options .= '<option value="'. $term->id .'">'.$term->term . ' ' . $term->year  .'</option>';

                                           }
                                           echo $options;
                                           ?>
                                            
                                                        
                                        </select>



                                            <!--<input readonly="readonly" type="text" name="term" class="form-control" id="fruitss" placeholder="e.g. Magazines" required="required" maxlength="50" value=""/>-->
                                        </div>
                                    </div><!-- form-group -->
                                <div class="row">
                                    
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Exam Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <?php

                                          foreach ($exams as $exam) {

                                            echo '<input type="text" value="'. $exam->name .'" name="examname" class="form-control" id="examname"  required="required">';
                                          }

                                          ?>

                                        
                                    </div>
                                </div><!-- form-group -->



                                        <div class="form-group row">
                                        <label class="col-sm-3 control-label">Status <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                              <option value="1">Open </option>
                                              <option value="2">Closed</option>
                                                                          
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                            
                                      
                                        </div><!-- form-group -->
                                        
                                        
                                        <div class="form-group row">
                                         <label class="col-sm-3 control-label">Class: <span class="asterisk">*</span></label>
                                         <div class="col-sm-9">
                                            
                                        <select  name="classid" data-placeholder="Choose Term" class="form-control" required="" tabindex="-1" title="">
                                            
                                        <option value="0">All Classes </option>

                                          <?php

                                            $options = '';

                                           foreach ($classes as $class) {
                                               
                                             $options .= '<option value="'. $class->classesID .'">'.$class->classes .'</option>';

                                           }
                                           echo $options;
                                           ?>
                                            
                                                        
                                        </select>
                                        </div>
                                    </div><!-- form-group -->


                                    <div class="form-group row">
                                         <label class="col-sm-3 control-label">Exam Mode: <span class="asterisk">*</span></label>
                                         <div class="col-sm-9">
                                            
                                        <select  name="exammodeid" data-placeholder="Choose Term" class="form-control" required="" tabindex="-1" title="">
                                            
                                        <option selected>Select Exam Mode </option>

                                          <?php

                                            $options = '';

                                           foreach ($exammodes as $exammode) {
                                               
                                             $options .= '<option value="'. $exammode->id .'">'.$exammode->mode .'</option>';

                                           }
                                           echo $options;
                                           ?>
                                            
                                                        
                                        </select>
                                        </div>
                                    </div><!-- form-group -->
                                        
                                    </div><!-- row -->
                                        
                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddexam">Add Exam</button>
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
