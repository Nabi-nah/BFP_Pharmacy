<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('bfp.png') }}" type="image/png">
    <style>
        /* Add your CSS styles here */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #F5F3F5;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 440px;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .container p {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .container span {
            font-size: 15px;
        }

        .container a {
            
            text-decoration: underline;
            
        }

        .container button {
            background-color: #AC5959;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .container button:hover {
        background-color: #520F12; /* Change the color to your desired hover color */
        }

        .container form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .container input {
            background-color: #eee;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.active .sign-in {
            transform: translateX(100%);
        }

        .toggle-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            /* border-radius: 140px 0 0 90px; */
            z-index: 1000;
        }

        .toggle {
            height: 100%;
            background: linear-gradient(to right,#AC5959, #520F12);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .container.active .toggle {
            transform: translateX(50%);
        }

        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left {
            transform: translateX(-200%);
        }

        .container.active .toggle-left {
            transform: translateX(0);
        }

        .toggle-right {
            right: 0;
            transform: translateX(0);
        }

        .container.active .toggle-right {
            transform: translateX(200%);
        }

        #qs {
            font-size: 12px;
            text-align: center;
            margin-bottom: -3px;
        }

        #clickhere {
            font-size: 12px;
            font-style: italic;
            text-align: center;
            margin: 2px 0 0 10px;
        }
        #logo {
            width: 50%;
            height: 50%;
            float: left;
        }
        #bfpName{
            text-align: left;
        }
    </style>
    <title>BFP</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="{{route('account-login')}}" method="post">
                @csrf
                <h1>Sign In</h1>
                <br>
                <span>Sign In to Start your Session</span>
                <br>
                <input type="email" name="email" placeholder="Enter Email">
                <input type="password" name="password" placeholder=" Enter Password">
                <!-- <a href="#">Forget Password?</a> -->
                <button type="submit">Sign In</button>
                <p id="qs"></p>
                <p id="clickhere">Click <a href="{{url('BFP')}}">here</a> to view as public.</p>

            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <!--div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Log in to access health records, register patients, and more.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div-->
                <div class="toggle-panel toggle-right">
                    <div class = "grid-container">
                        <div class = "grid-item">
                            <img src="{{ asset('bfp.png') }}" alt="bfp-logo" id = "logo" >
                        </div>
                        <div padding = "10px;" class = "grid-item">
                            <h2 id = "bfpName" >Bureau of <br> Fire  Protection</h2>
                        </div>
                    </div>
                    
                    <p><br>“Save lives and Properties.”</p>
                    <p float = "bottom">Est. 1991</p>
                
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>

</body>

</html>
