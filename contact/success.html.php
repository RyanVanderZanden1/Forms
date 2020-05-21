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
                <h1>We will be in contact with you soon!</h1>
                <p>Thank you for registering:<br><br>
                    Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
                    Role: <?php echo htmlspecialchars($users_role, ENT_QUOTES, 'UTF-8'); ?><br>
                    Question or Comment: <?php echo htmlspecialchars($users_comment, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </main>
    </body>
</html>