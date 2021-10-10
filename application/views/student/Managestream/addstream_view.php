

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

                        <i class="fa fa-plus-square-o"></i>

                    </div>

                    <div class="media-body">

                        <ul class="breadcrumb">

                            <li><i class="fa fa-plus-square-o"></i></li>

                            <li>Add Stream</li>

                        </ul>

                        <h4>Add Stream</h4>

                    </div>

                </div><!-- media -->

            </div><!-- pageheader -->

            

            <div class="contentpanel">

                

                <div class="row" style="background:url('images/back.png');">

                   <div class="col-md-3">

                   </div>



                    <!--edit school-->

                    <div class="col-md-6">

                        <form action="/stream/createstream" method="post" id="">

                        <div class="panel panel-default">

                            <div class="panel-heading">

                                <div class="panel-btns" style="display: none;">

                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                </div><!-- panel-btns -->

                                <h4 class="panel-title">Add New Stream</h4>

                            </div><!-- panel-heading -->

                            <div class="panel-body">

                                <div class="row">

                                    <!--<div class="form-group row">

                                        <label class="col-sm-3 control-label"></label>

                                        <div class="col-sm-9">

                                            <div class="pull-left">

                                                <div class="ckbox ckbox-primary mt10">

                                                    <input type="checkbox" id="streamoption" name="classid" value='1' checked="">

                                                    <label for="streamoption">Add to All Classes</label>

                                                </div>

                                            </div>

                                        </div>

                                    </div>-->


                                        <div class="form-group row">

                                            <label class="col-sm-3 control-label">Stream Name <span class="asterisk">*</span></label>

                                            <div class="col-sm-9">

                                                <input type="text" name="streamname" class="form-control" id="streamname" placeholder="e.g Green" maxlength="50">

                                            </div>

                                        </div><!-- form-group -->

                                        



                                    



                                </div><!-- row -->

                            </div><!-- panel-body -->

                            

                            <div class="panel-footer">

                              <div class="row">

                                <div class="col-sm-9 col-sm-offset-3">

                                    <div id="edtschcomm"></div>

                                    <button class="btn btn-primary mr5" id="btnaddstream">Add Stream</button>

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

