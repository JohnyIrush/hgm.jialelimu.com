



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

                                <i class="fa fa-pencil-square"></i>

                            </div>

                            <div class="media-body">

                                <ul class="breadcrumb">

                                    <li><i class="fa fa-pencil-square"></i></li>

                                    <li>Registered Subjects</li>

                                </ul>

                                <h4>Registered Subjects</h4>

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row">

                           

<div class="clearfix">

                                <div class="btn-group">

								   <a href="/subjects/addsubject" class="btn btn-primary">

                                    Add New Subject <i class="fa fa-plus"></i>

                                </a>

                                   

                                </div>

                                

                            </div>

                            <!--edit school-->

                            <div class="col-md-15">



                         <div class="col-md-15">

                                <div class="table-responsive">

                                    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">

                                        <thead>

                                          <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 17px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Code: activate to sort column ascending" style="width: 34px;">Code</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Subject Name: activate to sort column ascending" style="width: 94px;">Subject Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 62px;">Category</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Description: activate to sort column ascending" style="width: 587px;">Description</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 48px;">Edit</th></tr>

                                        </thead>

                                                    

                                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                                            <?php



                                        foreach ($data as $value) {

                                          echo

                                            '<tr class="odd">

                                            <td class=" ">' . $value->id . '</td>

											 <td class=" ">' . $value->code . '</td>

                                            <td class=" ">' . $value->subject . ' </td>

                                            <td class=" ">' .
                                             $value->category . '</td>

                                            <td class="  sorting_1"> ' . $value->description . ' </td>

                                          

                                            <td class=" ">                                           

                                                <div><a href="/subjects/editsubject/' . $value->id . '"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             

                                            </td>



                                            <td class=" ">                                           

                                                <div><a href="/subjects/deletesubject/' . $value->id . '"><button class="mr5 btn-danger"><i class="fa fa-pencil-square"></i> Delete</button></a></div>                                             

                                            </td>

                                                         

                                          </tr>';



                                        }



                                        ?>

                                        </tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 11 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

                                            </div>

                                        </div>

                            </div><!-- panel -->

                                

                                

                        </div><!-- col-md-6 --> 



                    </div><!--row -->      

    

                </div>

      </div> 

    </div>



</body>



</html>



