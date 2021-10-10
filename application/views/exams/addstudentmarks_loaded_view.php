<!doctype html>



<html>



  <head>



     <!--Styles-->



     <link href="<?php echo base_url(); ?>backend/dist/css/styles.css" rel="stylesheet">



     



          <style>



         .text-white{



             color: white !important;



         }



         .text-white{

             color: white !important;

         }





         .modal-notify .modal-header {

    border-radius: 3px 3px 0 0;

}

.modal-notify .modal-content {

    border-radius: 3px;

}

     </style>



     

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  </head>



  <body>







 <div class="content-wrapper container">



    <div class="mainpanel">



      <section class="panel">



          <div class="pageheader">



            <div class="media">


                <div class="media-body">



                    <h4>Add Student Marks</h4>



                </div>



            </div><!-- media -->



        </div><!-- pageheader -->



      </section>



        







            



            <div class="row">







                <!--edit school-->



                <div class="col-md-11">






                    

                    <div class="col-md-12">



                



        <table  class="display table table-responsive table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">



            <thead>



              <tr role="row">

                  <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" >Adm No</th>

                  <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" >Avatar</th>

                  <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" >Full Name</th>

                  <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" >Class/Stream</th>

                  <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Class: activate to sort column ascending">Enter/Edit Marks</th>

             </tr>



            </thead>







        <tbody role="alert" aria-live="polite" aria-relevant="all">

           <?php 

    

            foreach ($this->session->selectedclassdetails as $value) {



            echo 



            '<tr class="gradeX odd">

            <td class=" ">' . $value->AdmNo . '</td>

            <td class=" "><img src="/' . $value->photo . '"></td>' .



            '<td class=" ">' . $value->Name . '</td>';

            



            foreach ($classes as $class) {

              echo '<td class=" ">' . $class->section . '</td>';

            }

            



            foreach ($exams as $exam) {

                echo 



                '<td class=" "><div class="btn-group"><div class="text-center">

                <a href="/exams/allocatedsubjectexammarks/' . $value->id . '"  class="btn btn-info  btn-rounded" ><span class="text-white">'. $exam->name . 'Marks </span></a>              </div></div> </td>';



            } 

            

            echo '</tr>';

            echo
            
            '<tr>

            
            <td>

            <div class="panel panel-default">

               <div class="panel-heading">

               <nav class="navbar navbar-inverse">

                 <div class="container-fluid">

                   <button class="btn btn-danger navbar-btn btn btn-primary" type="button" data-toggle="collapse" data-target="#marksformfields'. $value->id . '" aria-expanded="false" aria-controls="marksformfields">Add Marks</button>

                 </div>

                 </nav>

               

               </div>

               <div class="collapse multi-collapse panel-body" id="marksformfields'. $value->id .'">

               <div class="card card-body">';?>



               <form action="<?php echo base_url();?>/exams/createmarks/' . <?php echo $value->id ?>. '" method="post">
               <?php echo '<div class="panel panel-default">
                   <div class="panel-heading">
                       <h4 class="panel-title">Add Marks For ' . $value->Name . '</h4>
                   </div><!-- panel-heading -->
                   <div class="panel-body">
                       <div class="row">
                           <div id="addstdcomm" style="text-align:center;"></div> <div class="form-group row ">';



                           foreach ($subjects as $subject){
                               echo

                            '<div class="col-md-4">
                               <label class="col-sm-4 control-label">' . $subject->subject . '<span class="asterisk">*</span></label>
                               <div class="col-sm-8">
                                   <input type="text" name="'. $subject->id .'" class="form-control" id="gradename" placeholder="Enter '. $subjectentry->subject .'">
                               </div>
                           </div><!-- form-group -->';
                       }
                       echo '</div>';
                   


             echo  ' 
             </div><!-- row -->
             </div><!-- panel-body -->
             
             <div class="panel-footer">
               <div class="row">
                 <div class="col-sm-6 col-sm-offset-3">                                            
                     <button class="btn btn-primary mr5" id="btnaddexam">Save Marks</button>
                 </div>
               </div>
             </div><!-- panel-footer -->  
         </div></form><!-- panel -->

             </div>

             </div>
             </td>
             <td></td>
             <td></td>
             <td></td>
             <td>


             </td>

            </tr>';
             

             

          

            

          }

            ?>

    

    </tbody></table>



    <div class="row-fluid"><div class="span6">

      <div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 311 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination">        

            <nav aria-label="...">





           

<!--<ul class="pagination">



<?php //echo $this->pagination->create_links(); ?>



  <li class="page-item disabled">



    <a class="page-link" href="#" tabindex="-1">Previous</a>



  </li>



  <li class="page-item"><a class="page-link" href="#">1</a></li>



  <li class="page-item active">



    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>



  </li>



  <li class="page-item"><a class="page-link" href="#">3</a></li>



  <li class="page-item">



    <a class="page-link" href="#">Next</a>



  </li>



</ul> -->



</nav></div></div></div></div>

        



                   



                        



                    </div><!-- panel -->



                    



                    



                    



                </div><!-- col-md-6 -->











            </div><!--row --> 







        </div>



 </div>







 </body>



</html>