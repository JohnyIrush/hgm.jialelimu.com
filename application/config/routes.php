<?php







defined('BASEPATH') OR exit('No direct script access allowed');







/*Student information All Actions are routed from Admin controller*/







//Under Student Information



$route['student/details'] = 'students/student/studentdetails';

$route['student/addstudent']['post'] = 'students/student/addstudent'; //Add New Student

$route['student/editstudentinfo/(:num)'] = 'students/student/editstudentinfo/$id'; //edit student info

$route['student/updatestudentinfo']['post'] = 'students/student/updatestudentinfo'; //Upadate student details 

$route['student/showstudentinfo/(:num)'] = 'students/student/showstudentinfo/$id'; //display student profile

$route['student/deletestudentinfo/(:num)'] = 'students/student/deletestudentinfo/$id'; //delete student record

$route['student/changestudentavatar'] = 'admin/admin/changestudentavatar'; //



$route['student/deactivatestudent'] = 'admin/admin/deactivatestudent';



$route['student/reactivatestudent'] = 'admin/admin/reactivatestudent';



$route['student/addgurdian'] = 'admin/admin/addgurdian';



$route['student/printclasslist'] = 'students/student/printclasslist'; //print class list


//Under manage parents


$route['parents/manageparents'] = 'students/student/manageparents';

$route['parents/manageparents/(:num)'] = 'students/student/manageparents';

$route['parents/addparents'] = 'students/student/addparents';

$route['parents/editparents/(:num)'] = 'students/student/editparents/$id';

$route['parents/deleteparent/(:num)'] = 'students/student/deleteparent/$id'; //delete parent

$route['parents/updateparent/(:num)']['post'] = 'students/student/updateparent/$id'; //update parent

$route['parents/createparent']['post'] = 'students/student/createparent'; //create parent


//Under School settings



$route['school/schoolsettings'] = 'admin/admin/schoolsettings';

$route['school/updateschoolsettings']['POST'] = 'admin/admin/updateschoolsettings'; // Update School information







//Under term configuration



$route['term/termconfiguration'] = 'admin/admin/termconfiguration';

$route['term/editterm/(:num)'] = 'admin/admin/editterm/$id'; //edit term record

$route['term/addterm']['post'] = 'admin/admin/addterm'; //Add new term

$route['term/updateterm/(:num)'] = 'admin/admin/updateterm/$id'; //update term





//Manage Class



$route['class/manageclass'] = 'admin/admin/manageclass';

$route['class/addclass'] = 'admin/admin/addclass';

$route['class/editclass/(:num)'] = 'admin/admin/editclass/$id';

$route['class/updateclass/(:num)'] = 'admin/admin/updateclass/$id'; //update class record

$route['class/createclass'] = 'admin/admin/createclass'; //Create new class

$route['class/deleteclass/(:num)'] = 'admin/admin/deleteclass/$id';



//Under manage stream

$route['stream/managestream'] = 'admin/admin/managestream';

$route['stream/addstream'] = 'admin/admin/addstream';

$route['stream/editstream/(:num)'] = 'admin/admin/editstream/$id';

$route['stream/updatestream/(:num)']['post'] = 'admin/admin/updatestream/$id';

$route['stream/createstream'] = 'admin/admin/createstream'; //Create new stream

$route['stream/deletestream/(:num)'] = 'admin/admin/deletestream/$id'; //delete stream

$route['stream/createstream'] = 'admin/admin/createstream'; //create stream


//Under Class List



$route['class/generateclasslist'] = 'admin/admin/generateclasslist';

$route['class/classlist']['post'] = 'admin/admin/classlist'; //class list



//Under Enrollment By Age



$route['enrollment/byage'] = 'students/student/enrollmentbyage';





//Under Enrollment By Gender



$route['enrollment/bygender'] = 'students/student/enrollmentbygender';



//Under Promote/ Demote Student



$route['students/promotedemote'] = 'students/student/promotedemote';
$route['promotedemote'] = 'students/student/promotedemotestudents';






/**

 * Examinations

*/



//manage grades

$route['exams/managegrades'] = 'exams/exams/managegrades';

$route['exams/addgrades'] = 'exams/exams/addgrades'; //add new grade

$route['exams/editgrade/(:num)'] = 'exams/exams/editgrade/$id'; //edit grade

$route['exams/creategrade']['post'] = 'exams/exams/creategrade'; //create new grade

$route['exams/updategrade/(:num)']['post'] = 'exams/exams/updategrade/$id'; //update grade

$route['exams/deletegrade/(:num)'] = 'exams/exams/deletegrade'; //delete grade



$route['exams/setgrademarks'] = 'exams/exams/setgrademarks'; //set grade marks

$route['exams/examconfiguration'] = 'exams/exams/examconfiguration'; //Exam configuration

$route['exams/createexam'] = 'exams/exams/createexam'; //Create Exam form

