

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
                       <section class="panel">

            <div class="pageheader">

                <div class="media">

                    <div class="pageicon pull-left">

                        <i class="fa fa-pencil-square-o"></i>

                    </div>

                    <div class="media-body">


                        <h4>Edit Stream</h4>

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
                        foreach($streams as $stream){

                        echo

                        '<form action="/stream/updatestream/' . $stream->Streamid . '" method="post" id="">

                        <div class="panel panel-default">

                            <div class="panel-heading">

                                <h4 class="panel-title">Edit Stream</h4>

                            </div><!-- panel-heading -->

                            <div class="panel-body">

                                <div class="row">
                                  
                                <div class="form-group row">

                                    <label class="col-sm-3 control-label">Stream Name <span class="asterisk">*</span></label>

                                    <div class="col-sm-9">

                                        <input type="text" name="streamname" class="form-control" value="' . $stream->stream . '">

                                    </div>

                                </div><!-- form-group -->


                                </div><!-- row -->

                            </div><!-- panel-body -->

                            

                            <div class="panel-footer">

                              <div class="row">

                                <div class="col-sm-9 col-sm-offset-3">                                            

                                    <button class="btn btn-primary mr5" id="btnaddstream">Edit Stream</button>

                                </div>

                              </div>

                            </div><!-- panel-footer -->  

                        </div></form>';}?><!-- panel -->

                        

                        

                    </div><!-- col-md-6 -->





                </div><!--row -->   </div><!-- contentpanel -->

            

        </div>

      </div>

    </div>

</body>

</html>

