<?php

$exam_type = $_POST['exam_type'];
$sem = $_POST['sem'];
$sem_type = $_POST['sem_type'];
$mark = $_POST['mark'];

$date = $_POST['date'];
$dept = $_POST['dept'];
$prof_cnt = $_POST['prof_cnt'];



?>
<html>
    <head>
        <link rel="stylesheet" href="includes/cosmobootstrap.css">
        <link rel="stylesheet" href="includes/cosmofont.css">
        <link rel="stylesheet" href="includes/prof_style.css">
        <script src="includes/jquery-2.1.1.min.js"></script>
        <title>
            CTMails
        </title>
    </head>
    <body>
        <h1>
        <img src="imgs/logo_white.png" id="delta_logo">
        CTMails
        </h1>
        <br>
        <div class="container" id="form-container" style="font-size:1.2em;">
        <div class="row">
            <div class="col-lg-4">Exam Type : </div>          <div class="col-lg-8"><?php echo($exam_type); ?></div>
            <div class="col-lg-4">Semester Number :</div>     <div class="col-lg-8"><?php echo($sem); ?></div>
            <div class="col-lg-4">Semester Type :</div>       <div class="col-lg-8"><?php echo($sem_type); ?></div>
            <div class="col-lg-4">Maximum Marks :</div>       <div class="col-lg-8"><?php echo($mark); ?></div>
            <div class="col-lg-4">Date :</div>                <div class="col-lg-8"><?php echo($date); ?></div>
            <div class="col-lg-4">Department :</div>          <div class="col-lg-8"><?php echo($dept); ?></div>
            <div class="col-lg-4">Number of Subjects :</div>  <div class="col-lg-8"><?php echo($prof_cnt); ?></div>

        </div>
        </div>

        <br><br>

        <div class="container" id="form-container">
        <form class="form-horizontal" action="./sdf.php" method="post" id="theform">

            <?php
//            Generating The Input Fields

            echo("<input type=\"text\" name=\"exam_type\" value=\"$exam_type\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"sem\" value=\"$sem\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"sem_type\" value=\"$sem_type\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"mark\" value=\"$mark\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"date\" value=\"$date\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"dept\" value=\"$dept\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"prof_cnt\" value=\"$prof_cnt\" style=\"display:none;\"> ");

            echo("<br><br>");
            for($i=1;$i<=$prof_cnt;$i++)
            {
            echo("<div class=\"form-group\">");

            echo("<div class=\"col-lg-2\"> ");
            echo("<label>Subject Code</label>");
            echo("</div>");

            echo("<div class=\"col-lg-4\"> ");
            echo("<input type=\"text\" id=\"sub$i\" length=\"6\" maxlength=\"6\" style=\"color:black\"> ");
            echo("</div>");

            echo("<div class=\"col-lg-2\"> ");
            echo("<label>Faculty</label>");
            echo("</div>");

            echo("<div class=\"col-lg-4\"> ");
            echo("<input type=\"text\" id=\"prof$i\" length=\"20\" maxlength=\"20\" style=\"width:100%; color:black;\"> ");
            echo("</div>");

            echo("</div>");
            }

            ?>

            <div class="form-group">
                <button class="btn btn-default" value="Submit" onclick="return false;">Submit</button>
            </div>
        </form>
        </div>




        <script src="includes/proflist_script.js"></script>
    </body>

</html>


<?php


