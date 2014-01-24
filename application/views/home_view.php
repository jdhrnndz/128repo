<?php
    // css & js not working
?>

<!DOCTYPE html>

<html>

    <head>

        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="css/pattern.css"/>

    </head>

    <body>


    <!--headeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeer-->
    <div id="header">

    </div>

    <!--navigatooooooooooooooooooooorrrrrrrrrrrrrr-->

    <div id="navigator">

    </div>

    <!--maiiiiiiiiiiiiiiiiiiiiiiiinnnnnnnnnnnn-->

    <div id="main">
        <div id="box">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <form name="main_form" action="index.php/signup/table_view" method="post" role="form">
                            <h2>Sign Up</h2>
                            <hr>
                            <div class="row">

                                <div class="form-group">
                                    <input type="text" name="first_name" id="user_name" class="form-control input-lg" placeholder="First Name" tabindex="3">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="middle_name" id="user_name" class="form-control input-lg" placeholder="Middle Name" tabindex="3">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" id="user_name" class="form-control input-lg" placeholder="Last Name" tabindex="3">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="birthday" id="user_name" class="form-control input-lg" placeholder="Birthday (YYYY-DD-MM) " tabindex="3">
                                </div>


                                <div name="sex" id="sex" class="form-group">
                                    <input type="radio" name="class" value="m"/>Male
                                    <input type="radio" name="class" value="f"/>Female
                                </div>

                                <div class="form-group">
                                    <input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="Desired Username" tabindex="3">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                <div class="row">

                                    <!--
                                    choose if student or faculty
                                  -->
                                    <div id="type" class="form-group">
                                        <input type="radio" name="class" onchange="show_student()" value="0"/>Student
                                        <input type="radio" name="class" onchange="show_faculty()" value="1"/>Faculty
                                    </div>

                                    <div id="student_form" class="invisible">
                                        <hr>

                                        <div class="form-group">
                                            <input type="text" name="student_number" id="student_number" class="form-control input-lg" placeholder="Student Number(YYYY-XXXXX)" tabindex="3">
                                        </div>
                                        <br/>
                                        <select name="classification" class="form-control input-lg">
                                            <option value="C" label>Classification ** </option>
                                            <option value="freshman">Freshman</option>
                                            <option value="Sophomore">Sophomore</option>
                                            <option value="Junior">Junior</option>
                                            <option value="Senior">Senior</option>
                                        </select>
                                        <br/>

                                        <select name="degree_program" class="form-control input-lg">
                                            <option value="DP" label>Degree Program **</option>
                                            <option value="BSABM">BS Agribusiness Management</option>
                                            <option value="BSABT">BS Agricultural Biotechnology</option>
                                            <option value="BSAgChem">BS Agricultural Chemistry</option>
                                            <option value="BSAgEcon">BS Agricultural Economics</option>
                                            <option value="BSABE">BS Agricultural and Biosystems Engineering</option>
                                            <option value="BSA">BS Agriculture</option>
                                            <option value="BSAMATH">BS Applied Mathematics</option>
                                            <option value="BSAPhy">BS Applied Physics</option>
                                            <option value="BSBio">BS Biology</option>
                                            <option value="BSChemEng">BS Chemical Engineering</option>
                                            <option value="BSChem">BS Chemistry</option>
                                            <option value="BSCE">BS Civil Engineering</option>
                                            <option value="BAComArts">BA Communication Arts</option>
                                            <option value="BSCS">BS Computer Science</option>
                                            <option value="BSDevCom">BS Development Communication</option>
                                            <option value="BSEcon">BS Economics</option>
                                            <option value="BSEE">BS Electrical Engineering</option>
                                            <option value="BSFT">BS Food Technology</option>
                                            <option value="BSF">BS Forestry</option>
                                            <option value="BSHumanEco">BS Human Ecology</option>
                                            <option value="BSIE">BS Industrial Engineering</option>
                                            <option value="BSMATH">BS Mathematics</option>
                                            <option value="BSMST">BS Mathematics and Science Teaching</option>
                                            <option value="BSN">BS Nutrition</option>
                                            <option value="BAPhilo">BA Philosophy</option>
                                            <option value="BASocio">BA Sociology</option>
                                            <option value="BSSTAT">BS Statistics</option>
                                            <option value="DVetMed">D Veterinary Medicine</option>
                                        </select>

                                        <input type="hidden" name="books_borrowed" value="0" />


                                        <br/>

                                        <a href="#" class="btn btn-block btn-primary">Submit</a>




                                    </div>

                                    <div id="faculty_form" class="invisible">
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" name="employee_number" id="employee_number" class="form-control input-lg" placeholder="Employee Number(YYYY-XXXXX)" tabindex="3">
                                            <br/>

                                            <a href="#" class="btn btn-block btn-primary">Submit</a>
                                        </div>
                                        <hr/>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--foooooooooooooooooooterrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
    <div id="footer">

    </div>

    </body>

    <script type="text/javascript">
        function show_student(){
            reset();
            document.getElementById("student_form").setAttribute("class", " ");
        }

        function show_faculty(){
            reset();
            document.getElementById("faculty_form").setAttribute("class", " ");
        }

        function reset(){
            document.getElementById("student_form").setAttribute("class", "invisible");
            document.getElementById("faculty_form").setAttribute("class", "invisible");
        }

        window.onload=function(){
            main_form.first_name.onblur=checkfName;
            main_form.last_name.onblur=checklName;
            main_form.password.onblur=checkPassword;
            main_form.birthday.onblur=checkBday;
            main_form.password_confirmation.onblur=matchPassword;
            main_form.onsubmit=checkAll;
        }

        function checkfName(){
            str=main_form.first_name.value;
            msg="Warning:"
            if(str=="") msg += " Please fill this out this field.";
            else if(!str.match(/^[a-zA-Z\ \-\.]+$/))
                msg += " Only letters hyphens and spaces are allowed.";
            if(msg=="Warning:") msg="";
            if(msg=="") return true;
        }

        function checklName(){
            str=main_form.last_name.value;
            msg="Warning:"
            if(str=="") msg += " Please fill this out this field.";
            else if(!str.match(/^[a-zA-Z\ \-\.]+$/))
                msg += " Only letters, hyphens and spaces are allowed.";
            if(msg=="Warning:") msg="";
            if(msg=="") return true;
        }

        function checkBday(){
            str=main_form.birthday.value;
            msg="Warning:"
            if(str=="") msg += " Please fill this out this field.";
            else if(!str.match(/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/))
                msg += " Invalid date format (YYYY-MM-DD).";
            if(msg=="Warning:") msg="";
            if(msg=="") return true;
        }

        function checkPassword(){
            str=main_form.password.value;
            msg="Strength:"
            if(str=="") msg += "Please fill this out this field first.";
            else if(str.match(/^[a-z]+$/)){
                msg+=" Weak :(";
                msg="";
            }
            else if(str.match(/^[a-z0-9]+$/)){
                msg+=" Fair :|";
                msg="";
            }
            else if(str.match(/^[a-zA-Z0-9]+$/)){
                msg+=" Strong :)";
                msg="";
            }
            if(msg=="") return true;
        }

        function matchPassword(){
            str1=main_form.password.value;
            str2=main_form.password_confirmation.value;
            msg="Warning:"
            if(str2=="") msg += " Please fill this out this field.";
            if(!(str1==str2))
                msg+=" Passwords do not match"
            if(msg=="Warning:") msg="";
            if(msg=="") return true;
        }

        function checkAll(){
            if(checkfName()&& checklName() && checkBday() && checkPassword() && matchPassword()){
                return true;
            }
            return false;
        }
    </script>
</html>