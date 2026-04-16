<?php $head_title="Contact Us - Corporate & Financial Business PHP Template"?>
<?php require_once('template-parts/layout/top-layout.php'); ?>

<!-- Include the new Modern Blue Layout CSS -->
<link rel="stylesheet" href="css/contact-custom.css">

<?php require_once('template-parts/header/header.php'); ?>

<?php
$page_title = "Contact Us";
require_once('template-parts/page-title.php');
?>

<main class="contact-page-wrapper">
    <div class="contacts-container">
        
        <!-- Top Section: Modern Blue Contact Cards -->
        <?php require_once('template-parts/contact/address.php'); ?>

        <!-- Bottom Section: Split Layout (Form & Map) -->
        <div class="contact-split-section">
            
            <!-- Left Column: Clean White Form -->
            <div class="modern-form-box">
                <h2>Get In Touch</h2>
                
                <form action="send-mail.php" method="POST" enctype="multipart/form-data">
                    <div class="modern-input-row">
                        <div class="modern-form-group">
                            <input type="text" name="name" placeholder="Name" class="modern-input" required>
                        </div>
                        <div class="modern-form-group">
                            <input type="email" name="email" placeholder="Email" class="modern-input" required>
                        </div>
                    </div>
                    
                    <div class="modern-form-group">
                        <input type="text" name="mobile" placeholder="Mobile Number" class="modern-input">
                    </div>
                    
                    <div class="modern-form-group">
                        <textarea name="message" placeholder="Message" class="modern-input modern-textarea"></textarea>
                    </div>

                    <div style="margin-top:10px;">
                        <button type="submit" class="modern-submit-btn">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Modern Map Box -->
            <div class="modern-map-box">
                <?php require_once('template-parts/contact/map.php'); ?>
            </div>

        </div>
    </div>
</main>

<?php require_once('template-parts/footer/footer.php'); ?>
<?php require_once('template-parts/layout/bottom-layout.php'); ?>
