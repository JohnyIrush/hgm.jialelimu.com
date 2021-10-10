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
                    
                    <div class="contentpanel">

                      <div class="row">
                      <div class="container">
	                  	<div class="main-body">
	                  		<div class="row">
	                  			<div class="col-lg-4">
	                  				<div class="card">
	                  					<div class="card-body">
	                  						<div class="d-flex flex-column align-items-center text-center">
	                  							<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                                  <?php

                                                  foreach ($students as $studentdetail) {

                                                  echo
	                  							'<div class="mt-3">
	                  								<h4>' . $studentdetail->Name . '</h4>
	                  								<p class="text-secondary mb-1">' . $studentdetails->section . '</p>
	                  								<button class="btn btn-primary">View Details</button>
	                  							</div>
	                  						</div>
	                  						<hr class="my-4">

	                  						<ul class="list-group list-group-flush">'; 

                                              foreach ($examdetails as $examdetail) {
    
                                                 echo
	                  							'<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                  								<h6 class="mb-0"> Exam Name  </h6>
	                  								<span class="text-secondary">'. $examdetail->name .'</span>
	                  							</li>

                                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                  <h6 class="mb-0"> Term  </h6>
                                                  <span class="text-secondary">' .$examdetail->term .'</span>
                                              </li>

                                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                              <h6 class="mb-0"> Exam Year  </h6>
                                              <span class="text-secondary">' .$examdetail->year .'</span>
                                          </li>

                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                          <h6 class="mb-0"> Exam Mode  </h6>
                                          <span class="text-secondary">'. $examdetail->mode .'</span>
                                      </li>'; }

                                      echo
	                  						

	                  					'</div>
	                  				</div>
	                  			</div>
	                  			<div class="col-lg-8">
	                  				<div class="card">
	                  					<div class="card-body">
	                  						<div class="row mb-3">
	                  							<div class="col-sm-3">
	                  								<h6 class="mb-0">Admission Number</h6>
	                  							</div>
	                  							<div class="col-sm-9 text-secondary">
	                  								<h3>' . $studentdetail->AdmNo . '</h3>
	                  							</div>
	                  						</div>
	                  						<div class="row mb-3">
	                  							<div class="col-sm-3">
	                  								<h6 class="mb-0">Gender</h6>
	                  							</div>
	                  							<div class="col-sm-9 text-secondary">
                                                  <h3>' . $studentdetail->Gender . '</h3>
	                  							</div>
	                  						</div>
	                  					</div>
	                  				</div>
	                  				<div class="row">
	                  					<div class="col-sm-12">
	                  						<div class="card">
	                  							<div class="card-body">';} ?>

          <div class="mainpanel">
            <div class="contentpanel">
                
                <div class="row">
                   <div class="col-md-3">
                      
                   </div>

                    <!--edit school-->
                            <?php

                        echo 
                        '<div class="card col-md-8 card-body">



               <form action="/exams/createmarks/' . $studentdetail->id . '" method="post">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h4 class="panel-title">Marks For ' . $studentdetail->Name . '</h4>
                   </div><!-- panel-heading -->
                   <div class="panel-body">
                       <div class="row">
                           <div id="addstdcomm" style="text-align:center;"></div> <div class="form-group row ">';



                           foreach ($subjects as $subject){
                               

                               foreach ($studentmarks as $studentmark) {

                                $subjectmarks =
                                '<div class="col-md-4">
                                   <label class="col-sm-4 control-label">' . $subject->subject . '<span class="asterisk">*</span></label>
                                   <div class="col-sm-8">
                                      <input type="hidden" name="exammode" value="' . $examdetail->mode . '">
                                       <input type="text" name="'. $subject->id .'" class="form-control" id="gradename" value="'. $studentmark[$subject->subject] .'">
                                   </div>
                               </div><!-- form-group -->';

                               //print_r($studentmark[$subject->subject]);
                                   # code...
                               }

                               echo $subjectmarks;
                       }
                       echo '</div>';
                   


             echo  ' 
             </div><!-- row -->
             </div><!-- panel-body -->
             
             <div class="panel-footer">
               <div class="row">
                 <div class="col-sm-6 ">                                            
                     <button class="btn btn-primary mr5" id="btnaddexam">Update Marks</button>
                 </div>
               </div>
             </div><!-- panel-footer -->  
         </div></form><!-- panel -->

             </div>';


                                                   ?>
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->

            </div>
                    </div>
	                  							</div>
	                  						</div>
	                  					</div>
	                  				</div>
	                  			</div>
	                  		</div>
	                  	</div>
                                                    </div>
                    </div>

                      </div>
                      <!--Student profile marks-->
      
                                         
                    </div><!-- contentpanel -->
                    
                </div>

      </div>
    </div>
</body>
</html>
