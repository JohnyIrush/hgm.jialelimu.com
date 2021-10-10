<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <style type="text/css">
        @media print {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
        .m-30{
            margin-top: 30px !important;
            margin-bottom: 30px !important;
        }
        .mb-10{
          margin-bottom: 10px;
        }
    </style>

    <div class="row" > 
      <div class="content-wrapper container">
          <div class="col-md-12 m-30">
              <section class="panel">
                <div class="row">
                  <div class="col-md-6">
                    <form action="<?php echo base_url();?>exams/examreport" method="post">
                      <div class="form-group row">
                          <label class="col-sm-3 control-label">Streams</label>
                          <div class="col-sm-4">
                            <input type="hidden" value="meritlist" name="mode">
                            <select name="streamid" class="form-control">
                                <?php
                                  echo '<option value="0" selected>All Streams</option>';
                                  $streamoptions = '';                                
                                  foreach ($streams as $stream) {
                                    $streamoptions .= '<option value="'. $stream->Streamid . ' ">' . $stream->stream  . '</option>';
                                   }
                                  echo $streamoptions;
                                 ?>
                            </select>
                          </div>
                          <div class="col-sm-3">
                           <button class="btn btn-primary mr5" id="btnaddmarks">Load Merit List</button>
                          </div>
                      </div><!-- form-group -->
                    </form>
                  </div>  
                  <!--Load merit list end-->
                   <div class="col-md-6">
                     <form action="<?php echo base_url();?>exams/examreport" method="post">
                      <div class="form-group row">
                       <label class="col-sm-3 control-label">Streams</label>
                       <div class="col-sm-4">
                        <input type="hidden" value="reportcard" name="mode">
                        <select name="streamid" class="form-control">
                          <?php
                           echo '<option value="0" selected>All Streams</option>';
                           $streamoptions = '';                                
                           foreach ($streams as $stream) {
                            $streamoptions .= '<option value="'. $stream->Streamid . ' ">' . $stream->stream  . '</option>';
                           }
                           echo $streamoptions;
                          ?>
                        </select>
                       </div>
                       <div class="col-sm-3">
                        <button class="btn btn-primary mr5" id="btnaddmarks">Load Report Cards</button>
                       </div>
                      </div><!-- form-group -->
                     </form>
                   </div> 
                </div>
              </section>
          </div>
          <div class="col-md-12">
            <section class="panel">
              <div class="row">
                <div class="col-sm-6">
                  <form onsubmit="generatepdf()" action="<?php echo base_url();?>exams/examreportgenerator" method="post">
                    <input id="report" type="hidden" name="report">
                    <div class="col-md-12">
                        <button type="submit"  class="btn btn-primary">Generate Merit List PDF</button>
                    </div>
                  </form>
                </div>
                <div class="col-sm-6">
                  <form onsubmit="generatepdf()" action="<?php echo base_url();?>exams/examreportgenerator" method="post">
                    <input id="reportcard" type="hidden" name="report">
                    <div class="col-md-12">
                        <button type="submit"  class="btn btn-primary">Generate Report Card PDF</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        
          <?php
          if ($mode != 'reportcard') {
          echo
          
          '<div class="col-md-11" id="examreport">
              <!--Table-->
               <table class="table  table-striped table-bordered table-responsive"  align="center" cellspacing="0" cellpadding="1" border="1" style="border-color:gray;">
                <!--Table head-->
                <thead>
                  <tr>
                    <th>ADM</th>
                    <th style="width:100px">Name</th>
                    <th>G</th>                              
                    <th>S</th>                              
                    <th>KCPE</th>';
                    /* Loop Through all subjects in school */
                     $subs = '';
                     foreach ($subjects as $subject) {
                          $subs .= '<th>' . substr($subject->subject,0,3)  . '</th>';
                     }
                     echo $subs;
                     ?>                              
                    <th>MKS</th>                              
                    <th>M.S</th>                              
                    <th>M.G</th>                              
                    <th>CLP</th>                              
                    <th>FRP</th>                              
                  </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                <?php
                foreach ($studentexamdetailsarray as $studentexamdetail) {
                    echo 
                  '<tr class="table-info">
          
          
          
                  <th scope="row">' . $studentexamdetail['AdmNo'] . '</th>
          
          
          
                  <td style="width:100px">' . $studentexamdetail['Name'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Gender'] . '</td>
          
          
          
                  <td>';

                  echo $this->session->reportdetails['classid'];
                  
                   $sectionname = '';
             foreach ($streams as $stream) {

                 if ($studentexamdetail['Sectionid']  == $stream->Streamid) {

                     $sectionname = $stream->stream;

                 }

             }

             echo  $sectionname;
                  
                  
                  
                  echo '</td>
          
          
          
                  <td>' . $studentexamdetail['EntryMarks'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['English'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Kiswahili'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Mathematics'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Biology'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Physics'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Chemistry'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['History'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Geography'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['CRE'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Agriculture'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['Business'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['TMarks'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['MScore'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['MGR'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['CLP'] . '</td>
          
          
          
                  <td>' . $studentexamdetail['FRP'] . '</td> </tr>';
          
                 }
           
                 ?>
                </tbody>
               <!--Table body-->
               </table>
               <!--Table-->
          </div>
          <?php } 
          
          
          
          /*Line chart*/
          
           $dataPoints = array(
          
          	array("x"=> 10, "y"=> 41),
          
          	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
          
          	array("x"=> 30, "y"=> 50),
          
          	array("x"=> 40, "y"=> 45),
          
          	array("x"=> 50, "y"=> 52),
          
          	array("x"=> 60, "y"=> 68),
          
          	array("x"=> 70, "y"=> 38),
          
          	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
          
          	array("x"=> 90, "y"=> 52),
          
          	array("x"=> 100, "y"=> 60),
          
          	array("x"=> 110, "y"=> 36),
          
          	array("x"=> 120, "y"=> 49),
          
          	array("x"=> 130, "y"=> 41)
          
          ); 
          
          /*Line chart*/
          
          
          
          if ($mode == 'reportcard') {
          
          
          
             echo 
             '<div class="container ">
              <div id="reportcards">';
          
            foreach ($studentexamdetailsarray as $studentexamdetail) {
          
              echo '

                   <div class="row mb-10 "  >
                     <div class="col-md-2" ></div>

                     <div class="col-md-8 card" style="background-color: white;">

                      <div class="row">
                      <table class="table" align="center" cellspacing="0" cellpadding="1">
                      <thead>
                      <tr>
                        <th scope="col">
                        <img src="/backend/images/global/logo.png" class="img-fluid imag-size" style="width: 65px; height: 65px;" alt="" srcset="">
                        </th>
                        <th scope="col">';
                        foreach ($schoolsettings as $schoolsetting) {
              
                          echo
                          '<div class="col-md-12 text-center">
        
                             <h4>' . $schoolsetting->name . ' </h4>
        
                          </div>
        
                          <div class="col-md-12 text-center">
        
                               <p>' . $schoolsetting->address . '  <br> Tel: ' . $schoolsetting->phone . ' </p>
        
                          </div>';
                        }
                          echo
                          '<div class="col-md-12 text-center">
        
                              <h3> <u>REPORT CARD</u></h3>
        
                         </div>';
    
                        echo '</th>
                        <th scope="col">
                        <img src="/backend/images/reportcard/student.png" class="img-fluid  imag-size" style="width: 65px; height: 65px;" alt="" srcset="">
                        </th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th scope="row" class="text-center"><h5>ADM NO: ' . $studentexamdetail['AdmNo'] . '</h5></th>
                        <td class="text-center"><h5>Full Name: ' . $studentexamdetail['Name'] . '</h5></td>
                        <td class="text-center"><h5>Gender: ' . $studentexamdetail['Gender'] . '</h5></td>
                      </tr>
                      <tr>
                        <th class="text-center" scope="row"><h5>TERM: ';

                        foreach ($allexams as $exam) {
                          if ($studentexamdetail['Examid'] == $exam->Examid ) {
                            # code...
                            foreach ($allterms as $term) {
                              if ($exam->termid == $term->id) {
                                echo $term->term;
                              }
                            }
                          }
                        # code...
                      }
                        
                       echo '</h5></th>
                        <td class="text-center"><h5>YEAR:  ' ;

                        foreach ($allexams as $exam) {
                            if ($studentexamdetail['Examid'] == $exam->Examid ) {
                              # code...
                              foreach ($allterms as $term) {
                                if ($exam->termid == $term->id) {
                                  echo $term->year;
                                }
                              }
                            }
                          # code...
                        }

                       echo '</h5></td>
                        <td class="text-center"><h5>CLASS: ';
                        
                        echo $this->session->reportdetails['classid'];
                  
                        $sectionname = '';
                  foreach ($streams as $stream) {
     
                      if ($studentexamdetail['Sectionid']  == $stream->Streamid) {
     
                          $sectionname = $stream->stream;
     
                      }
     
                  }
     
                  echo  $sectionname;
                        
                       echo '</h5></td>
                      </tr>
                      <tr>
                      <th class="text-center" scope="row"><h5>Rank(class) ' . $studentexamdetail['CLP'] . ' out of ' . $studentexamdetail['Totalclassrank'] . '</h5></th>
                      <td class="text-center"><h5>Rank(Form) ' . $studentexamdetail['FRP'] . '  out of ' . $studentexamdetail['Totalformrank'] . '</h5></td>
                      <td class="text-center"><h5>KCPE: ' . $studentexamdetail['EntryMarks'] . '</h5></td>
                      </tr>
                      </tbody>
                      </table>
                      </div>
                     <div class="row">
                        <table class="table table-bordered" align="center" cellspacing="0" cellpadding="1" border="1" style="border-color:gray;">
                            <thead>
          
                              <tr>
          
                                <th scope="col">Subject</th>
          
                                <th scope="col">Code</th>
          
                                <th scope="col">';

                                foreach ($allexams as $exam) {
                                  if ($studentexamdetail['Examid'] == $exam->Examid ) {
                                    # code...
                                   echo $exam->name;
                                  }
                                # code...
                              }
                                
                                echo '</th>
          
                                <th scope="col">Pts</th>
          
                                <th scope="col">Remarks</th>
          
                                <th scope="col">Teacher</th>
          
                              </tr>
          
                            </thead>
          
                            <tbody>';
          
                                 /* Loop Through all subjects in school */
          
                            
          
                                    $subs = '';
          
                            
          
                                 foreach ($subjects as $subject) {
          
                            
          
                                      /*$subs .= */
          
                                      echo
          
                                      '<tr><th scope="row">' . $subject->subject . '</th>
          
                                      <td>' . $subject->code . '</td>
          
                                      <td>';

                                      if ($studentexamdetail[$subject->subject]>0) {

                                        echo $studentexamdetail[$subject->subject];

                                      }else{
                                        echo '---';
                                      }
                                      
                                      
                                      foreach ($meangrades as $meangrade) { //loop through all meangrades set

                                      if ($studentexamdetail[$subject->subject] >= $meangrade->Minmarks && $studentexamdetail[$subject->subject] <= $meangrade->Maxmarks) { //assign mean grade with mean score
                        
                                            
                        
                                        $gradesquery = $this->db->get_where('grades',['id' => $meangrade->Gradeid]); 
                    
                                        $grades = $gradesquery->result(); //Get the remarks for mean score
                    
                                        foreach ($grades as $grade) { 
                    
                                            $subjectgrade = $grade->grade;
                                        }
                    
                                    }
                                  }
                    
                                
                                  if ($studentexamdetail[$subject->subject]>0) {
                                echo $subjectgrade;
                                  }


                                      
                                      echo '</td>
          
                                      <td>';
          
          
                                    foreach ($meangrades as $meangrade) { //loop through all meangrades set

                                      if ($studentexamdetail[$subject->subject] >= $meangrade->Minmarks && $studentexamdetail[$subject->subject] <= $meangrade->Maxmarks) { //assign mean grade with mean score
                        
                                            
                        
                                        $gradesquery = $this->db->get_where('grades',['id' => $meangrade->Gradeid]); 
                    
                                        $grades = $gradesquery->result(); //Get the remarks for mean score
                    
                                        foreach ($grades as $grade) { 
                    
                                            $subjectgrade = $grade->points;
                                        }
                    
                                    }
                                  }
                    
                                
                                  if ($studentexamdetail[$subject->subject]>0) {
                                    echo $subjectgrade;
                                      }else{
                                        echo '---';
                                      }
      
                                
                                     echo
                                      '</td><td>';
          
                                      foreach ($meangrades as $meangrade) { //loop through all meangrades set
          
          
          
                                        if ($studentexamdetail[$subject->subject] >= $meangrade->Minmarks && $studentexamdetail[$subject->subject] <= $meangrade->Maxmarks) { //assign mean grade with mean score
                        
                                            
                        
                                            $remarksquery = $this->db->get_where('remarks',['id' => $meangrade->Gradeid]); 
                        
                                            $remarks = $remarksquery->result(); //Get the remarks for mean score
                        
                                            foreach ($remarks as $remark) { 
                        
                        
                                                 if ($subject->subject=="Kiswahil") {
                                                  $subejectremark = $remark->Kiswahiliremarks;
                                                 }else{
                                                  $subejectremark = $remark->Englishremarks;
                                                 }
                                                
                                                
                        
                        
                        
                                            }
                        
                                        }
                        
                                    }

                                    
          
                                    if ($studentexamdetail[$subject->subject]>0) {
                                      echo $subejectremark;
                                        }else{
                                          echo '---';
                                        }
                                    
                                      echo
                                      '</td>
          
                                      <td>' . $subject->name . '  '  .  $subject->surname . '</td>
          
                                    </tr>';
          
                            
          
                                 }
          
                            
          
                                 //echo $subs;  
          
                                 echo                
          
                              '<tr>
          
                                <td colspan="4"></td>
          
                                <th colspan="3"><p>T.Marks: ' . $studentexamdetail['TMarks'] . ' T.Points: ' . $studentexamdetail['TPoints']  . ' M.score: ' . $studentexamdetail['MScore'] . ' ' . $studentexamdetail['MGR'] . '</p></th>
          
                              </tr>
          
                            </tbody>
          
                          </table>
          
                      </div>
                      
          
                    <div class="row">
                   <div class="col-md-8">
          

                       <table class="table" align="center" cellspacing="0" cellpadding="1">
                        <tbody>
                          <tr>
                            <th scope="row">Class Teacher:  </th>
                            <th>' . $studentexamdetail['name'] .' '. $studentexamdetail['surname']  . '</th>
                            <th scope="row">

                            Remarks: ';
          
                            foreach ($meangrades as $meangrade) { //loop through all meangrades set
               
               
               
                                if ($studentexamdetail['TPoints'] >= $meangrade->Minmarks && $studentexamdetail['Tpoints'] <= $meangrade->Maxmarks) { //assign mean grade with mean score
               
                                    
                                    $remarksquery = $this->db->get_where('remarks',['id' => $meangrade->Gradeid]); 
               
                                    $remarks = $remarksquery->result(); //Get the remarks for mean score
               
                                    foreach ($remarks as $remark) { 
       
                                          $teacherremark = $remark->Teacherremarks;
                                        
                                    }
                                }
                               }
               
                             
                              echo   $teacherremark;
                              echo
                             '
                            </th>
                          </tr>
                          <tr>
                            <th scope="row"> Principal: </td>
                            <th>';
                            
                            foreach ($principal as $detail) {
                              echo $detail->name . '  ' . $detail->surname;
                            }

                            echo '</th>';
                            
                            foreach ($meangrades as $meangrade) { //loop through all meangrades set
                
                              if ($studentexamdetail['TPoints'] >= $meangrade->Minmarks && $studentexamdetail['Tpoints'] <= $meangrade->Maxmarks) { //assign mean grade with mean score
              
                                  $remarksquery = $this->db->get_where('remarks',['id' => $meangrade->Gradeid]); 
                
                                  $remarks = $remarksquery->result(); //Get the remarks for mean score
                
                                  foreach ($remarks as $remark) { 
                                        $headteacherremark = $remark->HeadTeacherremarks;
                                      
                                      }
                                  }
                
                                 }
                   
                                echo                  
                                '<th>Remarks: ' . $headteacherremark . '  </th>';
                               
                               echo
                               '
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">
                            Cloding Date: ' . $studentexamdetail['to'] . ' 
                            </th>  
                            <td></td>                  
                            <th scope="row">Opening Date: </th>
                            <td></td>  
                          </tr>
                        </tbody>
                      </table>
                   </div>
                   </div>

               </div>

               <div class="col-md-2"></div>
          
              </div>';
          
          }
          echo '</div></div>';
          }
          
          
          
          ?>





      </div>



    </div>





    <script>

     generatepdf = () => {

      var mode = <?php echo json_encode($mode, JSON_HEX_TAG); ?>;

       if (mode!='reportcard') {

        $('#report').val($('#examreport').html());
        

       }else if (mode == 'reportcard' ) {

        $('#reportcard').val($('#reportcards').html());

       }
  
      
      }



        //Line Chart

        window.onload = function () {

   

   var chart = new CanvasJS.Chart("chartContainer", {

     animationEnabled: true,

     exportEnabled: true,

     theme: "light1", // "light1", "light2", "dark1", "dark2"

     title:{

       text: "Simple Column Chart with Index Labels"

     },

     axisY:{

       includeZero: true

     },

     data: [{

       type: "column", //change type to bar, line, area, pie, etc

       //indexLabel: "{y}", //Shows y value on all Data Points

       indexLabelFontColor: "#5A5757",

       indexLabelPlacement: "outside",   

       dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>

     }]

   });

   chart.render();

    

   }



    </script>





</body>



</html>

