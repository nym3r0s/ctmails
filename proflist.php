<?php

$exam_type = $_POST['exam_type'];
$sem = $_POST['sem'];
$sem_type = $_POST['sem_type'];
$mark = $_POST['mark'];

$date = $_POST['date'];
$dept = $_POST['dept'];
$prof_cnt = $_POST['prof_cnt'];

if(!isset($date))
{
    header("Location: ./index.php");
}


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

<?php
//          Initialising the count variable for the javascipt
            echo("<script>");
            echo("var count = $prof_cnt ;");
            echo("</script>");

?>

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
//          These are the details received from first page.
            echo("<input type=\"text\" name=\"exam_type\" value=\"$exam_type\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"sem\" value=\"$sem\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"sem_type\" value=\"$sem_type\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"mark\" value=\"$mark\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"date\" value=\"$date\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"dept\" value=\"$dept\" style=\"display:none;\"> ");
            echo("<input type=\"text\" name=\"prof_cnt\" value=\"$prof_cnt\" style=\"display:none;\"> ");


//            Generating The Input Fields
            echo("<br><br>");
            for($i=1;$i<=$prof_cnt;$i++)
            {
            echo("<div class=\"form-group\" id=\"f$i\" >");

            echo("<div class=\"col-lg-2\"> ");
            echo("<label class=\"control-label\">Subject Code</label>");
            echo("</div>");

            echo("<div class=\"col-lg-4\"> ");
            echo("<input class=\"form-control\" type=\"text\" id=\"sub$i\" name=\"sub$i\" length=\"6\" maxlength=\"6\" style=\"color:black\"> ");
            echo("</div>");

            echo("<div class=\"col-lg-2\"> ");
            echo("<label class=\"control-label\">Faculty</label>");
            echo("</div>");

            echo("<div class=\"col-lg-4\"> ");
            echo("<input class=\"form-control\" type=\"text\" id=\"prof$i\" name=\"prof$i\" length=\"20\" maxlength=\"20\" style=\"width:100%; color:black;\"> ");
            echo("</div>");

            echo("</div>");
            }

            ?>

            <div class="form-group">
                <button class="btn btn-default" value="Submit" onclick="validate();return false;">Submit</button>
            </div>
        </form>
        </div>




        <script src="includes/proflist_script.js"></script>
    </body>

</html>


<?php