$route['exams/addexam']['post'] = 'exams/exams/addexam'; //Create Exam

$route['exams/editexam/(:num)'] = 'exams/exams/editexam/$id'; //Edit Exam

$route['exams/deleteexam/(:num)'] = 'exams/exams/deleteexam'; //delete exam

$route['exams/updateexam/(:num)'] = 'exams/exams/updateexam/$id'; //Update Exam





$route['exams/setremarks'] = 'exams/exams/setremarks'; //Set Remarks

$route['exams/loadremarks'] = 'exams/exams/loadremarks'; //Load Remarks

$route['exams/addstudentmarks'] = 'exams/exams/addstudentmarks'; //Add student marks

$route['exams/updateremarks'] = 'exams/exams/updateremarks'; //Load Remarks



$route['exams/clearcache'] = 'exams/exams/clearcache'; //crear cache







$route['exams/addstudentmarksadmin'] = 'exams/exams/addstudentmarksadmin'; //Add student marks

$route['exams/missingmarks'] = 'exams/exams/missingmarks'; //Missing marks

$route['exams/missingmarksreport'] = 'exams/exams/missingmarksreport'; //Missing marks report



$route['exams/compileexam'] = 'exams/exams/compileexam'; //Compile exams
$route['exams/compileendtermexamresults'] = 'exams/exams/compileendtermexamresults'; //Compile Term result exams




$route['exams/correctionsheet'] = 'exams/exams/correctionsheet';//Correction sheet



$route['exams/correctionsheetreport'] = 'exams/exams/correctionsheetreport';//Correction sheet report



$route['exams/generateexamreport'] = 'exams/exams/generateexamreport';//generate exam report

$route['exams/examreportgenerator'] = 'exams/exams/examreportgenerator';//generator exam report



$route['exams/generatevalueaddition'] = 'exams/exams/generatevalueaddition';//generate value addition



$route['exams/examreport'] = 'exams/exams/examreport';//exam report



$route['exams/valueadditionreport'] = 'exams/exams/valueadditionreport';//value addition report



$route['exams/subjectstreamanalysis'] = 'exams/exams/subjectstreamanalysis';//subject stream analysis



$route['exams/subjectstreamanalysisreport'] = 'exams/exams/subjectstreamanalysisreport';//subject stream analysis report





$route['exams/reportpersubject'] = 'exams/exams/reportpersubject';//report per subject



$route['exams/generatereportpersubject'] = 'exams/exams/generatereportpersubject';//report per subject



$route['exams/termavaragepersubject'] = 'exams/exams/termavaragepersubject';//term avarage per subject



$route['exams/termavaragepersubjectreport'] = 'exams/exams/termavaragepersubjectreport';//term avarage per subject report



$route['exams/overalbeststudents'] = 'exams/exams/overalbeststudents';//Overal Best Students



$route['exams/overalbeststudentsreport'] = 'exams/exams/overalbeststudentsreport';//Overal Best Students report



$route['exams/overalbestpersubject'] = 'exams/exams/overalbestpersubject';//Overal Best Per subject



$route['exams/overalbestpersubjectreport'] = 'exams/exams/overalbestpersubjectreport';//Overal Best Per Subject report





$route['exams/teachersperformance'] = 'exams/exams/teachersperformance';//Teachers Performance



$route['exams/teachersperformancereport'] = 'exams/exams/teachersperformancereport';//Teachers Performance Report



$route['exams/percentageofexamentries'] = 'exams/exams/percentageofexamentries';//percentage of exam entries



$route['exams/percentageofexamentriesreport'] = 'exams/exams/percentageofexamentriesreport';//percentage of exam entries



$route['exams/smsresults'] = 'exams/exams/smsresults';//sms results



$route['exams/assignments'] = 'exams/exams/assignments';//Assignments



$route['exams/uploadassignments'] = 'exams/exams/uploadassignments';//Upload Assignments



/*Add Student Marks*/

$route['exams/addmarks/(:num)'] = 'exams/exams/addmarks/$id';//Add student marks

$route['exams/updatemarks'] = 'exams/exams/updatemarks';//Update Student marks

$route['exams/createmarks/(:num)'] = 'exams/exams/createmarks/$id';//Create Student marks

$route['exams/createmarkspersubject'] = 'exams/exams/createmarkspersubject';//Create Student marks per subject

$route['exams/addstudentmarkspersubjectloadstudents'] = 'exams/exams/addstudentmarkspersubjectloadstudents'; //Load students to Add student marks

$route['exams/allocatedsubjectexammarks/(:num)'] = 'exams/exams/allocatedsubjectexammarks/$id'; //Load student allocated subjects marks







//Add Parents/Gurdians

$route['parents/addparent']['POST'] = 'admin/admin/addparent'; //Add Parent





$route['subjects/subjectcategories'] = 'subjects/subject/subjectcategories'; //subject categories

