

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

           



            <!--edit school-->

            <div class="container">

               <p></p><div class="col-md-12">

                   

                      <a class="btn btn-primary mr5" href="/class/addclass"> ADD NEW CLASS</a> <br><br>



                                <table class="table table-striped table-responsive" mb30" align="center">

                                    <thead>

                                      <tr>

                                        <th>No</th>

                                        <th>Class Name</th>

                                        <th>Actions</th>

                                      

                                      </tr>

                                    </thead>

                                    <tbody>


                                <?php 
                                
                                foreach ($classes as $class) {

                                    echo 

                                        
                            '<tr>

                            <td>' .  $class->classesID . '</td>

                            <td>' .$class->classes  .  '</td>


                            <td>
                            <div class="btn-group">



                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
            
            
            
                            <ul role="menu" class="dropdown-menu">
            
            
                                <li><a href="/class/editclass/' . $class->classesID . '">Edit</a></li>
    
            
                                <li><a href="/class/deleteclass/' . $class->classesID . '">Delete</a></li>
            

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

