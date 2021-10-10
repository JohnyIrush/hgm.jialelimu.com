

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

                   <section class="panel">

                      <div class="pageheader">

                       <div class="media">

                          <div class="pageicon pull-left">
  
                            <i class="fa fa-pencil-square"></i>
  
                          </div>

                          <div class="media-body">
                              <h4>Term Configuration</h4>
          
                          </div>

                        </div><!-- media -->

                      </div><!-- pageheader -->
                     </section>
        

        <div class="contentpanel">
            <div class="row">
                  <div class="col-md-12">

                        <div class="clearfix">
                          <div class="btn-group">
      
                           <a href="#myModal" data-toggle="modal" class="btn btn-primary">
      
                               
      
                              Add New Term <i class="fa fa-plus"></i>
      
                          </a>
                          </div>

                          <div class="btn-group pull-right">
      
                              <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
      
                              </button>
      
                              <ul class="dropdown-menu pull-right">
      
                                 <li><a href="#">Save as PDF</a></li>
      
                                  <li><a href="#">Export to Excel</a></li>
      
                                  <li><a href="#">Import From Excel</a></li>
      
                              </ul>
      
                          </div>

                          </div>

            
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>

                            <h4 class="modal-title">Add Term</h4>

                        </div>

                        <div class="modal-body">

                            <form action="/term/addterm" method="post" class="form-horizontal ">

                              <div class="form-group">

                                <label class="control-label col-md-4">Year:</label>

                                <div class="col-md-6 col-xs-11">

                                

                                   <input type="number" required="" name="year" size="16" placeholder="eg 2017" class="form-control">

                                   

                                </div>

                            </div>

                              

                            <div class="form-group">

                                <label class="control-label col-md-4">Term:</label>

                                <div class="col-md-6 col-xs-11">

                                   <select required="" name="term" id="term" class="form-control">

                                    <option value="">Select Term</option>

                    

                                            <option value="Term One">Term One</option>
  
                                             <option value="Term Two">Term Two</option>
  
                                              <option value="Term Three">Term Three</option>



                                    

                               </select>

                                   

                                </div>

                            </div>

                             

                           



                              <div class="form-group">

                                <label class="control-label col-md-4">From:</label>

                                <div class="col-md-6 col-xs-11">



                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">

                                        <input type="text" required="" name="from" readonly="" value="2021-09-03" size="16" class="form-control">

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

                                        <input type="text" required="" name="to" readonly="" value="2021-09-03" size="16" class="form-control">

                                              <span class="input-group-btn add-on">

                                                <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>

                                              </span>

                                    </div>

                                  

                                </div>

                            </div>


                             <button type="submit" name="member" class="btn btn-default">Add Term</button>

                            

                          

                            </form>

                             

                            

                                                                   

                        </div>

                    </div>

                </div>

            </div>

            

                                
                                  <div class="col-md-11">
                                    <table class="display table-responsive table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">

                                        <thead>

                                          <tr role="row">
                                              <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Term Name: activate to sort column ascending" >Term Name</th>
                                              <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" >From</th>
                                              <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="To: activate to sort column ascending" >To</th>
                                              <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Year: activate to sort column ascending" >Year</th>
                                              <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" >Edit</th></tr>

                                        </thead>

                                        

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                                        <?php 

                                        foreach ($data as $value) {
                                       echo 
                                    '<tr class="odd">

                                <td class=" "> ' . $value->term . ' </td>


                                <td class=" "> ' . $value->from . ' </td>

                              

                                <td class="  sorting_1"> ' . $value->to . ' </td>


                                 <td class=" ">' . $value->year . '</td>
                                 <td>
                                    <a role="button" class="btn btn-primary" href="/term/editterm/' . $value->id . ' "> <i class="fa fa-edit"></i> <span>Edit</span> </a> 
                                 </td>
                                    </tr>';
                                    
                                    } ?>

                            </tbody></table> </div>

                    

                            </div>                                      

                </div><!-- panel -->

                    

                    

            </div><!-- col-md-6 --> 



        </div><!--row -->

    



    </div>

      </div>

    </div>

</body>

</html>

