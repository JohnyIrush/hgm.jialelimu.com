



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

                                <i class="fa fa-book"></i>

                            </div>

                            <div class="media-body">

                                <ul class="breadcrumb">

                                    <li><i class="fa fa-book"></i></li>

                                    <li>Add Subjects</li>

                                </ul>

                                <h4>Add Subjects</h4>

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row" style="background:url('images/back.png');">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-6">

                                <form action="/subjects/createsubject" method="post">

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <div class="panel-btns" style="display: none;">

                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>

                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>

                                        </div><!-- panel-btns -->

                                        <h4 class="panel-title">Add New Subject</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">

                                            <div id="addstdcomm" style="text-align:center;"></div>



                                            <div class="form-group row">                                               

                                            <label class="col-sm-3 control-label">Category</label>

                                            <div class="col-sm-9">

                                                 <select name="category" id="" class="form-control">

                                                    <option >Select Category</option>

                                                    <?php


                                                        $options = '';

                                                      foreach($subjectcategories as $subjectcategory){

                                                        $options .= '<option value="' . $subjectcategory->id . '">' . $subjectcategory->category. '</option>';
                                                        
                                                        

                                                      }
                                                      echo $options;
                                                      ?>

                                                                                                          

                                                </select>

                                              </div>

                                            </div><!-- form-group --> 

                                            
                                            <div class="form-group row">

                                                <label class="col-sm-3 control-label">Code <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                <input type="text" name="code" class="form-control" id="subjectname" placeholder="e.g. English" maxlength="50">

                                                </div>

                                            </div><!-- form-group -->



                                            <div class="form-group row">

                                                <label class="col-sm-3 control-label">Subject Name <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <input type="text" name="subject" class="form-control" id="subjectname" placeholder="e.g. English" maxlength="50">

                                                </div>

                                            </div><!-- form-group -->

                                                                                      

                                            <div class="form-group row">

                                                <label class="col-sm-3 control-label">Description <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <textarea rows="5" name="description" class="form-control" id="description" placeholder="e.g. This is a compulsory language subject" maxlength="300"></textarea>

                                                </div>

                                            </div><!-- form-group -->

                                            



                                        </div><!-- row -->

                                    </div><!-- panel-body -->

                                    

                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">                                            

                                            <button class="btn btn-primary mr5" id="btnaddexam">Add Subject</button>

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



