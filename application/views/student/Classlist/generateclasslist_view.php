

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
                                <i class="fa fa-list-ul"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><i class="fa fa-list-ul"></i></li>
                                    <li>Students Per Class</li>
                                </ul>
                                <h4>Students Per Class</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row" style="background:url('images/back.png');">
                           <div class="col-md-3">
                           </div>

                            <!--edit school-->
                            <div class="col-md-6">
                                <form  action="/class/classlist" method="post">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">View Students Per Class</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">
                                             <div id="commedt123" style="text-align:center"></div>  

                                                <div class="form-group">                                               
                                                <label class="col-sm-3 control-label">Class</label>
                                                <div class="col-sm-9">
                                                    <select id="classchosen" name="classid" data-placeholder="Choose One" class="width100p form-control" required="">
                                                        <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                                  </div>
                                                </div><!-- form-group -->   

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Option</label>
                                                    <div class="col-sm-9">
                                                        <div class="pull-left">
                                                            <div class="ckbox ckbox-primary mt10">
                                                                <input type="checkbox" value="1" name="all" id="all" checked="">
                                                                <label for="selectoption">All Streams</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- form-group -->

                                                <div id="loadedstreams" style="display: block;"><div class="form-group">
                                              <label class="col-sm-3 control-label">Stream</label>
                                              <div class="col-sm-9">
                                                  <select id="fruits3" name="streamid" data-placeholder="Choose One" class="width100p form-control" required<option="">Choose One<option value="1">UNITY</option><option value="5">PEACE</option></select>
                                                </div>
                                              </div><!-- form-group -->
                                             
                                              </div>                                       

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    
                                    
                                    <div class="panel-footer">
                                      <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">     
                                                                                 
                                            <button class="btn btn-primary mr5" id="btnallocateclass">Get Record</button>
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

