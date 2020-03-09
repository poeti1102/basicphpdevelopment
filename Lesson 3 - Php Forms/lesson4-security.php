<?php
    $value = "";
    if(isset($_GET['submit']))
    {
        $value = $_GET['txt'];
        // $value = stripslashes($_GET['txt']);
        // $value = htmlentities($_GET['txt']);
        // $value = strip_tags($_GET['txt']);
        // $value = trim($_GET['txt']);
    }


    /*
    *
    * stripslashes();
    * htmlentities();
    * strip_tags();
    *
    *
    *
    *
    */
?>

<html> 
    <head>
        <title>PHP Input Security</title>
    </head>
    <body>
        <form action="">
            <input type="text"  name="txt" />
            <input type="submit" value="Submit" name="submit">
        </form>

        <h2>
            <?php
                echo $value;
            ?>
        </h2>
    </body>
</html>