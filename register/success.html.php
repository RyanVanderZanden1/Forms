<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Form Submission</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
            <main>
                <h1>Thank you!</h1>
                <p>Thank you for registering:<br><br>
                    Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
                    Age: <?php echo htmlspecialchars($users_age, ENT_QUOTES, 'UTF-8'); ?><br>
                    Role: <?php echo htmlspecialchars($users_role, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact Name: <?php echo htmlspecialchars($users_emername, ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact Phone Number: <?php echo htmlspecialchars($users_emerphone, ENT_QUOTES, 'UTF-8'); ?><br>
                    Gender: <?php echo htmlspecialchars($users_gender, ENT_QUOTES, 'UTF-8'); ?><br>
                    Accommodations needed: <?php echo htmlspecialchars($users_comment, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </main>
    </body>
</html>