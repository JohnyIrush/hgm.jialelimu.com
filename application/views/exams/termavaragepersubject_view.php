
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
                        <ul class="breadcrumb">
                            <li><i class="fa fa-certificate"></i></li>
                            <li>Term Avereage Per Subject</li>
                        </ul>
                        <h4>Term Avereage Per Subject</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Term Avereage Per Subject</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                 <div class="form-group">
                                        <div id="commedt123"></div>
                                        <label class="col-sm-3 control-label">Year</label>
                                        <div class="col-sm-9">
                                         <input name="startYear" readonly="readonly" value="2021" id="startYear" class="form-control date-picker-year hasDatepicker"> 
                                           
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <div id="commedt123"></div>
                                        <label class="col-sm-3 control-label">Term</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_term"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">SELECT TERM</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="term" name="term" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                             <option value="">SELECT TERM</option>
                                               <option value="1">Term One</option>
                                               <option value="2">Term Two</option>
                                                <option value="3">Term Three</option>
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                 
                                  <div class="form-group">
                                        <label class="col-sm-3 control-label">Class</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_classs"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">SELECT CLASS</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="classs" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                             <option value="">SELECT CLASS</option>
                                                                <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <div id="commedt123"></div>
                                        <label class="col-sm-3 control-label">Type Of Report</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_rtype"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">Per Class</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><select id="rtype" name="exam" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                               <option value="1">Per Class</option>
                                               <option value="2">Per Stream</option>
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div id="lodStream"></div>
                                        
                                    
                                  
                                         
                                         
                                        <div id="lodSubject"></div>
                                         
                                          <div class="form-group">
                                        <label class="col-sm-3 control-label">SUBJECT</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_subj"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">SELECT SUBJECT</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><select id="subj" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                             <option value="">SELECT SUBJECT</option>
                                                                <option value="1">Mathematics</option><option value="2">Physics</option><option value="3">Biology</option><option value="4">Chemistry</option><option value="5">History </option><option value="6">Cre</option><option value="7">English</option><option value="8">Kiswahili</option><option value="9">Business Studies</option><option value="10">Agriculture</option><option value="11">Geography</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                            
                                        </div>

                                       

                                                                        

                                          
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            </form>
                            <div class="panel-footer">
                              <div class="row">
                              <div id="addmrkscomm" style="text-align:center"></div>
                                <div class="col-sm-9 col-sm-offset-3">
                                    
                                  <a href="/exams/termavaragepersubjectreport" role="button" class="btn btn-primary mr5" id="btnaddmarks">Load Report </a>
                                    
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div><!-- panel -->
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row --> 

            </div>
      </div>
    </div>
</body>
</html>
