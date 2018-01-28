
<DOCTYPE HTML>
<html>
    <head>
        <Title>Hello</Title>
        <meta type="author" content="Ssim">
        <meta type="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF_8">
        <meta lang="EN">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <script>
        $(document).ready(function() {

        });
    </script>
    <style>
        body {
            background-color:#F0F0F1;
        }
        #backlogin {
            width:50%;
            margin:50px auto;
            border-radius:10px;
            height:450px;
            background-color: #FF5349;
        }
        #userIcon {
            font-size:200px;
            color: #292C44;
        }
        #loginForm {
            margin-top:30px;
        }
        .inp {
            width:50%;
            margin:auto;
        }
        #sub {
            background-color:#18CDCA;
            color:white;
        }
        @media only screen and (max-width:400px) {
            #backlogin {
                width:350px;
            }
            .inp {
                width:80%;
            }
        }
    </style>
    <body>
        <header>

        </header>
        <section class="w3-container">
            <div class="w3-card-4 w3-padding-16 w3-display-container" id="backlogin">
                <h1 class="w3-center" id="userIcon"><i class="fa fa-user-circle" aria-hidden="true"></i></h1>
                <form id="loginForm" action='<?php htmlspecialchars($_SERVER['PHP_SELF'])?>' method="post">
                    <input type="text" name="username" id="uid" placeholder="Username" class="w3-input inp w3-padding-16 w3-round-large w3-bottombar w3-border-0 w3-hover-border-indigo" required>
                    <input type="password" name="pwd" id="pwd" placeholder="Password" class="w3-input inp w3-padding-16 w3-round-large w3-bottombar w3-border-0 w3-hover-border-indigo" required>
                    <input type="submit" value="Login" id="sub" name="submit" class="w3-large w3-btn w3-block w3-hover-green w3-display-bottommiddle w3-round-large">
                </form>    
            </div>
        </section>
        <?php 
            $uid;
            $pwd;
            function cleanInput($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = str_replace(' ', '', $data);
                return $data;
              }
            function verifieInfo($user,$pass) {
                echo $user." ".$pass;
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $uid = cleanInput($_POST['username']);
                $pwd = cleanInput($_POST['pwd']);
                verifieInfo($uid,$pwd);
            };
        ?>
        <footer></footer>
    </body>
</html>