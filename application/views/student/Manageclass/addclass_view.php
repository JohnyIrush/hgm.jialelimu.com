

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

                        <i class="fa fa-plus-circle"></i>

                    </div>

                    <div class="media-body">

                        <h4>Add New Class</h4>

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

                        <form action="/class/createclass" method="post" id="">

                        <div class="panel panel-default">



                            <div class="panel-heading">

                                <div class="panel-btns" style="display: none;">

                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                </div><!-- panel-btns -->

                                <h4 class="panel-title">Add New Class</h4>

                            </div><!-- panel-heading -->

                            <div class="panel-body">

                                <div class="row">

                                    <div id="commedt123"></div>



                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">Class Name <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" name="class" class="form-control" id="class" placeholder="e.g. Form One" maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    



                                    



                                </div><!-- row -->

                            </div><!-- panel-body -->

                            

                            <div class="panel-footer">

                              <div class="row">

                                <div class="col-sm-9 col-sm-offset-3">                                            

                                    <button class="btn btn-primary mr5" id="btnaddclass">Add Class</button>

                                    <button type="reset" class="btn btn-dark">Clear</button>

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

