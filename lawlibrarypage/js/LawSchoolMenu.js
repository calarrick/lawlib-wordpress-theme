var menu_widths = new Array("16%", "18%", "16%", "16%", "16%", "18%");
var academics_menu = new Array();
var admissions_menu = new Array();
var alumni_menu = new Array();
var careers_menu = new Array();
var our_school_menu = new Array();
var student_life_menu = new Array();
var counter = 0;

//menu template : text, url, target, css style for url, css style for text
academics_menu[0] = new Array("JD Curriculum", "http://law.case.edu/Academics/JDCurriculum.aspx", "", "", "");
academics_menu[1] = new Array("Experiential Learning", "http://law.case.edu/Academics/ExperientialLearning.aspx", "", "", "");
academics_menu[2] = new Array("Concentrations", "http://law.case.edu/Academics/Concentrations.aspx", "", "", "");
academics_menu[3] = new Array("Dual Degrees", "http://law.case.edu/Academics/DualDegrees.aspx", "", "", "");
academics_menu[4] = new Array("Academic Centers", "http://law.case.edu/Academics/AcademicCenters.aspx", "", "", "");
academics_menu[5] = new Array("Academic Calendar", "http://law.case.edu/Academics/AcademicCalendar.aspx", "", "", "");
academics_menu[6] = new Array("Study Abroad", "http://law.case.edu/Academics/StudyAbroad.aspx", "", "", "");

//menu template : text, url, target, css style for url, css style for text
admissions_menu[0] = new Array("Apply", "http://law.case.edu/Admissions/Apply.aspx", "", "", "");
admissions_menu[1] = new Array("Transfer", "http://law.case.edu/Admissions/Transfer.aspx", "", "", "");
admissions_menu[2] = new Array("Financial Aid & Scholarships", "http://law.case.edu/Admissions/FinancialAid.aspx", "", "", "");
admissions_menu[3] = new Array("Class Profile", "http://law.case.edu/Admissions/ClassProfile.aspx", "", "", "");
admissions_menu[4] = new Array("LL.M. Programs", "http://law.case.edu/Admissions/LLMPrograms.aspx", "", "", "");
admissions_menu[5] = new Array("Visit Us", "http://law.case.edu/Admissions/VisitUs.aspx", "", "", "");
admissions_menu[6] = new Array("Contact Us", "http://law.case.edu/Admissions/ContactUs.aspx", "", "", "");

//menu template : text, url, target, css style for url, css style for text
alumni_menu[0] = new Array("Events", "http://law.case.edu/Alumni/Events.aspx", "", "", "");
alumni_menu[1] = new Array("Reunion", "http://law.case.edu/Alumni/Reunion.aspx", "", "", "");
alumni_menu[2] = new Array("Giving", "http://law.case.edu/Alumni/Giving.aspx", "", "", "");
alumni_menu[3] = new Array("Stay Connected", "http://law.case.edu/Alumni/StayConnected.aspx", "", "", "");
alumni_menu[4] = new Array("Contact Us", "http://law.case.edu/Alumni/ContactUs.aspx", "", "", "");

//menu template : text, url, target, css style for url, css style for text
careers_menu[0] = new Array("For Prospective Students", "http://law.case.edu/CareerServices/ProspectiveStudents.aspx", "", "", "");
careers_menu[1] = new Array("For Students", "http://law.case.edu/CareerServices/Students.aspx", "", "", "");
careers_menu[2] = new Array("For Alumni", "http://law.case.edu/CareerServices/Alumni.aspx", "", "", "");
careers_menu[3] = new Array("For Employers", "http://law.case.edu/CareerServices/Employers.aspx", "", "", "");

//menu template : text, url, target, css style for url, css style for text
our_school_menu[0] = new Array("About Us", "http://law.case.edu/OurSchool/AboutUs.aspx", "", "", "");
our_school_menu[1] = new Array("Faculty & Staff", "http://law.case.edu/OurSchool/FacultyStaff.aspx", "", "", "");
our_school_menu[2] = new Array("Law Library", "http://law.case.edu/OurSchool/LawLibrary.aspx", "", "", "");
our_school_menu[3] = new Array("Our Community", "http://law.case.edu/OurSchool/OurCommunity.aspx", "", "", "");

//menu template : text, url, target, css style for url, css style for text
student_life_menu[0] = new Array("Student Services", "http://law.case.edu/StudentLife/StudentServices.aspx", "", "", "");
student_life_menu[1] = new Array("Student Organizations", "http://law.case.edu/StudentLife/StudentOrganizations.aspx", "", "", "");
student_life_menu[2] = new Array("Journals", "http://law.case.edu/StudentLife/Journals.aspx", "", "", "");
student_life_menu[3] = new Array("Moot Court & Mock Trial", "http://law.case.edu/StudentLife/MootCourtMockTrial.aspx", "", "", "");
student_life_menu[4] = new Array("Housing", "http://law.case.edu/StudentLife/Housing.aspx", "", "", "");
student_life_menu[5] = new Array("Student Spotlight", "http://law.case.edu/StudentLife/StudentSpotlight.aspx", "", "", "");

document.writeln("<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" id=\"MenuPanelTable\" style=\"width: 100%; margin-bottom: -1px;\">");
document.write("<tr>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[0] + "\">");
writeMenuContents(our_school_menu);
document.write("</td>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[1] + "\">");
writeMenuContents(admissions_menu);
document.write("</td>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[2] + "\">");
writeMenuContents(academics_menu);
document.write("</td>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[3] + "\">");
writeMenuContents(student_life_menu);
document.write("</td>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[4] + "\">");
writeMenuContents(careers_menu);
document.write("</td>");

document.write("<td valign=\"top\" class=\"menu-td\" style=\"width: " + menu_widths[5] + "\">");
writeMenuContents(alumni_menu);
document.write("</td>");

document.write("</tr>");
document.write("</table>");

function writeMenuContents(menu_array) {
	var this_page = parseUri(document.location.href).file;
	var relative = parseUri(document.location.href).relative;
	for (counter = 0; counter < menu_array.length; counter++) {
		document.write("<a href=\"" + menu_array[counter][1] + "\"");
		if (menu_array[counter][2].length > 0) {
			document.write(" target=\"" + menu_array[counter][2] + "\"");
		}
		if (menu_array[counter][3].length > 0) {
			document.write(" style=\"" + menu_array[counter][3] + "\"");
		}
		//style the selected page
		if (menu_array[counter][1].toLowerCase() == relative.toLowerCase()) {
			document.write(" style=\"color: #0a304e; text-decoration: underline; font-weight: bold;\"");
		}
		document.write(">" + menu_array[counter][0] + "</a>");
		if (counter < menu_array.length - 1) {
			document.write("<br />");
		}
	}
}