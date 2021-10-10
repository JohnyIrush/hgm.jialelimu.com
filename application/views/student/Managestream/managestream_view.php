

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



      <div class="content-wrapper">

                   <div class="mainpanel">

            <div class="pageheader">

                <div class="media">

                    <div class="pageicon pull-left">

                        <i class="fa fa-pencil-square-o"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-pencil-square-o"></i></li>

                            <li>Manage Streams</li>

                        </ul>

                        <h4>Manage Streams</h4>

                        <p></p>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row">

                   



                    <!--edit school-->

                    <div class="container">

                       <div class="col-md-11">


                                     <a class="btn btn-primary mr5" href="/stream/addstream"> ADD NEW STREAM</a> <br><br>

                            

                                        <table class="table table-striped table-responsive table-primary mb30" align="center">

                                            <thead>

                                              <tr>

                                                <th>No</th>

                                                <th>Stream Name</th>

                                                <th>Actions</th>

                                              </tr>

                                            </thead>

                                            <tbody>

                                            <?php 

                                            foreach ($streams as $stream) {
                                         echo
                                        '<tr>

                                        <td>'. $stream->Streamid . '</td>

                                        <td>' .  $stream->stream . '</td>

                                        <td>
                                        <div class="btn-group">
            
            
            
                                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                        
                        
                        
                                        <ul role="menu" class="dropdown-menu">
                        
                        
                                            <li><a href="/stream/editstream/' . $stream->Streamid . '">Edit</a></li>
                
                        
                                            <li><a href="/stream/deletestream/' . $stream->Streamid . '">Delete</a></li>
                        
            
                                        </ul>
                        
                        
                        
                                     </div> 
                        
                                    </td>          

                                      </tr>'; }?>

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

