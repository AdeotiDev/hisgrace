<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: #eee;
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 50px;
            border-radius: 10px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        p {
            font-size: 20px;
            margin-bottom: 40px;
        }
        #countdown {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .social-icons a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 36px;
            }
            #countdown {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>We're Coming Soon</h1>
        <p>Our website is under construction. Stay tuned for something amazing!</p>
        <div id="countdown"></div>
        <div class="social-icons">
            
            <hr>
         &copy;   Paramount Computers
</div>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 30, 2024 23:59:59").getTime();

        // Update the countdown every 1 second
        var countdownfunction = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="countdown"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            // If the countdown is over, write some text
            if (distance < 0) {
                clearInterval(countdownfunction);
                document.getElementById("countdown").innerHTML = "We are live !!!";
            }
        }, 1000);
    </script>

</body>
</html>