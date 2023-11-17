<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>
<body>
<div id="container">
    <div id="panel1">
        <div id="content2">
            <i class="fa-regular fa-image"></i>
            <h1 id="company" style="padding-left: 45px;">MG Exeo</h1>
            <img src="img1.svg" width="40%" height="40%"><br><br>
            <h1 id="greetings" style="line-height: 5px;">Welcome to MG Exeo!</h1>
            <p id="ins">Log in to access your account.</p>
        </div>
    </div>
    <div id="panel2">
        <form action="" id="content">
            <h1 style="padding-bottom: 12px;">Log in</h1><br>
                    <i class="fa-solid fa-user" style="padding-right: 7px;"></i> Email or Username:<br>
                    <input type="text" name="" id="textbox"><br>
                    <i class="fa-solid fa-lock" style="padding-right: 10px;"></i>Password:<br>
                    <input type="text" name="" id="textbox"><br>
                    <input type="checkbox" name=""> Remember me 
                <a href="" style="margin-left: 28px; color: #7D7D7D;">Forgot Password?</a><br><br><br>
            <input type="submit" name="" id="button" value="Log in"><br><br>
        </form>
    </div>
</div>
<?php

?>
<style>
body {
    background: #D3D2F3;
}     
#container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 875px;
    height: 584px;
    background: linear-gradient(244.48deg, rgba(75, 64, 255, 0.44) 8.33%, rgba(255, 69, 69, 0.45) 87.19%);
    box-shadow: -20px 10px 90px 2px #9D96D2;
    border-radius: 47px;
    animation: container-load 2s;
}
@keyframes container-load {
    0% {
        margin-left: 10%;
    }
}
#panel1 {
    position: fixed;
    width: 470px;
    height: 462px;
    left: 71px;
    top: 60px;
    background: linear-gradient(162.19deg, rgba(255, 255, 255, 0.355) 0%, rgba(255, 255, 255, 0) 104.64%);
    backdrop-filter: blur(21px);
    border-radius: 31px 0px 0px 31px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.20);
    border-left: 1px solid rgba(255, 255, 255, 0.41);
    animation: panel1-load 1.5s;
}
@keyframes panel1-load {
    0% {
        transform: translateX(45%);
    }
}
#panel2 {
    position: fixed;
    width: 374px;
    height: 464px;
    left: 440px;
    top: 60px;
    background: #E3E3E3;
    box-shadow: 30px 10px 60px #837FCA;
    border-radius: 31px;
    font-family: 'Varela Round', sans-serif;
    font-size: 11px;
    color: #7D7D7D;
    animation: panel2-load 1.4s
}
@keyframes panel2-load {
    0% {
        transform: translateX(30%);
    }
}
#content {
    line-height: 27px;
    margin: 52px 0 0 76px;
    animation: content-load 1.4s
}
@keyframes content-load {
    0% {
        transform: translateY(30%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#content2 {
    margin-top: 50px;
    margin-left: -20%;
    color: #F0F0F0;
    font-family: 'Varela Round', sans-serif;
    font-size: 14px;
    animation: content2-load 1.4s;
}
@keyframes content2-load {
    0% {
        transform: translateX(30%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
h1 {
    margin-left: 28%;
    font-size: 24px;
    font-family: 'Varela Round', sans-serif;
    font-weight: 10;
}
#company, #greetings {
    font-family: 'Varela Round', sans-serif;
    color: #F0F0F0;
}
#textbox {
    background: #D9D9D9;
    border-radius: 7px;
    width: 220px;
    height: 29px;
    border-style: none;
}
@keyframes reg-load {
    0% {
        transform: translateY(250%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#button {
    margin-left: 22.1%;
    background: linear-gradient(277.7deg, #A19BFD 11.04%, #A8A6D6 139.95%);
    border-radius: 7px;
    border-style: none;
    width: 100px;
    height: 35px;
    color: #F0F0F0;
    transition: 0.8s;
    font-family: 'Varela Round', sans-serif;
}
#button:hover {
    transition: 0.8s;
    background: linear-gradient(277.7deg, #8683CE 11.04%, #9A95F1 139.95%);
    cursor: pointer;
    box-shadow: -6px 0px 15px #CDCDCD, 6px 6px 15px #CDCDCD;
}
img {
    margin-left: 28%; 
    margin-top: 5%;
}
#ins {
    margin-left: 28.5%; 
}
input[type=text] {
    padding-left: 0.7rem;    
}
input[type=radio] {
  accent-color: gray;
}
input[type='checkbox'] {
    accent-color: gray;
}
.fa-image {
    position: fixed; 
    margin-left: 10rem; 
    font-size: 24px;
}
</style>
</body>
</html>