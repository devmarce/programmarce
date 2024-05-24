<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$site_name = get_bloginfo('name');
?>
<footer class="main-footer">
    <div class="footer-container">
        <div style="background-color: black;">
            <p>&#169 <?php echo $site_name." - ".date("Y"); ?> <br> Web Design</p>
        </div>
    </div>
</footer>
