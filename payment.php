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
            div.header_cart{
             padding-bottom: 10px;
             padding-top: 10px;
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
        <a class= "column-2 column-p-2 column-t-2 column-d-2 column-l-2 column-m-2 column-n-2"style="float: left ;margin-left: 15px;" href="index.php"><img src="Pictures_icons/logo.png"  width="200px" height="90px"></a>
        <span class= "column-7 column-t-7 column-d-7 column-p-7 column-l-7 column-m-7 column-n-7"></span>
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
                    <?php }?>
        <a class= "column-1 column-t-1 column-d-1 column-p-1 column-l-1 column-m-1 column-n-1" style="float: left; margin-right: 5px; margin-top: 15px" href="logout.php"><img style="width:40%;height: auto;"  src="Pictures_icons/logout1.png"  width="70px" height="50px"></a>
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


</br>
<div class="header_cart" >
    <center> <h1>THANH TOÁN</h1> </center>

</div>
<div class="content">
    <div class="row">
        <center>
        <?php
        require_once "config.php";
        if(!isset($_SESSION['dangnhap']['username']) && !isset($_SESSION['dangnhap']['password']))
        {
            ?>
            <center>
            <script type="text/javascript">
          
            function navigation() {
               window.location="index.php";
            }
             
            document.write("Không thể truy cập chức năng này vì tài khoản không đăng nhập");
            setTimeout('navigation()', 0000);
          
            </script> 
            </center>
            <?php
        }
        if (!is_array($_POST['choose'])){
            ?>

            <script type="text/javascript">
          
            function navigation() {
               window.location="cart.php";
            }
             
            alert("Vui lòng chọn sản phẩm cần mua");
            setTimeout('navigation()', 0000);
          
            </script> 
            <?php
        
        }
        if (is_array($_POST['choose'])){

            $list_pro=(array)$_POST['choose'];
            $_SESSION['list_pro']=$list_pro;

                $sql = "SELECT * FROM user where username='$tk' and password='$pw'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    While($row  =mysqli_fetch_assoc($result)){
            ?>
                        <form  action ="management_order.php" method="POST">
            <div style=" float: left;border: 1px ridge black; padding-top:20px; width: 100%;padding-bottom:20px">

            <center><h3 >THÔNG TIN ĐẶT HÀNG </h3></center>
                
                <lable for="fullname">Khách hàng:</lable>
                <input type ="text" value="<?php echo $row['fullname'];?>" name = "fullname" id="fullname"/>
                <lable for="address">Địa chỉ:</lable>
                <input type ="text" value="<?php echo $row['address'];?>" name = "address" id="address"/>
                <lable for="phone">Số điện thoại:</lable>
                <input type = "text" value = "<?php echo $row['phone_number'];?>" name = "phone" id="phone"/>
                <lable for="note">Ghi chú:</lable>
                <input type = "text" value = "" name = "note" id="note"/><br/>
                        </div>
                <?php
                    }
                }
                ?>
            <div style=" border: 1px inset white; padding-top:100px; width:100%">

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
                          $total2=0;
                                foreach ($list_pro as $value) {
                                            $sql2 = "SELECT * FROM product WHERE product.id = ' $value' ";
                                            $result2 = mysqli_query($conn, $sql2);
                                            if (mysqli_num_rows($result2) > 0) {
                                                While($row2  =mysqli_fetch_assoc($result2)){
                                                    
                                                    echo"<tr>";
                                                    echo "<td style='border-bottom: hidden;border-left: hidden; border-right: hidden' class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'><center><span> $stt </span></center></td>";
                                                    ?>
                                                    <div style="display:flex">
                                                    <?php
                                                $picture=$row2['picture'];
                                                           $finding1='drive.google';
                                                           $compare=strpos($picture,$finding1);
                                                           if($compare !== false)
                                                           {
                                                               ?>
                                                           <td style='border-bottom: hidden'class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <img style="width:20%;height: auto" src="<?php echo $row2['picture'];?>"  width="70px" height="50px">
                                               
                                               <?php
                                                      
                                                       }
                                                       else{
                                                           ?>
                                                            <td style='border-bottom: hidden'class= "column-4 column-t-4 column-d-4 column-p-4 column-l-4 column-m-4 column-n-4"> <img style="width:20%;height: auto" src="product/<?php echo $row2['picture'];?>"  width="70px" height="50px">
          
                                                         <?php
                                                
                                                               }
                                               ?> 
                                                    <span class="hiddentext" style="font-size: 1vw; vertical-align: middle"><b><?php echo $row2["name"];?></b></span>
                                                    </td>
                                                </div>
                                                    <td style='border-bottom: hidden;border-left: hidden'class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                                    <?php
                                                     if(isset($row2['discount'])){
                                                        ?>
                                                        <span style="font-size: 0.5vw; text-decoration-line: line-through; padding-right:10px"><?php echo number_format($row2["price"])." VNĐ";?></span>
                                                        <span style="font-size: 1vw"><?php echo number_format($row2["discount"])." VNĐ";?></span>
                                                        <?php
                                                        }
                                                        else{
                                                        ?>
                                                        <span style="font-size: 1vw"><?php echo number_format($row2["price"])." VNĐ";?></span>
                                                                
                                                        <?php
            
                                                     }
                                                    ?>
                                                    </td>
                                                    <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                                    <?php
                                                            $sql8 = "SELECT cart.quantity FROM cart WHERE cart.user_id iN ( SELECT user.id FROM user WHERE username= '$tk' and password='$pw') AND cart.product_id= '$value'";
                                                            $result8 = mysqli_query($conn, $sql8);
                                                            if (mysqli_num_rows($result8) > 0) {
                                                                While($row8  =mysqli_fetch_assoc($result8)){
                                                         echo $row8['quantity']; }} ?>
                                                        </td>
                                                    <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                                         <?php
                                                                $sql3 = "SELECT cart.quantity FROM cart WHERE cart.user_id iN ( SELECT user.id FROM user WHERE username= '$tk' and password='$pw') and cart.product_id= '$value'";
                                                                $result3 = mysqli_query($conn, $sql3);
                                                                if (mysqli_num_rows($result3) > 0) {
                                                                    while($row3  =mysqli_fetch_assoc($result3)){
                                                                        $quantity_cart= $row3['quantity'];   
                            
                                                                    }
                                                                 }
                                                                 $sql4 = "SELECT * FROM product WHERE product.id = ' $value' ";
                                                                    $result4 = mysqli_query($conn, $sql4);
                                                                    $price1=0;
                                                                    if (mysqli_num_rows($result4) > 0) {
                                                                        while($row4  =mysqli_fetch_assoc($result4)){
                                                                        if(isset($row4['discount']))
                                                                        {
                                                                            $price1= $row4['discount'];
                                                                        }
                                                                        else{
                                                                            $price1= $row4['price'];
                                                                        }
                                                                         }
                                                                      }
                                                                      else{
                                                                        echo "lôi";
                                                                      }
        
                                                                      $total= (int)$quantity_cart * (int)$price1;
                                                                      echo number_format($total)." VNĐ";
                                                                      echo"</td>";
                                                                      echo "</tr>";
                                                                      $stt++;
                                                        }
                                                        $total2=$total2+ $total;
                                                        $_SESSION['total2']=$total2;

            
                                                }
                                            
      
            }
            ?>
            </table>
        </div>
        <div>
        </br>
        <label style="padding-left:40px " for="arr"><b>Phương thức thanh toán</b> </label>
        <select name="arr">
            <option value="money" >Thanh toán khi nhận hàng</option>
        </select>
        </br></br>
        Tổng tiền: <?php echo number_format($total2)." VNĐ"; ?> </br></br>
        Phí vận chuyển: <?php
            $sqlb = "SELECT discount_code.discount FROM discount_code WHERE discount_code.name_code= 'transport_fee'AND discount_code.status='display' ";
            $resultb = mysqli_query($conn, $sqlb);
            if (mysqli_num_rows($resultb) > 0) {
                while($rowb  =mysqli_fetch_assoc($resultb)){
                    $fee_transport= $rowb['discount'];
                    echo number_format($rowb["discount"])." VNĐ";
                }
            }
         ?>
         </br></br>
         Giảm giá:  <?php
            $sqlc = "SELECT discount_code.discount FROM discount_code WHERE discount_code.condition<='$total2'AND discount_code.status='block' ORDER BY discount_code.discount DESC";
            $resultc = mysqli_query($conn, $sqlc);
            if (mysqli_num_rows($resultc) > 0) {
                while($rowc  =mysqli_fetch_assoc($resultc)){
                    $discountc= $rowc['discount'];
                    echo number_format($rowc["discount"])." VNĐ";
                    break;
                }
            }
            else{
                $discountc=0;
            }
         ?>
         </br></br>
         Tổng trả:<?php
          $total3=$total2 + $fee_transport -$discountc;
          $_SESSION['total3']=$total3;
          echo number_format($total3)." VNĐ</br></br>";
          $virtual1=(int)$total3 - 1;
          $_SESSION['virtual1']=$virtual1;
          ?>

        </div>
        <div>
                <input  style =" margin-top:20px"type='submit' name ="pay "value= 'THANH TOÁN' size='30px' required/>

        </div>
           

        
        </form>
            <?php
        
        }


        ?>
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
