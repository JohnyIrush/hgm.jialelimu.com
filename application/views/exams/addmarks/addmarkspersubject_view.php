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



.mb-50{

    margin-bottom: 20px !important;

}

     </style>







     



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>







  </head>







  <body>















 <div class="content-wrapper container ">







    <div class="mainpanel">







      <section class="panel">







          <div class="pageheader">







            <div class="media">





                <div class="media-body">



                    <?php



               foreach ($subjects as $subject){



                foreach ($classes as $class) {



                    echo '<h4>Add  ';

                    echo $this->session->userdata['exammarksentrydetails']['class'];
                    
                    foreach ($streams as $stream) {
                  
                        if ($this->session->userdata['exammarksentrydetails']['stream'] == $stream->Streamid ) {
      
                            echo $stream->stream;
      
                        }
                    }
                    echo ' ' . $subject->subject . ' Marks</h4>';



                }

               }

                 ?>





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

                  <?php

                      foreach ($exams as $exam) {
      
                        echo  '<input type="hidden" value="' . $exam->Exammodeid . '" name="exammode">';
      
                      if ($exam->Exammodeid == 1) {
      
                      foreach ($subjects as $subject){

                       echo '<th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" >' . $subject->subject . ' Full Paper Total</th>';

                      }
                    }
                  }

                  foreach ($subjects as $subject){

                  echo '<th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Class: activate to sort column ascending">Enter ' . $subject->subject . ' Marks</th>';

                }

                ?>

             <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" >View Marks</th>

             </tr>







            </thead>















        <tbody role="alert" aria-live="polite" aria-relevant="all">



           <?php 



    



            foreach ($this->session->selectedclassdetails as $value) {







            echo 



             



            ' <form action="/exams/createmarkspersubject" method="post">

            <tr class="gradeX odd">



            <td class=" ">' . $value['AdmNo'] . '</td>



            <td class=" "><img src="/' . $value['photo'] . '"></td>' .







            '<td class=" ">' . $value['Name'] . '</td>';





              echo '<td class=" ">' .  $this->session->userdata['exammarksentrydetails']['class'];

              foreach ($streams as $stream) {

                  if ($this->session->userdata['exammarksentrydetails']['stream'] == $stream->Streamid ) {

                      echo $stream->stream;

                  }
              }
              
              echo '</td>';



            


            foreach ($exams as $exam) {

            if ($exam->Exammodeid == 1) {
                echo '<td>
                
                <div class="col-sm-12">

                <div class="form-group  row">

                <label class="col-sm-6 control-label">' . $subject->subject . ' Full Paper Total ' . '<span class="asterisk">*</span></label>

                <div class="col-sm-6">

                 <input type="text" value="' . $value[$subject->subject] . '" name="" class="form-control" id="gradename" readonly>

                </div>

                </div>

               </div>
                </td>'; }}
            



           echo

            '<td><div class="row">

            <div class="form-group row ">';







            foreach ($subjects as $subject){

                foreach ($exams as $exam) {

                  echo  '<input type="hidden" value="' . $exam->Exammodeid . '" name="exammode">';

                if ($exam->Exammodeid == 1) {

                  for ($i=1; $i < $subject->paperno + 1 ; $i++) { 

                    echo 

                    '

                    <div class="col-sm-4">

                     <div class="row">

                      

                     <label class="col-sm-2 control-label">' . substr($subject->subject,0,3) . ' ' . $i . '<span class="asterisk">*</span></label>

                     <div class="col">

                      <input type="number" value="" name="'. $value['id'] . $subject->id . $i .'" class="form-control" id="gradename">

                     </div>

                     </div>

                    </div>';

                    # code...

                  }

                }else{

                 echo  '

                  <div class="col-sm-12">

                   <div class="row">

                   <label class="col-sm-6 control-label">' . $subject->subject . ' ' . '<span class="asterisk">*</span></label>

                   <div class="col-sm-6">

                    <input type="text" value="' . $value[$subject->subject] . '" name="'. $value['id'] . $subject->id .'" class="form-control" id="gradename">

                   </div>

                   </div>

                  </div>';

                }

              }

            '<!-- form-group -->';

        }

        echo '</div>';

    





echo  ' 

</div></td><!-- row -->';



foreach ($exams as $exam) {



  echo 







  '<td class=" "><div class="btn-group"><div class="text-center">



  <a href="/exams/allocatedsubjectexammarks/' . $value['id'] . '"  class="btn btn-info  btn-rounded" ><span class="text-white">'. $exam->name . 'Marks </span></a>              </div></div> </td>';







} 



            echo '</tr>';

             



             



          



            



          }



            ?>



    



    </tbody>

   </table>







    <div class="row mb-50">



    <div class="col-md-8"></div>



     <div class="col-md-4">

      <button type="submit" class="btn btn-lg btn-primary">Save marks</button>

    </div></div>

  </div></form>



        







                   







                        







                    </div><!-- panel -->







                    







                    







                    







                </div><!-- col-md-6 -->























            </div><!--row --> 















        </div>







 </div>















 </body>







</html>