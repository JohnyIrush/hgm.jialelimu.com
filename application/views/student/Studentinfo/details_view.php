<!doctype html>



<html>



  <head>



     <!--Styles-->



     <link href="<?php echo base_url(); ?>backend/dist/css/styles.css" rel="stylesheet">



     



          <style>



         .text-white{



             color: white !important;



         }

         .mt-25{

             margin-top: 25px;

         }

         .ml-5{

             margin-left: 5px !important;

         }

         .bg-dark{
             background-color: black !important;
         }

         .mb-80{
             margin-bottom: 80px !important ;
         }

         .table-bordered th, .table-bordered td { border: 2px solid #ddd!important }


     </style>



     



  </head>



  <body>







 <div class="content-wrapper container">



    <div class="mainpanel">



      <section class="panel mt-25">



          <div class="pageheader">



            <div class="media">



                <div class="pageicon pull-left sec-bg-color">



                    <i class="fa fa-graduation-cap fa-2x text-white"></i>



                </div>



                <div class="media-body">



                    <h5>Student Management</h5>



                </div>



            </div><!-- media -->



        </div><!-- pageheader -->



      </section>



        



        <div class="contentpanel container">



            



            <div class="row">







                <!--edit school-->

                <div class="col-md-11">



                    <section class="panel">



                    <div class="clearfix row">



                    <div class="btn-group col-md-2">



                     <a href="#myModal" data-toggle="modal" class="btn btn-primary">Enrollment <i class="fa fa-plus"></i>



                    </a>



                    </div>



                    <div class="btn-group col-md-2 ">



                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>



                        </button>



                        <ul class="dropdown-menu">



                           <!--<li><a target="_blank" href="printStudentReport.php">Generate Report</a></li>-->



                            <li><a target="_blank" href="/student/deactivatestudent">Deactivate Student</a></li>



                            <li><a target="_blank" href="/student/reactivatestudent">Reactivate Student</a></li>



                            <li><a href="importStudent.php">Import From Excel</a></li>



                        </ul>



                    </div>



                    <div class=" col-md-4">

                     <form action="<?php echo base_url(); ?>/student/details" enctype="multipart/form-data"  method="post">

                      <div class="form-group row">

                          <div class="col-md-4">

                            <select class="form-control" name="classid" id="" required="">

                                <option selected>Class</option>

                                <?php

                                $classesoptions = '';

                                 foreach ($classes as $class) {

                                     $classesoptions .=  '<option value=" ' . $class->classesID . ' ">' . $class->classes . '</option>';

                                 }

                                 echo $classesoptions;

                                ?>

                            </select>

                          </div>

                          <div class="col-md-4">

                            <select class="form-control" name="streamid" id="" required="">

                                <option selected>Stream</option>

                                <?php

                                $streamoptions  = '';

                                 foreach ($streams as $stream) {

                                     $streamoptions .=  '<option value=" ' . $stream->Streamid . ' ">' . $stream->stream . '</option>';

                                 }

                                 echo $streamoptions;

                                ?>

                            </select>

                          </div>

                          <div class="col-md-3">

                              <button type="submit" class="btn btn-primary">Load Students</button>

                          </div>

                      </div>

                     </form>

                    </div>

                    <div class="col-md-2 ml-5">

                    <!-- <form onsubmit="generatepdf()" action="/student/printclasslist" method="post">

                            <input type="hidden" name="classlistpdf" id="classlist"> -->

                            <button role="button" onclick="printPDF()" class="btn btn-primary">Export to Pdf</button>

                    <!--</form>-->

                    </div>



                </div>



                    </section>



                     

                <!--Add Students-->    

                <div aria-hidden="true"  data-backdrop="static" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">



                  <div class="modal-dialog">



                    <div class="modal-content">



                        <div class="modal-header">



                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>



                            <h4 class="modal-title">Add Student</h4>



                        </div>



                        <div class="modal-body">



                            <form action="/student/addstudent" method="post" class="form-horizontal " enctype="multipart/form-data">



                               <div class="form-group">



                                  <label class="control-label col-md-4"> Admisssion No:</label>



                                  <div class="col-md-6">



                                       <input type="number" required=""  class="form-control" name="AdmNo" size="16" placeholder="Eg 0052">



                                        <div id="ErrorSpan" style="color:#a94442"></div>



                                  </div>



                                </div>



                            <div class="form-group">



                                <label class="control-label col-md-4">Class:</label>



                                <div class="col-md-6 col-xs-11">



                                   <select required="" name="sectionid" id="changeclasses" class="form-control">


                                    <option selected>Select Class</option>

                                    <?php
                                        $sectionname = '';
                                        foreach ($classes as $class) {
                            
                                           $sectionname .=  '<option value="' . $class->classesID . '">' . $class->classes . '</option>' ;
                    
                                        }
                            
                                        echo  $sectionname;
                                    ?>


                               </select>



                                </div>



                            </div>

                            <div class="form-group">



                                <label class="control-label col-md-4">Stream:</label>



                                <div class="col-md-6 col-xs-11">



                                   <select required="" name="streamid" id="changeclasses" class="form-control">


                                    <option selected>Select Stream</option>

                                    <?php
                                        $streamname = '';
                                        foreach ($streams as $stream) {
                            
                                           $streamname .=  '<option value="' . $stream->Streamid . '">' . $stream->stream . '</option>' ;
                    
                                        }
                            
                                        echo  $streamname;
                                    ?>


                               </select>



                                </div>



                            </div>



                             <div id="result"></div>


                            <div class="form-group">



                                <label class="control-label col-md-4">Name:</label>



                                <div class="col-md-6 col-xs-11">



                                    <input style="text-transform:uppercase" required="" value="" type="text" class="form-control" name="name" size="16" id="exampleInputEmail5" placeholder="Eg JAMES">



                                   



                                </div>



                            </div>



                            



                             <div class="form-group">



                                <label class="control-label col-md-4">Entry Marks:</label>



                                <div class="col-md-6 col-xs-11">



                                <input type="number" name="EntryMarks" value="" class="form-control" min="0" max="500" size="16"  placeholder="e.g 360" required>


                                </div>



                            </div>



                                 <div class="form-group">



                                <label class="control-label col-md-4">Former School:</label>



                                <div class="col-md-6 col-xs-11">



                                    <input type="text" value="" style="text-transform:uppercase" name="FormerSchool" class="form-control" size="16"  placeholder="e.g OGEMBO" required>

                                </div>



                            </div>



                             <div class="form-group">



                                <label class="control-label col-md-4">Parent Contact:</label>



                                <div class="col-md-6 col-xs-11">



                                    <input type="text" value="" style="text-transform:uppercase" name="Parentphone" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g +254700000000" required>



                                </div>



                            </div>

                        

                             <div class="form-group">



                                <label class="control-label col-md-4">Gender:</label>



                                <div class="col-md-6 col-xs-11">



                                   <select required="" name="Gender" class="form-control">

                                    <option value="Male">Male</option>

                                    <option value="Female">Female</option>


                               </select>



                                </div>



                            </div>



                             <div class="form-group">



                                <label class="control-label col-md-4">Border/Dayscholor:</label>



                                <div class="col-md-6 col-xs-11">

                                   <select required="" name="Boarderorday" class="form-control">

                                    <option value="Dayscholar">Dayscholar</option>

                                    <option value="Boader">Boader</option>

                               </select>

                                </div>

                            </div>

                            <!--Add dom/hostel-->
                            <div class="form-group">



                                <label class="control-label col-md-4">Domitory/House/Hostel:</label>



                                <div class="col-md-6 col-xs-11">



                                   <select required="" name="hostelid"  class="form-control">


                                    <option selected>Select Domitory/House/Hostel/option>

                                    <?php
                                        $$hostelname = '';
                                        foreach ($hostels as $hostel) {
                            
                                           $hostelname .=  '<option value="' . $hostel->Hostelid . '">' . $hostel->hostelname . '</option>' ;
                    
                                        }
                            
                                        echo  $hostelname;
                                    ?>


                               </select>



                                </div>



                            </div>
                            <!--Add dom/hostel end-->
                              <div class="form-group">



                                <label class="control-label col-md-4">Date Of Birth:</label>



                                <div class="col-md-6 col-xs-11">



                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">



                                        <input type="text" name="dob" readonly="" value="2021-09-03" size="16" class="form-control" required>

                                              <span class="input-group-btn add-on">

                                                <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>

                                              </span>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">

                                <label class="control-label col-md-4" for="inputAddress">Address</label>

                                <div class="col-md-6">

                                  <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" required>

                                </div>
                            </div>

                             <div class="form-group row">

                                <label class="control-label col-md-4  ">Uplaod Picture:</label>


                                <div class="col-md-8 ">
                                <?php echo form_open_multipart('upload/do_upload');?>

                                    <input type="file" id="files" onChange="displayImage(this)" name="profileImage" id="profileImage" class="hidden"/>
                                    <label for="files" class="btn btn-primary">Select Picture</label>

                                </div>

                            </div>

                             <button type="submit" name="member" class="btn sec-bg-color">Add Student</button>

                            </form>

                        </div>



                    </div>



                  </div>



                </div>     

                <!--Add Students-->                



          <div class="col-md-11 mb-80" id="clist">

        <table  class="table table-responsive table-bordered">



            <thead>



              <tr role="row">

                  <th  rowspan="1" colspan="1" >AdmNo</th>

                  <th  rowspan="1" colspan="1" >Profile Picture</th>

                  <th  rowspan="1" colspan="1" >Full Name</th>

                  <th  rowspan="1" colspan="1" >Class/Stream</th>

                  <th  rowspan="1" colspan="1" >Gender</th>

                  <th class="hiddenfields"  rowspan="1" colspan="2">Action</th>

             </tr>



            </thead>





        <tbody role="alert" aria-live="polite" aria-relevant="all">

           <?php 

    

            foreach ($data as $value) {

            echo 



            '<tr class="gradeX odd">

            <td class=" ">' . $value->AdmNo . 

            '</td>

            <td class=" "><img src="/' . $value->photo . '" width="60px"></td>' .



            '<td class=" ">' . $value->Name . '</td>

                   <td ">'; 
                   $sectionname = '';
             foreach ($streams as $stream) {

                 if ($value->Sectionid == $stream->Streamid) {

                     $sectionname = $stream->stream;

                 }

             }

             echo  $classid . ' ' . $sectionname;

             echo 

            '<td class=" ">' . $value->Gender . '</td>

            <td class="hiddenfields" > 

             <div class="btn-group">



                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>



                <ul role="menu" class="dropdown-menu">



                    <li><a href="/student/editstudentinfo/' . $value->id .'">Edit Student Details</a></li>



                    <li><a href="/student/showstudentinfo/' . $value->id . ' ">View Student Profile</a></li>



                    <li><a href="/student/changestudentavatar">Change Profile Image</a></li>



                    <li><a href="/student/deletestudentinfo/' . $value->id . '">Delete Record</a></li>



                    <li class="divider"></li>



                    <li><a href="/student/addgurdian"> Add Guardian</a></li>



                </ul>



             </div> 

            </td> 

          </tr>';



            }



            ?>

    

        </tbody>

         </table>

         </div>             

                        

        </div><!-- panel -->

                </div><!-- col-md-6 -->



            </div><!--row --> 



        </div>



 </div>



 <script>


/* Generate pdf using tcpdf
generatepdf = () => {

    

  $('.hiddenfields').remove();

  $('#classlist').val($('#clist').html());



} */

//generate pdf using javascript
function printPDF() {
            $('.hiddenfields').remove();
            var divContents = document.getElementById("clist").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }

//Upload image

function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();

    /*
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    */

    reader.readAsDataURL(e.files[0]);
  }
}


 </script>



 </body>



</html>