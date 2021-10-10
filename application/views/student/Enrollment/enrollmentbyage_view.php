

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

                        <i class="fa fa-plus-square"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-plus-square"></i></li>

                            <li>Enrollment By Age</li>

                        </ul>

                        

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">

                   <div class="col-md-3">

                   </div>

                   <div class="panel-heading">

                                <div class="panel-btns" style="display: none;">

                                 

                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>

                                 

                                </div>

                                

                                <!-- panel-btns -->

                            

                                <h4 class="panel-title">Enrollment By Age <a target="_blank" href="pdf/reportbyage.php"> <span style="float:right; margin-right: 30px;"> <img src="images/icon/icon.png" width="25"></span></a> </h4> 

                                

                            </div><!-- panel-heading -->

                    <!--edit school-->

                    

                    <div class="container">

                        <div class="col-md-12">

                    

                         

                  

                    

                <table class="table-striped table table-primary mb30" align="center">
                   <thead>
                    <tr>
                     <th>Age</th>
                     <th>Class</th>
                     <th>No. of Boys</th>
                     <th>No. of Girls</th>   
                    </tr>                                 
                  </thead>                                      
                  <tbody>
                      <?php

                      foreach ($ages as $age) {
                          echo

                   '<tr>
                     <td>' . $age->agelimit . ' Years</td>
                     <td>' . $age->class . '</td>
                      <td>' . $age->female . '</td>
                      <td>' . $age->male . '</td>      
                   </tr>';
                      }?>

                  </tbody>
                </table>

            

                       

                            

                        </div><!-- panel -->

                    </div>

                    

                        

                        

                        

                    </div><!-- col-md-6 -->





                </div><!--row -->   

            </div> 

      </div>

    </div>

</body>

</html>

