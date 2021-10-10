



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

                            <li>Manage Categories</li>

                        </ul>

                        <h4>Manage Categories</h4>

                        <p></p>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row">

                            <div class="clearfix">

                                <div class="btn-group">

								   <a href="/subjects/addsubjectcategory" class="btn btn-primary">

                                    Add New Category <i class="fa fa-plus"></i>

                                </a>

                                   

                                </div>

                                <div class="btn-group pull-right">

                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>

                                    </button>

                                    <ul class="dropdown-menu pull-right">

                                       <li><a href="addstaffexcel.php">Import From Exel</a></li>

                                        <li><a href="#">Export to Excel</a></li>

                                    </ul>

                                </div>

                            </div>



                            <!--edit school-->

                            <div class="col-md-12">

                               <p></p><div class="col-md-12">

                                 <div class="table-responsive">

                                     <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">

                                         <thead>

                                           <tr role="row">
                                               <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="No: activate to sort column ascending" style="width: 55px;">No</th>
                                               <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" style="width: 206px;">Category Name</th>
                                               <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 530px;">Description</th>
                                               <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 111px;">Edit</th></tr>

                                         </thead>

                                         

                                <tbody role="alert" aria-live="polite" aria-relevant="all">



                            <?php

                                foreach ($data as $value) {



                                 echo    



                                  '<tr class="odd">

                                   <td class="  sorting_1">' . $data->id . '</td>

                                   <td class=" ">' . $value->category . '</td>

                                   <td class=" ">' . $value->description . '</td>

                                   <td class=" ">                                           

                                       <div><a href="/subjects/editsubjectcategory/' . $value->id . '"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             

                                   </td>     

                                   <td class=" ">                                           

                                       <div><a href="/subjects/deletesubjectcategory/' . $value->id . '"><button class="mr5 btn-danger" id="btnaddreqs"><i class="fa fa-trash-square"></i> Delete</button></a></div>                                             

                                   </td>    

                                  </tr>';

                                 }

                                 ?>



                               </tbody>

                             </table>

                             <div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 4 of 4 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div></div></div>

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



