<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sunnyhouse</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    * {
        box-sizing:border-box;
    }
    html {
  font-family: "Lucida Sans", sans-serif;
    }
    .row::after {
        content:"";
        clear:both;
        display:table;
    }
    [class*="column-"] {
        float:left;
        padding:15px;
    }
    div.brand{
                display: flex;
                padding: 0px 0px;
                justify-content: space-between;
                align-items: center;
                background-color:#b4aa99;
                
            }
            div.menu{
            background-color: #b4aa99;
            margin-top: 10px;
 
            }
                     
            .menu>ul{
                display: flex;
                list-style: none;
                background-color: #b4aa99;
                color: black;
                padding-inline-start: 10px;

            }
            .menu>ul>li{
                display: inline-block;
                position: relative;
                text-decoration: none;;
                padding: 10px 0px;
            

            }
            .menu>ul>li a{
                text-decoration: none;
                color: black;
                font-size: 1.5vw;
                text-align: center;
                padding: 10px 7px; 

            }
            .menu>ul>li a:hover{
                background-color: #948979;
            }
            .menu>ul>li>ul{
                display:none;
                position: absolute;
                background-color: #b4aa99;
                list-style: none;
                padding-inline-start: 0px;
            }
            .menu>ul>li>ul li{
                padding:0px 0px;
            }
            .menu>ul>li>ul>li a{
                text-decoration: none;
                color: black;
                font-size: 1.5vw;
                padding: 0px 0px; 
                float: center;
             
            }
            .menu>ul>li>ul>li a:hover{
                background-color: #948979;
            }
            .menu>ul>li:hover ul{
                display:block;
                background-color:#b4aa99;
            }
            div.content{
            float:left;
             background-color:#f5f5f5;
             padding-bottom: 30px;
             padding-top:10px;
            }
            
            div.footer{                
                clear: both;
                background-color: #b4aa99;
                height:200px;
            }
    /*mobile*/
