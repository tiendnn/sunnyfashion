<?php 
session_start(); 
ob_start();
if (isset($_SESSION['dangnhap']['username'])&& isset($_SESSION['dangnhap']['password']))
{
    unset($_SESSION['dangnhap']['username']); 
    unset($_SESSION['dangnhap']['password']);
}
if (isset($_SESSION['price_arr']))
{
    unset($_SESSION['price_arr']); 
}
if (isset($_SESSION['category']))
{
    unset($_SESSION['category']); 
}
if (isset($_SESSION['id_product']))
{
    unset($_SESSION['id_product']); 
}

?>
        <script type="text/javascript">
          
          function navigation() {
             window.location="index.php";
          }
           
           alert('Đăng xuất thành công');
          setTimeout('navigation()', 1000);
        
    </script>