<?php


echo 
'<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="row">
 <div class="content-wrapper container">
  <div class="mainpanel">
';

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

                   <th scope="col">Code</th>';

                   foreach ($termexams as $termexam) {
                        echo 
                        

                   '<th scope="col">' .
                        $termexam->name .
                        '</th>';
                   # code...
                 }
                   
                   echo 

                   '<th scope="col">Total</th>
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

                         <td>' . $subject->code . '</td>';


                         foreach ($studenttermresults[$studentexamdetail['Name'] . $studentexamdetail['AdmNo']] as $studenttermresult) {

                                echo '<td  >';

                          
                                $subjectmark = [];

                                foreach ($studenttermresult as $termresult) {
                                if ($termresult[$subject->subject]>0) {
       
                                  echo $termresult[$subject->subject];

                                   echo '<input type="hidden" value="'.$termresult[$subject->subject].'"  id="'.$termresult['Examid'].$studentexamdetail['AdmNo'].$subject->subject.'termsubject'.'">';

                                 /* $subjectname =  $termresult['name'] .$studentexamdetail['Name'] . $studentexamdetail['AdmNo'] . $subject->subject;

                                   array_push($subjectmark ,[ $subjectname => $termresult[$subject->subject]]);
                                  $studenttermresulttwo = $studenttermresult; */
       
                                }else{
                                  echo '--';
                                }
                                
                                
                                foreach ($meangrades as $meangrade) { //loop through all meangrades set
       
                                if ($termresult[$subject->subject] >= $meangrade->Minmarks && $termresult[$subject->subject] <= $meangrade->Maxmarks) { //assign mean grade with mean score
                  
                                      
                  
                                  $gradesquery = $this->db->get_where('grades',['id' => $meangrade->Gradeid]); 
              
                                  $grades = $gradesquery->result(); //Get the remarks for mean score
              
                                  foreach ($grades as $grade) { 
              
                                      $subjectgrade = $grade->grade;
                                  }
              
                              }
                            }
              
                            if ($termresult[$subject->subject]>0) {
                              echo $subjectgrade;
                                }
       
       
                        }

                                echo '</td>';
                             # code...
                         }


                        echo '<td >';

                        echo '<p   id="' . $studentexamdetail['name'] . $studentexamdetail['AdmNo'] . $subject->subject . 'termaverage" ></p>';

                         /* foreach ($studenttermresulttwo as $termresult) {

                            $subjectname =  $termresult['name'] .$studentexamdetail['Name'] . $studentexamdetail['AdmNo'] . $subject->subject;

                            foreach($subjectmark as $mark){

                              $subjectmarktotal += $mark[$subjectname];

                            }


                          }
                          echo $subjectmarktotal; */

                         '</td>';

                         echo '<td>';


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
?>

   </div>
  </div>
</div>

<script>

var studentexamdetailsarray = <?php echo json_encode($studentexamdetailsarray, JSON_HEX_TAG); ?>; // Don't forget the extra semicolon!
var studenttermresults = <?php echo json_encode($studenttermresults, JSON_HEX_TAG); ?>; // Don't forget the extra semicolon!
var subjects = <?php echo json_encode($subjects, JSON_HEX_TAG); ?>; // Don't forget the extra semicolon!
var termexams = <?php echo json_encode($termexams, JSON_HEX_TAG); ?>; // Don't forget the extra semicolon!

studentexamdetailsarray.forEach(studentexamdetail => {


  subjects.forEach(subject => {

    var subjecttotal = 0;


      Array(studenttermresults).forEach(studenttermresult => {

    studenttermresultdata = studenttermresult[studentexamdetail['Name']+studentexamdetail['AdmNo']];

    Array(studenttermresultdata).forEach(termresult => {

      termexams.forEach(termexam => {
        

        examno = termexams.length;

        termresult[termexam['name']].forEach(termresultdetails => {

          subjecttotal += parseInt($('#' + termresultdetails['Examid'] + studentexamdetail['AdmNo'] + subject['subject']  + 'termsubject').val());

          $('#' + studentexamdetail['name'] + studentexamdetail['AdmNo']  + subject['subject']  + 'termaverage').text((subjecttotal/examno).toFixed(2));

});
  });
});

});

  });

});


</script>
  
</body>
</html>
