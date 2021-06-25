<?php

    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        // var_dump($_POST);
        include("./connect_db.php");

        include("./function.php");
        
        $email = sanitize($_POST["email"]);
            // echo "sdlk" . $email;exit;
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
    // echo $sql;exit();
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=emailexists");

        } else {
            $array = mk_password_hash_from_microtime();
            $sql = "INSERT INTO `register` 
                    (`id`, 
                    `email`, 
                    `password`, 
                    `userrole`) 
            VALUES (NULL, 
                    '$email', 
                    '{$array["password_hash"]}', 
                    'customer')";

            if (mysqli_query($conn, $sql)) {
                $id = mysqli_insert_id($conn);

                $to = $email;
                $subject = "Uw activatielink voor Koopeenkip.org";
                include("./email.php");
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html charset = UTF-8\r\n";
                $headers .= "From: admin@koopeenkip.nl\r\n";
                $headers .= "Bcc: moderator@koopeenkip.nl";

                // mail($to, $subject, $message, $headers);
                echo $message;

                header("Refresh:10; url=./index.php?content=message&alert=register-succes");
            } else {
                header("Location: ./index/php?content=message&alert=registration-error");
            }
        }   
    }
?>