$route['subjects/addsubjectcategory'] = 'subjects/subject/addsubjectcategory'; //Add subject category

$route['subjects/createsubjectcategory']['post'] = 'subjects/subject/createsubjectcategory'; //create subject category

$route['subjects/editsubjectcategory/(:num)'] = 'subjects/subject/editsubjectcategory/$id'; //edit subject category

$route['subjects/updatesubjectcategory/(:num)']['post'] = 'subjects/subject/updatesubjectcategory/$id'; //update subject category

$route['subjects/deletesubjectcategory/(:num)'] = 'subjects/subject/deletesubjectcategory/$id'; //delete subject category



$route['subjects/subjects'] = 'subjects/subject/subjects'; //fetch subjects

$route['subjects/addsubject'] = 'subjects/subject/addsubject'; //Add subject 

$route['subjects/createsubject']['post'] = 'subjects/subject/createsubject'; //create subject 

$route['subjects/editsubject/(:num)'] = 'subjects/subject/editsubject/$id'; //edit subjectt

$route['subjects/updatesubject/(:num)'] = 'subjects/subject/updatesubject/$id'; //update subject 

$route['subjects/deletesubject/(:num)'] = 'subjects/subject/deletesubject/$id'; //delete subject 










//mean grade marks

$route['exams/meangrademarks'] = 'exams/exams/meangrademarks'; //mean grade marks

$route['exams/setmeangrademarks']['post'] = 'exams/exams/setmeangrademarks'; //set mean grade marks



//subject allocation

$route['subjects/subjectallocation'] = 'subjects/subject/subjectallocation'; //subject allocation 



$route['subjects/allocatedsubject/(:num)'] = 'subjects/subject/allocatedsubject/$id'; //allocated subject 



$route['subjects/allocatesubject/(:num)'] = 'subjects/subject/allocatesubject/$id'; //allocate subject 



$route['subjects/allocateselectedsubject/(:num)'] = 'subjects/subject/allocateselectedsubject/$id'; //allocate selected subject  

//Hostel/Houses/Domitory Management

$route['hostel/hostels'] = 'hostel/hostel/hostels'; //hostel management 
$route['hostel/create'] = 'hostel/hostel/create'; //create new hostel
$route['hostel/edit/(:num)'] = 'hostel/hostel/edit'; //hostel details edit 
$route['hostel/update/(:num)'] = 'hostel/hostel/update'; //hostel details update 
$route['hostel/delete/(:num)'] = 'hostel/hostel/delete'; //hostel details delete


$route['migrate'] = 'migrations/migrate/index'; //migrate tables







/*Default Table seeders*/





$route['seeder/gradesseeder'] = 'seeders/defaultseeder/gradesseeder'; //Seed grades to table



//sms
$route['sms/vonagetest'] = 'smsconfig/vonagesend'; //Seed grades to table






$route['default_controller'] = 'welcome/index';



$route['user/resetpassword/([a-z]+)/(:any)'] = 'site/resetpassword/$1/$2';



$route['admin/resetpassword/(:any)'] = 'site/admin_resetpassword/$1';



$route['admin/unauthorized'] = 'admin/admin/unauthorized';



$route['admin/test'] = 'admin/admin/test';

//Time Table generator

$route['timetable/generate'] = 'admin/timetable/timetablegenerator';

$route['timetable/displaytimetable'] = 'admin/timetable/displaytimetable'; //display school timetable

$route['timetable/generatetimetable'] = 'admin/timetable/generatetimetable'; //timetable generation and editting

$route['timetable/deactivateday/(:num)'] = 'admin/timetable/deactivateday/$id'; //days of the week deactivation

$route['timetable/activateday/(:num)'] = 'admin/timetable/activateday/$id'; //days of the week activation

$route['timetable/addsession'] = 'admin/timetable/addsession'; //add timetable session
$route['timetable/editevent/(:num'] = 'admin/timetable/editevent/$id'; //edit timetable event
$route['timetable/deletevenue/(:num'] = 'admin/timetable/deletevenue/$id'; //delete timetable venue

$route['parent/unauthorized'] = 'parent/parents/unauthorized';



$route['student/unauthorized'] = 'user/user/unauthorized';



$route['teacher/unauthorized'] = 'teacher/teacher/unauthorized';



$route['accountant/unauthorized'] = 'accountant/accountant/unauthorized';



$route['librarian/unauthorized'] = 'librarian/librarian/unauthorized';



$route['404_override'] = 'welcome/show_404';



$route['translate_uri_dashes'] = FALSE;



$route['cron/(:any)'] = 'cron/index/$1';







//======= front url rewriting==========



$route['page/(:any)'] = 'welcome/page/$1';



$route['read/(:any)'] = 'welcome/read/$1';



$route['online_admission'] = 'welcome/admission';



$route['frontend'] = 'welcome';



