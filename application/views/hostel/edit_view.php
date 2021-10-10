

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

    </style>

    

    <div class="row"> 



      <div class="content-wrapper container">

           <div class="mainpanel">
           <section class="panel">

    <div class="pageheader">

        <div class="media">

            <div class="pageicon pull-left">

                <i class="fa fa-pencil-square-o"></i>

            </div>

            <div class="media-body">

                <h4>Edit Hostel/Domitory/House</h4>

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

             <?php

             foreach ($hostels as $hostel) {
               echo

                '<form action="/hostel/update/' . $hostel->Hostelid . '" method="post" id="">

                <div class="panel panel-default">



                    <div class="panel-heading">

                        <h4 class="panel-title">Edit Class</h4>

                    </div><!-- panel-heading -->

                    <div class="panel-body">

                        <div class="row">

                        <div class="form-group">



                        <label class="control-label col-md-4"> Hostel/House/Domitory Name:</label>



                        <div class="col-md-6">

                             <input type="text"  class="form-control" name="hostelname" value="'. $hostel->hostelname .'" size="16" required="">

                        </div>



                      </div>
                        </div><!-- row -->

                    </div><!-- panel-body -->

                    

                    <div class="panel-footer">

                      <div class="row">

                        <div class="col-sm-9 col-sm-offset-3">                                            

                            <button class="btn btn-primary mr5" id="btnaddclass">Update</button>

                        </div>

                      </div>

                    </div><!-- panel-footer -->  

                </div></form>'; } ?><!-- panel -->

                

                

            </div><!-- col-md-6 -->





        </div><!--row -->   

    </div><!-- contentpanel -->

    

</div>

      </div>

    </div>

</body>

</html>

