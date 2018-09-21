<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">	
    <title>Join Email List</title>
    <link rel="stylesheet" href="email_list.css">
    <!-- <script src="email_list.js"></script> -->
</head>
<body>
    <main>
        <h1>Please join our email list</h1>
        <form id="email_form" name="email_form" action="join.php" method="post">
            <label for="email_address1">Email Address:</label>
            <input type="text" id="email_address1" name="email_address1" required="">
            <span>*</span><br>

            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required="">
            <span>*</span><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required="">
            <span>*</span><br>

            <label for="comments">Comments:</label>
            <textarea rows="4" cols="50" id="comments" name="comments" required="">
            </textarea> <br>

            <a href="newsletter.php">Would you like to sign up for your news letter?</a>
           <br> <br>
           <a href="admin.php">Admin LInk</a>
           <br><br>

            <label>&nbsp;</label>
            <input type="submit" id="join_list" value="Join our List">
        </form>
    </main>
</body>
</html>