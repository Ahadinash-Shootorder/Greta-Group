
<?php $head_title="Contact Us - Corporate & Financial Business PHP Template"?>
<?php require_once('template-parts/layout/top-layout.php'); ?>
<?php require_once('template-parts/header/header.php'); ?>

<?php
$page_title = "Contact Us";
require_once('template-parts/page-title.php');
?>
<?php require_once('template-parts/contact/map.php'); ?>
<?php require_once('template-parts/contact/address.php'); ?>

<div style="width:100%; max-width:800px; margin:60px auto; font-family:Arial, sans-serif;">

  <h2 style="text-align:center; font-weight:500; letter-spacing:2px; margin-bottom:30px; font-size:40px;">
    Get In Touch
  </h2>

  <hr style="border:0; border-top:1px solid #ccc; margin-bottom:40px;">

 <form action="send-mail.php" method="POST" enctype="multipart/form-data">

  <div style="display:flex; gap:30px; margin-bottom:25px;">
    <input type="text" name="name" placeholder="Name*" required
      style="width:33.33%; padding:16px; border:1px solid #ccc;"> 
    
    <input type="email" name="email" placeholder="Email*" required
      style="width:33.33%; padding:16px; border:1px solid #ccc;">
      
       <input type="text" name="mobile" placeholder="Mobile Number"
      style="width:33.33%; padding:16px; border:1px solid #ccc;">
    
  </div>

  <div style="display:flex; gap:30px; margin-bottom:25px;">
   <input type="text" name="message" placeholder="Message"
      style="width:100%; padding:60px 16px; border:1px solid #ccc;">
  </div>

  <!--<div style="display:flex; align-items:center; margin-bottom:10px;">-->
  <!--  <input type="file" name="resume" required-->
  <!--    style="flex:1; padding:14px; border:1px solid #ccc;">-->
  <!--</div>-->

  <div style="margin-top:30px;">
    <button type="submit"
      style="background:#0047ab; color:#fff; padding:14px 40px; border:none;">
      Submit
    </button>
  </div>

</form>

</div>



<?php require_once('template-parts/footer/footer.php'); ?>
<?php require_once('template-parts/layout/bottom-layout.php'); ?>
