<?php

    
    

try{
            $dsn = 'mysql:host=localhost;dbname=emaillist';
            $username = 'root';
            $password = 'Pa$$w0rd';
            

            
                $db = new PDO($dsn, $username, $password);
            } catch(PDOException $e){
                $error_message=$e->getMessage();
                echo 'DB Error: Submission not sent';
            }
            global $db;
        
    


        // delete function
        function  deleteVisitor($visitorID) {
            // re-declare the $db
            try {
            $dsn = 'mysql:host=localhost;dbname=emaillist';
            $username = 'root';
            $password = 'Pa$$w0rd';
            

            
            $db = new PDO($dsn, $username, $password);
            
                // Get the IDs
                
                $query3 = 'DELETE FROM visitor
                  WHERE visitorID = :visitorID';
                
                
                $statement3 = $db->prepare($query3);
                $statement3->bindValue(":visitorID", $visitorID);
                $statement3->execute();
                $statement3->closeCursor();
       
        header("Location: admin.php");
    } catch(PDOException $e){
        $error_message=$e->getMessage();
        echo 'DB Error: ';
    }
            
        
        }

    
    



?>