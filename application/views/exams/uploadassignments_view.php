
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
                        <i class="fa fa-certificate"></i>
                    </div>
                    <div class="media-body">
                        <p></p>
                        <h4>UPLOAD ASSIGNMENT</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form action="assigmentupload.php" method="post" enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">UPLOAD ASSIGNMENT  </h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                 <div class="form-group">
                                        <label class="col-sm-3 control-label">Term: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input readonly="readonly" type="text" name="term" class="form-control" id="fruitss" placeholder="e.g. 1" required="required" maxlength="50" value="">
                                        </div>
                                    </div><!-- form-group -->
                                  <div class="form-group">
                                        <label class="col-sm-3 control-label">Class</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_sclass"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">SELECT CLASS</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select required="required" name="sclass" id="sclass" data-placeholder="Choose One" class="width100p select2-offscreen" tabindex="-1" title="">
                                             <option value="">SELECT CLASS</option>
                                                                <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <!---<div id="lodStream"></div>-->
                                    
                                  
                                          
                                          <div class="form-group">
                                        <label class="col-sm-3 control-label">Assignment Type</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_examType"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">END TERM</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select name="type" required="required" id="examType" data-placeholder="Choose Exam type" class="width100p select2-offscreen" tabindex="-1" title="">
                                                               <option value="">SELECT EXAM TYPE</option>
                                                            <option value="1">MIDTERM</option>
                                                            <option selected="selected" value="2">END TERM</option>
                                                            <option value="3">END YEAR</option>
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        
                                           <div class="form-group">
                                       
                                        <label class="col-sm-3 control-label">Subject</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_subject"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">SELECT SUBJECT</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><select id="subject" name="subject" data-placeholder="Select Subject" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                 <option value="">SELECT SUBJECT</option>
                                               <option value="1">Mathematics</option><option value="2">Physics</option><option value="3">Biology</option><option value="4">Chemistry</option><option value="5">History </option><option value="6">Cre</option><option value="7">English</option><option value="8">Kiswahili</option><option value="9">Business Studies</option><option value="10">Agriculture</option><option value="11">Geography</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Import File <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" required="required" name="file1" class="form-control" id="file" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    
                                    
                                        <!--<div id="lodSubject"></div>-->
                                            
                                        </div>

                                       

                                      

                                          
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                           
                            <div class="panel-footer">
                              <div class="row">
                              <div id="addmrkscomm" style="text-align:center"></div>
                                <div class="col-sm-9 col-sm-offset-3">
                                    
                                    <button name="submit" class="btn btn-primary mr5" id="btnaddmarks">UPLOAD ASSIGNMENT </button>
                                    
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                                                                 </form>
                        </div><!-- panel -->
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->


            </div>
      </div>
    </div>
</body>
</html>
