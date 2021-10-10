
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    
<div class="row"> <!--open-->
  <div class="content-wrapper container"><!--open-->
         
<!--Modal: modalPush-->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="markscreated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading"></p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-bell fa-4x animated rotateIn mb-4"></i>

        <p >

        <?php
         foreach ($subjects as $subject) {
              echo  $subject->subject . ' Marks For ';
        }
          foreach ($studentdetails as $studentdetail) {

            echo $studentdetail->Name . ' Has been Entered successfully';

          }
        ?>
        </p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">

        <a href="/exams/addstudentmarksloadstudents" class="btn btn-info">Continue Adding</a>

        <a  href="/exams/addstudentmarks"  class="btn btn-primary waves-effect" >Select Another Class</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->
  </div><!--close-->
</div> <!--close-->

 

<script>


$('#markscreated').modal('show');

</script>



</body>

</html>

