
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
                                    <li>Manage Exams</li>
                                </ul>
                                <h4>Manage Exams</h4>
                                <p></p>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row">
                           
<div class="btn-group">
								   <a href="/exams/createexam" class="btn btn-primary">
                                    Add New Exam <i class="fa fa-plus"></i>
                                </a>
                                   
                                </div>
                            <!--edit school-->
                            <div class="col-md-11">
                               <p></p><div class="col-md-11">

                                                <table class="table table-responsive table-primary" align="center">
                                                    <thead>
                                                      <tr>
                                                        <th>No</th>
                                                        <th>Class</th>
                                                        <th>Exam Name</th>
                                                        <th>Exam Mode</th>
                                                        <th>Term</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>

                                                  <?php
                                                  
                                                  foreach ($exams as $exam) {
                                                  echo  
                                              '<tr>
                                            <td>' . $exam->Examid . '</td>
                                            <td>' . $exam->classes . '</td>
                                            <td>' . $exam->name . '</td>
                                            <td>' . $exam->mode . '</td>
                                            <td>' . $exam->term . '</td>
                                            <td>' . $exam->status . '</td>
                                            
                                         
                                          
                                            <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                               
								
								<li><a href="/exams/editexam/' . $exam->Examid . '">Edit</a></li>
								 <li><a href="/exams/deleteexam/' . $exam->Examid . '">Delete </a></li>
								 <li><a href="/exams/closeexam/' . $exam->Examid . '">Close Exam </a></li>	
                            </ul>
                        </div></td>         
                                          </tr>';

                                                  }

                                          ?>
                                          </tbody>
                                                </table>
                                        </div>                                      
                            </div><!-- panel -->
                                
                                
                        </div><!-- col-md-6 --> 

                    </div><!--row -->
                     </div>
      </div>
    </div>
</body>
</html>
