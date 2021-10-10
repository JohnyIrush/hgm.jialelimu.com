

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

        

        .text-white{

    color: white !important;

}

    </style>

    

        <div class="row"> 

            

    <div class="content-wrapper">

        

    <section class="content-header">

        <h1>

            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('student_information'); ?>

            

                 <link href="<?php echo base_url(); ?>backend/dist/css/styles.css" rel="stylesheet">

        </h1>

    </section>

    <!-- Main content -->

    <section class="content">

        <div class="row">

        <div class="col-md-12">

             <div class="container">

    <div class="mainpanel">

        <section class="panel">

          <div class="pageheader">

            <div class="media">

                <div class="pageicon pull-left sec-bg-color">

                    <i class="fa fa-edit fa-2x text-white"></i>

                </div>

                <div class="media-body">

                    <h4>Edit Student</h4>

                </div>

            </div><!-- media -->

        </div><!-- pageheader -->

      </section>

        

        <div class="contentpanel">

            

            <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">

               <div class="col-md-3">

               </div>

                    <!--edit school-->

                <div class="col-md-6">

                    <form action="/student/updatestudentinfo" method="post" class="form-horizontal " enctype="multipart/form-data">

                                          
                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <div class="panel-btns" style="display: none;">

                                <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                            </div><!-- panel-btns -->

                            <h4 class="panel-title">Edit Student</h4>

                        </div><!-- panel-heading -->

                        <div class="panel-body">

                            <div class="row">

                            <?php
                            
                            foreach ($data as $value) {
                             echo

                              '<div class="form-group row">
                              
                                 <label class="control-label col-md-4"> Admisssion No:</label>
                              
                                 <div class="col-md-6">
                                 <input type="hidden"  name="id" value="' . $value->id .'">
                                      <input type="number" required=""  class="form-control" name="AdmNo" size="16" value="' . $value->AdmNo . '">
                              
                                       <div id="ErrorSpan" style="color:#a94442"></div>
                              
                                 </div>
                              
                               </div>
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Class:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                  <select name="classid" id="changeclasses" class="form-control" required>
                              

                                  <option selected value="' . $value->Classid . '">';
                                  $sectionname = '';

                                  foreach ($classes as $class) {
                      
                                     if ($class->classesID == $value->Classid) {
                                         echo $class->classes;
                                     }
              
                                  }
                    
                                  echo '</option>';
                                
                                      $sectionname = '';

                                      foreach ($classes as $class) {
                          
                                         $sectionname .=  '<option value="' . $class->classesID . '">' . $class->classes . '</option>' ;
                  
                                      }
                          
                                      echo  $sectionname;
                                                                
                              
                                 echo '</select>
                              
                               </div>
                              
                              </div>

                              <div class="form-group">



                              <label class="control-label col-md-4">Stream:</label>



                              <div class="col-md-6 col-xs-11">



                                 <select name="streamid" id="changeclasses" class="form-control" required="">


                                 <option selected value="' . $value->Sectionid . '">';

                                 foreach ($streams as $stream) {
                     
                                    if ($stream->Streamid == $value->Sectionid) {
                                        echo $stream->stream;
                                    }
             
                                 }
                   
                                 echo '</option>';




                                      $streamname = '';
                                      foreach ($streams as $stream) {
                          
                                         $streamname .=  '<option value="' . $stream->Streamid . '">' . $stream->stream . '</option>' ;
                  
                                      }
                          
                                      echo  $streamname;
                                  


                             echo '</select>



                              </div>



                          </div>
                              
                              <div id="result"></div>
                              
                              
                              
                              
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Name:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                   <input style="text-transform:uppercase" required=""  type="text" class="form-control" name="name" size="16" id="exampleInputEmail5" value="' . $value->Name . '">
                              
                                  
                              
                               </div>
                              
                              </div>
                              
                              
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Entry Marks:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                   <input type="number" name="EntryMarks" value="' . $value->EntryMarks .  '" class="form-control" min="0" max="500" size="16" id="exampleInputEmail5" placeholder="e.g 360">
                              
                                  
                              
                               </div>
                              
                              </div>
                              
                                <div class="form-group row">
                              
                               <label class="control-label col-md-4">Former School:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                   <input type="text" value="' . $value->FormerSchool . '" style="text-transform:uppercase" name="FormerSchool" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g OGEMBO">
                              
                                  
                              
                               </div>
                              
                              </div>
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Parent Contact:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                   <input type="text" value="' . $value->Parentphone . '" style="text-transform:uppercase" name="Parentphone" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g +254700000000">
                              
                               </div>
                              
                              </div>
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Gender:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                  <select required="" name="Gender" class="form-control">
                              
                                   <option selected value="' . $value->Gender . '">' . $value->Gender . '</option>

                                   <option value="Male">Male</option>
                              
                                   <option value="Female">Female</option>
                              
                              </select>
                              
                               </div>
                              
                              </div>
                              
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Border/Dayscholor:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                                  <select required="" name="Boarderorday" class="form-control">
                              
                                   <option selected value="' . $value->Boarderorday . '">' . $value->Boarderorday . '</option>

                                   <option value="0">Day Scholar</option>
                              
                                   <option value="1">Boader</option>
                              </select>
                               </div>
                              </div>
                              <!--Add dom/hostel-->
                              <div class="form-group">
  
  
  
                                  <label class="control-label col-md-4">Domitory/House/Hostel:</label>
  
  
  
                                  <div class="col-md-6 col-xs-11">
  
  
  
                                     <select required="" name="hostelid"  class="form-control">
  
  
                                      <option selected>Select Domitory/House/Hostel/option>';
  
                                          $hostelname = '';
                                          foreach ($hostels as $hostel) {
                              
                                             $hostelname .=  '<option value="' . $hostel->Hostelid . '">' . $hostel->hostelname . '</option>' ;
                      
                                          }
                              
                                          echo  $hostelname;
                                    
                                    
  
  
                                echo  '</select>
  
  
  
                                  </div>
  
  
  
                              </div>
                              <!--Add dom/hostel end-->
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Date Of Birth:</label>
                              
                               <div class="col-md-6 col-xs-11">
                              
                              
                              
                                   <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                              
                                       <input type="text" name="dob" readonly="" value="' . $value->dob . '" size="16" class="form-control">
                              
                                             <span class="input-group-btn add-on">
                              
                                               <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                              
                                             </span>
                                   </div>
                               </div>
                              
                              </div>
                              
                              <div class="form-group row">
                              <label class="control-label col-md-4" for="inputAddress">Address 1</label>
                              <div class="col-md-6 col-xs-11">
                              <div class="col-md-6 col-xs-11">
                              <input type="text" value="' . $value->address . '" class="form-control" name="address" id="inputAddress"">
                                </div>
                            </div>
                          </div>
                              <div class="form-group row">
                              
                               <label class="control-label col-md-4">Upload Picture:</label>
                              
                               <div class="col-md-6">
                              
                                   <input type="file" value="' . $value->photo . '" style="text-transform:uppercase" name="photo" class="form-control" size="16">
                               </div>
                              </div>'; } ?>

        

                            </div><!-- row -->

                        </div><!-- panel-body -->

                        

                        <div class="panel-footer">

                            <div id="addstdcomm" style="text-align:center"></div>

                          <div class="row">

                            <div class="col-sm-9 col-sm-offset-3">                                            

                                <button class="btn btn-primary mr5" id="btnaddstaff">Edit Student</button>

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

</div>

</section>

</div>

 </div>

    <script type="text/javascript">

    

       /*

        function getSectionByClass(class_id, section_id) {

            if (class_id != "" && section_id != "") {

                $('#section_id').html("");

                var base_url = '<?php echo base_url() ?>';

                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

                $.ajax({

                    type: "GET",

                    url: base_url + "sections/getByClass",

                    data: {'class_id': class_id},

                    dataType: "json",

                    success: function (data) {

                        $.each(data, function (i, obj)

                        {

                            var sel = "";

                            if (section_id == obj.section_id) {

                                sel = "selected";

                            }

                            div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";

                        });

                        $('#section_id').append(div_data);

                    }

                });

            }

        }

        $(document).ready(function () {

            var class_id = $('#class_id').val();

            var section_id = '<?php echo set_value('section_id') ?>';

            getSectionByClass(class_id, section_id);

            $(document).on('change', '#class_id', function (e) {

                $('#section_id').html("");

                var class_id = $(this).val();

                var base_url = '<?php echo base_url() ?>';

                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

                $.ajax({

                    type: "GET",

                    url: base_url + "sections/getByClass",

                    data: {'class_id': class_id},

                    dataType: "json",

                    success: function (data) {

                        $.each(data, function (i, obj)

                        {

                            div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";

                        });

                        $('#section_id').append(div_data);

                    }

                });

            });

        }); */

    </script>

</body>

</html>















<script type="text/javascript">





    $(document).ready(function () {

        var date_format = '<?php echo $result = strtr($this->customlib->getSchoolDateFormat(), ['d' => 'dd', 'm' => 'mm', 'Y' => 'yyyy']) ?>';

        var class_id = $('#class_id').val();

        var section_id = '<?php echo set_value('section_id', 0) ?>';

        var hostel_id = $('#hostel_id').val();

        var hostel_room_id = '<?php echo set_value('hostel_room_id', 0) ?>';

        getHostel(hostel_id, hostel_room_id);

        getSectionByClass(class_id, section_id);



        $(document).on('change', '#class_id', function (e) {

            $('#section_id').html("");

            var class_id = $(this).val();

            getSectionByClass(class_id, 0);

        });







        $('.datetime').datetimepicker({



        });

        $(".color").colorpicker();



        $("#btnreset").click(function () {

            $("#form1")[0].reset();

        });





        $(document).on('change', '#hostel_id', function (e) {

            var hostel_id = $(this).val();

            getHostel(hostel_id, 0);



        });



        function getSectionByClass(class_id, section_id) {



            if (class_id != "") {

                $('#section_id').html("");

                var base_url = '<?php echo base_url() ?>';

                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

                var url = "<?php

                                            $userdata = $this->customlib->getUserData();

                                            if (($userdata["role_id"] == 2)) {

                                                echo "getClassTeacherSection";

                                            } else {

                                                echo "getByClass";

                                            }

                                            ?>";



                $.ajax({

                    type: "GET",

                    url: base_url + "sections/getByClass",

                    data: {'class_id': class_id},

                    dataType: "json",

                    beforeSend: function () {

                        $('#section_id').addClass('dropdownloading');

                    },

                    success: function (data) {

                        $.each(data, function (i, obj)

                        {

                            var sel = "";

                            if (section_id == obj.section_id) {

                                sel = "selected";

                            }

                            div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";

                        });

                        $('#section_id').append(div_data);

                    },

                    complete: function () {

                        $('#section_id').removeClass('dropdownloading');

                    }

                });

            }

        }





        function getHostel(hostel_id, hostel_room_id) {

            if (hostel_room_id == "") {

                hostel_room_id = 0;

            }



            if (hostel_id != "") {



                $('#hostel_room_id').html("");





                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

                $.ajax({

                    type: "GET",

                    url: baseurl + "admin/hostelroom/getRoom",

                    data: {'hostel_id': hostel_id},

                    dataType: "json",

                    beforeSend: function () {

                        $('#hostel_room_id').addClass('dropdownloading');

                    },

                    success: function (data) {

                        $.each(data, function (i, obj)

                        {

                            var sel = "";

                            if (hostel_room_id == obj.id) {

                                sel = "selected";

                            }



                            div_data += "<option value=" + obj.id + " " + sel + ">" + obj.room_no + " (" + obj.room_type + ")" + "</option>";



                        });

                        $('#hostel_room_id').append(div_data);

                    },

                    complete: function () {

                        $('#hostel_room_id').removeClass('dropdownloading');

                    }

                });

            }

        }



    });

    function auto_fill_guardian_address() {

        if ($("#autofill_current_address").is(':checked'))

        {

            $('#current_address').val($('#guardian_address').val());

        }

    }

    function auto_fill_address() {

        if ($("#autofill_address").is(':checked'))

        {

            $('#permanent_address').val($('#current_address').val());

        }

    }

    $('input:radio[name="guardian_is"]').change(

            function () {

                if ($(this).is(':checked')) {

                    var value = $(this).val();

                    if (value == "father") {

                        $('#guardian_name').val($('#father_name').val());

                        $('#guardian_phone').val($('#father_phone').val());

                        $('#guardian_occupation').val($('#father_occupation').val());

                        $('#guardian_relation').val("Father")

                    } else if (value == "mother") {

                        $('#guardian_name').val($('#mother_name').val());

                        $('#guardian_phone').val($('#mother_phone').val());

                        $('#guardian_occupation').val($('#mother_occupation').val());

                        $('#guardian_relation').val("Mother")

                    } else {

                        $('#guardian_name').val("");

                        $('#guardian_phone').val("");

                        $('#guardian_occupation').val("");

                        $('#guardian_relation').val("")

                    }

                }

            });





</script>



<script type="text/javascript">

    $(".mysiblings").click(function () {

        $('.sibling_msg').html("");

        $('.modal_title').html('<b>' + "<?php echo $this->lang->line('sibling'); ?>" + '</b>');

        $('#mySiblingModal').modal({

            backdrop: 'static',

            keyboard: false,

            show: true

        });

    });

</script>



<script type="text/javascript">



    $(document).on('change', '#sibiling_class_id', function (e) {

        $('#sibiling_section_id').html("");

        var class_id = $(this).val();

        var base_url = '<?php echo base_url() ?>';

        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

        $.ajax({

            type: "GET",

            url: base_url + "sections/getByClass",

            data: {'class_id': class_id},

            dataType: "json",

            success: function (data) {

                $.each(data, function (i, obj)

                {

                    div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";

                });

                $('#sibiling_section_id').append(div_data);

            }

        });

    });



    $(document).on('change', '#sibiling_section_id', function (e) {

        getStudentsByClassAndSection();

    });



    function getStudentsByClassAndSection() {



        $('#sibiling_student_id').html("");

        var class_id = $('#sibiling_class_id').val();

        var section_id = $('#sibiling_section_id').val();

        var student_id = '<?php echo set_value('student_id') ?>';

        var base_url = '<?php echo base_url() ?>';

        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';

        $.ajax({

            type: "GET",

            url: base_url + "student/getByClassAndSection",

            data: {'class_id': class_id, 'section_id': section_id},

            dataType: "json",

            success: function (data) {

                $.each(data, function (i, obj)

                {

                    var sel = "";

                    if (section_id == obj.section_id) {

                        sel = "selected=selected";

                    }

 



                    if (obj.roll_no == null) {



                        div_data += "<option value=" + obj.id + ">" + obj.full_name +  "</option>";





                    } else {

                        div_data += "<option value=" + obj.id + ">" + obj.full_name +  " (" + obj.roll_no + ") " + "</option>";

                    }



                });

                $('#sibiling_student_id').append(div_data);

            }

        });

    }



    $(document).on('click', '.add_sibling', function () {

        var student_id = $('#sibiling_student_id').val();

        var base_url = '<?php echo base_url() ?>';

        if (student_id.length > 0) {

            $.ajax({

                type: "GET",

                url: base_url + "student/getStudentRecordByID",

                data: {'student_id': student_id},

                dataType: "json",

                success: function (data) {

                    $('#sibling_name').text("Sibling: " + data.full_name);

                    $('#sibling_name_next').val(data.firstname + " " + data.lastname);

                    $('#sibling_id').val(student_id);

                    $('#father_name').val(data.father_name);

                    $('#father_phone').val(data.father_phone);

                    $('#father_occupation').val(data.father_occupation);

                    $('#mother_name').val(data.mother_name);

                    $('#mother_phone').val(data.mother_phone);

                    $('#mother_occupation').val(data.mother_occupation);

                    $('#guardian_name').val(data.guardian_name);

                    $('#guardian_relation').val(data.guardian_relation);

                    $('#guardian_address').val(data.guardian_address);

                    $('#guardian_phone').val(data.guardian_phone);

                    $('#state').val(data.state);

                    $('#city').val(data.city);

                    $('#pincode').val(data.pincode); 

                    $('#current_address').val(data.current_address);

                    $('#permanent_address').val(data.permanent_address);

                    $('#guardian_occupation').val(data.guardian_occupation);

                    $("input[name=guardian_is][value='" + data.guardian_is + "']").prop("checked", true);

                    $('#mySiblingModal').modal('hide');

                }

            });

        } else {

            $('.sibling_msg').html("<div class='alert alert-danger text-center'><?php echo $this->lang->line('no_student_selected')?></div>");

        }



    });

</script>

<script type="text/javascript" src="<?php echo base_url(); ?>backend/dist/js/savemode.js"></script>