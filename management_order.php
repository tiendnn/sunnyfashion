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
        <span class= "column-7 column-t-7 column-d-7 column-p-7  column-l-7 column-m-7 column-n-7"></span>
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
    <center> <h1>ĐƠN HÀNG</h1> </center>

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


        if(isset($_SESSION['list_pro']) && isset($_SESSION['total3']) )
        {
            
            $list_pro=$_SESSION['list_pro'];
            $total3= $_SESSION['total3'];

        }
            if(isset($_GET['orderid']))
            {
                
                $order_id2= $_GET['orderid'];
                $sqld = "SELECT * FROM `order` WHERE id=$order_id2 ";
                $resultd = mysqli_query($conn, $sqld);
                if (mysqli_num_rows($resultd) > 0) {
                    While($rowd  =mysqli_fetch_assoc($resultd)){
                        ?>
                        <div style=" float: left;border: 1px ridge white;  width: 100%;padding-bottom:20px">
                    </br>
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
                                          echo number_format($rowe["price"])." VNĐ";
                                         ?>
                                          </td>
                                        <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                        <?php
                                            echo $rowe['quantity'];
                                        ?>
                                            </td>
                                        <td style='border-bottom: hidden;border-left: hidden' class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">
                                             <?php
                                                  echo number_format($rowe["total"])." VNĐ"; 
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

                            echo number_format( $fee_transporta)." VNĐ";
         ?>
         </br></br>
         Giảm giá:  <?php
                   echo  number_format($discountca)." VNĐ";
         ?>
         </br></br>
         Tổng trả:<?php
                echo number_format($total2a)." VNĐ </br></br>";
          ?>

        </div>
                <?php
            }
            if(!isset($_GET['orderid'])){
            if(isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['note']) && isset($_SESSION['virtual1'])){

                $name=$_POST['fullname'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $note=$_POST['note'];

                ?>
                <script>
                    alert('Hoàn tất');
                </script>
                <?php
                $sqla="SELECT user.id FROM user WHERE username= '$tk' and password='$pw'";
                $resulta = mysqli_query($conn, $sqla);
                if (mysqli_num_rows($resulta) > 0) {
                    While($rowa  =mysqli_fetch_assoc($resulta)){
                        $date =getdate();
                        $code="SH".$rowa['id'].$date['year'].$date['mon'].$date['mday'].$date['hours'].$date['minutes'].$date['seconds'];
                    }

                }

                $sql = "INSERT INTO `order`(`code`, `user_id`, `fullname`, `phone_number`, `address`, `note`,`total`, `status`) values('$code',(SELECT user.id FROM user WHERE username= '$tk' and password='$pw'),'$name','$phone','$address','$note', '$total3','đã xác nhận')";
                $result=mysqli_query($conn, $sql);
                $sqlb = "SELECT `id` FROM `order` WHERE code='$code'";
                $resultb = mysqli_query($conn, $sqlb);
                if (mysqli_num_rows($resultb) > 0) {
                    While($rowb  =mysqli_fetch_assoc($resultb)){
                        $order_id=$rowb['id'];
                        foreach ($list_pro as $key => $value) {
                            $sql2 = "SELECT * FROM cart WHERE cart.user_id IN (SELECT user.id FROM user WHERE username= '$tk' and password='$pw') AND cart.product_id = ' $value' ";
                            $result2 = mysqli_query($conn, $sql2);
                            if (mysqli_num_rows($result2) > 0) {
                                While($row2  =mysqli_fetch_assoc($result2)){
                                    $cart_id= $row2['id'];
                                    $quantity= $row2['quantity'];
                                    $sql4 = "SELECT * FROM product WHERE product.id = '$value'";
                                    $result4 = mysqli_query($conn, $sql4);
                                    if (mysqli_num_rows($result4) > 0) {
                                        While($row4  =mysqli_fetch_assoc($result4)){
                                            $change_quantity=$row4['quantity'];
                                            $change_quantity1=$row4['sold_quantity'];
                                            if($change_quantity>0){
                                            $change_quantity2=(int)$change_quantity-$quantity;
                                            $change_quantity3=(int)$change_quantity1+$quantity;
                                            $sql11 = "UPDATE product SET quantity = '$change_quantity2' WHERE product.id = '$value' ";
                                            $result11=mysqli_query($conn, $sql11);
                                            $sql111a = "UPDATE product SET sold_quantity = '$change_quantity3' WHERE product.id = '$value' ";
                                            $result111a=mysqli_query($conn, $sql111a);
                                            }
                                            if(isset($row4['discount'])){
                                                $price= $row4['discount'];
                                            }
                                            else{
                                                $price= $row4['price'];
                                            }
                                            $total_detail= (int)$price * (int)$quantity;
                                            $sql3 = "INSERT INTO `detail_order`(`order_id`, `cart_id`, `price`, `quantity`, `total`) values('$order_id','$cart_id','$price','$quantity', '$total_detail')";
                                            $result3=mysqli_query($conn, $sql3);
                                        }
                                    }

                                }
                            }
                        }

                    }
                
                } 
                unset($_SESSION['virtual1']);
                ?>
            <div style="width:100%">
            <table border='1' style="border-collapse:collapse;width:100%; border: 2px ridge white"> 
                <tr>
                    <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Mã đơn hàng</th>
                    <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Tổng tiền</th>
                    <th class= "column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6">Trạng thái đơn hàng</th>
                    <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Xem chi tiết</th>
        </tr>
            <?php
                            $sqlc = "SELECT * FROM `order` WHERE user_id IN (SELECT user.id FROM user WHERE username= '$tk' and password='$pw') ";
                            $resultc = mysqli_query($conn, $sqlc);
                            if (mysqli_num_rows($resultc) > 0) {
                                While($rowc  =mysqli_fetch_assoc($resultc)){
                                   
                                    echo "<tr>";
                                        echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                            echo "<center>".$rowc['code']."</center>";
                                        echo "</td>";
                                        
                                        echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                            echo "<center>".number_format($rowc['total'])." VNĐ </center>";
                                        echo "</td>";
                                        
                                        echo "<td class= 'column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6'>";
                                            echo "<center>".$rowc['status']."</center>";
                                        echo "</td>";
                                        echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                            ?><center><a href="management_order.php?orderid=<?php echo $rowc['id'];?>"><b>Xem</b></a></center><?php
                                    echo "</td>";
                                    echo "</tr>";

                                    
                                    
                                     }
                                    }
                           echo "</table>";
                            echo "</div>";
            }
            
            
                            if(!isset($_POST['fullname']) && !isset($_POST['address']) && !isset($_POST['phone']) && !isset($_POST['note']) && !isset($_SESSION['virtual1'])){
                                ?>
                                <div style="width:100%">
                                <table border='1' style="border-collapse:collapse;width:100%; border: 2px ridge white"> 
                                    <tr>
                                        <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Mã đơn hàng</th>
                                        <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Tổng tiền</th>
                                        <th class= "column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6">Trạng thái đơn hàng</th>
                                        <th class= "column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2">Xem chi tiết</th>
                            </tr>
                                <?php
                                                $sqlc = "SELECT * FROM `order` WHERE user_id IN (SELECT user.id FROM user WHERE username= '$tk' and password='$pw') ";
                                                $resultc = mysqli_query($conn, $sqlc);
                                                if (mysqli_num_rows($resultc) > 0) {
                                                    While($rowc  =mysqli_fetch_assoc($resultc)){
                                                       
                                                        echo "<tr>";
                                                            echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                                                echo "<center>".$rowc['code']."</center>";
                                                            echo "</td>";
                                                            
                                                            echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                                                echo "<center>".number_format($rowc['total'])." VNĐ</center>";
                                                            echo "</td>";
                                                            
                                                            echo "<td class= 'column-6 column-t-6 column-d-6 column-p-6 column-l-6 column-m-6 column-n-6'>";
                                                                echo "<center>".$rowc['status']."</center>";
                                                            echo "</td>";
                                                            echo "<td class= 'column-2 column-t-2 column-d-2 column-p-2 column-l-2 column-m-2 column-n-2'>";
                                                                ?><center><a href="management_order.php?orderid=<?php echo $rowc['id'];?>"><b>Xem</b></a></center><?php
                                                        echo "</td>";
                                                        echo "</tr>";
                    
                                                        
                                                        
                                                         }
                                                        }
                                               echo "</table>";
                                                echo "</div>";
                            }
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
