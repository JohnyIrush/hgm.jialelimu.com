

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


                <h4>Manage Class</h4>

                <p></p>

            </div>

        </div><!-- media -->

    </div><!-- pageheader -->
    </section>
    

    <div class="contentpanel">

        

        <div class="row">

           
                <!--Add Hostel/House/Domitory -->    

                <div aria-hidden="true"  data-backdrop="static" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addhostel" class="modal fade">



                  <div class="modal-dialog">



                    <div class="modal-content">



                        <div class="modal-header">



                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>



                            <h4 class="modal-title">Add Hostel/Domitory/House</h4>



                        </div>



                        <div class="modal-body">



                            <form action="/hostel/create" method="post" class="form-horizontal " enctype="multipart/form-data">



                               <div class="form-group">



                                  <label class="control-label col-md-4"> Hostel/House/Domitory Name:</label>



                                  <div class="col-md-6">

                                       <input type="text" required=""  class="form-control" name="hostelname" size="16" required="">

                                  </div>



                                </div>



                             <button type="submit" name="member" class="btn sec-bg-color">Add Hostel</button>

                            </form>

                        </div>



                    </div>



                  </div>



                </div>     

                <!--Add Hostel/House/Domitory -->  


            <!--edit school-->

            <div class="container">
                <div class="col-md-11">

                   

               <a href="#addhostel" data-toggle="modal" class="btn btn-primary">Add Hostel/Domitory/House <i class="fa fa-plus"></i></a> <br><br>


                                <table class="table table-responsive table-striped" mb30" align="center">

                                    <thead>

                                      <tr>

                                        <th>No</th>

                                        <th>Hostel/Domitory/House Name</th>

                                        <th>Actions</th>

                                      

                                      </tr>

                                    </thead>

                                    <tbody>


                                <?php 
                                
                                foreach ($hostels as $hostel) {

                                    echo 

                                        
                            '<tr>

                            <td>' .  $hostel->Hostelid . '</td>

                            <td>' .$hostel->hostelname  .  '</td>

                            <td class="hiddenfields" > 

                            <div class="btn-group">
               
               
               
                               <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
               
               
               
                               <ul role="menu" class="dropdown-menu">
               
               
               
                                   <li><a href="/hostel/edit/' . $hostel->Hostelid . '">Edit</a></li>
            
               
                                   <li><a href="/hostel/delete/' . $hostel->Hostelid . '">Delete Record</a></li>
               
            
               
               
               
                               </ul>
               
               
               
                            </div> 
               
                           </td> 

                                  

                          </tr>'; }
                          ?>
                          </tbody>

                                </table>

                        </div>                                      

            </div><!-- panel -->

                

                

        </div><!-- col-md-6 --> 



    </div><!--row -->   

     </div>

      </div>

    </div>

</body>

</html>

