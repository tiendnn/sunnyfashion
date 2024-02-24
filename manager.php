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
    if(isset($_GET['mana_product'])){
        $_SESSION['mana_product']=$_GET['mana_product'];
    }
    if(isset($_GET['code2']))
    {
        $_SESSION['code2']=$_GET['code2'];
    }

    //quản lí sản phẩm
    if(isset($_SESSION['mana_product'])){
        require_once "config.php";
        ?>
        <center>
            <div class="column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2" style="float: left;background: white;border-right:1px ridge white">
        <div style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >  <div class="effect"><a style="float: left;font-size:1.5vw; padding:5px 0px ;width:100%" href="manager.php?code1=sale">THÊM SẢN PHẨM</a></br></br></div></div>
        <div  style="background:#b4aa99;border: 1px ridge black; margin:5px 0px" >    <div class="effect"><a style="float: left;font-size:1.5vw; padding:5px 0px; width:100%"  href="manager.php?code2=info">QUẢN LÍ SẢN PHẨM</a></br></br></div></div>
        </div>
        </center>
                <div class="column-10 column-t-10 column-d-10 column-p-10 column-l-10 column-m-10 column-n-10">
                    <?php
                    //Thêm sản phẩm
                    if(isset($_GET['code1']))
                    {
                        ?>
                            <div class="row">

                    
                    <form  action ="manager.php" method="POST" enctype="multipart/form-data">
                    <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">
        
                    <center><h3 >THÊM SẢN PHẨM </h3></center>
                        <lable style="padding-left: 10%" for="product_name">Tên sản phẩm:</lable>
                        <input style="margin-left: 6%" type ="text" value="" name = "product_name" id="product_name" size= "65%" autofocus/></br></br>
                        <lable style="padding-left: 10%" for="quantity">Số lượng:</lable>
                        <input style="margin-left: 9.5%" type ="number" value="" name = "quantity" id="quantity"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="color">Màu sắc:</lable>
                        <input style="margin-left: 10%" type ="text" value="" name = "color" id="color"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="material">Chất liệu:</lable>
                        <input style="margin-left: 9.5%" type ="text" value="" name = "material" id="material"size= "65%"/></br></br>
                        <lable style="padding-left: 10.5%" for="price">Giá bán:</lable>
                        <input style="margin-left: 10%" type ="number" value="" name = "price" id="price"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="description">Mô tả:</lable>
                        <input style="margin-left: 12%" type ="text" value="" name = "description" id="description"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="category">Phân loại:</lable>
                        <select style="margin-left: 9.5%" name="category">
                        <optgroup label="Túi">
                            <option value="1" >Balo</option>
                            <option value="2">Túi xách</option>
                            <option value="3" >Ví cầm tay</option>
                    </optgroup>
                    <optgroup label="Quần áo">
                            <option value="4">Váy</option>
                            <option value="5" >Áo</option>
                            <option value="6">Quần</option>
                            </optgroup>
                            <optgroup label="Giày">
                            <option value="7" >Giày cao gót</option>
                            <option value="8">Boots</option>
                            <option value="9" >Giày thể thao</option>
                            </optgroup>
                            <optgroup label="Trang sức">
                            <option value="10">Nhẫn</option>
                            <option value="11" >Bông tai</option>
                            <option value="12">Vòng cổ</option>
                            </optgroup>
                        </select></br></br>
                        <lable style="padding-left: 10%" for="image">Hình ảnh:</lable>
                        <input style="margin-left: 9.5%" type ="file" value="" name = "image" id="image" size= "65%"/></br></br>
                        <center><input size= "80%" type ="submit" value=" Thêm " name = "add1"/></center>
        
                        </div>
                     </form>
                     </div>
                                <?php
                                   
                    }

                    //quản lí sản phẩm
                    if(isset($_SESSION['code2']) && !isset($_GET['code1']))
                    {
                    ?>
                    <!-- menu danh mục sản phẩm -->
                    <div style=" float: left;margin-top:0px; width: 65%;padding-bottom:0px">
                    <div  class="menu">
    <ul style="background: #f5f5f5">
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?cat=Bags"  ><b>Túi</b></a>  
            <ul  >
                <li><a href="manager.php?cat=backpack" ><b>Balo</b></a></li>
                <li><a href="manager.php?cat=handbag"><b>Túi xách</b></a></li>
                <li><a href="manager.php?cat=wallet"><b>Ví cầm tay</b></a></li>
            </ul> 
            </li>  
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?cat=Clothes"><b>Quần áo</b></a> 
        <ul  >
                <li><a href="manager.php?cat=dress"><b>Váy</b></a></li>
                <li><a href="manager.php?cat=shirt"><b>Áo</b></a></li>
                <li><a href="manager.php?cat=trousers"><b>quần</b></a></li>
        </ul>
        </li>
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?cat=Shoes"><b>Giày</b></a>  
        <ul >
                <li><a href="manager.php?cat=highheels"><b>Giày cao gót</b></a></li>
                <li><a href="manager.php?cat=boots"><b>Boots</b></a></li>
                <li><a href="manager.php?cat=sneakers"><b>Sneakers</b></a></li>
        </ul> 
        </li>
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?cat=Jewellry" ><b>Trang sức</b></a>
        <ul>
                <li><a href="manager.php?cat=ring"><b>Nhẫn</b></a></li>
                <li><a href="manager.php?cat=earring"><b>Hoa tai</b></a></li>
                <li><a href="manager.php?cat=necklace"><b>Dây chuyền</b></a></li>
        </ul> 
        </li>
        </ul>    
        </div>
                    </div>

                    <!-- menu lọc sản phẩm -->
                    <div style=" float: right;margin-top:0px; width: 35%;padding-bottom:0px">
                    <div  class="menu">
        <ul style="background: #f5f5f5">
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?sale=1"  >Sale </a>  
            </li>  
        <li class="multimenu" style="background: white; border:1px ridge black"><a href="manager.php?sold=1">Bán hết </a> 
        </li>
        </ul>    
        </div>
                    </div>
                    <!-- in sản phẩm theo danh mục -->
                        <?php
                                             if(isset($_GET["cat"])){
                                                ?>
                                                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">

                                                <table border='1' style="border-collapse:collapse; width:100%">
                                                         <tr>
                                                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ảnh</th>
                                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Sản phẩm</th>
                                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Màu sắc</th>
                                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">C.Liệu</th>
                                                            <th  class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4">Mô tả</th>
                                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
                                           
                                                        </tr>
                                                        <?php
                                                $cat=$_GET["cat"];
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
                                                            $stt=1;
                                                            $merge=array();
                                                            While($row3  =mysqli_fetch_assoc($result3)){
                                                                foreach ($row3 as $value) {
                                                                    $id_product=$value;
                        
                                                                    $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '$id_product' AND product.quantity >0 ";
                                                                    $result4 = mysqli_query($conn, $sql4);          
                                                                    if (mysqli_num_rows($result4) > 0){
                                                                    while($row4 = mysqli_fetch_assoc($result4)) {

                                                                            echo "<tr>";
                                                                        
                                                                    ?>  
                                            <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                                            <td  style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                                            <?php
                                                                                   $picture=$row4['picture'];
                                                                                   $finding1='drive.google';
                                                                                   $compare=strpos($picture,$finding1);
                                                                                   if($compare !== false)
                                                                                   {
                                                                                       ?>
                                                                                <img  src="<?php echo $row4["picture"];?>" width='250px'/>
                                                                       
                                                                       <?php
                                                                              
                                                                               }
                                                                               else{
                                                                                   ?>
                                                                                 <img  src="product/<?php echo $row4["picture"];?>" width='250px'/>
                                  
                                                                                 <?php
                                                                        
                                                                                       }
                                                                       ?>
                                           
                                            </td>
                                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["name"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["color"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["material"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <span style="font-size: 1vw"><?php echo $row4["description"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager.php?delete=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xóa</span></a></br> </br><a href="manager.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                                                 <?php
                                                                        echo "</tr>";
                                                                        $stt++;
                                                                    }
                                                                    
                                                                    }
                                                                    
                                                                }
                                                                }
                                    
                                                            }
                                                            echo "</table>";
                                                            echo "</div>";
                                                }
                                                 else{
                                                    $sql2 = "SELECT detail_category.id FROM detail_category WHERE detail_category.name = '$cat'";
                                             $result2 = mysqli_query($conn, $sql2);
                                             if (mysqli_num_rows($result2) > 0) {

                                                $merge=array();
                                                $row2  =mysqli_fetch_assoc($result2);
                                                
                                                foreach ($row2 as $value) {
                                                    $id_detail_cate = $value;
                                                                          
                                                }
                        
                                                $sql3 = "SELECT * FROM product WHERE product.detail_category_id = '$id_detail_cate'AND product.quantity>0";
                                                 $result3 = mysqli_query($conn, $sql3);
                                                 if (mysqli_num_rows($result3) > 0) {
                                               
                                                $stt = 1;
                                                while($row3 = mysqli_fetch_assoc($result3)) {
                 
                                                    echo "<tr>";
                                                                        
                                                    ?>  
                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                            <?php
                                                                   $picture=$row3['picture'];
                                                                   $finding1='drive.google';
                                                                   $compare=strpos($picture,$finding1);
                                                                   if($compare !== false)
                                                                   {
                                                                       ?>
                                                                <img  src="<?php echo $row3["picture"];?>" width='250px'/>
                                                       
                                                       <?php
                                                              
                                                               }
                                                               else{
                                                                   ?>
                                                                 <img  src="product/<?php echo $row3["picture"];?>" width='250px'/>
                  
                                                                 <?php
                                                        
                                                                       }
                                                       ?>
                           
                            </td>
                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row3["name"];?></span></td>
                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row3["color"];?></span></td>
                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row3["material"];?></span></td>
                            <td style='border-bottom: hidden' class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <span style="font-size: 1vw"><?php echo $row3["description"];?></span></td>
                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager.php?detail=<?php echo $row3['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black; margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager.php?delete=<?php echo $row3['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xóa</span></a></br></br><a href="manager.php?update=<?php echo $row3['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center>  </td>            
                                                                 <?php
                                                        echo "</tr>";
                                                        $stt++;
                                                                             }
                                                echo "</table>";
                                                echo "</div>";
                                                                     }
                                          
                                                                 }
                                                         }
                                                        }
                                                        if(!isset($_GET["cat"]) && !isset($_GET["sale"]) && !isset($_GET["sold"])&&  !isset($_GET["detail"]) && !isset($_GET["delete"]) &&  !isset($_GET["update"]) ){
                                                            ?>
                                                            <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">
            
                                                            <table border='1' style="border-collapse:collapse; width:100%">
                                                                     <tr>
                                                                        <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                                                                        <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ảnh</th>
                                                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Sản phẩm</th>
                                                                        <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Màu sắc</th>
                                                                        <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">C.Liệu</th>
                                                                        <th  class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4">Mô tả</th>
                                                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
                                                       
                                                                    </tr>
                                                                    <?php
                                                        
                                                                    $sql4 = "SELECT * FROM product WHERE product.detail_category_id = '1' AND product.quantity >0 ";
                                                                    $result4 = mysqli_query($conn, $sql4);          
                                                                    if (mysqli_num_rows($result4) > 0){
                                                                        $stt=1;
                                                                    while($row4 = mysqli_fetch_assoc($result4)) {

                                                                            echo "<tr>";
                                                                        
                                                                    ?>  
                                            <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                                            <td  style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                                            <?php
                                                                                    $picture=$row4['picture'];
                                                                                    $finding1='drive.google';
                                                                                    $compare=strpos($picture,$finding1);
                                                                                    if($compare !== false)
                                                                                    {
                                                                                        ?>
                                                                                <img  src="<?php echo $row4["picture"];?>" width='250px'/>
                                                                        
                                                                        <?php
                                                                                
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img  src="product/<?php echo $row4["picture"];?>" width='250px'/>
                                    
                                                                                    <?php
                                                                        
                                                                                        }
                                                                        ?>
                                            
                                            </td>
                                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["name"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["color"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["material"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <span style="font-size: 1vw"><?php echo $row4["description"];?></span></td>
                                            <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager.php?delete=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xóa</span></a></br> </br><a href="manager.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                                                    <?php
                                                                        echo "</tr>";
                                                                        $stt++;
                                                                    }
                                                                    echo "</table>";
                                                                    echo "</div>";
                                                                    }
                                                        }
                          //xem thêm về sản phẩm                              
                         if(isset($_GET['detail'])){
                            ?>
                            <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">

                            <table border='1' style="border-collapse:collapse; width:100%">
                                        <tr>
                                        <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Mã SP</th>
                                        <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ảnh</th>
                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Sản phẩm</th>
                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Giá</th>
                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Giá Sale</th>
                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Số lượng (Hiện có)</th>
                                        <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Số lượng (Đã bán)</th>
                        
                                    </tr>
                                    <?php
                            $id_product2=$_GET['detail'];
    
                                                $sql4 = "SELECT * FROM product WHERE product.id = '$id_product2' ";
                                                $result4 = mysqli_query($conn, $sql4);          
                                                if (mysqli_num_rows($result4) > 0){
                                                while($row4 = mysqli_fetch_assoc($result4)) {

                                                        echo "<tr>";
                                                    
                                                ?>  
                                                <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $row4["id"]; ?></td>
                                                <td  style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                                                <?php
                                                                $picture=$row4['picture'];
                                                                $finding1='drive.google';
                                                                $compare=strpos($picture,$finding1);
                                                                if($compare !== false)
                                                                {
                                                                    ?>
                                                            <img  src="<?php echo $row4["picture"];?>" width='250px'/>
                                                    
                                                    <?php
                                                            
                                                            }
                                                            else{
                                                                ?>
                                                                <img  src="product/<?php echo $row4["picture"];?>" width='250px'/>
                
                                                                <?php
                                                    
                                                                    }
                                                    ?>
                        
                        </td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["name"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo number_format( $row4["price"])." VNĐ";?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo number_format( $row4["discount"])." VNĐ";?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["quantity"];?></span></td>
                        <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["sold_quantity"];?></span></td>           
                                                                <?php
                                                    echo "</tr>";
                                                    
                                                }
                                                echo "</table>";
                                                echo "</div>";
    
                                        }

                            }

                            //cập nhật sản phẩm
                            if(isset($_GET['update'])){
                                $id_pro3= $_GET['update'];
                                    
                                $sql4 = "SELECT * FROM product WHERE product.id = '$id_pro3'";
                                $result4 = mysqli_query($conn, $sql4);          
                                if (mysqli_num_rows($result4) > 0){
                                while($row4 = mysqli_fetch_assoc($result4)) {
                                ?>
                                <form  action ="manager.php" method="POST" enctype="multipart/form-data">
                    <div style=" float: left;border: 3px ridge white; margin-top:20px; width: 100%;padding-bottom:20px">
        
                    <center><h3 >CẬP NHẬT SẢN PHẨM </h3></center>
                        <lable style="padding-left: 10%" for="product_name">Tên sản phẩm:</lable>
                        <input style="margin-left: 6%" type ="text" value="<?php echo $row4['name'];?>" name = "product_name" id="product_name" size= "65%" autofocus/></br></br>
                        <lable style="padding-left: 10%" for="quantity">Số lượng:</lable>
                        <input style="margin-left: 9.5%" type ="number" value="<?php echo $row4['quantity'];?>" name = "quantity" id="quantity"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="color">Màu sắc:</lable>
                        <input style="margin-left: 10%" type ="text" value="<?php echo $row4['color'];?>" name = "color" id="color"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="material">Chất liệu:</lable>
                        <input style="margin-left: 9.5%" type ="text" value="<?php echo $row4['material'];?>" name = "material" id="material"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="price">Giá bán:</lable>
                        <input style="margin-left: 10.5%" type ="number" value="<?php echo $row4['price'];?>" name = "price" id="price"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="price_sale">Giá sale:</lable>
                        <input style="margin-left: 10.5%" type ="number" value="<?php echo $row4['discount'];?>" name = "price_sale" id="price_sale"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="description">Mô tả:</lable>
                        <input style="margin-left: 12%" type ="text" value="<?php echo $row4['description'];?>" name = "description" id="description"size= "65%"/></br></br>
                        <lable style="padding-left: 10%" for="image">Hình ảnh:</lable>
                        <input style="margin-left: 9.5%" type ="file" value="" name = "image" id="image" size= "65%"/></br>
                        <input style="margin-left: 6%" type ="hidden" value="<?php echo $row4['id'];?>" name = "id_pro" id="id_pro" size= "65%"/>
                        <center><input size= "80%" type ="submit" value=" Cập nhật " name = "up1"/></center>
        
                        </div>
                     </form>
                                    <?php
                                }
                             }
                            }

                            //sản phẩm bán hết
                            if(isset($_GET['sold'])){
                                ?>
                                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">
            
                                <table border='1' style="border-collapse:collapse; width:100%">
                                         <tr>
                                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ảnh</th>
                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Sản phẩm</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Màu sắc</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">C.Liệu</th>
                                            <th  class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4">Mô tả</th>
                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
                           
                                        </tr>
                                        <?php
                            
                                        $sql4 = "SELECT * FROM product WHERE  product.quantity =0 ";
                                        $result4 = mysqli_query($conn, $sql4);          
                                        if (mysqli_num_rows($result4) > 0){
                                            $stt=1;
                                        while($row4 = mysqli_fetch_assoc($result4)) {

                                                echo "<tr>";
                                            
                                        ?>  
                <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                <td  style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                <?php
                                                        $picture=$row4['picture'];
                                                        $finding1='drive.google';
                                                        $compare=strpos($picture,$finding1);
                                                        if($compare !== false)
                                                        {
                                                            ?>
                                                    <img  src="<?php echo $row4["picture"];?>" width='250px'/>
                                            
                                            <?php
                                                    
                                                    }
                                                    else{
                                                        ?>
                                                        <img  src="product/<?php echo $row4["picture"];?>" width='250px'/>
        
                                                        <?php
                                            
                                                            }
                                            ?>
                
                </td>
                <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["name"];?></span></td>
                <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["color"];?></span></td>
                <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["material"];?></span></td>
                <td style='border-bottom: hidden' class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <span style="font-size: 1vw"><?php echo $row4["description"];?></span></td>
                <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager.php?delete=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xóa</span></a></br> </br><a href="manager.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                        <?php
                                            echo "</tr>";
                                            $stt++;
                                        }
                                        echo "</table>";
                                        echo "</div>";
                                        }

                                 }

                            //sản phẩm sale
                            if(isset($_GET['sale'])){
                                ?>
                                <div style=" float: left;border: 3px ridge white; margin-top:0px; width: 100%;padding-bottom:0px">
            
                                <table border='1' style="border-collapse:collapse; width:100%">
                                         <tr>
                                            <th class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">STT</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Ảnh</th>
                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Sản phẩm</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">Màu sắc</th>
                                            <th  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">C.Liệu</th>
                                            <th  class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4">Mô tả</th>
                                            <th  class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Thao tác</th>
                           
                                        </tr>
                                        <?php
                            
                                        $sql4 = "SELECT * FROM product WHERE product.discount >0 AND product.quantity >0 ";
                                        $result4 = mysqli_query($conn, $sql4);          
                                        if (mysqli_num_rows($result4) > 0){
                                            $stt=1;
                                        while($row4 = mysqli_fetch_assoc($result4)) {

                                                echo "<tr>";
                                            
                                        ?>  
                <td style='border-bottom: hidden;border-left: hidden; border-right: hidden'  class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"><?php echo $stt; ?></td>
                <td  style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1">
                <?php
                                                        $picture=$row4['picture'];
                                                        $finding1='drive.google';
                                                        $compare=strpos($picture,$finding1);
                                                        if($compare !== false)
                                                        {
                                                            ?>
                                                    <img  src="<?php echo $row4["picture"];?>" width='250px'/>
                                            
                                            <?php
                                                    
                                                    }
                                                    else{
                                                        ?>
                                                        <img  src="product/<?php echo $row4["picture"];?>" width='250px'/>
        
                                                        <?php
                                            
                                                            }
                                            ?>
                
                </td>
                <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"> <span style="font-size: 1vw"><?php echo $row4["name"];?></span></td>
                <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["color"];?></span></td>
                <td style='border-bottom: hidden' class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1"> <span style="font-size: 1vw"><?php echo $row4["material"];?></span></td>
                <td style='border-bottom: hidden' class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <span style="font-size: 1vw"><?php echo $row4["description"];?></span></td>
                <td style='border-bottom: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2"><center><a href="manager.php?detail=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xem thêm</span></a></br></br><a href="manager.php?delete=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black;margin-bottom:5px">Xóa</span></a></br> </br><a href="manager.php?update=<?php echo $row4['id'];?>"><span style="background:#f5f5f5;border: 1px ridge black">Cập Nhật</span></a></center> </td>            
                                                        <?php
                                            echo "</tr>";
                                            $stt++;
                                        }
                                        echo "</table>";
                                        echo "</div>";
                                        }

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
        //thêm sap
        if (isset($_POST['add1'])) {
        $name1=$_POST['product_name'];
        $quantity1=$_POST['quantity'];
        $color1=$_POST['color'];
        $material1=$_POST['material'];
        $price1=$_POST['price'];
        $description1=$_POST['description'];
        $caterogy1=$_POST['category'];
        
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        if(in_array($file_ext,$expensions)=== false){
        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
        $image = $_FILES['image']['name'];
        $target = "product/".basename($image);
        $sql2 = "SELECT * FROM product WHERE name='$name1'and color='$color1'and material='$material1'and price='$price1' and description='$description1'";
        $result2=mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0){
            echo '<script language="javascript">alert("Sản phẩm đã tồn tại! Vui lòng kiểm tra lại dữ liệu");</script>';
        }
        else{
        $sql = "INSERT INTO product (detail_category_id,name,picture,quantity,color,material,price,description) values('$caterogy1','$name1','$image','$quantity1','$color1','$material1','$price1','$description1')";
        $result=mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Thêm sản phẩm thành công!");</script>';
        }else{
        echo '<script language="javascript">alert("Không thể thêm sản phẩm! Vui lòng kiểm tra lại dữ liệu");</script>';
        }
             }

        }

        //update sản phẩm
        if (isset($_POST['up1'])) {
            $id_pro1=$_POST['id_pro'];
            $name1=$_POST['product_name'];
            $quantity1=$_POST['quantity'];
            $color1=$_POST['color'];
            $material1=$_POST['material'];
            $price1=$_POST['price'];
            $discount1=$_POST['price_sale'];
            $description1=$_POST['description'];
            
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_parts =explode('.',$_FILES['image']['name']);
            $file_ext=strtolower(end($file_parts));
            $expensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions)=== false){
            $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
            }
            $image = $_FILES['image']['name'];
            $target = "product/".basename($image);
            $sql2 = "SELECT * FROM product WHERE name='$name1'and color='$color1'and material='$material1'and price='$price1' and description='$description1'";
            $result2=mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0){
                echo '<script language="javascript">alert("Sản phẩm đã tồn tại! Vui lòng kiểm tra lại dữ liệu");</script>';
            }
            else{
            $sql = "UPDATE product SET name='$name1',picture='$image',quantity='$quantity1',color='$color1',material='$material1',price='$price1',discount='$discount1',description='$description1' WHERE product.id='$id_pro1'";
            $result=mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo '<script language="javascript">alert("Cập nhật sản phẩm thành công!");</script>';
            }else{
            echo '<script language="javascript">alert("Không thể cập nhật sản phẩm! Vui lòng kiểm tra lại dữ liệu");</script>';
            }
                 }
    
            }

            //xóa sản phẩm
        if(isset($_GET['delete'])){
            $id_pro2= $_GET['delete'];
            $sql = "SELECT * FROM product where product.id='$id_pro2'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $sql1 = "DELETE FROM product where  product.id='$id_pro2'";
                $result1 = mysqli_query($conn, $sql1);
                ?>
<script language="javascript">alert("Xóa sản phẩm thành công");</script>
              <?php
                
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