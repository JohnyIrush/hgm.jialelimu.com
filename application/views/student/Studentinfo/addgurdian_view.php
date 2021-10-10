

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

         <!--Styles-->

     <link href="<?php echo base_url(); ?>backend/dist/css/styles.css" rel="stylesheet">

     

          <style>

         .text-white{

             color: white !important;

         }

     </style>

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

                   <div class="pageicon pull-left sec-bg-color">

                       <i class="fa fa-plus fa-2x text-white"></i>

                   </div>

                   <div class="media-body">

                       <h4>Add Parent</h4>

                       

                   </div>

               </div><!-- media -->

           </div><!-- pageheader -->

         </section>         

        

        <div class="contentpanel">

            


            <div class="row" style="background:url('images/back.png');">

               <div class="col-md-3">

               </div>



                <!--edit school-->

                <div class="col-md-6">

                    <form id="" method="post" action="" enctype="multipart/form-data">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <h4 class="panel-title">Add Student's Parent</h4>

                        </div><!-- panel-heading -->

                        <div class="panel-body">

                            <div class="row">

                              <?php $this->load->view('student/Studentinfo/addgurdian_form_view') ?>

                            </div><!-- row -->

                        </div><!-- panel-body -->

                       

                        <div class="panel-footer">

                        <div id="addstfcomm" style="text-align:center"></div>

                          <div class="row">

                            <div class="col-sm-9 col-sm-offset-3">                                            

                                <button class="btn btn-primary mr5" name="btnaddparent">Save Record</button>

                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> New Parent</button>

                                 <button type="reset" class="btn btn-dark">Clear</button>

                            </div>

                          </div>

                        </div><!-- panel-footer -->  

                         

                    </div></form><!-- panel -->

                                                        

                </div><!-- col-md-6 -->





            </div><!--row --> 

        </div><!-- contentpanel -->

        

    </div>



           

      </div>

    </div>

</body>

</html>

