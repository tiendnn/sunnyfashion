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
            div.welcome{
                margin-top: 10px;
                margin-bottom: 10px;
            }
            div.banner{
             padding-bottom: 10px;
             padding-top: 10px;
            }
 
            div.content{
             float:left;
             background-color:#FFFFFF;
             padding-bottom: 30px;
             padding-top:10px;
            }
            
            div.footer{                
                clear: both;
                background-color: #b4aa99;
            }
    /*mobile*/
    [class*="column-"] {
        width:100%;
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
}
    img {
        width:100%;
        height: auto;
    }
    a {
        text-decoration: none;
        color: black;      
    }

    .img1 {
        width:95%;
        height: auto;
        transition: width 1s, height 1s;
    }
    .img1:hover{
        width:100%;
    }
    .img2{
        width:10%;
        height: auto;
        position: relative;
        animation-name: welcome;
        animation-duration: 20s;
        animation-iteration-count: infinite;
        animation-timing-function: ease;
        animation-direction: alternate; 
    }
    @keyframes welcome {
  0%   {left:0px; bottom:0px;}
  9%   {left:60%; bottom:0px;}
   18%  {left:60%; bottom:30px;}
  27%  {left:90%; bottom:30px;}
   36% {left:90%; bottom:0px;}
   45%  {left:60%; bottom:0px;}
    54%  {left:60%; bottom:30px;}
    63% {left:0%; bottom:30px;}
      72%  {left:0%; bottom:0px;}
      81%  {left:90%; bottom:0px;}
       90% {left:90%; bottom:30px;}
     100%  {left:0%; bottom:30px;}

}

</style>
<body>
<div class="row">
<div class="brand"> 
    <?php
    if(isset($_SESSION['dangnhap']['username']) && isset($_SESSION['dangnhap']['password']))
        {
            $tk=$_SESSION['dangnhap']['username'];
            $pw= $_SESSION['dangnhap']['password'];
            require_once "config.php";
            $sql = "SELECT * FROM user where username='$tk' and password='$pw'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $id_user=$row['id'];
                $sql1 = "SELECT responsibility FROM detail_account WHERE user_id= '$id_user'" ;
                $result1 = mysqli_query($conn, $sql1);             
                if(mysqli_num_rows($result1) > 0){
                    While($row1  =mysqli_fetch_assoc($result1)){
                        $respon_user= $row1['responsibility'];
                        if( $respon_user=='admin')
                        {
                            ?>
                            <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href="index.php"><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a><b style="font-size:1.5vw">|</b>
                            <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left " href="manager.php?code2=info"><b  style="font-size:1.3vw;; padding-left:5px ">QUẢN LÍ CỬA HÀNG</b></a>
                            <span class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"></span>
                    
                    
                                <div class="menub column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"  >
                                                <ul >
                          
                                                <li > <a style="float: left;margin-left:30px; margin-top: 15px;" href="" ><img style="width:25%;height: auto;margin-left:50px" src="Pictures_icons/account1.png" width = '25' height = '25' /><?php echo "</br><span style='display:flex; margin-top:0px'>".$row["fullname"]."</span>";?></a>
                                                     <ul>
                                                          <li style="margin-left:0px">  <a href="account.php"><b>Tài khoản</b></a></li> 
                                                           <li style="margin-left:0px"> <a href="management_order.php"><b>Đơn mua</b></a> </li>
                                                     </ul>
                                                </li>
                                             </ul>
                                            </div>
                                            <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="cart.php"><img style="width:80%;height: auto;" src="Pictures_icons/cart.png"  width="70px" height="50px"></a>        
                            <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="logout.php"><img style="width:40%;height: auto;"  src="Pictures_icons/logout1.png"  width="70px" height="50px"></a>
                            <?php
                        }
                        else{
                            ?>
                            <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href="index.php"><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a>
                            <span class= "column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6"></span>
                    
                    
                                <div class="menub column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"  >
                                                <ul >
                          
                                                <li > <a style="float: left;margin-left:30px; margin-top: 15px;" href="" ><img style="width:25%;height: auto;margin-left:50px" src="Pictures_icons/account1.png" width = '25' height = '25' /><?php echo "</br><span style='display:flex; margin-top:0px'>".$row["fullname"]."</span>";?></a>
                                                     <ul>
                                                          <li style="margin-left:0px">  <a href="account.php"><b>Tài khoản</b></a></li> 
                                                           <li style="margin-left:0px"> <a href="management_order.php"><b>Đơn mua</b></a> </li>
                                                     </ul>
                                                </li>
                                             </ul>
                                            </div>
                                            <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="cart.php"><img style="width:80%;height: auto;" src="Pictures_icons/cart.png"  width="70px" height="50px"></a>        
                            <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="logout.php"><img style="width:40%;height: auto;"  src="Pictures_icons/logout1.png"  width="70px" height="50px"></a>
                            <?php

                        }
                    }
                }

  
            } 
        }
        if(!isset($_SESSION['dangnhap']['username']) && !isset($_SESSION['dangnhap']['password']))
        {
        ?>
            <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href="index.php"><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a>
        <span class= "column-8 column-t-8 column-d-8 column-p-8 column-l-8 column-m-8 column-n-8"></span>
        <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="cart.php"><img style="width:60%;height: auto;" src="Pictures_icons/cart.png"  width="70px" height="50px"></a>
        <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 0px; margin-top: 15px" href="login.php"><img style="width:60%;height: auto;" src="Pictures_icons/log-in.png"  width="70px" height="50px"></a>
   <?php } ?>
    </div>
     
