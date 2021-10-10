
<style>

.table-bordered th, .table-bordered td { border: 2px solid Black!important }

th, td {
padding: 0 !important;
}
</style>

<?php
 foreach ($classes as $class) {
                   foreach ($streams as $stream) {
                       ?>

<div class="row panel">
                           <div class="col-md-4"></div>
                           <div class="col-md-4"></div>
                           <div class="col-md-4">
                           <button role="button" onclick="printPDF()" class="btn btn-primary">Export to Pdf</button>
                           </div>
                       </div>
                  <div class="row">
                    <div class="col-md-11 text-center">
                        <h3 class="display-3"> <?php echo $class->classes .  ' ' . $stream->stream . 'Timetable' ?> </h3>
                    </div>

                    <div class="col-md-11 " id="timetable">
                     <table class="table table-bordered table-responsive">
                       <thead>
                         <tr>
                           <th scope="col">day</th>
                           <?php
                           
                             foreach ($daytimes as $daytime) {
                                  echo  '<th scope="col">'. $daytime->daytime .'</th>';
                             } 
     
                           ?>
                         </tr>
                       </thead>
                       <tbody>
                         <?php
                          foreach ($days as $day) {
                              echo '<tr>
                                     <th scope="row">' . $day->day . '</th>';
                                     echo'<td class="">
                                          <table><tr > 
                                     ';
                                      //foreach ($daytimes as $daytime) {
                                          foreach ($schtimetables as $timetable) {
      
                                              if ($timetable->timetable_dayid == $day->dayid /*&& $timetable->timetable_daytimeid == $daytime->daytimeid*/ && $timetable->timetable_daytimeid == 1 && $timetable->timetable_classid == $class->classesID && $timetable->timetable_streamid == $stream->Streamid ) {
                                                  if ($timetable->duration == 80) {
                                                     echo '<td class="col-md-8 text-center">';
                                                     echo  $timetable->timetable_eventstarttime . '-' /*. $timetable->timetable_eventendtime*/  . '<br>' . substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                                     echo '</td>';
                                                  }else{
                                                     echo '<td class="col-md-4 text-center">';
                                                     if ($day->dayid ==1) {
                                                         echo
                                                     '<div class="row">
                                                     <div class="col-md-5 text-center">';
                                                     echo  $timetable->timetable_eventstarttime;
                                                     echo '</div>
                                                     <div class="col-md-2 text-center">
                                                      -
                                                     </div>
                                                     <div class="col-md-5 text-center">';
                                                     //echo  $timetable->timetable_eventendtime;
                                                     echo '</div>
                                                     </div>';
                                                     }
     
                                                     echo '<div class="row">
                                                      <div class="col-md-12 text-center">';
                                                      echo substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                                      echo '</div>
                                                      </div>
                                                     </td>';
                                                  }
                                              }
     
                                     
                                          //}
                                      } 
                                     echo '</tr></table></td>';
     
                                     foreach ($daytimes as $daytime) {
     
                                         if ($daytime->daytimeid == 2 ) {
                                             echo  '<td class="col-md-1">';
                                             if ($day->dayid ==1) {
                                             echo '<div class="row">
                                                <div class="col-md-5">';
                                                echo $daytime->daystarttime;
                                                echo '</div>
                                                <div class="col-md-2">';
                                                echo '-';
                                                echo '</div>
                                                <div class="col-md-5">';
                                                echo $daytime->dayendtime;
                                                echo '</div>
                                             </div>';
                                             }
                                             echo '<div class="row">
                                             <div class="col-md-12">';
                                              echo $daytime->daytime;
                                             echo '</div>
                                             </div>
                                             </td>';
                                     }
     
                                     }
     
                                     echo'<td class="col-md-2" >
                                     <table>
                                      <tr class="row">
                                     ';
                                      //foreach ($daytimes as $daytime) {
                                         foreach ($schtimetables as $timetable) {
                             
                                         if ($timetable->timetable_dayid == $day->dayid /*&& $timetable->timetable_daytimeid == $daytime->daytimeid*/ && $timetable->timetable_daytimeid == 3 && $timetable->timetable_classid == $class->classesID && $timetable->timetable_streamid == $stream->Streamid) {
                                             if ($timetable->duration == 80) {
                                             echo '<div class="col-md-12 text-center">';
                                             echo   $timetable->timetable_eventstarttime . '  -  ' . $timetable->timetable_eventendtime . '<br>' .substr($timetable->timetableevent,0,3) . '/' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                             echo '</div>';
                                             }else {
                                                 echo '<td class="col-md-4 text-center">';
                                                 if ($day->dayid ==1) {
                                                     echo
                                                 '<div class="row">
                                                 <div class="col-md-5 text-center">';
                                                echo  $timetable->timetable_eventstarttime;
                                                 echo '</div>
                                                 <div class="col-md-2 text-center">
                                                  -
                                                 </div>
                                                 <div class="col-md-5 text-center">';
                                                 //echo  $timetable->timetable_eventendtime;
                                                 echo '</div>
                                                 </div>';
                                                 }
     
                                                 echo '<div class="row">
                                                  <div class="col-md-12 text-center">';
                                                  echo substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                                  echo '</div>
                                                  </div>
                                                 </td>';
                                             }
                                         }
     
                                     }
                                      //} 
                                     echo '</tr></table></td>';
     
                                     foreach ($daytimes as $daytime) {
     
                                         if ($daytime->daytimeid == 4 ) {
                                             echo  '<td class="col-md-1">';
                                             if ($day->dayid ==1) {
                                             echo '<div class="row">
                                                <div class="col-md-5">';
                                                echo $daytime->daystarttime;
                                                echo '</div>
                                                <div class="col-md-2">';
                                                echo '-';
                                                echo '</div>
                                                <div class="col-md-5">';
                                                echo $daytime->dayendtime;
                                                echo '</div>
                                             </div>';
                                             }
                                             echo '<div class="row">
                                             <div class="col-md-12">';
                                              echo $daytime->daytime;
                                             echo '</div>
                                             </div>
                                             </td>';
                                         }
     
                                     }
     
                                     echo'<td class="col-md-2" >
                                     <table>
                                      <tr class="row">
                                     ';
                                     // foreach ($daytimes as $daytime) {
                                         foreach ($schtimetables as $timetable) {
      
                                         if ($timetable->timetable_dayid == $day->dayid /*&& $timetable->timetable_daytimeid == $daytime->daytimeid*/ && $timetable->timetable_daytimeid == 5 && $timetable->timetable_classid == $class->classesID && $timetable->timetable_streamid == $stream->Streamid) {
                                             echo '<td class="col-md-6 text-center">';
                                             if ($day->dayid ==1) {
                                                 echo
                                             '<div class="row">
                                             <div class="col-md-5 text-center">';
                                             echo  $timetable->timetable_eventstarttime;
                                             echo '</div>
                                             <div class="col-md-2 text-center">
                                              -
                                             </div>
                                             <div class="col-md-5 text-center">';
                                             //echo  $timetable->timetable_eventendtime;
                                             echo '</div>
                                             </div>';
                                             }
     
                                             echo '<div class="row">
                                              <div class="col-md-12 text-center">';
                                              echo substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                              echo '</div>
                                              </div>
                                             </td>';
                                         }
                                     }
                                      //} 
                                     echo '</tr></table></td>';
                             
                                     foreach ($daytimes as $daytime) {
     
                                         if ($daytime->daytimeid == 6 ) {
                                                 echo  '<td class="col-md-1">';
                                                 if ($day->dayid ==1) {
                                                 echo '<div class="row">
                                                    <div class="col-md-5">';
                                                    echo $daytime->daystarttime;
                                                    echo '</div>
                                                    <div class="col-md-2">';
                                                    echo '-';
                                                    echo '</div>
                                                    <div class="col-md-5">';
                                                    echo $daytime->dayendtime;
                                                    echo '</div>
                                                 </div>';
                                             }
                                                 echo '<div class="row"><div class="col-md-12">';
                                                  echo $daytime->daytime;
                                                 echo '</div></div></td>';
                                         }
     
                                     }
     
                                     echo'<td class="col-md-2">
                                     <table>
                                      <tr class="row">
                                     ';
                                      //foreach ($daytimes as $daytime) {
                                         foreach ($schtimetables as $timetable) {
      
                                             if ($timetable->timetable_dayid == $day->dayid /*&& $timetable->timetable_daytimeid == $daytime->daytimeid*/ && $timetable->timetable_daytimeid == 7 && $timetable->timetable_classid == $class->classesID && $timetable->timetable_streamid == $stream->Streamid ) {
                                                 if ($timetable->duration == 80) {
                                                    echo '<div class="col-md-8 text-center">';
                                                    echo  $timetable->timetable_eventstarttime . '-' /*. $timetable->timetable_eventendtime*/  . '<br>' . substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                                    echo '</div>';
                                                 }else{
                                                     echo '<td class="col-md-4 text-center">';
                                                     if ($day->dayid ==1) {
                                                         echo
                                                     '<div class="row"><div class="col-md-5 text-center">';
                                                     echo  $timetable->timetable_eventstarttime;
                                                     echo '</div><div class="col-md-2 text-center">-</div><div class="col-md-5 text-center">';
                                                     echo  $timetable->timetable_eventendtime;
                                                     echo '</div>
                                                     </div>';
                                                     }
     
                                                     echo '<div class="row"><div class="col-md-12 text-center">';
                                                      echo substr($timetable->timetableevent,0,3) . '/<br>' . substr($timetable->timetablevenue,0,1) . substr($timetable->timetablevenue,5,6);
                                                      echo '</div>
                                                      </div>
                                                     </td>';
                                                 }
                                             }
                                 
                                     }
                                      //} 
                                     echo '</tr></table></td>';
     
                                   '</tr>';
                          }
                         ?>  
                       </tbody>
                     </table>
                    </div>
   
           <?php
                   }
               }
               ?>

            </div>

            </div>
            </div>

            <script>
          //generate pdf using javascript
function printPDF() {
            //$('.hiddenfields').remove();
            var divContents = document.getElementById("timetable").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
      </script>