

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

            .sec-text-color{
                color: maroon !important;
            }
        }

    </style>

    

    <div class="row "> 



      <div class="content-wrapper container">

               <div class="mainpanel">

              <section class="panel">

          <div class="pageheader">

            <div class="media">

                <div class="pageicon pull-left sec-bg-color">

                    <i class="fa fa-image fa-2x text-white"></i>

                </div>

                <div class="media-body">

                    <h4>Student Profile</h4>

                    

                </div>

            </div><!-- media -->

        </div><!-- pageheader -->

      </section>

      <section class="panel">
          <div class="row">
              <div class="col-md-12">
                  <a role="button" href="/student/details" class="btn btn-primary">Go Back</a>
              </div>
          </div>
      </section>

        

        <div class="contentpanel">

            

            <div class="row">

                

               <div class="col-md-1">

               </div>



               <div class="col-md-10 panel">

               

                <div align="center">   <img src="images/profile/gender/2.jpg" width="200px" style="border-radius:5px;margin-bottom:10px;">   </div>



                

                    <!-- Nav tabs -->

                    <ul class="nav nav-tabs nav-info">

                        <li class="active"><a href="#home6" data-toggle="tab" class="sec-text-color"><strong>Registration Details</strong></a></li>

                        <li><a href="#profile6" data-toggle="tab" class="sec-text-color"><strong>Parent Details</strong></a></li>

                        <li><a href="#about6" data-toggle="tab" class="sec-text-color"><strong>Responsibilities</strong></a></li>

                        <li><a href="#contact6" data-toggle="tab" class="sec-text-color"><strong>Contact Parent</strong></a></li>

                        <li><a href="#issueditems" data-toggle="tab" class="sec-text-color"><strong>Issued Items</strong></a></li>

                        <li><a href="#medicalhistory" data-toggle="tab" class="sec-text-color"><strong>Medical History</strong></a></li>

                        

                    </ul>



                            

                    <!-- Tab panes -->

                    <div class="tab-content tab-content-info mb30">

                        <div class="tab-pane active" id="home6">

                            <h4 class="nomargin"></h4>

                            <table class="table table-striped">
                             <?php 
                             foreach ($data as $value) {
                            echo
                            '<tbody><tr><td><b>Name: </b></td><td style="width:50px;"></td><td>' . $value->Name . ' </td></tr>

                            <tr><td><b>Date of Birth: </b></td><td></td><td>' . $value->dob . '</td></tr>

                            <tr><td><b>Gender: </b></td><td></td><td>' . $value->Gender . '</td></tr>

                            <tr><td><b>Admission Number: </b></td><td></td><td>' . $value->AdmNo . '</td></tr>

                            <tr><td><b>Admission Date: </b></td><td></td><td>' . $value->Admissiondate . '</td></tr>

                            <tr><td><b>Entry Marks: </b></td><td></td><td>' . $value->EntryMarks . '</td></tr>

                            <tr><td><b>Former School: </b></td><td></td><td>' . $value->FormerSchool . ' </td></tr>

                            <tr><td><b>Class Admitted: </b></td><td></td><td>'; 

                            $sectionname = '';
                            foreach ($classes as $class) {
               
                                if ($value->Sectionid == $class->sectionID) {
               
                                    $sectionname = $class->section;
               
                                }
               
                            }
               
                            echo  $sectionname;
                              '</td></tr>';


                           echo  '<tr><td><b>Current Class: </b></td><td></td><td>';

                            $sectionname = '';
                            foreach ($classes as $class) {
               
                                if ($value->Sectionid == $class->sectionID) {
               
                                    $sectionname = $class->section;
               
                                }
               
                            }
               
                            echo  $sectionname;
        
                            echo  '</td></tr>


                            <tr><td><b>Address: </b></td><td></td><td>' . $value->address . '</td></tr>

                            </tbody>'; }
                            ?>
                            </table>

                        </div><!-- tab-pane -->

                      

                        <div class="tab-pane" id="profile6">

                            <h4 class="nomargin"></h4>

                            <table class="table table-striped">

                            <tbody>
                            <?php
                              
                              foreach ($parents as $parent) {
                              
                             echo
                            '<tr><td><b>Name: </b></td><td style="width:50px;"></td><td> ' .  $parent->name . ' </td></tr>
                            <tr><td><b>Father Name: </b></td><td style="width:50px;"></td><td> ' .  $parent->father_name . ' </td></tr>
                            <tr><td><b>Mother Name: </b></td><td style="width:50px;"></td><td> ' .  $parent->mother_name . ' </td></tr>

                            <tr><td><b>ID/Passport Number: </b></td><td></td><td>' .  $parent->idpassno . '</td></tr>

                            <tr><td><b>Phone Number: </b></td><td></td><td>' .  $parent->phone . '</td></tr>

                            <tr><td><b>Email: </b></td><td></td><td>' .  $parent->email . '</td></tr>

                            <tr><td><b>Address: </b></td><td></td><td>' .  $parent->address . '</td></tr>';
                              }
                            ?>

                            </tbody></table>

                        </div><!-- tab-pane -->

                      

                        <div class="tab-pane" id="about6">

                            <table class="table table-striped"><tbody><tr><th>Responsibility</th><th>Description</th></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr></tbody></table>                                    </div><!-- tab-pane -->

                      

                        <div class="tab-pane" id="contact6">

                            <h4 class="nomargin" style="text-align:center;margin-bottom:20px;">Phone Number: </h4>

                            <div id="commsms" style="text-align:center;"></div>

                            <input type="hidden" id="phone" value="">

                            <div class="form-group" id="thcntcs">

                                <label class="col-sm-3 control-label" id="contcslabel">Message<span class="asterisk">*</span></label>

                                <div class="col-sm-9">

                                    <textarea rows="5" class="form-control" id="mesage" required="" maxlength="500"></textarea>

                                    <div id="cntcomm"></div>

                                </div>                                                

                            </div><!-- form-group -->



                            <div class="row">

                            <div class="col-sm-9 col-sm-offset-3" style="padding-bottom:55px">

                                <div id="addstdcomm"></div>

                                <button class="btn btn-primary mr5" id="btnsendmessage">Send Message</button>

                            </div>

                          </div>

                        </div><!-- tab-pane -->



                        <div class="tab-pane" id="issueditems">

                            <p style="color:green;font-weight:bold;text-align:center;">No items have been issued</p>                                    </div><!-- tab-pane -->



                        <div class="tab-pane" id="medicalhistory">

                            <p style="color:green;text-align:center;font-weight:bold;">No medical history record found</p>                                    </div>



                        





                    </div><!-- tab-content -->

                    

                </div><!-- col-md-6 -->







            </div><!--row -->



            



        </div><!-- contentpanel -->

        

    </div>

      </div>

    </div>

</body>

</html>

