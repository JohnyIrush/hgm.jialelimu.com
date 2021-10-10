



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

                    <i class="fa fa-mortar-board"></i>

                </div>

                <div class="media-body">

                    <ul class="breadcrumb">

                        <li><i class="fa fa-mortar-board"></i></li>

                        <li>Promote Students</li>

                    </ul>

                    <h4>Promote Students</h4>

                </div>

            </div><!-- media -->

        </div><!-- pageheader -->

         

        <div class="contentpanel">

            

            <div class="row" style="background:url('images/back.png');">

               <div class="col-md-3">

               </div>



                <!--edit school-->

                <div class="col-md-6">

                    <form action="/promotedemote" method="post">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <div class="panel-btns" style="display: none;">

                                <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                            </div><!-- panel-btns -->

                            <h4 class="panel-title">Promote Students</h4>

                        </div><!-- panel-heading -->

                        <div class="panel-body">

                            <div class="row">

                                <h4 style="text-align:center">Current Class</h4>

                                <div class="form-group">

                                <label class="col-sm-3 control-label">Class</label>

                                <div class="col-sm-9">

                                    <select name="currentclassid" id="fruits2" data-placeholder="Choose One" class="form-control" required="">

                                    <option selected>Select Current Class</option>
                                        <?php

                                          $classoptions = '';

                                          foreach ($classes as $class) {



                                              $classoptions .= '<option value="' . $class->classesID . '">' . $class->classes . '</option>';



                                              

                                          }
                                          echo $classoptions;

                                         ?>

                                    </select>

                                  </div>

                                </div>
                                <!-- form-group -->


                                            <hr>

                                            <h4 style="text-align:center">New Class</h4>

                                            <div class="form-group">

                                            <label class="col-sm-3 control-label">Class</label>

                                            <div class="col-sm-9">

                                               <select name="newclassid" id="" class="form-control" required="">

                                                   <option selected>Select New Class</option>
                                                  <?php

         

                                                   $classoptions = '';
         
                                                   foreach ($classes as $class) {
         
         
         
                                                       $classoptions .= '<option value="' . $class->classesID . '">' . $class->classes . '</option>';
         
         
         
                                                       
         
                                                   }

                                                   echo $classoptions;

                                                  ?>

                                               </select>

                                              </div>

                                            </div><!-- form-group -->



                                            <!--streams will be loaded here-->
                                             <!--
                                            <div id="loadedstreams2">
                                            <div class="form-group">

                                            <label class="col-sm-3 control-label">Stream</label>

                                            <div class="col-sm-9">

                                                <select name="streamid" id="" class="form-control">

                                                  <?php

                                                  /*
         

                                                   foreach ($streams as $stream) {

         

                                                       $options = '<option value="' . $stream->id . '">' . $stream->stream . '</option>';

         

                                                       echo $options;

                                                   }

                                                   */
                                                  ?>

                                                </select>

                                            </div>

                                            </div> form-group </div>-->


                                            <hr>

                                        </div><!-- row -->

                                    </div><!-- panel-body -->

                                    

                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <div id="commedt123"><p></p></div>

                                            <button class="btn btn-primary mr5" id="btnpromote">Promote Students</button>

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



</body>



</html>



