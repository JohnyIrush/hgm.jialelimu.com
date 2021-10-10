



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

                                <i class="fa fa-plus-square"></i>

                            </div>

                            <div class="media-body">

                                <ul class="breadcrumb">

                                    <li><i class="fa fa-plus-square"></i></li>

                                    <li>Enrollment By Gender</li>

                                </ul>

                                <h4>Enrollment By Gender</h4>

                                

                                	

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel container">

                        

                        <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">

                           <div class="panel-heading">

                                        
                                    </div><!-- panel-heading -->



                            <!--edit school-->

                            <div class="col-md-11">

                            <table class=" table table-responsive table-primary mb30" align="center">

                              <thead>

                                <tr>

                                  <th>Class</th>

                                  <th>Female</th>  
                                  
                                  <th>Male</th>
                                    

                                </tr>                                 

                              </thead>                                                              

                              <tbody>
 
                              <?php

                          foreach ($genders as $gender) {
                               echo
                               '<tr><td>'. $gender['section'] .'</td>  

                                 <td>'. $gender['female'] .'</td>   

                                 <td>'. $gender['male'] .'</td> 

                               </tr>
                               '; }?>

                              </tbody>

			                </table>

					

                               

                                    

                                </div><!-- panel -->

                                

                                

                                

                            </div><!-- col-md-6 -->





                        </div><!--row --> 

                    </div>



      </div>



    </div>



</body>



</html>



