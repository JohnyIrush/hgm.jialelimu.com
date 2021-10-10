



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

                      <i class="fa fa-paperclip"></i>

                  </div>

                  <div class="media-body">

                      <ul class="breadcrumb">

                          <li><i class="fa fa-paperclip"></i></li>

                          <li>Allocate Subject</li>

                      </ul>

                      <h4>Allocate Subject</h4>

                  </div>

              </div><!-- media -->

          </div><!-- pageheader -->



                    

                    <div class="contentpanel">

                        

                        <div class="row">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-9">

                                                            

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <div class="panel-btns" style="display: none;">

                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                        </div><!-- panel-btns -->

                                        <h4 class="panel-title">Allocate Subject</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">

										

				                        <table class="display" id="example" border="0" cellpadding="0" cellspacing="0" width="100%">

                                          <thead>



						                    <tr>

                                            <td>Profile Photo</td>

						                     <td> Name</td>

						                     <td>Admission No</td>

						                     <td>Class</td>

						                     <td>Stream</td>

						                  

						                    </tr>

                                           </thead>

						 

                                           <tbody>

                                           <?php

                                               foreach($student as $detail){

                                             echo

                                              '<tr>

                                              <td><img src="' . $data->photo . '" alt="" srcset=""></td>

                                               <td>' . $detail->name . '</td>

                                               <td>' . $detail->AdmNo . '</td>

                                               <td>' . $detail->Classid . '</td>

                                               <td>' . $detail->Streamid . '</td>

                                              </tr>'; }

                                              

                                              ?>

                                            </tbody>

                                        </table>

						

                                    </div><!-- panel-body -->

                                    

                                    

                                    

                                                                        

                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <div id="edtschcomm"></div>

                                        </div>

                                      </div>

                                    </div><!-- panel-footer -->  

                                </div><!-- panel -->

                                

                                

                            </div><!-- col-md-6 -->





                        </div><!--row -->

      

                        </div><!-- contentpanel -->

                    

                    

                    <div class="contentpanel">

                        

                        <div class="row" style="background:url('images/back.png');">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-6">
                                <?php
                            foreach($student as $detail){

                                echo '<form id="sub" method="post" action="/subjects/allocateselectedsubject/'. $detail->id .'">';
                                echo '<input type="hidden" name="studentid" value="'. $detail->id .'">';
                            }
                            ?>

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">Allocate Subject</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">

                                       

																

                                                                     <div id="result">

                                                                         

                                                                         

                                    <?php

                                    

                                    foreach($subjects as $subject){

                                    

                                    echo



									 	'<div class="form-group">

                                         <label class="col-sm-3 control-label"></label>

                                         <div class="col-sm-9">

                                             <div class="pull-left">

                                                 <div class="ckbox ckbox-primary mt10 checkclass">

                                                     <input type="checkbox" value="' .$subject->id. '" name="' . $subject->id . '" id="9" class="checkclass">

                                                     <label for="9">' . $subject->subject . '</label>

                                                 </div>

                                             </div>

                                         </div>

                                     </div>';

                                     
                                         
                                     }

                                     ?>

																



												  <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <div id="edtschcomm"></div>

                                            <button class="btn btn-primary mr5" >Allocate Subjects</button>

                                           

                                        </div>

                                      </div>

												

																	

						

				



				

                                                    

                                                        

                                        </div>

																

																

										

											

                                              											  



                                            



                                        </div><!-- row -->

                                    </div><!-- panel-body -->

                                    

                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <div id="edtschcomm"></div>

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



