<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">	
    <title>Join News Letter</title>
    <link rel="stylesheet" href="email_list.css">
    <!-- <script src="email_list.js"></script> -->
</head>
<body>
    <main>
        <h1>Please join our email list</h1>
        <form id="newsletter_form" name="newsletter_form" action="newsjoin.php" method="post">
            <label for="email1">Email Address for News Letter:</label>
            <input type="text" id="email1" name="email1" required="">
            <span>*</span><br>

           

            <label>&nbsp;</label>
            <input type="submit" id="join_news" value="Accept News Letter">
            
        </form>
    </main>
</body>
</html>