[class*="column-"] {
        width:100%;
    }
    img {
        width:100%;
        height: auto;
    }
    a {
        text-decoration: none;
        color: black;      
    }
    .hiddentext {
        white-space: nowrap;  
        overflow:clip;
        text-overflow: ellipsis;
        border: 1px hidden white;
        padding: 0px 0px;
    }
    
    div.menub{
            background-color: #b4aa99;
 
            }
                     
            .menub > ul{
                list-style: none;
                background-color: #b4aa99;
                color: black;
                display:flex;

            }
            .menub > ul > li {
                display: inline-block;
                position: relative;
                text-decoration: none;;
            

            }
            .menub > ul> li a{
                text-decoration: none;
                color: black;
                font-size: 1vw;

            }
            .menub>ul>li a:hover{
                background-color: #b4aa99;
               
            }
            .menub>ul>li>ul{
                display:none;
                position: absolute;
                margin-top:70px;
                margin-left:50px;
                background-color: #948979;
                list-style: none;
            }
            .menub>ul>li>ul li{
                padding:0px 0px;
            }
            .menub>ul>li>ul>li a{
                text-decoration: none;
                color: black;
                font-size: 1vw;
             
            }
            .menub>ul>li>ul>li a:hover{
                background-color: #b4aa99;
            }
            .menub>ul>li:hover ul{
                display:block;
                background-color:#948979;
            }
            div.effect a:hover{
        background:#948979;
    }
    @media only screen and (min-width: 480px) {
    /*phone: */
    .column-p-1 {width: 8.33%;}
    .column-p-2 {width: 16.66%;}
    .column-p-3 {width: 25%;}
    .column-p-4 {width: 33.33%;}
    .column-p-5 {width: 41.66%;}
    .column-p-6 {width: 50%;}
    .column-p-7 {width: 58.33%;}
    .column-p-8 {width: 66.66%;}
    .column-p-9 {width: 75%;}
    .column-p-10 {width: 83.33%;}
    .column-p-11 {width: 91.66%;}
    .column-p-12 {width: 100%;}
    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 15px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 15px; 

    }
    .menu>ul>li>ul li{
        padding:0px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 0px 0px;

    }

        div.content{
        min-width:100%;
        }

    }
    @media only screen and (min-width: 600px) {
    /*tablets: */
    .column-t-1 {width: 8.33%;}
    .column-t-2 {width: 16.66%;}
    .column-t-3 {width: 25%;}
    .column-t-4 {width: 33.33%;}
    .column-t-5 {width: 41.66%;}
    .column-t-6 {width: 50%;}
    .column-t-7 {width: 58.33%;}
    .column-t-8 {width: 66.66%;}
    .column-t-9 {width: 75%;}
    .column-t-10 {width: 83.33%;}
    .column-t-11 {width: 91.66%;}
    .column-t-12 {width: 100%;}
    
    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 20px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 20px; 

    }
    .menu>ul>li>ul li{
        padding:5px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }
    
    }
    @media only screen and (min-width: 768px) {
    /*desktop: */
    .column-d-1 {width: 8.33%;}
    .column-d-2 {width: 16.66%;}
    .column-d-3 {width: 25%;}
    .column-d-4 {width: 33.33%;}
    .column-d-5 {width: 41.66%;}
    .column-d-6 {width: 50%;}
    .column-d-7 {width: 58.33%;}
    .column-d-8 {width: 66.66%;}
    .column-d-9 {width: 75%;}
    .column-d-10 {width: 83.33%;}
    .column-d-11 {width: 91.66%;}
    .column-d-12 {width: 100%;}


    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 25px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 25px; 

    }
    .menu>ul>li>ul li{
        padding:8px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }
    }
    @media only screen and (min-width: 992px) {
    /*laptop: */
    .column-l-1 {width: 8.33%;}
.column-l-2 {width: 16.66%;}
    .column-l-3 {width: 25%;}
    .column-l-4 {width: 33.33%;}
    .column-l-5 {width: 41.66%;}
    .column-l-6 {width: 50%;}
    .column-l-7 {width: 58.33%;}
    .column-l-8 {width: 66.66%;}
    .column-l-9 {width: 75%;}
    .column-l-10 {width: 83.33%;}
    .column-l-11 {width: 91.66%;}
    .column-l-12 {width: 100%;}

    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 30px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 35px; 

    }
    .menu>ul>li>ul li{
        padding:15px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }


    }
    @media only screen and (min-width: 1100px) {
    /*laptop: */
    .column-m-1 {width: 8.33%;}
    .column-m-2 {width: 16.66%;}
    .column-m-3 {width: 25%;}
    .column-m-4 {width: 33.33%;}
    .column-m-5 {width: 41.66%;}
    .column-m-6 {width: 50%;}
    .column-m-7 {width: 58.33%;}
    .column-m-8 {width: 66.66%;}
    .column-m-9 {width: 75%;}
    .column-m-10 {width: 83.33%;}
    .column-m-11 {width: 91.66%;}
    .column-m-12 {width: 100%;}

    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 33px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 40px; 

    }
    .menu>ul>li>ul li{
        padding:10px 5px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }
    }
    @media only screen and (min-width: 1200px) {
    /* large-laptop: */
    .column-1 {width: 8.33%;}
    .column-2 {width: 16.66%;}
    .column-3 {width: 25%;}
    .column-4 {width: 33.33%;}
    .column-5 {width: 41.66%;}
    .column-6 {width: 50%;}
    .column-7 {width: 58.33%;}
    .column-8 {width: 66.66%;}
    .column-9 {width: 75%;}
    .column-10 {width: 83.33%;}
    .column-11 {width: 91.66%;}
    .column-12 {width: 100%;}

    
    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 35px;


    }
    .menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 45px; 

    }
    .menu>ul>li>ul li{
        padding:15px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }

    }
    @media only screen and (min-width: 1400px) {
    /* large-laptop: */
    .column-n-1 {width: 8.33%;}
    .column-n-2 {width: 16.66%;}
    .column-n-3 {width: 25%;}
    .column-n-4 {width: 33.33%;}
    .column-n-5 {width: 41.66%;}
    .column-n-6 {width: 50%;}
    .column-n-7 {width: 58.33%;}
    .column-n-8 {width: 66.66%;}
    .column-n-9 {width: 75%;}
    .column-n-10 {width: 83.33%;}
    .column-n-11 {width: 91.66%;}
    .column-n-12 {width: 100%;}

    
    div.brand{
        padding: 0px 0px;

    }
    .menu>ul{
        padding-inline-start: 40px;


    }
.menu>ul>li{
        padding: 20px 0px;

    }
    .menu>ul>li a{
        padding: 19px 50px; 

    }
    .menu>ul>li>ul li{
        padding:15px 0px;

    }
    .menu>ul>li>ul>li a{
        padding: 5px 0px;

    }
    div.content{
        min-width:100%;
        }
}

