<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>  
    <title>Admin Page  I  Employee's Attendance</title>
</head>
<body>
<div id="container">
    <div id="panel">
        <div id="content">
            <h1>Employee's Attendance Dashboard</h1>
            Attendance Management 
            <div id="set">
                <a href="admin_dashboard.php" style="text-decoration: none; color: #7D7D7D; margin-left: 3.8rem;">Admin Dashboard<i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
            <div id="db-panel">
            </div>
            <form action="" id="button-set">
                <input type="submit" name="" id="button" value="Print" style="margin-right: 6rem; margin-left: -70px;">
                <input type="submit" name="" id="button" value="Add">
                <input type="submit" name="" id="button" value="Edit">
                <input type="submit" name="" id="button" value="Delete">
            </form>
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
#panel {
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
    font-family: 'Varela Round', sans-serif;
    font-size: 11px;
    animation: panel1-load 1.4s
}
@keyframes panel1-load {
    0% {
        transform: translateX(15%);
    }
}
h1 {
    font-size: 24px;
    font-family: 'Varela Round', sans-serif;
    font-weight: 10;
}
#set {
    text-indent: 7px;
    font-size: 12px;
    float: right;
    margin-top: -2.5rem;
}
#content {
    margin: 5rem;
    margin-top: 3.3rem;
    animation: content-load 1.4s;
}
@keyframes content-load {
    0% {
        transform: translateX(17%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#db-panel {
    width: 580px;
    height: 224px;
    background: #D9D9D9;
    border-radius: 15px;
    margin-top: 0.5rem;
}
#button {
    margin: 13px;
    background: linear-gradient(277.7deg, #A19BFD 11.04%, #A8A6D6 139.95%);
    border-radius: 7px;
    border-style: none;
    width: 99px;
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
#button-set {
    float: right;
    margin-top: 10.4px;
    margin-right: -4px;
}

</style>
</body>
</html>