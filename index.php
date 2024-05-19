<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== META ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nicorner - My personal blog and gallery.">
        <meta name="keywords" content="blog, gallery, personal, contact">
        
        <!-- ========== TITLE ========== -->
        <title>Nicorner</title>
        <link rel="icon" href="asset/picture/profile/avatarA_bgred.png" type="image/x-icon">
        
        <!-- ========== LINK TO CSS ==========  -->
        <link rel="stylesheet" href="asset/css/styles.css">
        
        <!-- ========== LINK TO BOX ICONS ========== -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>

    <body>
        <!-- ==================== HEADER / NAVBAR ==================== -->
    	<?php 
        if (file_exists('include/header.php')) {
            include 'include/header.php';
        } else {
            echo "<p>Header section is missing.</p>";
        }
        ?>

		<!-- ==================== HOME SECTION ==================== -->
		<?php 
        if (file_exists('include/home.php')) {
            include 'include/home.php';
        } else {
            echo "<p>Home section is missing.</p>";
        }
        ?>

		<!-- ==================== ABOUT ME SECTION ==================== -->
		<?php 
        if (file_exists('include/about.php')) {
            include 'include/about.php';
        } else {
            echo "<p>About Me section is missing.</p>";
        }
        ?>

		<!-- ==================== BLOGS SECTION ==================== -->
        <?php 
        if (file_exists('include/blog.php')) {
            include 'include/blog.php';
        } else {
            echo "<p>Blogs section is missing.</p>";
        }
        ?>

		<!-- ==================== GALLERY SECTION ==================== -->
        <?php 
        if (file_exists('include/gallery.php')) {
            include 'include/gallery.php';
        } else {
            echo "<p>Gallery section is missing.</p>";
        }
        ?>

		<!-- ==================== CONTACT SECTION ==================== -->
        <?php 
        if (file_exists('include/contact.php')) {
            include 'include/contact.php';
        } else {
            echo "<p>Contact section is missing.</p>";
        }
        ?>

		<!-- ==================== LINK TO JAVASCRIPT ==================== -->
		<script src="asset/js/script.js?v=1.0"></script>

	</body>
</html>
