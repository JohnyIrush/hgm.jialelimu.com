

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

                            <li>Manage Grades</li>

                        </ul>

                        <h4>Manage Grades</h4>

                        <p></p>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row">

                <div class="btn-group">

                           <a href="/exams/addgrades" class="btn btn-primary">

                            Add New Grade <i class="fa fa-plus"></i>

                        </a>

                           

                        </div>

                        <p></p>

                    <div class="col-md-3">

                    

                    </div>



                    <!--edit school-->

                    <div class="col-md-6">

                       <p></p><div class="col-md-15">

                                    <div class="table-responsive">

                                        <table class="table table-primary mb30" align="center">

                                            <thead>

                                              <tr>

                                                <th>No</th>

                                                <th>Grade Name</th>

                                                <th>Grade Points</th>

                                                <th>Markss</th>

                                                <th>Edit</th>

                                                <th>Delete</th>

                                              </tr>

                                            </thead>

                                            <tbody>

                                            <?php

                                            foreach ($grades as $grade) {

                                                echo

                                               '<tr>
           
                                               <td>' . $grade->id . '</td>
           
                                               <td>' . $grade->name . '</td>
           
                                               <td>' . $grade->points . '</td>

                                               <td>' . $grade->marks . '</td>
           
                                               <td>                                           
           
                                                   <div><a href="/exams/editgrade/' . $grade->id . '"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
           
                                               </td> 
           
                                               <td>                                              
           
                                                   <div><a href="/exams/deletegrade/' . $grade->id . '"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
           
                                               </td>          
           
                                             </tr>';
                                            }

                                             ?>
                                           </tbody>

                                        </table>

                                    </div><!-- table-responsive -->

                                </div>                                      

                    </div><!-- panel -->

                        

                        

                </div><!-- col-md-6 --> 



            </div><!--row -->     



        </div>

      </div>

    </div>

</body>

</html>

