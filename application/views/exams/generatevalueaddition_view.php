
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
                        <i class="fa fa-area-chart"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-area-chart"></i></li>
                            <li>Value Addition</li>
                        </ul>
                        <h4>Value Addition</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="" action="" method="get">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Generate Value Addition</h4>
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
                                            <div class="select2-container width100p" id="s2id_term"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Term One</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="term" name="term" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                               <option value="1">Term One</option>
                                               <option value="2">Term Two</option>
                                                <option value="3">Term Three</option>
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                           <div class="form-group">
                                        <label class="col-sm-3 control-label">Class</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_classs"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">SELECT CLASS</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="classs" name="class" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
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
                                               
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div id="lodStream"></div>
                                          <div id="loadexam"></div>
                                        
                                       
                                          
                                        
                                                                                
<div class="form-group">
                                        
                                        <label class="col-sm-3 control-label">Compare With</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_compare" title=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-5">KCPE</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5"></div><select id="compare" name="compare" data-placeholder="Choose One" class="width100p select2-offscreen" required="" title="" tabindex="-1">
                                               <option value="kcpe">KCPE</option>
                                                                                                          <option value="204573">2020 Term 2 Form 4  </option>
                                                   
                                                   
                                                                                                          <option value="1">2018 Term 1 Form 4 INDEXING EXAM 2017 </option>
                                                   
                                                   
                                                                                                          <option value="1504">2018 Term 1 Form 2 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="5442">2018 Term 1 Form 3 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="1151">2018 Term 1 Form 4 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="2282">2018 Term 1 Form 1 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="1555">2018 Term 1 Form 2 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="6265">2018 Term 1 Form 3 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="1119">2018 Term 1 Form 4 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="1664">2018 Term 1 Form 2 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="5128">2018 Term 1 Form 3 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="1182">2018 Term 1 Form 4 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="41704">2018 Term 2 Form 1 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="72863">2018 Term 2 Form 3 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="35499">2018 Term 2 Form 2 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="75457">2018 Term 2 Form 1 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="42363">2018 Term 2 Form 3 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="47240">2018 Term 2 Form 1 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="35561">2018 Term 2 Form 2 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="73926">2018 Term 2 Form 3 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="59397">2018 Term 2 Form 1 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="42385">2018 Term 2 Form 3 MIDTERM </option>
                                                   
                                                   
                                                                                                          <option value="48244">2018 Term 2 Form 1 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="72451">2018 Term 2 Form 2 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="69822">2018 Term 2 Form 3 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="35437">2018 Term 2 Form 2 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="41868">2018 Term 2 Form 3 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="85321">2018 Term 2 Form 4 ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="98033">2018 Term 3 Form 1 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="98241">2018 Term 3 Form 2 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="99501">2018 Term 3 Form 3 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="107849">2019 Term 1 Form 2 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="109733">2019 Term 1 Form 3 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="108259">2019 Term 1 Form 4 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="112381">2019 Term 1 Form 1 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="108733">2019 Term 1 Form 2 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="109857">2019 Term 1 Form 3 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="110454">2019 Term 1 Form 4 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="108553">2019 Term 1 Form 2 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="109485">2019 Term 1 Form 3 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="111361">2019 Term 1 Form 4 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="148026">2019 Term 2 Form 1 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="155126">2019 Term 2 Form 1 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="146931">2019 Term 2 Form 2 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="147019">2019 Term 2 Form 3 MID TERM  </option>
                                                   
                                                   
                                                                                                          <option value="147474">2019 Term 2 Form 1 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="146843">2019 Term 2 Form 2 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="147085">2019 Term 2 Form 3 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="162406">2019 Term 2 Form 4 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="175596">2019 Term 3 Form 1 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="174167">2019 Term 3 Form 2 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="174471">2019 Term 3 Form 3 OPENER </option>
                                                   
                                                   
                                                                                                          <option value="175368">2019 Term 3 Form 1 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="174253">2019 Term 3 Form 2 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="174542">2019 Term 3 Form 3 END OF TERM </option>
                                                   
                                                   
                                                                                                          <option value="203423">2020 Term 1 Form 4 END OF TERM  </option>
                                                   
                                                   
                                                                                                          <option value="203505">2020 Term 2 Form 4 CAT ONE 2020 </option>
                                                   
                                                   
                                                                                                          <option value="206667">2021 Term 3 Form 4 MOCK EXAMS  </option>
                                                   
                                                   
                                                                                                          <option value="208416">2021 Term 2 Form 1 END OF TERM EXAMINATION </option>
                                                   
                                                   
                                                                                                          <option value="209308">2021 Term 2 Form 2 END OF TERM EXAMINATION </option>
                                                   
                                                   
                                                                                                          <option value="209372">2021 Term 2 Form 2 END OF TERM EXAMINATION </option>
                                                   
                                                   
                                                                                                          <option value="209006">2021 Term 2 Form 3 END OF TERM EXAMINATION </option>
                                                   
                                                   
                                                                                                          <option value="216502">2021 Term 3 Form 1 END OF TERM 3 </option>
                                                   
                                                   
                                                                                                          <option value="216740">2021 Term 3 Form 2 END OF TERM 3 </option>
                                                   
                                                   
                                                                                                          <option value="217841">2021 Term 3 Form 1 END OF TERM 3 </option>
                                                   
                                                   
                                                                                                          <option value="216590">2021 Term 3 Form 3 END OF TERM 3 </option>
                                                   
                                                   
                                                                                                          <option value="18986">2018 Term 1 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="15672">2018 Term 1 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="13946">2018 Term 1 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="15920">2018 Term 1 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="82920">2018 Term 2 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="84516">2018 Term 2 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="78906">2018 Term 2 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="85353">2018 Term 2 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="105483">2018 Term 3 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="106541">2018 Term 3 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="102908">2018 Term 3 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="192007">2019 Term 1 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="145178">2019 Term 1 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="145768">2019 Term 1 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="140462">2019 Term 1 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="164000">2019 Term 2 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="195633">2019 Term 2 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="167924">2019 Term 2 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="173574">2019 Term 2 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="201076">2019 Term 3 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="202233">2019 Term 3 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="203026">2019 Term 3 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="203457">2020 Term 1 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="206274">2020 Term 2 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="208460">2021 Term 2 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="209404">2021 Term 2 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="209040">2021 Term 2 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="216546">2021 Term 3 Form 1 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="216781">2021 Term 3 Form 2 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="216624">2021 Term 3 Form 3 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                          <option value="206699">2021 Term 3 Form 4 FINAL ENDTERM </option>
                                                   
                                                   
                                                                                                      
                                                
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                              <div id="addmrkscomm" style="text-align:center"></div>
                                <div class="col-sm-9 col-sm-offset-3">
                                 
                                    <a href="/exams/valueadditionreport" role="button" class="btn btn-primary mr5" id="btnaddmarks">Get Report</a>
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
