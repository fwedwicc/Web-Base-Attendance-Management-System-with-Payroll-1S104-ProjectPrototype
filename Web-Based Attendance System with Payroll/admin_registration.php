<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>   
    <title>Admin Page  I  Registration</title>
</head>
<body>
<div id="container">
    <div id="panel1">
        <form action="" id="content">
            <h1 style="padding-bottom: 12px;">Registration Form</h1>
            <a href="admin_dashboard.php" style="text-decoration: none; color: #7D7D7D;  text-indent: 7px; margin-left: 3rem; float: 
            right; margin-top: -52px; font-size: 12px;">Admin Dashboard<i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                <div id="textboxset1">
                    Last Name:<br>
                    <input type="text" name="" id="textbox"><br>
                    First Name:<br>
                    <input type="text" name="" id="textbox"><br>
                    Middle Name:<br>
                    <input type="text" name="" id="textbox"><br>
                    Password:<br>
                    <input type="text" name="" id="textbox"><br>
                </div>
            <img src="img2.svg" width="34%" height="34%">
            <div id="textboxset2">
                Email Addres:<br>
                <input type="text" name="" id="textbox"><br>
                Biometric ID:<br>
                <input type="text" name="" id="textbox"><br>
                Department:<br>
                <input type="text" name="" id="textbox"><br>
                Position:<br>
                <input type="radio"> Office
                <input type="radio" style='margin-left: 4rem; margin-top: 0.4rem;'> Field <br><br>
                <input type="submit" name="" id="button" value="Register"><br><br>
            </div>
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
    background: linear-gradient(120.58deg, rgba(75, 64, 255, 0.44) 14.45%, rgba(255, 69, 69, 0.45) 94.37%);
    box-shadow: 18px 11px 90px 2px #9D96D2;
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
    width: 744px;
    height: 464px;
    left: 70px;
    top: 60px;
    background: #E3E3E3;
    box-shadow: -30px 10px 60px #837FCA;
    border-radius: 31px;
    font-family: 'Varela Round', sans-serif;
    font-size: 11px;
    color: #7D7D7D;
    line-height: 27px;
    animation: panel1-load 1.4s
}
@keyframes panel1-load {
    0% {
        transform: translateX(15%);
    }
}
#textboxset1 {
    animation: textboxset2-load 1.4s;
}
#textboxset2 {
    padding-left: 20.6rem;
    margin-top: -60.8%;
    animation: textboxset2-load 1.4s;
}
@keyframes textboxset2-load {
    0% {
        opacity: 0%;
        transform: translateX(15%);
    }
    100% {
        opacity: 100%;
    }
}
a {
    animation: back-load 1.4s;
}
@keyframes back-load {
    0% {
        opacity: 0%;
        transform: translateX(15%);
    }
    100% {
        opacity: 100%;
    }
}
#content {
    margin: 5rem;
    margin-top: 3.3rem;
    animation: textboxset1-load 1.4s
}
h1 {
    font-size: 24px;
    font-family: 'Varela Round', sans-serif;
    font-weight: 10;
    animation: title-load 1.4s;
}
@keyframes title-load {
    0% {
        transform: translateX(15%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#textbox {
    background: #D9D9D9;
    border-radius: 7px;
    width: 247px;
    height: 29px;
    border-style: none;
}
#button {
    margin-top: 16px;
    float: right;
    margin-right: 5px;
    background: linear-gradient(277.7deg, #A19BFD 11.04%, #A8A6D6 139.95%);
    border-radius: 7px;
    border-style: none;
    width: 110px;
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
img{
    margin-left: 2rem;
    margin-top: 13px;
    animation: img-load 1.4s;
}
@keyframes img-load {
    0% {
        opacity: 0%;
        transform: translateX(70%);
    }
    100% {
        opacity: 100%;
    }
}
.fa-circle-xmark {
    float: right;
    margin-top: -49px;
    font-size: 17px;
    color: #7D7D7D;
    animation: close-load 1.4s;
}
@keyframes close-load {
    0% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
input[type=text] {
    padding-left: 0.7rem;    
}
input[type=radio] {
  accent-color: gray;
}
</style>
</body>
</html>