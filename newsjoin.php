<?php 
     try{
     $dsn = 'mysql:host=localhost;dbname=emaillist';
     $username = 'root';
     $password = 'Pa$$w0rd';
     $db       = new PDO($dsn, $username, $password);



    $email = filter_input(INPUT_POST, 'email1');

    
    $query = 'INSERT INTO newsletter
                    (email)
                VALUES
                (:email1)';
    
    
                $statement = $db->prepare($query);
           
            $statement->bindValue(':email1', $email);
 
            
            $statement->execute();
            $statement->closeCursor();

        } catch(PDOException $e){
            $error_message=$e->getMessage();
            echo 'DB Error: Submission not sent';
        }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">	
    <title>Thanks for joining</title>
    <link rel="stylesheet" href="email_list.css">  
</head>

<body>
    <main>
        <h1>Thanks for Signing up!</h1>
          
    </main>
</body>
</html>