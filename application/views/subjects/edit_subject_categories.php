



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

                                <i class="fa fa-pencil-square-o"></i>

                            </div>

                            <div class="media-body">

                                <ul class="breadcrumb">

                                    <li><i class="fa fa-fa fa-pencil-square-o"></i></li>

                                    <li>Edit Subject Category</li>

                                </ul>

                                <h4>Edit Subject Category</h4>

                            </div>

                        </div><!-- media -->

                    </div><!-- pageheader -->

                    

                    <div class="contentpanel">

                        

                        <div class="row" style="background:url('images/back.png');">

                           <div class="col-md-3">

                           </div>



                            <!--edit school-->

                            <div class="col-md-6">



                            <?php



                              foreach ($data as $value) {

                               echo



                                '<form action="/subjects/updatesubjectcategory/' . $value->id . '" method="post" >

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">Edit Subject Category</h4>

                                    </div><!-- panel-heading -->

                                    <div class="panel-body">

                                        <div class="row">  

                                            <div id="addreqcomm" style="text-align:center"></div>                                         

                                            

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Category Name <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <input type="text" name="category" class="form-control" id="catname" placeholder="e.g. Teaching Staff" maxlength="50" value="' . $value->category . '">

                                                </div>

                                            </div><!-- form-group -->



                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Category Description <span class="asterisk">*</span></label>

                                                <div class="col-sm-9">

                                                    <textarea name="description" rows="5" class="form-control" id="description" value="' . $value->description . '" placeholder="e.g. These are teachers employed by both TSC and board" maxlength="150">Business Studies, French, Agriculture, German, </textarea>

                                                </div>

                                            </div><!-- form-group -->                                      

                                                



                                        </div><!-- row -->

                                    </div><!-- panel-body -->



                                    <div class="panel-footer">

                                      <div class="row">

                                        <div class="col-sm-9 col-sm-offset-3">                                            

                                            <button class="btn btn-primary mr5" id="btnaddreqs">Edit Category</button>

                                        </div>

                                      </div>

                                    </div><!-- panel-footer -->  

                                </div><!-- panel -->



                                </form>';



                              }

                              ?>

                                    

                                

                                

                                

                            </div><!-- col-md-6 -->





                        </div><!--row -->

               </div><!-- contentpanel -->

                    

                </div>

      </div> 

    </div>



</body>



</html>



