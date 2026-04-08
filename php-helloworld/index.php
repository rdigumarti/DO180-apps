<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Vodafone Team</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e60000, #990000);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You, Vodafone Team!</h1>
        <p>
            We sincerely appreciate your time and participation in the training session.
            Your enthusiasm and engagement made it a great success.
        </p>
        <p>
            We hope the session was valuable and helps you in your ongoing projects.
            Looking forward to collaborating again!
        </p>
        <div class="footer">
            &copy; <?php echo date("Y"); ?> Training Team
        </div>
    </div>
</body>
</html>
