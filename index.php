<html>
    <head>
        <link rel="stylesheet" href="includes/cosmobootstrap.css">
        <link rel="stylesheet" href="includes/cosmofont.css">
        <link rel="stylesheet" href="includes/style.css">
        <script src="includes/jquery-2.1.1.min.js"></script>
        <title>
            CTMails
        </title>
    </head>
    <body>
        <h1>
        <img src="imgs/logo_white.png" id="delta_logo">
        CTMails</h1>
        <br>
        <div class="container" id="form-container">
        <form class="form-horizontal" action="./proflist.php" method="post" id="theform">
<!--

            <div class="form-group">
                <label class="col-lg-2 control-label">Type Of Exam</label>
                <div class="col-lg-10"></div>
            </div>

-->

            <div class="form-group" id="div_exam_type">
                <label class="col-lg-2 control-label">Type Of Exam</label>
                <div class="col-lg-10">

                    <div class="radio col-lg-4">
                    <label>
                    <input type="radio" name="exam_type" value="CT1">
                    Cycle Test 1 (CT1)
                    </label>
                    </div>

                    <div class="radio col-lg-4">
                    <label>
                    <input type="radio" name="exam_type" value="CT2">
                    Cycle Test 2 (CT2)
                    </label>
                    </div>


                    <div class="radio col-lg-4">
                    <label>
                    <input type="radio" name="exam_type" value="SEM">
                    Semester (SEM)
                    </label>
                    </div>

                </div>
            </div>


            <div class="form-group" id="div_sem">
                <label class="col-lg-2 control-label">Semester</label>
                <div class="col-lg-10">

                    <div class="col-lg-6">
                        <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="I">
                        I
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="II">
                        II
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="III">
                        III
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="IV">
                        IV
                        </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="V">
                        V
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="VI">
                        VI
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="VII">
                        VII
                        </label>
                        </div>
                            <div class="radio col-lg-3">
                        <label>
                        <input type="radio" name="sem" value="VIII">
                        VIII
                        </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group" id="div_sem_type">
                <label class="col-lg-2 control-label">Semester Type</label>
                <div class="col-lg-10">

                    <div class="radio col-lg-6">
                    <label>
                    <input type="radio" name="sem_type" value="ODD">
                    ODD
                    </label>
                    </div>


                    <div class="radio col-lg-6">
                    <label>
                    <input type="radio" name="sem_type" value="EVEN">
                    EVEN
                    </label>
                    </div>

                </div>
            </div>

            <div class="form-group" id="div_mark">
                <label class="col-lg-2 control-label">Marks</label>
                <div class="col-lg-10">
                        <div class="radio col-lg-4">
                        <label>
                        <input type="radio" name="mark" value="20">
                        20
                        </label>
                        </div>
                            <div class="radio col-lg-4">
                        <label>
                        <input type="radio" name="mark" value="25">
                        25
                        </label>
                        </div>
                            <div class="radio col-lg-4">
                        <label>
                        <input type="radio" name="mark" value="50">
                        50
                        </label>
                        </div>
                </div>
            </div>


            <div class="form-group" id="div_date">
                <label class="col-lg-2 control-label">Date Of Exam</label>
                <div class="col-lg-10">
                    <input type="date" name="date_check" style="float:left; color:black;">
                    <input type="text" name="date" style="font-size:17px; color:black; display:none;">
                </div>
            </div>


            <div class="form-group"  id="div_dept">
                <label class="col-lg-2 control-label">Department</label>
                <div class="col-lg-10">
                    <select class="form-control" name="dept" value="">
                        <option value="" selected style="display:none;"></option>
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                        <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                        <option value="Instrumentation and Control Engineering">Instrumentation and Control Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Production Engineering">Production Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
                    </select>
                </div>
            </div>

            <div class="form-group" id="div_prof_cnt">
                <label class="col-lg-2 control-label">Number of Subjects</label>
                <div class="col-lg-10">
                    <select class="form-control" name="prof_cnt" value="">
                        <option value="" selected style="display:none;"></option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-default" value="Submit" onclick="validate();return false;">Submit</button>
            </div>
        </form>
        </div>




        <script src="includes/index_script.js"></script>
    </body>

</html>
