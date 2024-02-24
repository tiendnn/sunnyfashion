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
    require_once "config.php";
     if(isset($_GET['mana_achievement'])){
        $_SESSION['mana_achievement']= $_GET['mana_achievement'];
     }
     if(isset($_GET['code2']))
     {
         $_SESSION['code2']=$_GET['code2'];
     }
    if(isset($_SESSION['mana_achievement'])){
        ?>
        <center>
        <div class="column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2" style="float: left;background: white;border-right:1px ridge white">
        <div style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >  <div class="effect"><a style="float: left;font-size:1.3vw; padding:5px 0px ;width:100%" href="manager_achievement.php?code1=achievement"><center>Thành tựu</center></a></br></br></div></div>
        <div  style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >    <div class="effect"><a style="float: left;font-size:1.3vw; padding:5px 0px; width:100%"  href="manager_achievement.php?code2=code_discount"><center>Mã Giảm Giá</center></a></br></br></div></div>
        </div>
        </center>
        <div class="column-10 column-t-10 column-d-10 column-p-10 column-l-10 column-m-10 column-n-10">
            <?php
            if(!isset($_GET['code1']) && !isset($_GET['code2']) && !isset($_GET['code_discount2']) &&  !isset($_GET['fee_transpost1'])&& !isset($_GET['update']) && !isset($_GET['update2']) && !isset($_GET['code_new'])){
                echo "<div>";
                //doanh thu
                $sql4 = "SELECT SUM(total) as dt FROM `order`";
                $result4 = mysqli_query($conn, $sql4);          
                if (mysqli_num_rows($result4) > 0){
                while($row4 = mysqli_fetch_assoc($result4)) {
                    ?>
                    <div class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr >
                    <th style="background-color: #b4aa99">
                        <center>DOANH THU</center>
                    </th>
                </tr>
                <tr>
                    <td>
                    <center><?php echo number_format($row4["dt"])." VND";?></center>
                </td>
                </tr>
                </table>
                </div>
                    <?php
                    
                }
                
            }
                //Số lượng sản phẩm đã bán
                $sql5 = "SELECT SUM(sold_quantity) as quantity1 FROM `product`";
                $result5 = mysqli_query($conn, $sql5);          
                if (mysqli_num_rows($result5) > 0){
                while($row5 = mysqli_fetch_assoc($result5)) {
                    ?>
                    <div class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr >
                    <th style="background-color: #b4aa99">
                        <center>TỔNG SẢN PHẨM ĐÃ BÁN</center>
                    </th>
                </tr>
                <tr>
                    <td>
                    <center><?php echo $row5["quantity1"]." sản phẩm";?></center>
                </td>
                </tr>
                </table>
                </div>
                    <?php
                    
                    
                }
                
            }
                //TOP 3 sản phẩm được mua nhiều nhất
                $sql6 = "SELECT * FROM product ORDER BY sold_quantity DESC LIMIT 3";
                $result6 = mysqli_query($conn, $sql6);          
                if (mysqli_num_rows($result6) > 0){
                    ?>
                    <div class= "column-7 column-t-7 column-d-7 column-p-7 column-l-7 column-m-7 column-n-7" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr style="background-color: #b4aa99">
                    <th colspan = "4">  <center>TOP 3 SẢN PHẨM BÁN CHẠY NHẤT</center>
                    </th>
                </tr>
                <tr >
                    <th>
                        <center>TOP</center>
                    </th>
                    <th>
                    <center>Mã sản phẩm</center>
                    </th>
                    <th>
                    <center>Tên sản phẩm</center>
                    </th>
                    <th>
                    <center>Số lượng đã bán</center>
                    </th>
                </tr>
                        <?Php
                    $stt=1;
                while($row6 = mysqli_fetch_assoc($result6)) {
                    ?>
                    <tr>
                    <td>
                    <center><?php echo $stt;?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["id"];?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["name"];?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["sold_quantity"];?></center>
                    </td>
                </tr>
                    <?php
                    $stt++;
                }
                echo "</table>";
                echo "</div>";
                
            }

            echo "</div>";
            ?><div ><?php
            //TOP 3 Khách hàng được mua nhiều nhất
            $sql7 = "SELECT user_id , count(user_id) as sl, SUM(total) as total1 FROM `order` group BY user_id";
            $result7 = mysqli_query($conn, $sql7);          
            if (mysqli_num_rows($result7) > 0){
                ?>
                <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12" style=" float: left; margin-top:50px;padding-bottom:300px">
                <table border='1' style="border-collapse:collapse; width:100%">
            <tr style="background-color: #b4aa99">
                <th colspan = "5">  <center>TOP 3 Khách hàng nổi bật</center>
                </th>
            </tr>
            <tr >
                <th>
                    <center>TOP</center>
                </th>
                <th>
                <center>Mã khách hàng</center>
                </th>
                <th>
                <center>Tên khách hàng</center>
                </th>
                <th>
                <center>Tổng đơn hàng đã mua</center>
                </th>
                <th>
                <center>Tổng doanh thu</center>
                </th>
            </tr>
                    <?Php
                $stt=1;
                while($row7 = mysqli_fetch_assoc($result7)) {
                    $id_user= $row7['user_id'];
                    $sql8 = "SELECT * FROM `user` WHERE id='$id_user'";
                    $result8 = mysqli_query($conn, $sql8);          
                    if (mysqli_num_rows($result8) > 0){
                        while($row8 = mysqli_fetch_assoc($result8)) {
                            ?>
                            <tr>
                            <td>
                            <center><?php echo $stt;?></center>
                            </td>
                            <td>
                            <center><?php echo $row8["id"];?></center>
                            </td>
                            <td>
                            <center><?php echo $row8["fullname"];?></center>
                            </td>
                            <td>
                            <center><?php echo $row7["sl"];?></center>
                            </td>
                            <td>
                            <center><?php echo number_format($row7["total1"])." VNĐ";?></center>
                            </td>
                        </tr>
                            <?php
                            $stt++;
                            
                        }
                        
                    } 
                }
                echo "</table>";
                echo "</div>";
                
            }      
            echo "</div>";
            }
            if(isset($_GET['code1'])){
                echo "<div>";
                //doanh thu
                $sql4 = "SELECT SUM(total) as dt FROM `order`";
                $result4 = mysqli_query($conn, $sql4);          
                if (mysqli_num_rows($result4) > 0){
                while($row4 = mysqli_fetch_assoc($result4)) {
                    ?>
                    <div class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr >
                    <th style="background-color: #b4aa99">
                        <center>DOANH THU</center>
                    </th>
                </tr>
                <tr>
                    <td>
                    <center><?php echo number_format($row4["dt"])." VND";?></center>
                </td>
                </tr>
                </table>
                </div>
                    <?php
                    
                }
                
            }
                //Số lượng sản phẩm đã bán
                $sql5 = "SELECT SUM(sold_quantity) as quantity1 FROM `product`";
                $result5 = mysqli_query($conn, $sql5);          
                if (mysqli_num_rows($result5) > 0){
                while($row5 = mysqli_fetch_assoc($result5)) {
                    ?>
                    <div class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr >
                    <th style="background-color: #b4aa99">
                        <center>TỔNG SẢN PHẨM ĐÃ BÁN</center>
                    </th>
                </tr>
                <tr>
                    <td>
                    <center><?php echo $row5["quantity1"]." sản phẩm";?></center>
                </td>
                </tr>
                </table>
                </div>
                    <?php
                    
                    
                }
                
            }
                //TOP 3 sản phẩm được mua nhiều nhất
                $sql6 = "SELECT * FROM product ORDER BY sold_quantity DESC LIMIT 3";
                $result6 = mysqli_query($conn, $sql6);          
                if (mysqli_num_rows($result6) > 0){
                    ?>
                    <div class= "column-7 column-t-7 column-d-7 column-p-7 column-l-7 column-m-7 column-n-7" style=" float: left; margin-top:0px;padding-bottom:0px">
                    <table border='1' style="border-collapse:collapse; width:100%">
                <tr style="background-color: #b4aa99">
                    <th colspan = "4">  <center>TOP 3 SẢN PHẨM BÁN CHẠY NHẤT</center>
                    </th>
                </tr>
                <tr >
                    <th>
                        <center>TOP</center>
                    </th>
                    <th>
                    <center>Mã sản phẩm</center>
                    </th>
                    <th>
                    <center>Tên sản phẩm</center>
                    </th>
                    <th>
                    <center>Số lượng đã bán</center>
                    </th>
                </tr>
                        <?Php
                    $stt=1;
                while($row6 = mysqli_fetch_assoc($result6)) {
                    ?>
                    <tr>
                    <td>
                    <center><?php echo $stt;?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["id"];?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["name"];?></center>
                    </td>
                    <td>
                    <center><?php echo $row6["sold_quantity"];?></center>
                    </td>
                </tr>
                    <?php
                    $stt++;
                }
                echo "</table>";
                echo "</div>";
                
            }

            echo "</div>";
            ?><div ><?php
            //TOP 3 Khách hàng được mua nhiều nhất
            $sql7 = "SELECT user_id , count(user_id) as sl, SUM(total) as total1 FROM `order` group BY user_id";
            $result7 = mysqli_query($conn, $sql7);          
            if (mysqli_num_rows($result7) > 0){
                ?>
                <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12" style=" float: left; margin-top:50px;padding-bottom:300px">
                <table border='1' style="border-collapse:collapse; width:100%">
            <tr style="background-color: #b4aa99">
                <th colspan = "5">  <center>TOP 3 Khách hàng nổi bật</center>
                </th>
            </tr>
            <tr >
                <th>
                    <center>TOP</center>
                </th>
                <th>
                <center>Mã khách hàng</center>
                </th>
                <th>
                <center>Tên khách hàng</center>
                </th>
                <th>
                <center>Tổng đơn hàng đã mua</center>
                </th>
                <th>
                <center>Tổng doanh thu</center>
                </th>
            </tr>
                    <?Php
                $stt=1;
                while($row7 = mysqli_fetch_assoc($result7)) {
                    $id_user= $row7['user_id'];
                    $sql8 = "SELECT * FROM `user` WHERE id='$id_user'";
                    $result8 = mysqli_query($conn, $sql8);          
                    if (mysqli_num_rows($result8) > 0){
                        while($row8 = mysqli_fetch_assoc($result8)) {
                            ?>
                            <tr>
                            <td>
                            <center><?php echo $stt;?></center>
                            </td>
                            <td>
                            <center><?php echo $row8["id"];?></center>
                            </td>
                            <td>
                            <center><?php echo $row8["fullname"];?></center>
                            </td>
                            <td>
                            <center><?php echo $row7["sl"];?></center>
                            </td>
                            <td>
                            <center><?php echo number_format($row7["total1"])." VNĐ";?></center>
                            </td>
                        </tr>
                            <?php
                            $stt++;
                            
                        }
                        
                    } 
                }
                echo "</table>";
                echo "</div>";
                
            }      
            echo "</div>";

            }
            if(isset($_SESSION['code2']) && !isset($_GET['code1']) && !isset($_GET['mana_achievement'])){
            ?>
            <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12">
                                <div style=" float: left;margin-top:0px;padding-bottom:0px">
                                    <div  class="menu">
                        <ul style="background: #f5f5f5">
                        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager_achievement.php?code_discount2=1"  >Mã giảm giá</a>  
                            </li>  
                        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager_achievement.php?fee_transpost1=1">Phí vận chuyển </a> 
                        </li>
                        </ul>    
                        </div>
                         </div>
                        <div  style=" float: right;margin-top:0px;padding-bottom:0px">
                                    <div  class="menu">
                        <ul style="background: #f5f5f5">
                        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager_achievement.php?code_new=1">Thêm mới</a> 
                        </li></ul>    
                        </div>
                        </div>
            </div>
            <div>
            <?php
            if(!isset($_GET['code_discount2']) &&  !isset($_GET['fee_transpost1'])&& !isset($_GET['update']) && !isset($_GET['update2']) && !isset($_GET['code_new']) && !isset($_GET['code1'])){
                                    //Danh sách mã giảm giá
            $sql7 = "SELECT * FROM `discount_code`WHERE status NOT LIKE N'display'";
            $result7 = mysqli_query($conn, $sql7);          
            if (mysqli_num_rows($result7) > 0){
                ?>
                <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12" style=" float: left;padding-bottom:300px">
                <table border='1' style="border-collapse:collapse; width:100%">
            <tr style="background-color: #b4aa99">
                <th colspan = "6">  <center>Danh sách mã giảm giá</center>
                </th>
            </tr>
            <tr >
                <th>
                    <center>STT</center>
                </th>
                <th>
                <center>Mã giảm giá</center>
                </th>
                <th>
                <center>Giá trị</center>
                </th>
                <th>
                <center>Điều kiện (tổng thanh toán > điều kiện)</center>
                </th>
                <th>
                <center>Trạng thái</center>
                </th>
                <th>
                <center>Thao tác</center>
                </th>
            </tr>
                    <?Php
                $stt=1;
                while($row7 = mysqli_fetch_assoc($result7)) {
                    $status2=$row7["status"];
                    ?>
                    <tr>
                    <td>
                    <center><?php echo $stt;?></center>
                    </td>
                    <td>
                    <center><?php echo $row7["name_code"];?></center>
                    </td>
                    <td>
                    <center><?php echo number_format($row7["discount"])." VNĐ";?></center>
                    </td>
                    <td>
                    <center><?php echo number_format($row7["condition"])." VNĐ";?></center>
                    </td>
                    <td>
                    <center><?php
                    if($status2=='block'){
                        echo "hoạt động";
                    }
                    else{
                        echo "tạm dừng";
                    }
                    ?></center>
                    </td>
                    <td>
                    <center><a href="manager_achievement.php?update=<?php echo $row7['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center>
                    </td>

                </tr>
                    <?php
                 
                }
                echo "</table>";
                echo "</div>";
                
            } 


            }
            if(isset($_GET['code_discount2'])){
                               //Danh sách mã giảm giá
            $sql7 = "SELECT * FROM `discount_code`WHERE status NOT LIKE N'display'";
            $result7 = mysqli_query($conn, $sql7);          
            if (mysqli_num_rows($result7) > 0){
                ?>
                <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12" style=" float: left;padding-bottom:300px">
                <table border='1' style="border-collapse:collapse; width:100%">
            <tr style="background-color: #b4aa99">
                <th colspan = "6">  <center>Danh sách mã giảm giá</center>
                </th>
            </tr>
            <tr >
                <th>
                    <center>STT</center>
                </th>
                <th>
                <center>Mã giảm giá</center>
                </th>
                <th>
                <center>Giá trị</center>
                </th>
                <th>
                <center>Điều kiện (tổng thanh toán > điều kiện)</center>
                </th>
                <th>
                <center>Trạng thái</center>
                </th>
                <th>
                <center>Thao tác</center>
                </th>
            </tr>
                    <?Php
                $stt=1;
                while($row7 = mysqli_fetch_assoc($result7)) {
                    $status2=$row7["status"];
                    ?>
                    <tr>
                    <td>
                    <center><?php echo $stt;?></center>
                    </td>
                    <td>
                    <center><?php echo $row7["name_code"];?></center>
                    </td>
                    <td>
                    <center><?php echo number_format($row7["discount"])." VNĐ";?></center>
                    </td>
                    <td>
                    <center><?php echo number_format($row7["condition"])." VNĐ";?></center>
                    </td>
                    <td>
                    <center><?php
                    if($status2=='block'){
                        echo "hoạt động";
                    }
                    else{
                        echo "tạm dừng";
                    }
                    ?></center>
                    </td>
                    <td>
                    <center><a href="manager_achievement.php?update=<?php echo $row7['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center>
                    </td>

                </tr>
                    <?php
                 
                }
                echo "</table>";
                echo "</div>";
                
            } 

            }
                            if(isset($_GET['fee_transpost1'])){
                                //Danh sách mã giảm giá
                $sql7 = "SELECT * FROM `discount_code`WHERE status LIKE N'display'";
                $result7 = mysqli_query($conn, $sql7);          
                if (mysqli_num_rows($result7) > 0){
                ?>
                <div class= "column-12 column-t-12 column-d-12 column-p-12 column-l-12 column-m-12 column-n-12" style=" float: left;padding-bottom:300px">
                <table border='1' style="border-collapse:collapse; width:100%">
                <tr style="background-color: #b4aa99">
                <th colspan = "5">  <center>Phí vận chuyển</center>
                </th>
                </tr>
                <tr >
                <th>
                    <center>STT</center>
                </th>
                <th>
                <center>Mã phí vận chuyển</center>
                </th>
                <th>
                <center>Phí</center>
                </th>
                <th>
                <center>Trạng thái</center>
                </th>
                <th>
                <center>Thao tác</center>
                </th>
                </tr>
                    <?Php
                $stt=1;
                while($row7 = mysqli_fetch_assoc($result7)) {
                    ?>
                    <tr>
                    <td>
                    <center><?php echo $stt;?></center>
                    </td>
                    <td>
                    <center><?php echo $row7["name_code"];?></center>
                    </td>
                    <td>
                    <center><?php echo number_format($row7["discount"])." VNĐ";?></center>
                    </td>
                    <td>
                    <center><?php echo "hoạt động";?></center>
                    </td>
                    <td>
                    <center><a href="manager_achievement.php?update2=<?php echo $row7['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center>
                    </td>

                </tr>
                    <?php
                
                }
                echo "</table>";
                echo "</div>";
                
                } 

                }
            if(isset($_GET['update'])){
                $id_pro3= $_GET['update'];
                              
                $sql4 = "SELECT * FROM discount_code WHERE id = '$id_pro3'";
                $result4 = mysqli_query($conn, $sql4);          
                if (mysqli_num_rows($result4) > 0){
                while($row4 = mysqli_fetch_assoc($result4)) {
                ?>
                <form  action ="manager_achievement.php" method="POST">
    <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">

    <center><h3 >CẬP NHẬT MÃ GiẢM GIÁ </h3></center>
                        <lable style="padding-left: 35%" for="code_name">Mã giảm giá:</lable>
                        <input style="margin-left: 6%" type ="text" value="<?php echo $row4['name_code'];?>" name = "code_name" id="code_name" style="padding-right: 20px" require/></br></br>
                        <lable  style="padding-left: 35%" for="value1">Giá trị:</lable>
                        <input style="margin-left: 10%" type ="number" value="<?php echo $row4['discount'];?>" name = "value1" id="value1" style="padding-right: 20px" require/></br></br>
                        <lable style="padding-left: 35%" for="condition">Điều kiện:</lable>
                        <input style="margin-left: 7.8%" type = "number" value = "<?php echo $row4['condition'];?>" name = "condition" id="condition" style="padding-right: 20px" require/></br></br>
                        <lable style="padding-left: 35%" for="status">Trạng thái mã:</lable>
                        <select style="margin-left: 5%" name="status" require>
                            <option value="block" >Hoạt động</option>
                            <option value="none">Tạm dừng</option>
                        </select></br></br>
                        <input type ="hidden" value="<?php echo $row4['id']?>" name = "id" id="id" size= "65%"/></br></br>
        <center><input size= "80%" type ="submit" value=" Cập nhật " name = "up1"/></center>

        </div>
     </form>
                    <?php
                }
             }
            }
            if(isset($_GET['update2'])){
                $id_pro3= $_GET['update2'];
                              
                $sql4 = "SELECT * FROM discount_code WHERE id = '$id_pro3'";
                $result4 = mysqli_query($conn, $sql4);          
                if (mysqli_num_rows($result4) > 0){
                while($row4 = mysqli_fetch_assoc($result4)) {
                ?>
                <form  action ="manager_achievement.php" method="POST">
    <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">

    <center><h3 >CẬP NHẬT MÃ GiẢM GIÁ </h3></center>
                        <lable style="padding-left: 35%" for="code_name">Mã giảm giá:</lable>
                        <input style="margin-left: 6%" type ="text" value="<?php echo $row4['name_code'];?>" name = "code_name" id="code_name" style="padding-right: 20px" disabled/></br></br>
                        <lable  style="padding-left: 35%" for="value1">Giá trị:</lable>
                        <input style="margin-left: 10%" type ="number" value="<?php echo $row4['discount'];?>" name = "value1" id="value1" style="padding-right: 20px" require/></br></br>
                        <lable style="padding-left: 35%" for="status">Trạng thái mã:</lable>
                        <select style="margin-left: 5%" name="status" disabled >
                            <option value="block" >Hoạt động</option>
                        </select></br></br>
                        <input type ="hidden" value="<?php echo $row4['id']?>" name = "id" id="id" size= "65%"/></br></br>
        <center><input size= "80%" type ="submit" value=" Cập nhật " name = "up3"/></center>

        </div>
     </form>
                    <?php
                }
             }
            }
            if(isset($_GET['code_new'])){
                ?>
                <form  action ="manager_achievement.php" method="POST">
                <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">

                <center><h3 >THÊM MÃ GiẢM GIÁ </h3></center>
                        <lable style="padding-left: 35%" for="code_name">Mã giảm giá:</lable>
                        <input style="margin-left: 6%" type ="text" value="" name = "code_name" id="code_name" style="padding-right: 20px" require/></br></br>
                        <lable  style="padding-left: 35%" for="value1">Giá trị:</lable>
                        <input style="margin-left: 10%" type ="number" value="" name = "value1" id="value1" style="padding-right: 20px" require/></br></br>
                        <lable style="padding-left: 35%" for="condition">Điều kiện:</lable>
                        <input style="margin-left: 7.8%" type = "number" value = "" name = "condition" id="condition" style="padding-right: 20px" require/></br></br>
                        <lable style="padding-left: 35%" for="status">Trạng thái mã:</lable>
                        <select style="margin-left: 5%" name="status" require>
                            <option value="block" >Hoạt động</option>
                            <option value="none">Tạm dừng</option>
                        </select></br></br>
             <center><input size= "80%" type ="submit" value=" Thêm " name = "up2"/></center>

                    </div>
                </form>
                    <?php
            }
             
            ?>
            </div>
            <?php  
            }
            ?>
        </div>

        <?php
    }
    //chức năng hỗ trợ
    //cập nhật mã
    if(isset($_POST['up1'])){
        $id_code= $_POST['id'];
        $status= $_POST['status'];
        $condition=$_POST['condition'];
        $value=$_POST['value1'];
        $name_code=$_POST['code_name'];
        $sql = "UPDATE `discount_code` SET `name_code`='$name_code',`discount`='$value',`condition`='$condition', `status`='$status' WHERE id= '$id_code'";
        $result=mysqli_query($conn, $sql);
        ?>
        <script language="javascript">alert("Cập nhật mã thành công!");</script>
        <?php
    }
    //thêm mã
    if(isset($_POST['up2'])){
        $status= $_POST['status'];
        $condition=$_POST['condition'];
        $value=$_POST['value1'];
        $name_code=$_POST['code_name'];
        $sql = "INSERT INTO `discount_code`(`name_code`, `discount`, `condition`, `status`) VALUES ('$name_code','$value','$condition','$status')";
        $result=mysqli_query($conn, $sql);
        ?>
        <script language="javascript">alert("Thêm mã giảm giá thành công!");</script>
        <?php
    }
    //cập nhatajx mã vận chuyển
    if(isset($_POST['up3'])){
        $id_code= $_POST['id'];
        $value=$_POST['value1'];
        $sql = "UPDATE `discount_code` SET `discount`='$value' WHERE id= '$id_code'";
        $result=mysqli_query($conn, $sql);
        ?>
        <script language="javascript">alert("Cập nhật phí vận chuyển thành công!");</script>
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