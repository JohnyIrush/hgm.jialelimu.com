

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

                        <i class="fa fa-pencil-square"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-pencil-square"></i></li>

                            <li>Edit Term Configuration</li>

                        </ul>

                        <h4>Edit Term Configuration</h4>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row">

                   

     <div class="clearfix">

                        <!--<div class="btn-group">

                           <a href="addsubjects.php"  class="btn btn-primary">

                            Add New Subject <i class="fa fa-plus"></i>

                        </a>

                           

                        </div>-->

                        

                    </div>

                    <!--edit school-->

                    <div class="col-md-15">



                      



                            <div class="col-md-15">

                         

                    

                    <div>

                                            <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                               

                                <h4 class="modal-title">Edit Term Configurations</h4>

                            </div>

                            <div class="modal-body">
                            <?php 
                                    foreach ($data as $value) {
                                    echo 

                                '<form action="/term/updateterm/' . $value->id . '" method="post" class="form-horizontal ">

                                  <div class="form-group">

                                  <label class="control-label col-md-4">Year:</label>
  
                                  <div class="col-md-6 col-xs-11">
  
                                  
  
                                     <input type="number" required="" value="' . $value->year . ' " name="year" size="16" placeholder="eg 2017" class="form-control">
  
                                     
  
                                  </div>
  
                              </div>
  
                                
  
                              <div class="form-group">
  
                                  <label class="control-label col-md-4">Term:</label>
  
                                  <div class="col-md-6 col-xs-11">
  
                                     <select required="" value="' . $value->term . '" name="term" id="term" class="form-control">
  
                    
                                            <option value="Term One">Term One</option>
  
                                             <option value="Term Two">Term Two</option>
  
                                              <option value="Term Three">Term Three</option>
  
  
  
                                      
  
                                 </select>
  
                                     
  
                                  </div>
  
                              </div>
  
                                  
                                  
                                  
                                  <div class="form-group">
                                   <input type="hidden" name="id" value="' . $value->id . '">
                                     
                                    <label class="control-label col-md-4">From:</label>

                                    <div class="col-md-6 col-xs-11">



                                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">

                                            <input type="text" required="" name="from" readonly="" value="' . $value->from . '" size="16" class="form-control">

                                                  <span class="input-group-btn add-on">

                                                    <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>

                                                  </span>

                                        </div>

                                      

                                    </div>

                                </div>

                                  <div class="form-group">

                                    <label class="control-label col-md-4">To:</label>

                                    <div class="col-md-6 col-xs-11">



                                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">

                                            <input type="text" required="" name="to" readonly="" value="' . $value->to . '" size="16" class="form-control">

                                                  <span class="input-group-btn add-on">

                                                    <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>

                                                  </span>

                                        </div>

                                      

                                    </div>

                                </div>

                                 <button type="submit" name="member" class="btn btn-default">Edit Term</button>

                                

                              

                                </form>';
                                
                            }?>

                           

                                 

                                

                           

                               

                            </div>

                        </div>

                    </div>

                    

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