</style>
<body>
<div class="row">
<div class="brand"> 
<?php
require_once "config.php";
    if(isset($_SESSION['dangnhap']['username']) && isset($_SESSION['dangnhap']['password']))
        {
            $tk=$_SESSION['dangnhap']['username'];
            $pw= $_SESSION['dangnhap']['password'];
            require_once "config.php";
            $sql = "SELECT fullname FROM user where username='$tk' and password='$pw'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result)
        ?>
        <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href=""><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a>
        <div class= "column-4 column-p-4 column-t-4 column-d-4 column-l-4 column-m-4 column-n-4" style="float: left" ><a href="index.php"><b style="font-size:1.5vw; padding-right:10px ">CỬA HÀNG</b></a><b style="font-size:1.5vw">|</b><a href="manager.php?code2=info"><b  style="font-size:1.5vw;; padding-left:10px ">QUẢN LÍ CỬA HÀNG</b></a></div>
        <span class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3"></span>

 
        <div class="menub column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"  >
                            <ul >
      
                            <li > <a style="float: left;margin-left:30px; margin-top: 15px;" href="" ><img style="width:25%;height: auto;margin-left:50px" src="Pictures_icons/account1.png" width = '25' height = '25' /><?php echo "</br><span style='display:flex; margin-top:0px'>".$row["fullname"]."</span>";?></a>
                                 <ul>
                                      <li style="margin-left:0px">  <a href="manager_account.php"><b>Tài khoản</b></a></li> 
                                 </ul>
                            </li>
                         </ul>
                        </div>    
        <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="logout.php"><img style="width:40%;height: auto;"  src="Pictures_icons/logout1.png"  width="70px" height="50px"></a>
        <?php 
        }
        if(!isset($_SESSION['dangnhap']['username']) && !isset($_SESSION['dangnhap']['password']))
        {
        ?>
            <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href="index.php"><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a>
        <span class= "column-9 column-t-9 column-d-9 column-p-9 column-l-9 column-m-9 column-n-9"></span>
        <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="login.php"><img style="width:60%;height: auto;" src="Pictures_icons/log-in.png"  width="70px" height="50px"></a>
<?php } ?>
        </div>
</div>

<div  class="menu">
    <ul >
        <li class="multimenu"><a href="manager.php?mana_product=cat"><b>Quản Lí Sản Phẩm</b></a></li>
        <li class="multimenu"><a href="manager_order.php?mana_order=cat1"><b>Quản Lí Đơn Hàng</b></a>  
            </li>  
            <li class="multimenu"><a href="manager_custome.php?mana_customer=cat1"><b>Danh Sách Khách Hàng</b></a>  
            </li> 
            <li class="multimenu"><a href="manager_achievement.php?mana_achievement=cat2"><b>Quản Lí Khác</b></a> 
        </li>
    </ul>    
    </div>



