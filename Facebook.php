<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="facebook.png" type="image/x-icon">
    <title>Facebook-log in or sign up</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.css">
    <style>
        .facebookText{
            width: 100%;
        }
        form{
            border: 1px solid white;
            border-radius: 10px;
        }
        input{
            height: 50px;;
            border: 2px solid rgb(218, 215, 215);
            border-radius: 7px;
        }
        input:focus{
            outline: 2px solid rgb(127, 181, 228);
        }
        .wholeDiv{
            margin-top: 140px;
        }
        .facebook{
            width: 75%;
        }

        .facebookdiv{
            margin-top: 30px;
        }

        .formDiv{
            width: 38%;
        }
        @media(max-width:476px){
            .wholeDiv{
                margin-top:0px;
            }   
            .facebook{
                margin: 0 auto;
            }
            .formDiv{
                width: 100%;
            }

            .facebookText{
                width: 100%;
            }
        }
         
    </style>
</head>

<body style="background-color: rgb(211, 218, 226);">
    <div class="container row w-100 mx-auto wholeDiv">
        <div class="col-lg-6 col-md-6 col-sm-12 facebookdiv">
            <img src="fascebook.svg" alt="" class="facebook">
            <h3 class="facebookText ms-4">Facebook helps you connect and share with the people in your life.</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center formDiv">
            <form method="post" class="bg-white py-4 shadow-lg w-100 text-center" action="Facebook.html">
                <input type="email or number" placeholder="Email address or Phone Number" width="100px" class="col-11 border-tertiary mb-3">
                <input type="password" placeholder="Password" required class="col-11 border-tertiary mb-3"><br>  
                <button class="bg-primary col-11 text-light btn btn-md fw-bolder fs-5">Log in</button>
                <a href="">Forgotten Password?</a>
                <hr>
                <button class="btn btn-md bg-success col-6 text-white fw-bold">Create Account</button>
            </form>
            <p class="pt-3"><b>Create a Page</b> for a celebrity, brand or business.</p>
        </div>
    </div>


</body>

</html>