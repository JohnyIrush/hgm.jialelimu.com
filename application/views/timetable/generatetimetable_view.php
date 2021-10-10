

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url() ?>backend/material-rtl-time-picker/mdtimepicker.css" />
    <script src="<?php echo base_url() ?>backend/material-rtl-time-picker/mdtimepicker.js"></script>


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

        .table-bordered th, .table-bordered td { border: 2px solid Black!important }

        th, td {
    padding: 0;
}

    </style>


    <div class="row justify-content-md-center"> 
      <div class="content-wrapper container">
         <div class="panel">
           <div class="panel-heading">
             <div class="row justify-content-md-center">
               <div class="col-md-12 text-center">
                 <h2>Timetable Settings</h2>
               </div>
             </div>
           </div>
           <div class="panel-body">
           <div class="row justify-content-md-center">
               <div class="col-md-6">
                   <section class="panel">
                       <div class="panel panel-default">
                         <div class="panel-heading">
                             <div class="row justify-content-md-center">
                                 <div class="col-md-12 text-center"> <h4>Timetable Sessions</h4> </div>
                             </div>
                             <div class="row justify-content-md-center">
                                 <div class="col-md-6">
                                     <button class="btn btn-primary  " type="button" data-toggle="collapse" data-target="#sessioncollapse" aria-expanded="false" aria-controls="sessioncollapse"> View Sessions </button>
                                 </div>
                                 <div class="col-md-6">
                                     <button class="btn btn-primary" data-toggle="modal" data-target="#sessionModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add Session</button>
                                 </div>
                             </div>
                         </div>
                         <div class="panel-body collapse" id="sessioncollapse">
                         <table class="table table-hover table-dark">
                           <thead>
                             <tr>
                               <th scope="col">Session</th>
                               <th scope="col">Session Start Time</th>
                               <th scope="col">Session End Time</th>
                               <th> Actions </th>
                             </tr>
                           </thead>
                           <tbody>

                             
                               <?php
                               foreach ($daytimes as $session) {
                                   echo '<tr><td>' . $session->daytime. '</td>';
                                   echo '<td>' . $session->daystarttime. '</td>';
                                   echo '<td>' . $session->dayendtime. '</td>';
                                   echo 
                                   '<td class="hiddenfields" > 

                                   <div class="btn-group">
                      
                      
                      
                                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                      
                      
                      
                                      <ul role="menu" class="dropdown-menu">';?>
                      
                      
                      
                                          <li><a role="button" onclick="submiform( '<?php   echo base_url()  . '/timetable/editsession/' . $session->daytimeid ?>' ,'editsession')" >Edit</a></li>
                      
                      
                      
                                          <li><a href="' . base_url()  . '/timetable/deletesession/' . $session->daytimeid . ' ">Delete </a></li>
                      
                      
                                          <?php

            
                                      echo '</ul>
                      
                      
                      
                                   </div> 
                      
                                  </td></tr> ';
                               }
                               ?>
                           </tbody>
                         </table>
                         </div>
                         <div class="panel-footer"></div>
                       </div>
                   </section>
               </div>
               <div class="col-md-6">
                   <section class="panel">
                   <div class="panel panel-default">
                         <div class="panel-heading">
                             <div class="row justify-content-md-center">
                                 <div class="col-md-12 text-center"> <h4>Timetable Venues</h4> </div>
                             </div>
                             <div class="row justify-content-md-center">
                                 <div class="col-md-6">
                                     <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#venuecollapse" aria-expanded="false" aria-controls="venuecollapse"> View  Venue </button>
                                 </div>
                                 <div class="col-md-6">
                                     <button class="btn btn-primary" data-toggle="modal" data-target="#venuenModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add Venue</button>
                                 </div>
                             </div>
                         </div>
                         <div class="panel-body collapse" id="venuecollapse">
                         <table class="table table-hover table-dark">
                           <thead>
                             <tr>
                               <th scope="col">Venue</th>
                               <th> Actions </th>
                             </tr>
                           </thead>
                           <tbody>

                             
                               <?php
                               foreach ($timetablevenues as $timetablevenue) {
                                   echo '<tr><td>' . $timetablevenue['timetablevenue'] . '</td>';
                                   echo 
                                   '<td class="hiddenfields" > 

                                   <div class="btn-group">
                      
                    
                                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                      
                      
                      
                                      <ul role="menu" class="dropdown-menu">
                      
                      
                      
                                          <li><a href="/timetable/editsession/' . $timetablevenue['timetablevenueid'] .'">Edit</a></li>
                      
                      
                      
                                          <li><a href="/timetable/deletesession/' . $timetablevenue['timetablevenueid'] . ' ">Delete</a></li>
                      
                      
            
                                      </ul>
                      
                      
                      
                                   </div> 
                      
                                  </td></tr> ';
                               }
                               ?>
                           </tbody>
                         </table>
                         </div>
                         <div class="panel-footer"></div>
                       </div>
                   </section>
               </div>
           </div> 
           <div class="row justify-content-md-center">
               <div class="col-md-6">
                   <section class="panel">
                   <div class="panel panel-default">
                         <div class="panel-heading">
                             <div class="row justify-content-md-center">
                                 <div class="col-md-12 text-center"> <h4>Timetable Events</h4> </div>
                             </div>
                             <div class="row justify-content-md-center">
                                 <div class="col-md-6">
                                     <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#eventcollapse" aria-expanded="false" aria-controls="eventcollapse"> View Events </button>
                                 </div>
                                 <div class="col-md-6">
                                     <button class="btn btn-primary" data-toggle="modal" data-target="#eventsModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add Events</button>
                                 </div>
                             </div>
                         </div>
                         <div class="panel-body collapse"  id="eventcollapse">
                         <table class="table table-hover table-dark">
                           <thead>
                             <tr>
                               <th scope="col">Event</th>
                               <th scope="col">Duration</th>
                               <th> Actions </th>
                             </tr>
                           </thead>
                           <tbody>

                             
                               <?php
                               foreach ($timetableevents as $timetableevent) {
                                   echo '<tr><td>' . $timetableevent['timetableevent'] . '</td>';
                                   echo '<td>' . $timetableevent['duration'] . '</td>';
                                   echo 
                                   '<td class="hiddenfields" > 

                                   <div class="btn-group">
                      
                    
                                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                      
                      
                      
                                      <ul role="menu" class="dropdown-menu">
                      
                      
                      
                                          <li><a href="/timetable/editsession/' . $timetableevent['timetableeventid'] .'">Edit</a></li>
                      
                      
                      
                                          <li><a href="/timetable/deletesession/' . $timetablevenue['timetableeventid'] . ' ">Delete</a></li>
                      
                      
            
                                      </ul>
                      
                      
                      
                                   </div> 
                      
                                  </td></tr> ';
                               }
                               ?>
                           </tbody>
                         </table>
                         </div>
                         <div class="panel-footer"></div>
                       </div>
                   </section>
               </div>
               <div class="col-md-6">
                   <section class="panel">
                   <div class="panel panel-default">
                         <div class="panel-heading">
                             <div class="row justify-content-md-center">
                                 <div class="col-md-12 text-center"> <h4>Timetable Days</h4>  </div>
                             </div>
                             <div class="row justify-content-md-center">
                                 <div class="col-md-6">
                                     <button class="btn btn-primary"  type="button" data-toggle="collapse" data-target="#daycollapse" aria-expanded="false" aria-controls="daycollapse"> View Days </button>
                                 </div>
                                 <div class="col-md-6">
                                     <!--<button class="btn btn-primary" data-toggle="modal" data-target="#dayModal" > <i class="fa fa-plus" aria-hidden="true"></i>Add Days</button> -->
                                 </div>
                             </div>
                         </div>
                         <div class="panel-body collapse" id="daycollapse">
                         <table class="table table-hover table-dark">
                           <thead>
                             <tr>
                               <th scope="col">Day</th>
                               <th scope="col">Active</th>
                               <th> Actions </th>
                             </tr>
                           </thead>
                           <tbody>

                             
                               <?php
                               foreach ($tdays as $day) {
                                   echo '<tr><td>' . $day->day . '</td>';
                                   echo '<td>' . $day->Active . '</td>';
                                   echo 
                                   '<td class="hiddenfields" > 

                                   <div class="btn-group">
                      
                    
                                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                      
                      
                      
                                      <ul role="menu" class="dropdown-menu">';


                                      if($day->Active == 'yes'){

                                        echo '<li><a href="' . base_url()  . 'timetable/deactivateday/' . $day->dayid . ' ">Deactivate</a></li>';

                                      }else{
                                        echo '<li><a href="' . base_url()  . 'timetable/activateday/' . $day->dayid . ' ">Activate</a></li>';
                                      }
                      
                                      
                      
                      
            
                                      echo '</ul>
                      
                      
                      
                                   </div> 
                      
                                  </td></tr> ';
                               }
                               ?>
                           </tbody>
                         </table>
                         </div>
                         <div class="panel-footer"></div>
                       </div>
                   </section>
               </div>
           </div> 
           </div>
         </div>
         <div class="panel">
           <div class="panel-heading">
             <div class="row justify-content-md-center">
               <div class="col-md-12 text-center">
                 <h1>Generate New School Timetable</h1>
               </div>
             </div>
             <div class="row justify-content-md-center">
               <div class="col-md-6">
                 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#schtimetablecollapse" aria-expanded="false" aria-controls="schtimetablecollapse" >View School Timetable</button>
               </div>
               <div class="col-md-6">
                 <a  href="<?php echo base_url() ?>/timetable/generate" class="btn btn-lg btn-primary"> Generate New Timetable</a>
               </div>
             </div>
           </div>
           <div class="panel-body">
             <div class="row">
             <div class="col-md-12 collapse" id="schtimetablecollapse">
               <?php  $this->load->view('timetable/timetables_view'); ?>
             </div>
             </div>
           </div>
         </div>
          <!-- sesssion Modal -->
          <div class="modal fade" id="sessionModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <form id="sessionform" action="<?php echo base_url() ?>timetable/addsession" method="post">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">

                  <script>
                    if (sessionmode="addsession") {
                      document.write('Add Sessions');
                    }else{
                      document.write('Edit Sessions');
                    }
                  </script>
            
                  
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   <div class="form-group row justify-content-md-center">
                     <label for="session" class="col-md-4">Session:</label>
                     <div class="col-md-8">
                       <input type="text"  required="" class="form-control" name="session" id="session">
                     </div>
                   </div>
                   <div class="form-group row justify-content-md-center">
                     <label for="sessionstt" class="col-md-4">Session Starttime:</label>
                     <div class="col-md-8">
                     <input type="text"  required="" class="form-control" name="sessionstt" id="timepickersessionstt" placeholder="Pick a time..." />
                     </div>
                   </div>
                   <div class="form-group row justify-content-md-center">
                     <label for="sessionset" class="col-md-4">Session Endtime:</label>
                     <div class="col-md-8">
                     <input type="text"  required="" class="form-control" name="sessionset" id="timepickersessionset" placeholder="Pick a time..." />
                     </div>
                   </div> 
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Add Session</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Venue Modal -->
          <div class="modal fade" id="venuenModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Venues</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <form  id="venueform">
                   <div class="form-group row justify-content-md-center">
                     <label for="session" class="col-md-4">Venue:</label>
                     <div class="col-md-8">
                       <input type="text" class="form-control" name="venue" id="venue">
                     </div>
                   </div>
                 </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Add Venue</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Events Modal -->
          <div class="modal fade" id="eventsModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <form id="eventform" >
                   <div class="form-group row justify-content-md-center">
                     <label for="session" class="col-md-4">Event:</label>
                     <div class="col-md-8">
                       <input type="text" class="form-control" name="event" id="event">
                     </div>
                   </div>
                   <div class="form-group row justify-content-md-center">
                     <label for="session" class="col-md-4">Duration:</label>
                     <div class="col-md-8">
                       <input type="number" class="form-control" name="duration" id="duration">
                     </div>
                   </div>
                 </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Add Event</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Events Modal -->
          <div class="modal fade" id="dayModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <form id="eventform" >
                   <div class="form-group row justify-content-md-center">
                     <label for="session" class="col-md-4">Day:</label>
                     <div class="col-md-8">
                       <input type="text" class="form-control" name="day" id="event">
                     </div>
                   </div>
                 </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Add Event</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>



