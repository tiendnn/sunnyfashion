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
                     
            .menu > ul{
                display: flex;
                list-style: none;
                background-color: #b4aa99;
                color: black;
                padding-inline-start: 10px;

            }
            .menu > ul > li {
                display: inline-block;
                position: relative;
                text-decoration: none;;
                padding: 10px 0px;
            

            }
            .menu > ul> li a{
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
            div.banner{
             padding-bottom: 10px;
             padding-top: 10px;
            }
            div.left{
            background-color: #FDFFFF;
            border: 3px groove white;
            font-size: 1vw;
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
    if(isset($_SESSION['dangnhap']['username']) && isset($_SESSION['dangnhap']['password']))
        {
            $tk=$_SESSION['dangnhap']['username'];
            $pw= $_SESSION['dangnhap']['password'];
            require_once "config.php";
            $sql = "SELECT fullname FROM user where username='$tk' and password='$pw'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result)
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
        <li class="multimenu"><a href="index.php"><b>Trang chủ</b></a></li>
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
        <li class="multimenu"><a href="product.php?cat2=sale"><b>Sale</b></a></li>
        <li class="multimenu"><a href="aboutus.php"><b>Về chúng tôi</b></a></li>
    </ul>    
    </div>

<div class= "banner">
    <img src="picture/banner1.png" width= '100%' height="300px"/>
    </div>
</br>
<div class="left" >
    <?php
        if(isset($_GET["cat"]))
        {
            $cat=$_GET["cat"];
            $_SESSION['category']= $cat;

        }
        if(isset($_POST["price_arr"]))
        {
            $price_arr=$_POST["price_arr"];
            $_SESSION['price_arr']= $price_arr;

        }

        ?>
     <div class="row">
    <form action="product.php" method="POST">
                <div class= "column-4 column-p-4 column-t-4 column-d-4 column-l-4 column-m-4 column-n-4">
  <label style="padding-left:40px " for="arr"><b>Sắp xếp theo</b> </label>
  <select name="price_arr">
    <option value="ASC" >Giá từ thấp đến cao</option>
    <option value="DESC">Giá từ cao đến thấp</option>
  </select>
    </div>
    <div class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2">
    <label for="sex"><b> Giới tính:</b></label></br>
  <input type="checkbox" name="male" value="nam">
  <label for="male"> Nam</label><br>
  <input type="checkbox" name="female" value="nu">
  <label for="female"> Nữ</label><br>
    </div>
<div class= "column-4 column-p-4 column-t-4 column-d-4 column-l-4 column-m-4 column-n-4">
    <label  for="color"><b>Màu sắc:</b></label></br>
  <input type="radio" id ="den" name="color1" value="đen">
  <label for="den"> đen</label>
  <input type="radio" id="trang" name="color1"value="trắng">
  <label for="trang"> trắng</label>
  <input type="radio" id="nau" name="color1"value="nâu">
  <label for="nau"> Nâu</label>
  <input type="radio" id="hong" name="color1" value="hồng">
  <label for="hong"> Hồng</label>
  <input type="radio" id="xanhla" name="color1" value="xanh lá">
  <label for="xanhla"> Xanh lá</label></br>
  <input type="radio" id="be" name="color1" value="be">
  <label for="be"> Be</label>
  <input type="radio" id="xanh" name="color1" value="xanh">
  <label for="xanh"> Xanh</label>
  <input type="radio" id="vang" name="color1" value="vàng">
  <label for="vang"> Vàng</label>
  <input type="radio" id="xam" name="color1" value="xám">
  <label for="xam"> Xám</label>
  <input type="radio" id="bac" name="color1" value="bạc">
  <label for="bac"> Bạc</label>
  <input type="radio" id="do"name="color1" value="đỏ">
  <label for="do"> Đỏ</label>
    </div>
    <div class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2">
  <input type="submit" name="search" value="Tìm kiếm">
    </div>
</form>
</div>
    </div>
    <div style="float:right">
    <form action="product.php" method="GET">
    <label for="gsearch"></label>
    <input type="search" id="gsearch" name="gsearch">
    <input type="submit" name="searcha" value="Tìm kiếm">
    </form>
    </div>
    </br>
    </br>
    </br>
<div class="content">
    <div class="row">

    <center>
<?php
        $cat=""; 
        if(isset($_GET["cat"]))
        {
            $cat=$_GET["cat"];
           
        }
        require_once "config.php";
        //Tìm kiếm cho sản phẩm thường
        if(isset($_GET["gsearch"]) && !empty($_GET["gsearch"]) && isset($_SESSION['category']))
        {
            $finding= $_GET["gsearch"];
            $cat=$_SESSION['category'];

            $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
               $row2  =mysqli_fetch_assoc($result2);
                 
                   foreach ($row2 as $value) {
                       $id_detail_cate = $value;                       
                   }
                   $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                   $result3 = mysqli_query($conn, $sql3);
                   if (mysqli_num_rows($result3) > 0) {
                       echo "<table>";
                       $dem = 0;
                       $sl=0;
                       $merge=array();
                       While($row3  =mysqli_fetch_assoc($result3)){
                           foreach ($row3 as $value) {
                               $id_product=$value;

                               $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product' AND product.quantity >0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%')";
                               $result5 = mysqli_query($conn, $sql5);
                               $row5 = mysqli_fetch_assoc($result5);
                               $sl=$sl + (int)$row5["Sl"];


                               $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' AND product.quantity >0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%') ";
                               $result4 = mysqli_query($conn, $sql4);          
                               if (mysqli_num_rows($result4) > 0){
                               while($row4 = mysqli_fetch_assoc($result4)) {
                                   if($dem==0)
                                   {
                                       echo "<tr>";
                                   }
                               ?>              
                                               <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                                               <div style= "border: 3px inset white" >
                                               <?php
                                                           $picture=$row4['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row4["id"];?>"><img  src="<?php echo $row4["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row4["id"];?>"><img  src="product/<?php echo $row4["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                               <div class="hiddentext">
                                               <span style="font-size: 1vw"><b><?php echo $row4["name"];?></b></span><br/>
                                               </div>
                                               <span style="font-size: 1vw"><?php echo "Price: ".number_format($row4["price"])." VNĐ";?></span><br/>
                                                </div>
                                           </td>
                                        
                                   <?php
                                                               
                                   $dem++;
                                   if($dem==6)
                                   {
                                   echo "</tr>";
                                   $dem=0;
                               }
                               
                               }
                               
                           }
                           }

                       }
                       echo "</table>";
                   }
                             
                   $pagenum = ceil($row5["Sl"]/40);
                   for($i=1; $i<=$pagenum; $i++)
                   {
                   ?>
                   <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                   <?php
                   } 
                   
            }
            else{
               $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
        $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {

           // $sql1 = "SELECT count(*) as sl FROM detail_category WHERE detail_category.name = '$cat'";
           // $result1 = mysqli_query($conn, $sql1);
           // $row = mysqli_fetch_assoc($result1);
           $merge=array();
           $row2  =mysqli_fetch_assoc($result2);
           
           foreach ($row2 as $value) {
               $id_detail_cate = $value;
                                     
           }
           $sl=0;
           $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'AND product.quantity>0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%')";
           $result5 = mysqli_query($conn, $sql5);
           $row5 = mysqli_fetch_assoc($result5);
           $sl=$sl + (int)$row5["Sl"]; 


           $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate'AND product.quantity>0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%')";
            $result3 = mysqli_query($conn, $sql3);
            if (mysqli_num_rows($result3) > 0) {
           echo "<table>";
           $dem = 0;
           while($row3 = mysqli_fetch_assoc($result3)) {
               if($dem==0)
               {
                   echo "<tr>";
               }
               
           ?>
                           <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                           <div style= "border: 3px inset white">
                           <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img  src="<?php echo $row3["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img  src="product/<?php echo $row3["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                           <div class="hiddentext">
                           <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                           </div>
                           <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
           </div>   
                       </td>
               <?php
               $dem++;
               if($dem==6)
               {
               echo "</tr>";
                 $dem=0;
              }
           }
           echo "</table>";
            }
            
            $pagenum = ceil($row5["Sl"]/40);
            for($i=1; $i<=$pagenum; $i++)
            {
            ?>
            <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
            <?php
            } 
                }
            }
  

    
        }

                //Tìm kiếm cho sản phẩm sale
                if(isset($_GET["gsearch"]) && !empty($_GET["gsearch"]) && isset($_SESSION['cat2']))
                {
                    $finding= $_GET["gsearch"];
                    $sql12 = "SELECT count(*) as sl FROM product WHERE product.discount >0 AND product.quantity>0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%') ";
                    $result12 = mysqli_query($conn, $sql12);
                    if (mysqli_num_rows($result12) > 0){
                    while($row12 = mysqli_fetch_assoc($result12)) { 
                        $sl12=(int)$row12['sl'];
                    }
                     } 
                    if($sl12>1){
                        $sql11 = "SELECT * FROM product WHERE product.discount >0 AND product.quantity>0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%')";
                        $result11 = mysqli_query($conn, $sql11);        
                    if (mysqli_num_rows($result11) > 0){
                        echo "<table>";
                        $dem=0;
                    while($row11 = mysqli_fetch_assoc($result11)) {
                        if($dem==0)
                        {
                            echo "<tr>";
                        }
                    ?>              
                                    <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                                    <div style= "border: 3px inset white" >
                                    
                                    <?php
                                                           $picture=$row11['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="product/<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                    <div class="hiddentext">
                                    <span style="font-size: 1vw"><b><?php echo $row11["name"];?></b></span><br/>
                                    </div>
                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($row11["price"])." VNĐ";?></span><br/>
                                     </div>
                                </td>
                             
                        <?php
                                                    
                        $dem++;
                        if($dem==6)
                        {
                        echo "</tr>";
                        $dem=0;
                    }
                 }
                 echo "</table>";
                }
                $pagenum = ceil($sl12/20);
                for($i=1; $i<=$pagenum; $i++)
                {
                ?>
                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                <?php
                }
            }
            else{
                $sql11 = "SELECT * FROM product WHERE product.discount >0 AND product.quantity>0 AND (product.name LIKE '%$finding%' OR product.color LIKE '%$finding%' OR product.material LIKE '%$finding%' OR product.description LIKE '%$finding%') ";
                $result11 = mysqli_query($conn, $sql11);        
            if (mysqli_num_rows($result11) > 0){
                echo "<table>";
                $dem=0;
            while($row11 = mysqli_fetch_assoc($result11)) {
                if($dem==0)
                {
                    echo "<tr>";
                }
            ?>              
                        <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                    <div style= "border: 3px inset white" >
                                    
                                    <?php
                                                           $picture=$row11['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="product/<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                    <div class="hiddentext">
                                    <span style="font-size: 1vw"><b><?php echo $row11['name'];?></b></span><br/>
                                    </div>
                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($row11["price"])." VNĐ";?></span><br/>
                             </div>
                        </td>
                     
                <?php
                                            
                $dem++;
                if($dem==6)
                {
                echo "</tr>";
                $dem=0;
            }
         }
         echo "</table>";
        }
        $pagenum = ceil($sl12/20);
        for($i=1; $i<=$pagenum; $i++)
        {
        ?>
        <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
        <?php
        }
        
            }
          
        
            
                }
        //Không hiển thị bộ lọc sp thường
         if(isset($_GET["cat"])){
                        $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
                         $result2 = mysqli_query($conn, $sql2);
                         if (mysqli_num_rows($result2) > 0) {
                            $row2  =mysqli_fetch_assoc($result2);
                              
                                foreach ($row2 as $value) {
                                    $id_detail_cate = $value;                       
                                }
                                $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                                $result3 = mysqli_query($conn, $sql3);
                                if (mysqli_num_rows($result3) > 0) {
                                    echo "<table>";
                                    $dem = 0;
                                    $sl=0;
                                    $merge=array();
                                    While($row3  =mysqli_fetch_assoc($result3)){
                                        foreach ($row3 as $value) {
                                            $id_product=$value;

                                            $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product'";
                                            $result5 = mysqli_query($conn, $sql5);
                                            $row5 = mysqli_fetch_assoc($result5);
                                            $sl=$sl + (int)$row5["Sl"];

                                            $sql6 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' AND product.quantity =0";
                                            $result6 = mysqli_query($conn, $sql6); 
                                            if (mysqli_num_rows($result6) > 0){
                                                while($row6 = mysqli_fetch_assoc($result6)) {
                                                    $merge1 =[
                                                        $row6,
                                                ];
                                                $merge=array_merge($merge,$merge1);
                                                }
                                            } 

                                            $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' AND product.quantity >0 ";
                                            $result4 = mysqli_query($conn, $sql4);          
                                            if (mysqli_num_rows($result4) > 0){
                                            while($row4 = mysqli_fetch_assoc($result4)) {
                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }
                                            ?>              
                                                            <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                                                            <div style= "border: 3px inset white" >
                                                            
                                                            <?php
                                                           $picture=$row4['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row4["id"];?>"><img  src="<?php echo $row4["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row4["id"];?>"><img  src="product/<?php echo $row4["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $row4["name"];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row4["price"])." VNĐ";?></span><br/>
                                                             </div>
                                                        </td>
                                                     
                                                <?php
                                                                            
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                $dem=0;
                                            }
                                            
                                            }
                                            
                                        }
                                        }
            
                                    }
                                    echo "</table>";
                                }
                                if(count($merge) > 0){ 
                                    echo "</br><center>CÁC SẢN PHẨM KHÔNG TỒN TẠI</center>";
                                    $dem = 0; 
                                    echo "<table>" ; 
                                 if(count($merge) > 1){ 
            /*trường hợp không ảnh hưởng mobile first */             
                                    foreach($merge as $item)
                                    {

                                        if($dem==0)
                                        {
                                            echo "<tr>";
                                        }

                                    ?>
                                                   <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                                                                   <div style= "border: 3px inset white" >
                                                                   <div style ="position: absolute; top:1 em; right: 2 em;padding: 4 px;font-size:1.5vw"><p>SOLD OUT</p></div>
                                                                   <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <img  style="opacity:0.6" src="<?php echo $item["picture"];?>" width='250px'/><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <img  style="opacity:0.6" src="product/<?php echo $item["picture"];?>" width='250px'/><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                               
                                                                   <div class="hiddentext">
                                                                   <span style="font-size: 1vw"><b><?php echo $item["name"];?></b></span><br/>
                                                                   </div>
                                                                   <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                    </div>
                                                               </td>
                           
                                                <?php
                                        
                                                               
                                        $dem++;
                                        if($dem==6)
                                        {
                                        echo "</tr>";
                                        $dem=0;
                                            }
                                    }
                                    }
                                if(count($merge) == 1){
                                /*trường hợp bị ảnh hưởng mobile first */ 

                                        foreach($merge as $item)
                                        {

                                            if($dem==0)
                                            {
                                                echo "<tr>";
                                            }

                                        ?>
                                            
                                                        <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                        <div style= "border: 3px inset white" >
                                                        
                                                        <div style ="position: absolute; top:1 em; right: 2 em;padding: 4 px;font-size:2vw"><p>SOLD OUT</p></div>
                                                        <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <img  style="opacity:0.6" src="<?php echo $item["picture"];?>" width='250px'/><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <img  style="opacity:0.6" src="product/<?php echo $item["picture"];?>" width='250px'/><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                                   <div class="hiddentext">
                                                                   <span style="font-size: 1vw"><b><?php echo $item["name"];?></b></span><br/>
                                                                   </div>
                                                                   <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                            </div>
                                                    </td>

                                                    <?php
                                            
                                                                   
                                            $dem++;
                                            if($dem==6)
                                            {
                                            echo "</tr>";
                                            $dem=0;
                                                }
                                        }
                                        }
                                        echo "</table>";

                                }

                            
                                $pagenum = ceil($row5["Sl"]/40);
                                for($i=1; $i<=$pagenum; $i++)
                                {
                                ?>
                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                <?php
                                } 
                                
                         }
                         else{
                            $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                     $result2 = mysqli_query($conn, $sql2);
                     if (mysqli_num_rows($result2) > 0) {
    
                        // $sql1 = "SELECT count(*) as sl FROM detail_category WHERE detail_category.name = '$cat'";
                        // $result1 = mysqli_query($conn, $sql1);
                        // $row = mysqli_fetch_assoc($result1);
                        $merge=array();
                        $row2  =mysqli_fetch_assoc($result2);
                        
                        foreach ($row2 as $value) {
                            $id_detail_cate = $value;
                                                  
                        }
                        $sl=0;
                        $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'";
                        $result5 = mysqli_query($conn, $sql5);
                        $row5 = mysqli_fetch_assoc($result5);
                        $sl=$sl + (int)$row5["Sl"]; 

                        $sql6 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate'AND product.quantity=0";
                        $result6 = mysqli_query($conn, $sql6); 
                        if (mysqli_num_rows($result6) > 0){
                            while($row6 = mysqli_fetch_assoc($result6)) {
                                $merge1 =[
                                    $row6,
                            ];
                            $merge=array_merge($merge,$merge1);
                            }
                        } 

                        $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate'AND product.quantity>0";
                         $result3 = mysqli_query($conn, $sql3);
                         if (mysqli_num_rows($result3) > 0) {
                        echo "<table>";
                        $dem = 0;
                        while($row3 = mysqli_fetch_assoc($result3)) {
                            if($dem==0)
                            {
                                echo "<tr>";
                            }
                            
                        ?>
                                        <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                        <div style= "border: 3px inset white">
                                        <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                        <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img  src="product/<?php echo $row3["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                        <div class="hiddentext">
                                        <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                        </div>
                                        <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                        </div>   
                                    </td>
                            <?php
                            $dem++;
                            if($dem==6)
                            {
                            echo "</tr>";
                              $dem=0;
                           }
                        }
                        echo "</table>";
                    }
                    if(count($merge) > 0){ 
                        echo "</br><center>CÁC SẢN PHẨM KHÔNG TỒN TẠI</center>";
                        $dem = 0; 
                        echo "<table>" ; 
                     if(count($merge) > 1){ 
/*trường hợp không ảnh hưởng mobile first */             
                        foreach($merge as $item)
                        {

                            if($dem==0)
                            {
                                echo "<tr>";
                            }

                        ?>
                                       <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                                                       <div style= "border: 3px inset white" >
                                                       <div style ="position: absolute; top:1 em; right: 2 em;padding: 4 px;font-size:1.5vw"><p>SOLD OUT</p></div>

                                                       <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <img  style="opacity:0.6" src="<?php echo $item["picture"];?>" width='250px'/><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <img  style="opacity:0.6" src="product/<?php echo $item["picture"];?>" width='250px'/><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                   
                                                       <div class="hiddentext">
                                                       <span style="font-size: 1vw"><b><?php echo $item["name"];?></b></span><br/>
                                                       </div>
                                                       <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                        </div>
                                                   </td>
               
                                    <?php
                            
                                                   
                            $dem++;
                            if($dem==6)
                            {
                            echo "</tr>";
                            $dem=0;
                                }
                        }
                        }
                    if(count($merge) == 1){
                    /*trường hợp bị ảnh hưởng  mobile first */ 

                            foreach($merge as $item)
                            {

                                if($dem==0)
                                {
                                    echo "<tr>";
                                }

                            ?>
                                
                                            <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                            <div style= "border: 3px inset white" >
                                            
                                            <div style ="position: absolute; top:1 em; right: 2 em;padding: 4 px;font-size: 2vw"><p>SOLD OUT</p></div>
                                            <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <img  style="opacity:0.6" src="<?php echo $item["picture"];?>" width='250px'/><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <img  style="opacity:0.6" src="product/<?php echo $item["picture"];?>" width='250px'/><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                       <div class="hiddentext">
                                                       <span style="font-size: 1vw"><b><?php echo $item["name"];?></b></span><br/>
                                                       </div>
                                                       <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                </div>
                                        </td>

                                        <?php
                                
                                                       
                                $dem++;
                                if($dem==6)
                                {
                                echo "</tr>";
                                $dem=0;
                                    }
                            }
                            }
                            echo "</table>";

                    }
                    $pagenum = ceil($row5["Sl"]/40);
                    for($i=1; $i<=$pagenum; $i++)
                    {
                    ?>
                    <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                    <?php
                    } 
                     }
                    }
         }

         //không hiển thị bộ lọc với sp sale
         if(isset($_GET["cat2"])){
            $_SESSION['cat2']= $_GET["cat2"];
            $sql12 = "SELECT count(*) as sl FROM product WHERE product.discount >0 AND product.quantity>0 ";
            $result12 = mysqli_query($conn, $sql12);
            if (mysqli_num_rows($result12) > 0){
            while($row12 = mysqli_fetch_assoc($result12)) { 
                $sl12=(int)$row12['sl'];
            }
             } 
            if($sl12>1){
                $sql11 = "SELECT * FROM product WHERE product.discount >0 AND product.quantity>0 ";
                $result11 = mysqli_query($conn, $sql11);        
            if (mysqli_num_rows($result11) > 0){
                echo "<table>";
                $dem=0;
            while($row11 = mysqli_fetch_assoc($result11)) {
                if($dem==0)
                {
                    echo "<tr>";
                }
            ?>              
                            <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2" >
                            <div style= "border: 3px inset white" >
                            
                            <?php
                                                           $picture=$row11['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                          <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="product/<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                            <div class="hiddentext">
                            <span style="font-size: 1vw"><b><?php echo $row11["name"];?></b></span><br/>
                            </div>
                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row11["price"])." VNĐ";?></span><br/>
                             </div>
                        </td>
                     
                <?php
                                            
                $dem++;
                if($dem==6)
                {
                echo "</tr>";
                $dem=0;
            }
         }
         echo "</table>";
        }
        $pagenum = ceil($sl12/20);
        for($i=1; $i<=$pagenum; $i++)
        {
        ?>
        <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
        <?php
        }
    }
    else{
        $sql11 = "SELECT * FROM product WHERE product.discount >0 AND product.quantity>0 ";
        $result11 = mysqli_query($conn, $sql11);        
    if (mysqli_num_rows($result11) > 0){
        echo "<table>";
        $dem=0;
    while($row11 = mysqli_fetch_assoc($result11)) {
        if($dem==0)
        {
            echo "<tr>";
        }
    ?>              
                <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                            <div style= "border: 3px inset white" >
                            
                            <?php
                                                           $picture=$row11['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                          <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row11["id"];?>"><img  src="product/<?php echo $row11["picture"];?>" width='250px'/> </a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                            <div class="hiddentext">
                            <span style="font-size: 1vw"><b><?php echo $row11['name'];?></b></span><br/>
                            </div>
                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row11["price"])." VNĐ";?></span><br/>
                     </div>
                </td>
             
        <?php
                                    
        $dem++;
        if($dem==6)
        {
        echo "</tr>";
        $dem=0;
    }
 }
 echo "</table>";
}
$pagenum = ceil($sl12/20);
for($i=1; $i<=$pagenum; $i++)
{
?>
<center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
<?php
}

    }
    }
       
        // Hiển thị theo bộ lọc
                    
            if(isset($_POST["price_arr"]) && isset($_SESSION['category'])&& ( isset($_POST["male"]) or isset($_POST["female"]) or isset($_POST["color1"]))){
                //bộ lọc cả 3 giá trị :giá, giới tính, màu sắc
                    if(isset($_POST["price_arr"]) && isset($_SESSION['category']) && (isset($_POST["male"]) or isset($_POST["female"])) && isset($_POST["color1"]) )
                    {
                                        $price_arr=$_POST["price_arr"];
                                        $cat= $_SESSION['category'];
                                        $color1= $_POST["color1"];
                                        $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $sl=0;
                                        if (mysqli_num_rows($result2) > 0) {
                                        $row2  =mysqli_fetch_assoc($result2);
                                            
                                            foreach ($row2 as $value) {
                                                $id_detail_cate = $value;                       
                                            }
                                            $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                                            $result3 = mysqli_query($conn, $sql3);
                                            if (mysqli_num_rows($result3) > 0) {
                                                $merge= array();
                                                While($row3  =mysqli_fetch_assoc($result3)){
                                                    foreach ($row3 as $value) {
                                                        $id_product=$value;
                                                        $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product'";
                                                        $result5 = mysqli_query($conn, $sql5);
                                                        $row5 = mysqli_fetch_assoc($result5);
                                                        $sl=$sl + (int)$row5["Sl"];
                                                        if(isset($_POST["male"]) && isset($_POST["female"])){
                                                            $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name LIKE N'%nam nữ%'and product.color='$color1' and product.quantity>0";
                                                            }
                                                            elseif(isset($_POST["male"])){
                                                                
                                                                $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name LIKE N'%nam%' and product.name LIKE N'%nam nữ%' and product.color='$color1'and product.quantity>0";
                                                    
                                                            }
                                                            else{
                                                                $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name NOT LIKE N'%nam%' and product.color='$color1'and product.quantity>0 ";
                                                            }
                                                        $result4 = mysqli_query($conn, $sql4);
                                                        
                                                        if (mysqli_num_rows($result4) > 0){
                                                        while($row4 = mysqli_fetch_assoc($result4)) {
                                                            $merge1 =[
                                                                    $row4,
                                                            ];
                                                            $merge=array_merge($merge,$merge1);

                                                    }
                                                        
                                                    }
                                                    }
                        
                                                }
                                                
                                            }
                                            if (count($merge) > 0){
                                            if($price_arr=="ASC"){
                                            usort( $merge, function($x,$y)
                                            {
                                                return $x['price'] <=> $y['price'];
                                                
                                            });
                                                }
                                                if($price_arr=="DESC"){
                                                usort( $merge, function($x,$y)
                                                {
                                            return $y['price'] - $x['price'];
                                                    
                                                });
                                                    }
                                            $dem = 0; 
                                            echo "<table>" ; 
                                         if(count($merge) > 1){ 
         /*trường hợp không ảnh hưởng không bị ảnh hưởng mobile first */             
                                            foreach($merge as $item)
                                            {

                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }

                                            ?>
                                                            <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                            <div style= "border: 3px inset white" >
                                                            <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"> <img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"> <img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                </div>
                                                        </td>
                                   
                                                        <?php
                                                
                                                                       
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                $dem=0;
                                                    }
                                            }
                                            }
                                        if(count($merge) == 1){
       /*trường hợp bị ảnh hưởng không bị ảnh hưởng mobile first */ 

                                                foreach($merge as $item)
                                                {
    
                                                    if($dem==0)
                                                    {
                                                        echo "<tr>";
                                                    }
    
                                                ?>
                                                    
                                                                <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                                <div style= "border: 3px inset white" >
                                                                <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                        <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                 <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                         
                                                                <div class="hiddentext">
                                                                <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                                </div>
                                                                <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                    </div>
                                                            </td>

                                                            <?php
                                                    
                                                                           
                                                    $dem++;
                                                    if($dem==6)
                                                    {
                                                    echo "</tr>";
                                                    $dem=0;
                                                        }
                                                }
                                                }
                                        }
                                        else{

                                            echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;
                                
                                        }
                                            echo "</table>";
                                            $pagenum = ceil($row5["Sl"]/40);
                                            for($i=1; $i<=$pagenum; $i++)
                                            {
                                            ?>
                                            <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                            <?php
                                            } 
                                            
                                }
                                else{
                                    $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $sl=0;
                                    if (mysqli_num_rows($result2) > 0) {

                                    // $sql1 = "SELECT count(*) as sl FROM detail_category WHERE detail_category.name = '$cat'";
                                    // $result1 = mysqli_query($conn, $sql1);
                                    // $row = mysqli_fetch_assoc($result1);

                                    $row2  =mysqli_fetch_assoc($result2);
                                    
                                    foreach ($row2 as $value) {
                                        $id_detail_cate = $value;
                                                                
                                    }
                                        
                                    $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'";
                                    $result5 = mysqli_query($conn, $sql5);
                                    $row5 = mysqli_fetch_assoc($result5);
                                    $sl=$sl + (int)$row5["Sl"]; 
                                    if(isset($_POST["male"]) && isset($_POST["female"])){
                                        $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name LIKE N'%nam nữ%' and product.color='$color1' and product.quantity>0 ORDER BY price $price_arr ";
                                        }
                                        elseif(isset($_POST["male"])){
                                            
                                            $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name LIKE N'%nam%' and product.name LIKE N'%nam nữ%'and product.color='$color1'and product.quantity>0 ORDER BY price $price_arr ";
                            
                                        }
                                        else{
                                            $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name NOT LIKE N'%nam%' and product.color='$color1'and product.quantity>0 ORDER BY price $price_arr ";
                                        }

                                        $result3 = mysqli_query($conn, $sql3);
                                        if (mysqli_num_rows($result3) > 0) {
                                            if(mysqli_num_rows($result3) > 1){
                                    echo "<table>";
                                    $dem = 0;
                                    while($row3 = mysqli_fetch_assoc($result3)) {
                                        if($dem==0)
                                        {
                                            echo "<tr>";
                                            }
                                    ?>
                                                    <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                    <div style= "border: 3px inset white">
                                                    <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                 <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                    <div class="hiddentext">
                                                    <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                    </div>
                                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                    </div>   
                                                </td>
                                        <?php
                                                                    
                                        $dem++;
                                        if($dem==6)
                                        {
                                        echo "</tr>";
                                            $dem=0;
                                        }
                                    }
                                    echo "</table>";
                                            }
                                            if(mysqli_num_rows($result3) == 1){
                                            echo "<table>";
                                            $dem = 0;
                                            while($row3 = mysqli_fetch_assoc($result3)) {
                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }
                                            ?>
                                                            <td class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                            <div style= "border: 3px inset white">
                                                            <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                 <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                                        </div>   
                                                        </td>
                                                <?php
                                                                            
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                    $dem=0;
                                                }
                                            }
                                            echo "</table>";
                                                    }
                                }
                                else{

                                echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;

                                }

                                $pagenum = ceil($row5["Sl"]/40);
                                for($i=1; $i<=$pagenum; $i++)
                                {
                                ?>
                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                <?php
                                } 
                                    }
                            }
                    }
                    elseif(isset($_POST["price_arr"]) && isset($_SESSION['category']) && (isset($_POST["male"]) or isset($_POST["female"]))){
     /*Bộ lọc cho 2 giá trị :giá và giới tính */                                  $price_arr=$_POST["price_arr"];
                                        $cat= $_SESSION['category'];
                                        $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $sl=0;
                                        if (mysqli_num_rows($result2) > 0) {
                                        $row2  =mysqli_fetch_assoc($result2);
                                            
                                            foreach ($row2 as $value) {
                                                $id_detail_cate = $value;                       
                                            }
                                            $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                                            $result3 = mysqli_query($conn, $sql3);
                                            if (mysqli_num_rows($result3) > 0) {
                                                $merge= array();
                                                While($row3  =mysqli_fetch_assoc($result3)){
                                                    foreach ($row3 as $value) {
                                                    $id_product=$value;
                                                        $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product'";
                                                        $result5 = mysqli_query($conn, $sql5);
                                                        $row5 = mysqli_fetch_assoc($result5);
                                                        $sl=$sl + (int)$row5["Sl"];
                                                        if(isset($_POST["male"]) && isset($_POST["female"])){
                                                            $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name LIKE N'%nam nữ%'and product.quantity>0";
                                                            }
                                                            elseif(isset($_POST["male"])){
                                                                
                                                                $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name LIKE N'%nam%' and product.name LIKE N'%nam nữ%'and product.quantity>0";
                                                    
                                                            }
                                                            else{
                                                                $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.name NOT LIKE N'%nam%' and product.quantity>0 ";
                                                            }
                                                        $result4 = mysqli_query($conn, $sql4);
                                                        
                                                        if (mysqli_num_rows($result4) > 0){
                                                        while($row4 = mysqli_fetch_assoc($result4)) {
                                                            $merge1 =[
                                                                    $row4,
                                                            ];
                                                            $merge=array_merge($merge,$merge1);

                                                    }
                                                        
                                                    }
                                                    }
                        
                                                }
                                                
                                            }
                                            if (count($merge) > 0){
                                            if($price_arr=="ASC"){
                                            usort( $merge, function($x,$y)
                                            {
                                                return $x['price'] <=> $y['price'];
                                            });
                                                }
                                                if($price_arr=="DESC"){
                                                usort( $merge, function($x,$y)
                                                {
                                                    return $y['price'] - $x['price'];
                                                    
                                                });
                                                    }
                                            $dem = 0; 
                                            echo "<table>" ;                        
                                            if(count($merge) > 1){ 
                                                /*trường hợp không ảnh hưởng không bị ảnh hưởng mobile first */             
                                                foreach($merge as $item)
                                                {
    
                                                    if($dem==0)
                                                    {
                                                        echo "<tr>";
                                                    }
    
                                                ?>
                                                                <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                                <div style= "border: 3px inset white" >
                                                                <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                  <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                             
                                                                <div class="hiddentext">
                                                                <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                                </div>
                                                                <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                    </div>
                                                            </td>
                                        
                                                            <?php
                                                    
                                                                            
                                                    $dem++;
                                                    if($dem==6)
                                                    {
                                                    echo "</tr>";
                                                    $dem=0;
                                                        }
}
                                                }
                                            if(count($merge) == 1){
            /*trường hợp bị ảnh hưởng không bị ảnh hưởng mobile first */ 
    
                                                    foreach($merge as $item)
                                                    {
        
                                                        if($dem==0)
                                                        {
                                                            echo "<tr>";
                                                        }
        
                                                    ?>
                                                        
                                                                    <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                                    <div style= "border: 3px inset white" >
                                                                    
                                                                    <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                  <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                                    <div class="hiddentext">
                                                                    <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                                    </div>
                                                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                        </div>
                                                                </td>
    
                                                                <?php
                                                        
                                                                                
                                                        $dem++;
                                                        if($dem==6)
                                                        {
                                                        echo "</tr>";
                                                        $dem=0;
                                                            }
                                                    }
                                                    }
                                        }
                                        else{

                                            echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;
                                
                                        }
                                            echo "</table>";
                                        $pagenum = ceil($row5["Sl"]/40);
                                            for($i=1; $i<=$pagenum; $i++)
                                            {
                                            ?>
                                            <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                            <?php
                                            } 
                                            
                                }
                                else{
                                        $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $sl=0;
                                    if (mysqli_num_rows($result2) > 0) {

                                    // $sql1 = "SELECT count(*) as sl FROM detail_category WHERE detail_category.name = '$cat'";
                                    // $result1 = mysqli_query($conn, $sql1);
                                    // $row = mysqli_fetch_assoc($result1);

                                    $row2  =mysqli_fetch_assoc($result2);
                                    
                                    foreach ($row2 as $value) {
                                        $id_detail_cate = $value;
                                                                
                                    }
                                        
                                    $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'";
                                    $result5 = mysqli_query($conn, $sql5);
                                    $row5 = mysqli_fetch_assoc($result5);
                                    $sl=$sl + (int)$row5["Sl"]; 
                                    if(isset($_POST["male"]) && isset($_POST["female"])){
                                        $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name LIKE N'%nam nữ%' and product.quantity>0 ORDER BY price $price_arr ";
                                        }
                                        elseif(isset($_POST["male"])){
                                            
                                            $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name LIKE N'%nam%' and product.name LIKE N'%nam nữ%' and product.quantity>0 ORDER BY price $price_arr ";
                            
                                        }
                                        else{
                                            $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.name NOT LIKE N'%nam%' and product.quantity>0 ORDER BY price $price_arr ";
                                        }
                                        $result3 = mysqli_query($conn, $sql3);
                                        if (mysqli_num_rows($result3) > 0) {
                                            if(mysqli_num_rows($result3) > 1){
                                    echo "<table>";
                                    $dem = 0;
                                    while($row3 = mysqli_fetch_assoc($result3)) {
                                        if($dem==0)
                                        {
                                            echo "<tr>";
                                        }
                                    ?>
                                                    <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                    <div style= "border: 3px inset white">
                                                    <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                                                  <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                    <div class="hiddentext">
                                                    <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                    </div>
                                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                    </div>   
                                                </td>
                                        <?php
                                                                    
                                        $dem++;
                                        if($dem==6)
                                        {
                                        echo "</tr>";
                                            $dem=0;
                                        }
                                    }
                                    echo "</table>";
                                            }
                                            if(mysqli_num_rows($result3) == 1){
                                            echo "<table>";
                                            $dem = 0;
                                            while($row3 = mysqli_fetch_assoc($result3)) {
                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }
                                            ?>
                                                            <td class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                            <div style= "border: 3px inset white">
                                                            <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"><img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                            </div>   
                                                        </td>
                                                <?php
                                                                            
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                    $dem=0;
                                                }
                                            }
                                            echo "</table>";
                                                    }
                                }
                                else{

                                echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;

                                }

                                $pagenum = ceil($row5["Sl"]/40);
                                for($i=1; $i<=$pagenum; $i++)
                                {
                                ?>
                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                <?php
                                } 
                                    }
                            }
                        }
                        elseif(isset($_POST["price_arr"]) && isset($_SESSION['category']) && isset($_POST["color1"])){
 /*Bộ lọc cho 2 giá trị: giá và màu sắc*/   $price_arr=$_POST["price_arr"];
                                        $cat= $_SESSION['category'];
                                        $color1= $_POST["color1"];
                                        $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $sl=0;
                                        if (mysqli_num_rows($result2) > 0) {
                                        $row2  =mysqli_fetch_assoc($result2);
                                            
                                            foreach ($row2 as $value) {
                                                $id_detail_cate = $value;
                                            }
                                            $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                                            $result3 = mysqli_query($conn, $sql3);
                                            if (mysqli_num_rows($result3) > 0) {
                                                $merge= array();
                                                While($row3  =mysqli_fetch_assoc($result3)){
                                                    foreach ($row3 as $value) {
                                                        $id_product=$value;
                                                        $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product'";
                                                        $result5 = mysqli_query($conn, $sql5);
                                                        $row5 = mysqli_fetch_assoc($result5);
                                                        $sl=$sl + (int)$row5["Sl"];
                                                            $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.color = '$color1'and product.quantity>0";

                                                        $result4 = mysqli_query($conn, $sql4);
                                                        
                                                        if (mysqli_num_rows($result4) > 0){
                                                        while($row4 = mysqli_fetch_assoc($result4)) {
                                                            $merge1 =[
                                                                    $row4,
                                                            ];
                                                            $merge=array_merge($merge,$merge1);

                                                    }
                                                        
                                                    }
                                                    }

                                                }
                                                
                                            }
                                        if (count($merge) > 0){
                                            if($price_arr=="ASC"){
                                            usort( $merge, function($x,$y)
                                            {
                                                return $x['price'] <=> $y['price'];
                                                
                                            });
                                                }
                                                if($price_arr=="DESC"){
                                                usort( $merge, function($x,$y)
                                                {
                                                return $y['price'] - $x['price'];
                                                    
                                                });
                                                    }
                                            $dem = 0; 
                                            echo "<table>" ;                        
                                            if(count($merge) > 1){ 
                                                /*trường hợp không ảnh hưởng không bị ảnh hưởng mobile first */             
                                                foreach($merge as $item)
                                                {
    
                                                    if($dem==0)
                                                    {
                                                        echo "<tr>";
                                                    }
    
                                                ?>
                                                                <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                                <div style= "border: 3px inset white" >
                                                                <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                     <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                            
                                                                <div class="hiddentext">
                                                                <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                                </div>
                                                                <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                    </div>
                                                            </td>
                                        
                                                            <?php
                                                    
                                                                            
                                                    $dem++;
                                                    if($dem==6)
                                                    {
                                                    echo "</tr>";
                                                    $dem=0;
                                                        }
                                                }
                                                }
                                            if(count($merge) == 1){
            /*trường hợp bị ảnh hưởng không bị ảnh hưởng mobile first */
                                            foreach($merge as $item)
                                                    {
        
                                                        if($dem==0)
                                                        {
                                                            echo "<tr>";
                                                        }
        
                                                    ?>
                                                        
                                                                    <td  class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                                    <div style= "border: 3px inset white" >
                                                                    
                                                                    <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                         <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                                <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"><img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                                    <div class="hiddentext">
                                                                    <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                                    </div>
                                                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                        </div>
                                                                </td>
    
                                                                <?php
                                                        
                                                                                
                                                        $dem++;
                                                        if($dem==6)
                                                        {
                                                        echo "</tr>";
                                                        $dem=0;
                                                            }
                                                    }
                                                    }
                                        }
                                        else{

                                            echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;
                                
                                        }
                                            echo "</table>";
                                            $pagenum = ceil($row5["Sl"]/40);
                                            for($i=1; $i<=$pagenum; $i++)
                                            {
                                            ?>
                                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                            <?php
                                            } 
                                            
                                }
                                else{
                                        $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $sl=0;
                                    if (mysqli_num_rows($result2) > 0) {

                                    $row2  =mysqli_fetch_assoc($result2);
                                    
                                    foreach ($row2 as $value) {
                                        $id_detail_cate = $value;
                                                                
                                    }
                                        
                                    $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'";
                                    $result5 = mysqli_query($conn, $sql5);
                                    $row5 = mysqli_fetch_assoc($result5);
                                    $sl=$sl + (int)$row5["Sl"]; 
                                        $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.color='$color1' and product.quantity>0 ORDER BY price $price_arr ";

                                        $result3 = mysqli_query($conn, $sql3);
                                        if (mysqli_num_rows($result3) > 0) {
                                            if(mysqli_num_rows($result3) > 1){
                                    echo "<table>";
                                    $dem = 0;
                                    while($row3 = mysqli_fetch_assoc($result3)) {
                                        if($dem==0)
                                        {
                                            echo "<tr>";
                                        }
                                    ?>
                                                    <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                    <div style= "border: 3px inset white">
                                                    <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                    <div class="hiddentext">
                                                    <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                    </div>
                                                <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                    </div>   
                                                </td>
                                        <?php
                                                                    
                                        $dem++;
                                        if($dem==6)
                                        {
                                        echo "</tr>";
                                            $dem=0;
                                        }
                                    }
                                    echo "</table>";
                                            }
                                            if(mysqli_num_rows($result3) == 1){
                                            echo "<table>";
                                            $dem = 0;
                                            while($row3 = mysqli_fetch_assoc($result3)) {
                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }
                                            ?>
                                                            <td class="column-p-6 column-t-6 column-d-6 column-l-6 column-m-6 column-6 column-n-6">
                                                            <div style= "border: 3px inset white">
                                                            <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                            </div>   
                                                        </td>
                                                <?php
                                                                            
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                    $dem=0;
                                                }
                                            }
                                            echo "</table>";
                                                    }
                                }
                                else{

                                echo "Không tồn tại sản phẩm tìm kiếm trong phân loại ". $cat;

                                }

                                $pagenum = ceil($row5["Sl"]/40);
                                for($i=1; $i<=$pagenum; $i++)
                                {
                                ?>
                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                <?php
                                } 
                                    }
                            }

                            }
                    }
                    else
                    {
                        if(isset($_POST["price_arr"]) && isset($_SESSION['category'])){
    /*Bộ lọc cho giá trị giá.*/         $price_arr=$_POST["price_arr"];
                                        $cat= $_SESSION['category'];
                                        $sql2 = "SELECT category.id FROM category WHERE category.name = '$cat'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $sl=0;
                                        if (mysqli_num_rows($result2) > 0) {
                                        $row2  =mysqli_fetch_assoc($result2);
                                            
                                            foreach ($row2 as $value) {
                                                $id_detail_cate = $value;                       
                                            }
                                            $sql3 = "SELECT detail_category.id FROM detail_category WHERE detail_category.category_id = '$id_detail_cate'";
                                            $result3 = mysqli_query($conn, $sql3);
                                            if (mysqli_num_rows($result3) > 0) {
                                                $merge= array();
                                                While($row3  =mysqli_fetch_assoc($result3)){
                                                    foreach ($row3 as $value) {
                                                        $id_product=$value;
                                                        $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_product'";
                                                        $result5 = mysqli_query($conn, $sql5);
                                                        $row5 = mysqli_fetch_assoc($result5);
                                                        $sl=$sl + (int)$row5["Sl"];
                
                                                        $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' and product.quantity>0";
                                                        $result4 = mysqli_query($conn, $sql4);
                                                    if (mysqli_num_rows($result4) > 0){
                                                        while($row4 = mysqli_fetch_assoc($result4)) {
                                                            $merge1 =[
                                                                    $row4,
                                                            ];
                                                            $merge=array_merge($merge,$merge1);
                
                                                    }
                                                        
                                                    }
                                                    }
                        
                                                }
                                                
                                            }
                                            if($price_arr=="ASC"){
                                            usort( $merge, function($x,$y)
                                            {
                                                return $x['price'] <=> $y['price'];
                                                
                                            });
                                                }
                                                if($price_arr=="DESC"){
                                                usort( $merge, function($x,$y)
                                                {
                                                    return $y['price'] - $x['price'];
                                                    
                                                });
                                                    }
                                            $dem = 0; 
                                            echo "<table>" ;                        
                                            foreach($merge as $item){
                
                                                if($dem==0)
                                                {
                                                    echo "<tr>";
                                                }
                                            ?>
                                                            <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                            <div style= "border: 3px inset white" >
                                                            <?php
                                                           $picture=$item['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"> <img  src="<?php echo $item['picture'];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $item['id'];?>"> <img  src="product/<?php echo $item['picture'];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                        
                                                            <div class="hiddentext">
                                                            <span style="font-size: 1vw"><b><?php echo $item['name'];?></b></span><br/>
                                                            </div>
                                                            <span style="font-size: 1vw"><?php echo "Price: ".number_format($item["price"])." VNĐ";?></span><br/>
                                                                </div>
                                                        </td>
                                                <?php
                                                                            
                                                $dem++;
                                                if($dem==6)
                                                {
                                                echo "</tr>";
                                                $dem=0;
                                                    }
                                            }
                                            echo "</table>";
                                            $pagenum = ceil($row5["Sl"]/40);
                                            for($i=1; $i<=$pagenum; $i++)
                                            {
                                            ?>
                                            <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                            <?php
                                            } 
                                            
                                        }
                                        else{
                                        $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $sl=0;
                                    if (mysqli_num_rows($result2) > 0) {
                
                                    // $sql1 = "SELECT count(*) as sl FROM detail_category WHERE detail_category.name = '$cat'";
                                    // $result1 = mysqli_query($conn, $sql1);
                                    // $row = mysqli_fetch_assoc($result1);
                
                                    $row2  =mysqli_fetch_assoc($result2);
                                    
                                    foreach ($row2 as $value) {
                                        $id_detail_cate = $value;
                                                                
                                    }
                                        
                                    $sql5 = "SELECT count(*) as Sl FROM product WHERE product.detail_category_id = '$id_detail_cate'";
                                    $result5 = mysqli_query($conn, $sql5);
                                    $row5 = mysqli_fetch_assoc($result5);
                                    $sl=$sl + (int)$row5["Sl"];
                                    $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate' and product.quantity>0 ORDER BY price $price_arr ";
                                        $result3 = mysqli_query($conn, $sql3);
                                        if (mysqli_num_rows($result3) > 0) {
                                    echo "<table>";
                                    $dem = 0;
                                    while($row3 = mysqli_fetch_assoc($result3)) {
                                        if($dem==0)
                                        {
                                            echo "<tr>";
                                        }
                                    ?>
                                                    <td class="column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-2 column-n-2">
                                                    <div style= "border: 3px inset white">
                                                    <?php
                                                           $picture=$row3['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="<?php echo $row3["picture"];?>" width='250px'/></a><br/>
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                           <a href="detail_product.php?cat=<?php echo $cat;?>&id=<?php echo $row3["id"];?>"> <img src="product/<?php echo $row3["picture"];?>" width='250px'/></a><br/>
          
                                                         <?php
                                                
                                                               }
                                               ?>
                                                    
                                                    <div class="hiddentext">
                                                    <span style="font-size: 1vw"><b><?php echo $row3["name"];?></b></span><br/>
                                                    </div>
                                                    <span style="font-size: 1vw"><?php echo "Price: ".number_format($row3["price"])." VNĐ";?></span><br/>
                                    </div>   
                                                </td>
                                        <?php
                                                                    
                                        $dem++;
                                        if($dem==6)
                                        {
                                        echo "</tr>";
                                            $dem=0;
                                        }
                                    }
                                    echo "</table>";
                                }
                
                                $pagenum = ceil($row5["Sl"]/40);
                                for($i=1; $i<=$pagenum; $i++)
                                {
                                ?>
                                <center><a href="product.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>"><?php echo "<".$i.">";?></a></center>
                                <?php
                                } 
                                    }
                                    }

                    }
                }
                   
            
        ?> 
       </center> 
    </div>
    </div>
           
</br>
            </br>
            </br>
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