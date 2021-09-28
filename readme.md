
## Interview assignment

Create an application using php, codeigniter 3, jquery, mysql/postgres,bootstrap for school to capture 
the student classification details such as number of students in different social categories and number 
of students in different religion in each of the classes. Develop a landing page with login form. After 
login create a dashboard using AdminLTE 3 template. Login user should have at least three of these 
functionalities 1. Add/Remove School, 2. Student details entry form, 3. View student entry form 
details. In addition to these three functionalities and further relevant data in dashboard, design as per 
your own data analysis is welcoming. A sample filled in student details entry form is given below –
Generate this form dynamically according to the master table available. The maser tables are given in 
the later section. Form should have three buttons 1. Reset 2. Save as draft 3. Finalize. This form 
always memorizes the last input values. After finalizing no value can be edited, form should be 
opened as a read-only mode. 
Form validation Client side
1. No cell should be left empty
2. only numeric values can be entered
3. Sum of General, SC,OBC in each column must be >= Sum of religion data
4. Only Boys data can be inserted for boys school, Only Girls data can be inserted in a Girls 
School, Both Boys and Girls data can be inserted in a co-ed school
Form validation Server Side
1. Check all input fields for any possible injection attack
2. Check all values related to master tables are valid 
3. Check all field are Numeric
4. Check the input values corresponding to the school type are relevant or not before 
inserting to database
“View student entry form details” report shows only the finalize data of the above form in each user. 
In admin user “View student entry form details” have a drop down list having list of school code who 
finalized the “Student details entry form” .After selection a school code the details of the finalized 
data should be displayed in a tabular format. Admin can reject and unlock the form so that user can 
again fill up the form in case admin found any discrepancy in the data. There is an option to download 
the same report in PDF format. User mpdf library to generate report in PDF format.
Page 2 of 4
 Create a Super User Login.
 After that, login with Super user User Name & Password, add a new school with the 
following details:
 After submit the above data, a new school has been added and a Unique School Code to be 
generated which is used to login the school.
 After login with the generated school code, submit a form with the following details:
LOGIN
USER NAME Enter User Name
PASSWORD Password
CAPTCHA Enter Captcha Code
School Add Form
School Name Enter School Name
School Code Enter School Code
Address Enter Address
School Type Boys’/Girls’/Co-ed
Enrolment Details
Category 
Wise
Class I to Class XII
Boys Girls Boys Girls Boys Girls Boys Girls Boys Girls Contd.
GENERAL
OBC
SC
ST
Religion 
Wise
Class I to Class XII
Boys Girls Boys Girls Boys Girls Boys Girls Boys Girls Contd.
Muslim
Sikh
Jain
Buddha
Add School
SIGN IN
Reset Save As Draft Finalize
Page 3 of 4
 Category, Religion, Class, Gender & School type must be selected from the following master 
tables.
1. Category Master:
category_code description
1 GENERAL
2 SC
3 ST
4 OBC
5 ORC
6 OTHERS
7 OBC-A
8 OBC-B
2. Religion Master:
religion_code description
0 HINDU
5 MUSLIM
6 CHRISTIA
7 SIKH
8 BUDDHIST
9 PARSI
10 JAIN
11 OTHERS
3. Class Master:
class_code description
1 I
2 II
3 III
4 IV
5 V
6 VI
7 VII
8 VIII
9 IX
10 X
11 XI
12 XII
4. Gender Master:
gender_code description
1 MALE
2 FEMALE
Page 4 of 4
5. School type Master:
school_type_code Description
Boys’ 1
Girls’s 2
Co-ed 3
Note: Store Password in Database in encrypted format (use sha1/sha256 encryption)