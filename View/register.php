<html>
    
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <title>Registration</title>
    </head>
    <body>
        <header>Registration<span class="headLogReg"><a href="index.php?action=main">
                Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?action=login">Login</a></span></header>
        
        <div id="wrapper">
        
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="validation">
                
                <label>First Name:</label><br>
                <input type="text" name="firstName">
                <br><br>

                <label>Last Name:</label><br>
                <input type="text" name="lastName">
                <br><br>
                
                <label>Phone:</label><br>
                <input type="tel" name="phoneNumber" placeholder="999-999-9999">
                <br><br>
   
                <label>Email:</label><br>
                <input type="text" name="email">
                <br><br>
            
                <label>Password:</label><br>
                <input type="text" name="password">
                <br><br>
                
                <input type="submit" value="Submit"><br>
        
            </form>
        </div>
    </body>
</html>
