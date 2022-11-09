<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    $blk     = $conn->real_escape_string($_POST['blk']);
	$name 	    = $conn->real_escape_string($_POST['name']);
	$name1 	= $conn->real_escape_string($_POST['name1']);
    $name2 	= $conn->real_escape_string($_POST['name2']);
    $name3  = $conn->real_escape_string($_POST['name3']);
    $name4  = $conn->real_escape_string($_POST['name4']);
    $name5  = $conn->real_escape_string($_POST['name5']);
    $name6  = $conn->real_escape_string($_POST['name6']);
    $name7  = $conn->real_escape_string($_POST['name7']);
    $name8  = $conn->real_escape_string($_POST['name8']);
    $name9  = $conn->real_escape_string($_POST['name9']);
    $name10  = $conn->real_escape_string($_POST['name10']);
    $name11  = $conn->real_escape_string($_POST['name11']);
    $name12  = $conn->real_escape_string($_POST['name12']);
    $name13  = $conn->real_escape_string($_POST['name13']);
    $name14  = $conn->real_escape_string($_POST['name14']);
    $name15  = $conn->real_escape_string($_POST['name15']);

	

    if(!empty($blk) && !empty($name) && !empty($name1)){

        $insert  = "INSERT INTO tblhouse (`name`, `name1`, `name2`, `name3`, `name4`,`name5`,`name6`,`name7`,`name8`,`name9`,`name10`,`name11`,`name12`,`name13`,`name14`,`name15`,`blk`) VALUES ('$name', '$name1','$name2', '$name3','$name4','$name5','$name6','$name7','$name8','$name9','$name10','$name11','$name12','$name13','$name14','$name15','$blk')";
        $result  = $conn->query($insert);

        if($result === true){
            $_SESSION['message'] = 'Household added!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{

        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../household.php");

	$conn->close();