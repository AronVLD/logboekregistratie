<?php
    include("./connect_db.php");
    include("./function.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if (empty($email) || empty($password)){
        header("Location:./index.php?content=message&alert=loginformempty");
    } else {
        $sql = "SELECT * FROM `register` 
                WHERE         `email` = '$email'";
            
        $result = mysqli_query($conn, $sql);
    
        if (!mysqli_num_rows($result)){
            header("Location:./index.php?content=message&alert=emailunknown");
        } else {
            $record = mysqli_fetch_assoc($result);

            if (!$record["activated"]){
                header("Location:./index.php?content=message&alert=notactivated&email=$email");
            } else if (!password_verify($password, $record["password"])){ 
                header("Location:./index.php?content=message&alert=nopasswordmatch&email=$email");
            } else { 
                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];

                switch($record["userrole"]){
                    case 'customer':
                        header("Location: ./index.php?content=customerhome");
                    break ;
                    case 'admin':
                        header("Location: ./index.php?content=adminhome");
                    break ;
                    case 'owner':
                        header("Location: ./index.php?content=ownerhome");
                    break ;
                    case 'default':
                        header("Location: ./index.php?content=home");
                    break ;

                }
            }
            
        }
    }







?>