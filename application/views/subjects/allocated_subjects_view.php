



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

                                    <li>Subject Allocation</li>

                                </ul>

                                <h4>Subject Allocated To <?php 

                                foreach ($details as $detail) {

                                    echo $detail->Name;

                                }

                                 

                                ?>   </h4>

                                <p></p>

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row">

                           



                            <!--edit school-->

                            <div class="col-md-15">

                               <p></p><div class="col-md-15">

                                            <div class="table-responsive">

                                              <br><br>

                                    

                                                <table class="table table-primary mb30" align="center">

                                                    <thead>

                                                      <tr>

                                                        <th>No</th>

                                                        <th>Subject Name</th>

                                                        <th>Subject Category</th>

                                                        

                                                      </tr>

                                                    </thead>

                                                     <tbody>

                                                         <?php

                                                         foreach($allacatedsubjects as $allocatedsubject){



                                                          echo

                                                        '<tr>

                                                          <th>' . $allocatedsubject->id . '</th>

                                                          <th>' . $allocatedsubject->subject . '</th>

                                                          <th>' . $allocatedsubject->subjectcategoryid . '</th>  

                                                         </tr>';

                                                        }

                                                         

                                                         ?>

                                                     </tbody>

                                                    <tbody></tbody>

                                                </table>

                                            </div><!-- table-responsive -->

                                        </div><p style="color:green;font-weight:bold;text-align:center;">Student has not been allocated subject.</p>                                      

                            </div><!-- panel -->

                                

                                

                        </div><!-- col-md-6 --> 



                    </div><!--row -->   

                </div>

      </div> 

    </div>



</body>



</html>



