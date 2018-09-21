<?php
    require('database.php');

        $action = filter_input(INPUT_POST, 'action');
            if ($action == NULL) {
                $action = filter_input(INPUT_GET, 'action');
                if ($action == NULL) {
                    $action = 'list_visitors';
                }
            }

            


    if($action == 'list_visitors'){
        $empNo = filter_input(INPUT_GET, 'empNo', FILTER_VALIDATE_INT);
        if($empNo == null || $empNo == FALSE) {
            $empNo = 1;
        }

        // create an array of employees
        // read from employee table
        try{
        $query = 'SELECT * from employee ORDER BY empNo';
        } catch(PDOException $e){
            $error_message=$e->getMessage();
            echo 'DB Error: ';
        }

        $statement = $db->prepare($query);
        $statement->execute();
        $employees = $statement;
        
         // read from employee table
         try {
         $query2 = 'SELECT * from visitor WHERE empNo = :empNo ORDER BY empNo';
         } catch(PDOException $e){
            $error_message=$e->getMessage();
            echo 'DB Error: ';
        }
        
         $statement2 = $db->prepare($query2);
         $statement2->bindValue(":empNo", $empNo);
         $statement2->execute();
         $visitors = $statement2;

    } else if ($action == 'delete_visitor') {

        
        // Get the IDs
        $visitorID = filter_input(INPUT_POST, 'visitorID', 
                FILTER_VALIDATE_INT);
        
    
        // Delete the product
        deleteVisitor($visitorID);
    
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
    <h1> employee info </h1>
    <nav>
        <ul>
        <!-- list of employees by employee number -->
        <?php foreach ($employees as $employee) : ?>
            <li>
            <a href="?empNo=<?php echo $employee['empNo']; ?>">
                <?php echo $employee['fname']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>


        <section>
        <!-- display a table of visitors -->
        <h2><?php echo $empNo; ?></h2>
        <table>
            <tr>
                <th>Name</th>
                <th class="right">Message</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['fname']; ?></td>
                <td><?php echo $visitor['comments']; ?></td>
        
                <!-- send the delete action on click -->
                <td><form action="admin.php" method="post"
                          id="delete_visitor">
                    <input type="hidden" name="action"
                           value="delete_visitor">
                    <input type="hidden" name="visitorID"
                           value="<?php echo $visitor['visitorID']; ?>">
                    <input type="hidden" name="empNo"
                           value="<?php echo $visitor['empNo']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </section>




          
    </main>
</body>
</html>