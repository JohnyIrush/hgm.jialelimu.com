

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

            <section class="panel">
                               <div class="media">

                    <div class="pageicon pull-left">

                        <i class="fa fa-pencil-square-o"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-pencil-square-o"></i></li>

                            <li>Edit Parents</li>

                        </ul>

                        <h4>Edit Parents</h4>

                        <p></p>

                    </div>

                </div><!-- media -->
            </section>

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row">

                   



                    <!--edit school-->

                  <div class="container">

                     <div class="col-md-12">

                     <div class="clearfix">

                        <div class="btn-group">

                         <a href="/student/addgurdian" class="btn btn-primary">

                            Add New Parent <i class="fa fa-plus"></i>

                        </a>

                           

                        </div>

                        <div class="btn-group pull-right">

                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>

                            </button>

                            <ul class="dropdown-menu pull-right">

                               <li><a target="_blank" href="pdf/parent.php">Save as PDF</a></li>

                                <li><a href="#">Export to Excel</a></li>

                                <li><a href="importParent.php">Import From Excel</a></li>

                            </ul>

                        </div>

                    </div>

                      

                            

                            <p></p>

                         <div class="col-md-11">

                                    <div class="table-responsive">

                                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">

                                            <thead>

                                              <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 17px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Parent Name: activate to sort column ascending" style="width: 151px;">Parent Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="ID/Passport Number: activate to sort column ascending" style="width: 124px;">ID/Passport Number</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 48px;">Gender</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Phone No: activate to sort column ascending" style="width: 88px;">Phone No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Other Contacts: activate to sort column ascending" style="width: 93px;">Other Contacts</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Occupation: activate to sort column ascending" style="width: 76px;">Occupation</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Physical Address: activate to sort column ascending" style="width: 105px;">Physical Address</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 45px;">Edit</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 61px;">Delete</th></tr>

                                            </thead>

                                            

                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                            <?php

                                            foreach ($parents as $value) {


                                            echo
                                            
                                    '<tr class="odd">

                                    <td class=" ">' . $value->id . '</td>

                                    <td class=" ">' . $value->name . '</td>

                                    <td class=" ">  ' . $value->idpassno . '</td>

                                    <td class=" ">' . $value->Gender . '</td>

                                    <td class="  sorting_1">' . $value->phone . '</td>

                                    <td class=" "></td>

                                    <td class=" ">' . $value->occupation . '</td>

                                    <td class=" ">' . $value->address . '</td>

                                    <td class=" ">                                           

                                        <div><a class="btn btn-info" href="/parents/editparents/' . $value->id . '"><span class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</span></a></div>                                             

                                    </td>

                                    <td class=" ">                                           

                                        <div><a class="btn btn-primary" href="/parents/deleteparent/' . $value->id . '"><span class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</span></a></div>                                               

                                    </td>          

                                  </tr>'; }
                                  ?>
                                  </tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 269 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination">

                                      

                                                  <nav aria-label="...">

                <ul class="pagination">
                  <?php 
                  echo $links;
                  ?>

                </ul>

            </nav>

                                  </div></div></div></div>

                                    </div><!-- table-responsive -->

                                </div>

                               



                                                    

                    

                              

                    </div><!-- panel -->

                   </div> 

                        

                        

                </div><!-- col-md-6 --> 



            </div><!--row -->





        </div>

      </div>

    </div>

</body>

</html>

