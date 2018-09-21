<?php 
try {
      $dsn = 'mysql:host=localhost;dbname=emaillist';
      $username = 'root';
      $password = 'Pa$$w0rd';
      $db       = new PDO($dsn, $username, $password);


        $fname   = filter_input(INPUT_POST, 'first_name');
        $email   = filter_input(INPUT_POST, 'email_address1');
        $lname   = filter_input(INPUT_POST, 'last_name');
        $comment = filter_input(INPUT_POST, 'comments');
        

        
         $query = 'INSERT INTO visitor 
                    (fname, lname, email, comments, empno)
                VALUES
                (:first_name, :last_name, :email_address1, :comments, 1)';
        
        
                $statement = $db->prepare($query);
            $statement->bindValue(':first_name', $fname);
            $statement->bindValue(':email_address1', $email);
            $statement->bindValue(':last_name', $lname);
            $statement->bindValue(':comments', $comment);
            
            $statement->execute();
            $statement->closeCursor();

        } catch(PDOException $e){
            $error_message=$e->getMessage();
            echo 'DB Error: Submission failed to send';
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
        <h1>Thanks for joining!</h1>
          
    </main>
</body>
</html>