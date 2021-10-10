

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
                                <i class="fa fa-list-ul"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><i class="fa fa-list-ul"></i></li>
                                    <li>Students Class List</li>
                                </ul>
                                <h4>Students Class List</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row">
                           

                            <!--edit school-->
                            <div class="col-md-12">
                               <div class="col-md-12">
                                    <div class="panel panel-default">
                                    
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                         
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                         
                                        </div>
                                        
                                        <!-- panel-btns -->
                                    
                                        <h4 class="panel-title">Student Class List For  Form 1 UNITY Students<a target="_blank" href="studentexcel.php?class=1&amp;streams=1"> <span style="float:right; margin-right: 30px;"> <img src="images/icon/icon_excel.png" width="25"></span></a> <a target="_blank" href="pdf/classlist.php?class=1&amp;streams=1"> <span style="float:right; margin-right: 30px;"> <img src="images/icon/icon.png" width="25"></span></a>  <a target="_blank" href="pdf/classlistcamera.php?class=1&amp;streams=1"> <span style="float:right; margin-right: 30px;"> <img src="images/icon/camera.png" width="25"></span></a> </h4> 
                                        
                                    </div><!-- panel-heading -->
                                     <div class="panel-body">
                                        <div class="row">
                                    
                                            <div class="table-responsive">
                                                <table class="table table-primary mb30" align="center">
                                                    <thead>
                                                      <tr>
                                                        <th>No</th>
                                                        <th>Student Name</th>
                                                        <th>Date of Birth</th>
                                                        <th>Gender</th>
                                                        <th>Admission Number</th>
                                                        <th>Current Class</th>
                                                        <th>Class of Admission</th>
                                                        <th>Entry Marks</th>
                                                        <th>Former Primary</th>
                                                        <th>Contact Person</th>
                                                        <th>Guardian/Parent</th>
                                                      </tr>
                                                    </thead>
                                           
                                                    <tbody>
                                           
                                                    <?php

                                                    foreach ($data as $value) {
                                                        echo
                                        '<tr>
                                            <td>' . $value->id . ' </td>
                                            <td>' . $value->Name . '</td>
                                            <td>' . $value->dob . '</td>
                                            <td>' . $value->Gender . '</td>  
                                            <td>' . $value->Classid . '</td>  
                                            <td>' . $value->AdnNo . '</td> 
                                            <td>' . $value->streamid . '</td> 
                                            <td>' . $value->EntryMarks . '</td>
                                            <td>' . $value->FormerSchool . '</td> 
                                            <td>' . $value->Parentid  . '</td> 
                                            <td>  ' .$value->Parentid  . ' </td>              
                                          </tr>'; } ?>
                                            </tbody>
                                                </table>
                                                </div><!-- table-responsive -->
                                                	
                                                </div><!-- table-responsive -->
                                            </div><!-- table-responsive -->
                                        </div>                                      
                            </div><!-- panel -->
                                
                                
                        </div><!-- col-md-6 --> 

                    </div><!--row -->
      
                                       </div><!-- contentpanel -->
                    
            </div>

      </div>

    </div>

</body>

</html>

