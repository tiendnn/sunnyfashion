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
            <center><h1>DANH SÁCH KHÁCH HÀNG</h1></center>

    <?php
       if(isset($_GET['mana_customer'])){
        $sql4 = "SELECT * FROM `detail_account` WHERE responsibility NOT LIKE N'admin'" ;
        $result4 = mysqli_query($conn, $sql4);          
        if (mysqli_num_rows($result4) > 0){
            $stt=1;
            ?>
            <div style=" float: left; margin-top:0px; width: 100%;padding-bottom:0px">
   
   <table border='1' style="border-collapse:collapse; width:100%">
            <tr>
               <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
               <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Mã khách hàng</th>
               <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Khách hàng</th>
               <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ngày sinh</th>
               <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Số điện thoại</th>
               <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Địa chỉ</th>
               <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Email</th>
   
           </tr>
           <?php
        while($row4 = mysqli_fetch_assoc($result4)) {
            $id_user=$row4["user_id"];
            $sql5 = "SELECT * FROM `user` WHERE id = '$id_user'" ;
            $result5 = mysqli_query($conn, $sql5);          
            if (mysqli_num_rows($result5) > 0){
            while($row5 = mysqli_fetch_assoc($result5)) {
                ?>
                <center>
                <tr>
                <td class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt;?></td>
                <td  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><?php echo $row5['id'];?></td>
                <td  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><?php echo $row5['fullname'];?></td>
                <td  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $row5['birthday'];?></td>
                <td  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><?php echo $row5['phone_number'];?></td>
                <td  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><?php echo $row5['address'];?></td>
                <td  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><?php echo $row5['email'];?></td>
    
            </tr>
            </center>
            <?php
            $stt++;
            }
             }
        }
        echo "</table>";
        echo "</div>";
        }
       
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