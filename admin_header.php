<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Trang Chủ</a>
         <a href="admin_products.php">Sản Phẩm</a>
         <a href="admin_orders.php">Đơn Hàng</a>
         <a href="admin_users.php">Người Dùng</a>
         <a href="admin_contacts.php">Lời Nhắn</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Tên người dùng : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Đăng Xuất</a>
         <div> <a href="login.php">Đăng Nhập</a> | <a href="register.php">Đăng Kí</a></div>
      </div>

   </div>

</header>