



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

                                <i class="fa fa-sun-o"></i>

                            </div>

                            <div class="media-body">

                                <ul class="breadcrumb">

                                    <li><i class="fa fa-sun-o"></i></li>

                                    <li>Set Mean Grades</li>

                                </ul>

                                <h4>Set Mean Grades (These will be used to determine the student's mean grade)</h4>

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row" style="background:url('images/back.png');">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-6">




                                <form action="/exams/setmeangrademarks" method="post">

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <div class="panel-btns" style="display: none;">

                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                        </div><!-- panel-btns -->

                                        <h4 class="panel-title">Set Mean Grades</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">                                            

                                                <div class="form-group row">                                                

                                                <label class="col-sm-3 control-label">Class</label>

                                                <div class="col-sm-9">

                                                    <select name="classid" value="' . $value->Classid  . '" class="form-control">

                                                        <option value="0">All Classes</option>

                                                        <?php



                                                        foreach ($classes as $class) {



                                                            $options .= '<option value="' . $class->id. '">'. $class->class . ' </option>'; 

                                                            echo $options; }

                                                    echo

                                                 '</select>

                                                  </div>

                                                </div><!-- form-group -->
                                                       
                                                

                                                <hr><!-- form-group -->

                                                <div class="form-group row">                                                

                                                <label class="col-sm-3 control-label">Exam</label>

                                                <div class="col-sm-9">

                                                    <select name="examid"  class="form-control">

                                                        <option value="0">Select Exam</option>';

                                            


                                                        foreach ($exams as $exam) {



                                                            $exams .= '<option value="' . $exam->id. '">'. $exam->name . ' </option>'; 

                                                            echo $exams; }

                                                    echo

                                                 '</select>

                                                  </div>

                                                </div><!-- form-group -->

                                             <div id="showrecord">';

                                             foreach ($grades as $grade) {

                                                echo
                                             '<div class="form-group row">

                                                <label class="col-sm-3 control-label">' . $grade->grade . ' Maximum Marks'  . '</label>

                                                  <div class="col-sm-9">

                                                    <input type="" value="' . $grade->maxmarks  . '" name="maxmarks' . $grade->id  . '" class="form-control grademarks" id="1-min"  maxlength="3">
                                                    <input type="hidden" value="' . $grade->id  . '" name="gradeid' .$grade->id . '" class="form-control grademarks" id="1-min"  maxlength="3">

                                                  </div>

                                              </div><!-- form-group -->

                                              <div class="form-group row">

                                              <label class="col-sm-3 control-label">' . $grade->grade . ' Minimum Marks'  . '</label>

                                                <div class="col-sm-9">

                                                  <input type="" value="' . $grade->minmarks  . '" name="minmarks' . $grade->id  . '" class="form-control grademarks" id="1-min"  maxlength="3">
                                                 

                                                </div>

                                            </div><!-- form-group -->';
                                              
                                            }
                                            ?>
                                             </div>

                                            



                                        </div><!-- row -->

                                    </div><!-- panel-body -->

                                    

                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <div id="setgradescomm"></div>

                                            <button class="btn btn-primary mr5" id="btnsetgrades">Set Grades</button>

                                            <button type="reset" class="btn btn-dark">Clear</button>

                                        </div>

                                      </div>

                                    </div><!-- panel-footer -->  

                                </div></form>



                                 

                                <!-- panel -->

                                

                                

                            </div><!-- col-md-6 -->





                        </div><!--row -->

    

                    </div><!-- contentpanel -->

                    

                </div>

      </div> 

    </div>



</body>



</html>



