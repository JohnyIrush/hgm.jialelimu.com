



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

            <div class="pageheader">

             <div class="media">

                 <div class="pageicon pull-left">

                     <i class="fa fa-folder"></i>

                 </div>

                 <div class="media-body">

                     <ul class="breadcrumb">

                         <li><i class="fa fa-fa fa-folder"></i></li>

                         <li>Subject Category</li>

                     </ul>

                     <h4>Subject Category (Based on grading groups) </h4>

                 </div>

             </div><!-- media -->

         </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row" style="background:url('images/back.png');">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-6">

                                <form action="/subjects/createsubjectcategory" method="post">

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <div class="panel-btns" style="display: none;">

                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                        </div><!-- panel-btns -->

                                        <h4 class="panel-title">Add Subject Category</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">  

                                            <div id="addreqcomm" style="text-align:center"></div>                                         

                                            

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Category Name <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <input type="text" name="category" class="form-control" id="catname" placeholder="e.g. Sciences" maxlength="50">

                                                </div>

                                            </div><!-- form-group -->



                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Category Description <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <textarea name="description" rows="5" class="form-control" id="description" placeholder="e.g. Subjects include Physics, Chemistry and Biology" maxlength="150" spellcheck="false"></textarea>

                                                </div>

                                            </div><!-- form-group -->                                      

                                                



                                        </div><!-- row -->

                                    </div><!-- panel-body -->



                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">                                            

                                            <button class="btn btn-primary mr5" id="btnaddreqs">Add Category</button>

                                            <button type="reset" class="btn btn-dark">Clear</button>

                                        </div>

                                      </div>

                                    </div><!-- panel-footer -->  

                                </div><!-- panel -->



                                </form>

                                    

                            </div><!-- col-md-6 -->





                        </div><!--row -->

      

                    </div><!-- contentpanel -->

                    

                </div>         

      </div> 

    </div>



</body>



</html>