<div class="content">
    <div class="row">
    

    <?php
       if(isset($_GET['mana_order'])){
        $_SESSION['mana_order']=$_GET['mana_order'];
    }
    if(isset($_GET['code1']))
    {
        $_SESSION['code1']=$_GET['code1'];
    }
    if(isset($_SESSION['mana_order'])){
        require_once "config.php";
        ?>
        <center>
            <div class="column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2" style="float: left;background: white;border-right:1px ridge white">
        <div style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >  <div class="effect"><a style="float: left;font-size:1.3vw; padding:5px 0px ;width:100%" href="manager_order.php?code1=sale"><center>CHƯA HOÀN THÀNH</center></a></br></br></div></div>
        <div  style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >    <div class="effect"><a style="float: left;font-size:1.3vw; padding:5px 0px; width:100%"  href="manager_order.php?code2=info"><center>ĐÃ HOÀN THÀNH</center></a></br></br></div></div>
        </div>
        </center>
        <div class="column-10 column-t-10 column-d-10 column-p-10 column-l-10 column-m-10 column-n-10">
         
            <?php
            if(!isset($_GET['code1']) && !isset($_GET['code2']) && !isset($_GET['detail']) && !isset($_GET['update'])){
                ?>
                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">

                <table border='1' style="border-collapse:collapse; width:100%">
                         <tr>
                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">MÃ đơn hàng</th>
                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Mã KH</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Khách hàng</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Tổng tiền</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Trạng thái</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
           
                        </tr>
                        <?php
            
                        $sql4 = "SELECT * FROM `order` WHERE status NOT LIKE N'%hoàn thành%'";
                        $result4 = mysqli_query($conn, $sql4);          
                        if (mysqli_num_rows($result4) > 0){
                            $stt=1;
                        while($row4 = mysqli_fetch_assoc($result4)) {

                                echo "<tr>";
                            
                        ?>  
                        <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                        <td  style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><span style="font-size: 1vw"><?php echo $row4["code"];?></td>
                        <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["user_id"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["fullname"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo number_format( $row4["total"])." VNĐ";?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["status"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager_order.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager_order.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                                <?php
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                                echo "</table>";
                                                echo "</div>";
                                                }

            }
            if(isset($_GET['code1']) && !isset($_GET['detail'])){
                ?>
                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">

                <table border='1' style="border-collapse:collapse; width:100%">
                         <tr>
                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">MÃ đơn hàng</th>
                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Mã KH</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Khách hàng</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Tổng tiền</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Trạng thái</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
           
                        </tr>
                        <?php
            
                        $sql4 = "SELECT * FROM `order` WHERE status NOT LIKE N'%hoàn thành%'";
                        $result4 = mysqli_query($conn, $sql4);          
                        if (mysqli_num_rows($result4) > 0){
                            $stt=1;
                        while($row4 = mysqli_fetch_assoc($result4)) {

                                echo "<tr>";
                            
                        ?>  
                        <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                        <td  style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><span style="font-size: 1vw"><?php echo $row4["code"];?></td>
                        <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["user_id"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["fullname"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo number_format( $row4["total"])." VNĐ";?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["status"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager_order.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager_order.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                                <?php
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                                echo "</table>";
                                                echo "</div>";
                                                }

            }
            if(isset($_GET['code2'])){
                ?>
                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">

                <table border='1' style="border-collapse:collapse; width:100%">
                         <tr>
                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">MÃ đơn hàng</th>
                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Mã KH</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Khách hàng</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Tổng tiền</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Trạng thái</th>
                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
           
                        </tr>
                        <?php
            
                        $sql4 = "SELECT * FROM `order` WHERE status LIKE N'%hoàn thành%'";
                        $result4 = mysqli_query($conn, $sql4);          
                        if (mysqli_num_rows($result4) > 0){
                            $stt=1;
                        while($row4 = mysqli_fetch_assoc($result4)) {

                                echo "<tr>";
                            
                        ?>  
                        <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                        <td  style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><span style="font-size: 1vw"><?php echo $row4["code"];?></td>
                        <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["user_id"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["fullname"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo number_format( $row4["total"])." VNĐ";?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["status"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager_order.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></center> </td>            
                                                                <?php
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                                echo "</table>";
                                                echo "</div>";
                                                }

            }
            if(isset($_GET['detail']))
            {
                echo "<center>";
                $order_id2= $_GET['detail'];
                $sqld = "SELECT * FROM `order` WHERE id=$order_id2 ";
                $resultd = mysqli_query($conn, $sqld);
                if (mysqli_num_rows($resultd) > 0) {
                    While($rowd  =mysqli_fetch_assoc($resultd)){
                        ?>
                        <div style=" float: left;border: 1px ridge white;  width: 100%;padding-bottom:20px">
                    </br>
                      <h1>CHI TIẾT ĐƠN HÀNG</h1>
                    </br>

                        <lable for="fullname">Khách hàng:</lable>
                        <input type ="text" value="<?php echo $rowd['fullname'];?>" name = "fullname" id="fullname" style="padding-right: 20px" disabled/>
                        <lable for="address">Địa chỉ:</lable>
                        <input type ="text" value="<?php echo $rowd['address'];?>" name = "address" id="address" style="padding-right: 20px" disabled/>
                        <lable for="phone">Số điện thoại:</lable>
                        <input type = "text" value = "<?php echo $rowd['phone_number'];?>" name = "phone" id="phone" style="padding-right: 20px" disabled/></br>
                        <lable for="order_code">Mã đơn hàng:</lable>
                        <input type = "text" value = "<?php echo $rowd['code'];?>" name = "order_code" id="order_code" style="padding-right: 20px;margin-top: 20px" disabled/>
                        <lable for="order_status">Trạng thái đơn hàng:</lable>
                        <input type = "text" value = "<?php echo $rowd['status'];?>" name = "order_status" id="order_status" style="padding-right: 20px;margin-top: 20px" disabled/>
                        <lable for="order_note">Ghi chú:</lable>
                        <input type = "text" value = "<?php echo $rowd['note'];?>" name = "order_note" id="order_note" style="padding-right: 20px;margin: 20px" disabled/>
                   
                                </div>
                    </br>
                    </br>
                            <div style="width:100%">
                            <table border='1' style="border-collapse:collapse; width:100%">
                         <tr>
                       
                        <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">STT</th>
                        <th  class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4">Sản phẩm</th>
                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Giá</th>
                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Số lượng</th>
                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thành Tiền</th>      
                         </tr>
                            <?php
                            $stt=1;
                        $sqle = "SELECT * FROM `detail_order` WHERE order_id=$order_id2 ";
                        $resulte = mysqli_query($conn, $sqle);
                        if (mysqli_num_rows($resulte) > 0) {
                            While($rowe  =mysqli_fetch_assoc($resulte)){ 
                                $cart_id2=$rowe["cart_id"];
                                $sqlf = "SELECT * FROM `product` WHERE product.id IN (SELECT cart.product_id FROM `cart` WHERE cart.id=' $cart_id2')";
                                $resultf = mysqli_query($conn, $sqlf);
                                if (mysqli_num_rows($resultf) > 0) {
                                    While($rowf  =mysqli_fetch_assoc($resultf)){
                                                                      
                                        echo"<tr>";
                                        echo "<td style='border-bottom: hidden;border-left: hidden; border-right: hidden' class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'><center><span> $stt </span></center></td>";
                                        ?>
                                        <div style="display:flex">
                                        <?php
                                                $picture=$rowf['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                                   <td style='border-bottom: hidden'class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <img style="width:20%;height: auto" src="<?php echo $rowf['picture'];?>"  width="70px" height="50px">
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                     <td style='border-bottom: hidden'class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <img style="width:20%;height: auto" src="product/<?php echo $rowf['picture'];?>"  width="70px" height="50px">
          
                                                         <?php
                                                
                                                               }
                                               ?> 
                                        <span class="hiddentext" style="font-size: 1vw; vertical-align: middle"><b><?php echo $rowf["name"];?></b></span>
                                        </td>
                                    </div>
                                        <td style='border-bottom: hidden;border-left: hidden'class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                         <?php
                                          echo number_format( $rowe["price"])." VNĐ";
                                         ?>
                                          </td>
                                        <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                        <?php
                                            echo $rowe['quantity'];
                                        ?>
                                            </td>
                                        <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                             <?php
                                                  echo number_format( $rowe["total"])." VNĐ"; 
                                        echo"</td>";
                                         echo "</tr>";
                                    }
                                }
                            }
                            $stt++;
                        } 
                        echo "</table>";
                        echo "</div>";

                    }
                }
                ?>
    <div >
        </br>
        <label style="padding-left:40px " for="arr"><b>Phương thức thanh toán</b> </label>
          
        <input type ="text" value="Tiền mặt" name = "arr" id="arr"  disabled/>

        </br></br>
        <?php
             $sqlg = "SELECT * FROM `order` WHERE id=$order_id2 ";
             $resultg = mysqli_query($conn, $sqlg);
             if (mysqli_num_rows($resultg) > 0) {
                 while($rowg  =mysqli_fetch_assoc($resultg)){
                     $total2a= $rowg['total'];
                 }}

                 $sqlh = "SELECT discount_code.discount FROM discount_code WHERE discount_code.name_code= 'transport_fee'AND discount_code.status='display' ";
                 $resulth = mysqli_query($conn, $sqlh);
                 if (mysqli_num_rows($resulth) > 0) {
                     while($rowh  =mysqli_fetch_assoc($resulth)){
                         $fee_transporta= $rowh['discount'];
                     }
                 }

                 $sqli = "SELECT discount_code.discount FROM discount_code WHERE discount_code.condition<='$total2a'AND discount_code.status='block' ORDER BY discount_code.discount DESC";
                 $resulti = mysqli_query($conn, $sqli);
                 if (mysqli_num_rows($resulti) > 0) {
                     while($rowi  =mysqli_fetch_assoc($resulti)){
                         $discountca= $rowi['discount'];
                         break;
                     }
                            }
                            else{
                                $discountca=0;
                            }
                    ?>
                    Tổng tiền: <?php 
                                $total1a=$total2a- $fee_transporta+$discountca;
                                echo number_format($total1a)." VNĐ";
            ?> </br></br>
                    Phí vận chuyển: <?php

                                        echo number_format($fee_transporta)." VNĐ";
                    ?>
                    </br></br>
                    Giảm giá:  <?php
                            echo number_format($discountca)." VNĐ";
                    ?>
                    </br></br>
                    Tổng trả:<?php
                            echo number_format($total2a)." VNĐ </br></br>";
                    ?>

                    </div>
                            <?php
                            echo "</center>";
                        }
            if(isset($_GET['update']))
            { 
                
                $order_id2= $_GET['update'];
            
                $sql = "SELECT * FROM `order` WHERE id=$order_id2 ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row  =mysqli_fetch_assoc($result)){
                        ?>
                        <form  action ="manager_order.php" method="POST" >
                    <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">
        
                    <center><h3 >Cập nhật trạng thái đơn hàng </h3></center>
                        <lable style="padding-left: 20%" for="code_order">Mã đơn hàng:</lable>
                        <input style="margin-left: 6%" type ="text" value="<?php echo $row['code']?>" name = "code_order" id="code_order" size= "65%" autofocus disabled/></br></br>
                        <lable style="padding-left: 20%" for="name">Khách hàng:</lable>
                        <input style="margin-left: 7%" type ="text" value="<?php echo $row['fullname']?>" name = "name" id="name"size= "65%"disabled/></br></br>
                        <lable style="padding-left: 20%" for="total">Tổng Tiền:</lable>
                        <input style="margin-left: 8%" type ="number" value="<?php echo $row['total']?>" name = "total" id="total"size= "65%"disabled/></br></br>
                        <lable style="padding-left: 20%" for="phone">Số điện thoại:</lable>
                        <input style="margin-left: 6.2%" type ="text" value="<?php echo $row['phone_number']?>" name = "phone" id="phone"size= "65%"disabled/></br></br>
                        <lable style="padding-left: 20.5%" for="address">Địa chỉ:</lable>
                        <input style="margin-left: 9.7%" type ="text" value="<?php echo $row['address']?>" name = "address" id="address"size= "65%" disabled/></br></br>
                        <lable style="padding-left: 20%" for="status">Trạng thái:</lable>
                        <select style="margin-left: 7.8%" name="status" require>
                            <option value="đã xác nhận" >Đã xác nhận</option>
                            <option value="Đã giao cho đơn vị vận chuyển">Đã giao cho đơn vị vận chuyển</option>
                            <option value="Đã đến kho hàng" >Đã đến kho hàng</option>
                            <option value="Đang giao hàng" >Đang giao hàng</option>
                            <option value="Hoàn thành" >Hoàn thành</option>
                        </select></br></br>
                        <input style="margin-left: 9.5%" type ="hidden" value="<?php echo $row['id']?>" name = "id" id="id" size= "65%"/></br></br>
                        <center><input size= "80%" type ="submit" value=" Cập nhật " name = "up2"/></center>
        
                        </div>
                     </form>
                        <?php
                    }
                }

            }
                        ?>
                       
                    </div>
                    <?php
    }
    if(isset($_POST['up2'])){
        $id_order= $_POST['id'];
        $status= $_POST['status'];

        $sql = "UPDATE `order` SET `status`='$status'WHERE id= '$id_order'";
        $result=mysqli_query($conn, $sql);
        ?>
        <script language="javascript">alert("Cập nhật trạng thái đơn hàng thành công!");</script>
        <?php
    }

        ?> 

    </div>
    </div>
           
</br>
</br>
</br>
<div class="footer">
            <div class="row">


            </div>
        </div> 

</body>
</html>