<script type="text/javascript">

var sessionmode="addsession";
var venuemode="addvenue";
var eventmode="addevent";

function submiform(URL, mode){

if (mode=='editsession') {
  sessionmode = mode;
  $('#sessionModal').modal('show');
}

  $("#sessionform").submit(function (e) {
 
e.preventDefault(); // avoid to execute the actual submit of the form.
$this = $(this).find("button[type=submit]:focus");

var form = $(this);
var url = URL;

$.ajax({
    type: "POST",
    url: <?php base_url() ?>'',
    data: form.serialize(), // serializes the form's elements.
    dataType: "json",
    beforeSend: function () {
        $this.button('loading');
    },
    success: function (data) {
      alert(data);
        $this.button('reset');
    }, error: function (jqXHR, textStatus, errorThrown) {
        alert('An error occurred...');
        $this.button('reset');
    },
    complete: function () {
        $this.button('reset');
    }
});


});
}

</script>

<script>


/* $(document).ready(function () {
  $("#sessionform").submit(function (event) {
    var formData = {
      session: $("#session").val(),
      sessionstt: $("#sessionstt").val(),
      sessionset: $("#sessionset").val(),
    };

    $.ajax({
      type: "POST",
      url: '<?php echo base_url() ?>' . 'timetable/addsession',
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
}); */