</div>

<div  class="menu">
    <ul >
        <li><a href="index.php"><b>Trang chủ</b></a></li>
        <li class="multimenu"><a href="product.php?cat=Bags"><b>Túi</b></a>  
            <ul  >
                <li><a href="product.php?cat=backpack"><b>Balo</b></a></li>
                <li><a href="product.php?cat=handbag"><b>Túi xách</b></a></li>
                <li><a href="product.php?cat=wallet"><b>Ví cầm tay</b></a></li>
            </ul> 
            </li>  
        <li class="multimenu"><a href="product.php?cat=Clothes"><b>Quần áo</b></a> 
        <ul  >
                <li><a href="product.php?cat=dress"><b>Váy</b></a></li>
                <li><a href="product.php?cat=shirt"><b>Áo</b></a></li>
                <li><a href="product.php?cat=trousers"><b>quần</b></a></li>
        </ul>
        </li>
        <li class="multimenu"><a href="product.php?cat=Shoes"><b>Giày</b></a>  
        <ul >
                <li><a href="product.php?cat=highheels"><b>Giày cao gót</b></a></li>
                <li><a href="product.php?cat=boots"><b>Boots</b></a></li>
                <li><a href="product.php?cat=sneakers"><b>Sneakers</b></a></li>
        </ul> 
        </li>
        <li class="multimenu"><a href="product.php?cat=Jewellry"><b>Trang sức</b></a>
        <ul>
                <li><a href="product.php?cat=ring"><b>Nhẫn</b></a></li>
                <li><a href="product.php?cat=earring"><b>Hoa tai</b></a></li>
                <li><a href="product.php?cat=necklace"><b>Dây chuyền</b></a></li>
        </ul> 
        </li>
        <li><a href="product.php?cat2=sale"><b>Sale</b></a></li>
        <li><a href="aboutus.php"><b>Về chúng tôi</b></a></li>
    </ul>    
    </div>
<div class= "welcome">
    <img class="img2" style ="float: left"src="Pictures_icons/welcome2.png"  height="100px"/>
</div>
<div class= "banner">
    <img src="picture/banner1.png" width= '100%' height="300px"/>
    </div>
