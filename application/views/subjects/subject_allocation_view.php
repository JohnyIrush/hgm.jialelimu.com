



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

                                    <li>Manage Student Subject Allocation</li>

                                </ul>

                                <h4>Manage Student Subject Allocation</h4>

                                

                                	

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    
                        

                        <div class="row" >



                            <!--edit school-->

                            <div class="col-md-11">

                            	 <div class="clearfix">


                                <div class="btn-group pull-right">

                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>

                                    </button>

                                    <ul class="dropdown-menu pull-right">

                                       <li><a href="#">Save as PDF</a></li>

                                        <li><a href="#">Export to Excel</a></li>

                                    </ul>

                                </div>

                            </div>

                            
                            
                 <table class="table table-responsive table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                    <thead>

                    <tr role="row">

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" style="width: 43px;">Adm No</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 47px;">Avatar</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 199px;">Full Name</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 57px;">DOB</th>

                        <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Class: activate to sort column ascending" style="width: 54px;">Class</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Stream: activate to sort column ascending" style="width: 47px;">Stream</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 48px;">Gender</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 64px;">Status</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 98px;">Action</th>
                    </tr>

                    </thead>

                    

                    <tbody role="alert" aria-live="polite" aria-relevant="all">



                    <?php

                     



                     foreach ($details as $key => $detail) {

                        echo

                     '<tr class="gradeX odd">

                        <td class=" ">' . $detail->AdmNo . '</td>

                        <td class=" ">    <img src="images/profile/gender/' . $detail->photo . '" width="60px">   </td>

                        <td class=" ">' . $detail->Name . '</td>

                      <td class=" ">' . $detail->dob . '</td>

						<td class="  sorting_1">' . $detail->Classid . '</td>

						<td class=" ">' . $detail->Streamid . '</td>

					   <td class=" ">' . $detail->Gender . '</td>

					   <td class=" ">' . $detail->suballocstate . '</td>

					  <td class=" "> <div class="btn-group">

                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>

                            <ul role="menu" class="dropdown-menu">

                                <li><a href="/subjects/allocatedsubject/' . $detail->id . '">View Allocated Subjects</a></li>

								<li><a onclick="return confirm("Are you sure you change student subject?");" href="subjects/editallocatedsubject/' . $detail->id . '">Edit Subject Allocated</a></li>

								<li><a onclick="return confirm("Are you sure you want to allocate student subject?");" href="/subjects/allocatesubject/' . $detail->id . '">Allocate Subjects</a></li>

                            </ul>

                        </div> </td>

                    </tr>'; }

                    ?>

                    </tbody></table>
                    <div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 310 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

					

                               

                                    

                                </div><!-- panel -->

                                

                                

                                

                            </div><!-- col-md-6 -->



                    </div>

      </div> 

    </div>



</body>



</html>