$(document).ready(function(){

  $('#timepickersessionstt').mdtimepicker();

});


$('#timepickersessionstt').mdtimepicker({

// format of the time value (data-time attribute)
timeFormat: 'hh:mm:ss.000', 

// format of the input value
format: 'h:mm tt',      

// theme of the timepicker
// 'red', 'purple', 'indigo', 'teal', 'green', 'dark'
theme: 'blue',        

// determines if input is readonly
readOnly: true,       

// determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
hourPadding: false,

// determines if clear button is visible  
clearBtn: false

}); 

$('#timepickersessionstt').mdtimepicker().on('timechanged',function(e){
  console.log(e.value);
  console.log(e.time);
});



// setting the value
$('#timepickersessionstt').mdtimepicker('setValue','3:30 PM');
 
// calling the `show` and `hide` functions
$('#timepickersessionstt').mdtimepicker('show');
$('#timepickersessionstt').mdtimepicker('hide');
 
// destroying the timepicker
$('#timepickersessionstt').mdtimepicker('destroy');

$(document).ready(function(){

$('#timepickersessionset').mdtimepicker();

});


$('#timepickersessionset').mdtimepicker({

// format of the time value (data-time attribute)
timeFormat: 'hh:mm:ss.000', 

// format of the input value
format: 'h:mm tt',      

// theme of the timepicker
// 'red', 'purple', 'indigo', 'teal', 'green', 'dark'
theme: 'blue',        

// determines if input is readonly
readOnly: true,       

// determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
hourPadding: false,

// determines if clear button is visible  
clearBtn: false

}); 

$('#timepickersessionset').mdtimepicker().on('timechanged',function(e){
console.log(e.value);
console.log(e.time);
});



// setting the value
$('#timepickersessionset').mdtimepicker('setValue','3:30 PM');

// calling the `show` and `hide` functions
$('#timepickersessionset').mdtimepicker('show');
$('#timepickersessionset').mdtimepicker('hide');

// destroying the timepicker
$('#timepickersessionset').mdtimepicker('destroy');


//$("#sessionform").ajaxSubmit({url: <?php echo base_url() ?>'timetable/addsession', type: 'post'});
//$("#eventform").ajaxSubmit({url: <?php echo base_url() ?>'timetable/addevent', type: 'post'});
//$("#venueform").ajaxSubmit({url: <?php echo base_url() ?>'timetable/addvenue', type: 'post'});




    </script>

</body>


</html>