<div class="content"> 
    
    <div class="row">
    <center> <h1 style=" color:#b4aa99; font-size:4vw">BEST SELLER</h1>

        <table style=" padding-left:12vw; padding-right:12vw" >
            <tr >
                <td class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3">
                <?php
                require_once "config.php";
                $sql = "SELECT * FROM product ORDER BY sold_quantity DESC LIMIT 3";
                $result= mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $stt=0;
                    While($row=mysqli_fetch_assoc($result)){
                        $stt++;
                        $picture=$row['picture'];
                        $finding1='drive.google';
                        $compare=strpos($picture,$finding1);
                        if( $stt==1){
                            if($compare !== false)
                            {
                                ?>
                             <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                
                <?php
                       
                        }
                        else{
                            ?>
                            <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="product/<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                            <?php
                                }
                       
                ?>
             </td>
             <td class="column-9 column-t-9 column-d-9 column-p-9 column-l-9 column-m-9 column-n-9" style="border-bottom: 1px solid black" >
               <h1 style=" color:black; font-size:3vw; padding-left:50px"> <?php echo $row["name"];?> </h1>
               <h3 style=" color:black; font-size:2vw;padding-left:50px"> <?php echo "Price: ".number_format($row["price"])." VNĐ";?> </h3>
            </td>

            <?php
                        }
                        else{
                            continue;
                        }
                        
                        
                    }
                }
    ?>
            </tr>

            <tr >
            <td class="column-9 column-t-9 column-d-9 column-p-9 column-l-9 column-m-9 column-n-9" style="border-bottom: 1px solid black">
                <?php
                require_once "config.php";
                $sql = "SELECT * FROM product ORDER BY sold_quantity DESC LIMIT 3";
                $result= mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $stt=0;
                    While($row=mysqli_fetch_assoc($result)){
                        $stt++;
                        $picture=$row['picture'];
                        $finding1='drive.google';
                        $compare=strpos($picture,$finding1);
                        if( $stt==2){
                ?>
                <h1 style=" color:black; font-size:3vw; padding-left:100px"> <?php echo $row["name"];?> </h1>
               <h3 style=" color:black; font-size:2vw; padding-left:100px"> <?php echo "Price: ".number_format($row["price"])." VNĐ";?> </h3>
             </td>
             <td class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3">
                <?php
                                        if($compare !== false)
                                        {
                                            ?>
                                         <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                            
                            <?php
                                   
                                    }
                                    else{
                                        ?>
                                        <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="product/<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                                        <?php
                                            }
             ?>
            </td >
            <?php
                        }
                        else{
                            continue;
                        }
                }
            }
        ?>
            </tr>

            <tr  >
            <td class= "column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3">
                <?php
            require_once "config.php";
                $sql = "SELECT * FROM product ORDER BY sold_quantity DESC LIMIT 3";
                $result= mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $stt=0;
                    While($row=mysqli_fetch_assoc($result)){
                        $stt++;
                        $picture=$row['picture'];
                        $finding1='drive.google';
                        $compare=strpos($picture,$finding1);
                        if( $stt==3){
                            if($compare !== false)
                            {
                                ?>
                             <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                
                <?php
                       
                        }
                        else{
                            ?>
                            <a href="detail_product.php?cat=<?php echo $row["detail_category_id"];?>&id=<?php echo $row["id"];?>"><img class="img1" src="product/<?php echo $row["picture"]?>"  style="border: 1px solid black" /></a>
                            <?php
                                }
                ?>
             </td>
             <td class="column-9 column-t-9 column-d-9 column-p-9 column-l-9 column-m-9 column-n-9">
               <h1 style=" color:black; font-size:3vw;padding-left:50px"> <?php echo $row["name"];?> </h1>
               <h3 style=" color:black; font-size:2vw;padding-left:50px"> <?php echo "Price: ".number_format($row["price"])." VNĐ";?> </h3>
            </td   >

            <?php
                }
                else{
                    continue;
                }
            }
        }
            ?>
            </tr>
             </table>
            </br>
            </br>
            </br>
        </center>
        </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6">
                   <span style= "font-size:3vw;margin-left: 50px;margin-top: 100px "> SUNNY HOUSE </span></br></br>
                   <span style= "font-size:1.5vw;margin-left: 50px;margin-top: 100px ">Tiendnn2002@gmail.com </span></br></br>
                   <span style= "font-size:1.5vw;margin-left: 50px;margin-top: 100px; margin=bottom:100px"> 0397703835</span></br></br>

            </div>
                <div class="column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3">
            </br>
                <span style="font-size:2vw">Về Chúng Tôi</span></br></br>
                <a style="margin-top: 100px;font-size:1.5vw" href="product.php">Sản Phẩm</a></br></br>
                <a style="margin-top: 100px;font-size:1.5vw" href="product.php">Sale</a></br></br>
            </div>
             <div class="column-3 column-t-3 column-d-3 column-p-3 column-l-3 column-m-3 column-n-3">
            </br>
            </br>
             <a style="margin-left: 50px;margin-top: 100px;font-size:1.5vw" href="https://www.facebook.com/profile.php?id=100025701675308">Facebook</a></br></br>
             <a style="margin-left: 50px;margin-top: 100px;font-size:1.5vw" href="https://www.facebook.com/profile.php?id=100025701675308">Instagram</a></br> </br>
            </div>
            </div>
        </div> 

</body>
</html>
