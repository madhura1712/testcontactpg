<!doctype html>
<head>
    <meta charset="utf-8">
    <title>CONTACT US </title>
    <style>
        .contactfor
        {
            text-align:center;
          
        }
        .container
        {
            background-color: #2B59C3;
        }
        p{
            text-align:center;
            color:white;
            font-size:30px;
        }
    </style>
    </head>
    <body>
        <div class="container">
        <main>
            <p>WE ARE ALWAYS READY TO SERVE YOU!</p>
            <form class="contactfor" action="contactform.php" method="post">
                <input type = "text" name="name" placeholder="fullname" required><br>
                <br>
                <input type = "text" name="mail" placeholder="YOUR EMAIL" required><br>
                <br>
                <!--<input type = "text" name="subject" placeholder="Subject"><br>
                <br>-->
                <textarea name="message" placeholder="message"></textarea><br>
                <br>
                <button type ="submit" name="submit">send mail</button><br>

            </form>

            

        </main>
        </div>
    </body>
    </html>
