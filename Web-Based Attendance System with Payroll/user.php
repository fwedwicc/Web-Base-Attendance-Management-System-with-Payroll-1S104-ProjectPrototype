<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>   
    <title>User Page</title>
</head>
<body>
    <div id="container">
        <div id="panel1">
            <div id="content1">
                <div id="img5">
                    <img src="img5.svg" width="34%" height="34%">
                </div>
                <div id="profile">
                    <h1>Unknown</h1>
                    <p style="margin-top: -10px; font-size: 11px;">Employee ID:</p>
                </div>
                <br>
                <hr>
                <a href="#content2" id="efct">Dashboard</a><br>
                <hr>
                <a href="#in-out" id="efct">Time In/Out</a>
                <hr>
                <a href="#payslip" id="efct">View Payslip</a>
                <hr>
            </div>
        </div>
        <div id="panel2">
            <div id="content2">
                <div id="Dashboard">
                    <h1>Overview</h1>
                        <div id="sign-out">
                            Sign Out<i class="fa-solid fa-arrow-right-from-bracket"></i> 
                        </div>
                    <p>Computation of Expected Salary</p>
                    <div id="main-panel1">                   
                    </div>
                        <div id="img4">
                            <img src="img4.svg" width="31%" height="31%">
                        </div>
                    <div id="main-panel2">
                    </div>
                </div>
                <br>
                <div id="in-out" style="margin-top: 4rem;">
                    <br><br><br>
                    <h1>Time in/out</h1>
                    <p>Lorem ipsum dolor sit amet</p>
                    <br><br><br>
                    <form action="" id="content">     
                        <div id="set">
                            Name:<br>
                            <input type="text" name="" id="textbox"><br>
                            Biometric ID:<br>
                            <input type="text" name="" id="textbox"><br>
                                <div id="img3">
                                    <img src="img3.svg" width="35%" height="35%">
                                </div>               
                            <input type="submit" name="" id="button" value="Time In">
                            <input type="submit" name="" id="button" value="Time Out" style="float: right;"><br><br><br><br>
                        </div>
                    </form>
                </div>
                <div id="payslip">
                    <div id="Dashboard">
                        <h1>Payslip</h1>
                        <p>Lorem ipsum dolor sit ame</p><br>
                            <p>Date of Joining:</p>
                            <p>Pay Period:</p>
                            <p>Worked Days:</p>
                        <div id="ps-container">
                            <p>Date of Joining:</p>
                            <p>Pay Period:</p>
                            <p>Worked Days:</p>
                        </div>
                        <br>
                        <div id="slip-panel">
                        </div>
                    </div>
                </div>
            </div>
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
    width: 310px;
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
        transform: translateX(85%);
    }
}
#panel2 {
    position: fixed;
    width: 490px;
    height: 464px;
    left: 324px;
    top: 60px;
    background: #E3E3E3;
    box-shadow: 30px 10px 60px #837FCA;
    border-radius: 31px;
    font-family: 'Varela Round', sans-serif;
    font-size: 11px;
    color: #7D7D7D;
    overflow: scroll;
    overflow-x: hidden;
    scroll-behavior: smooth;
    animation: panel2-load 1.4s
}
@keyframes panel2-load {
    0% {
        transform: translateX(23%);
    }
}
a {
    font-family: 'Varela Round', sans-serif;
    color: #F0F0F0;
    font-size: 14px;
    text-decoration: none;
    line-height: 2rem;
    padding: 12px;
}
#content1 {
    margin-top: 12rem;
    margin-left: -3.5rem;
    text-align: center;
    animation: content1-load 1.4s;
}
@keyframes content1-load {
    0% {
        transform: translateX(23%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
hr {
    border: 0.2px solid rgba(255, 255, 255, 0.17);
    height: -20px;
    width: 12rem;
}
#content2{
    padding: 3rem;
    margin-top: -16px;
    animation: content2-load 1.4s;
}
@keyframes content2-load {
    0% {
        transform: translateY(8%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#sign-out {
    float: right;
    margin-top: -2.3rem;
    font-size: 13px;
    text-indent: 11px;
    cursor: pointer;
}
h1 {
    font-weight: 10;
}
#profile {
    font-weight: 10;
    font-family: 'Varela Round', sans-serif;
    color: #F0F0F0;
    font-size: 11px;
}
#main-panel1 {
    width: 244px;
    height: 150px;
    left: 170px;
    top: 60px;
    background: #D9D9D9;
    border-radius: 15px;
}
#main-panel2 {
    width: 24.5rem;
    height: 139px;
    left: 170px;
    margin-top: 1.4rem;
    background: #D9D9D9;
    border-radius: 15px;
}
#slip-panel {
    width: 24.5rem;
    height: 10rem;
    left: 170px;
    margin-top: 1.4rem;
    background: #D9D9D9;
    border-radius: 15px;
}
#textbox {
    background: #D9D9D9;
    border-radius: 7px;
    width: 210px;
    height: 29px;
    border-style: none;
}
#set {
    line-height: 1.8rem;
    margin-top: 2rem;
}
#button {
    margin-top: 3rem;
    background: linear-gradient(277.7deg, #A19BFD 11.04%, #A8A6D6 139.95%);
    border-radius: 7px;
    border-style: none;
    width: 90px;
    height: 35px;
    color: #F0F0F0;
    font-size: 12px;
    transition: 0.8s;
    font-family: 'Varela Round', sans-serif;
}
#button:hover {
    transition: 0.8s;
    background: linear-gradient(277.7deg, #8683CE 11.04%, #9A95F1 139.95%);
    cursor: pointer;
    box-shadow: -6px 0px 15px #CDCDCD, 6px 6px 15px #CDCDCD;
}
#efct {
    transition: 0.6s;
}
#efct:hover {
    background-color: #DD92AF;
    padding: 15px;
    padding-left: 60px;
    padding-right: 60px;
    border-radius: 15px;
}
#img3 {
    text-align: right;
    margin-top: -10rem;  
}
#img4 {
    text-align: right;
    margin-top: -9rem;  
}
#img5 {
    margin-top: -9.5rem;  
}
input[type=text] {
    padding-left: 0.7rem;    
}
*::-webkit-scrollbar {
    width: 9px;
}
*::-webkit-scrollbar-thumb {
    background-color: #ada8ea;
    border-radius: 10px;
}
#ps-container {
    margin-left: 12rem;
    margin-top: -4.5rem;
}
</style>
</body>
</html>