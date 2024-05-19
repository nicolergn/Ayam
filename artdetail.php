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
    <title>Nicorner | Blog Article</title>
    <link rel="icon" href="asset/picture/profile/avatarA_bgred.png" type="image/x-icon">
    
    <!-- ========== LINK TO CSS ==========  -->
    <link rel="stylesheet" href="asset/css/styles.css?v=1.0">
    
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

    <!-- ==================== ARTICLE DETAILS ==================== -->
    <section class="artdetail">
        <?php
        // Menghubungkan ke database
        $conn = mysqli_connect("localhost", "root", "", "nicorner");

        // Periksa koneksi
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Periksa apakah parameter id telah diterima
        if(isset($_GET['id'])) {
            // Dapatkan nilai id dari parameter URL
            $id = $_GET['id'];
            // Query untuk mengambil detail artikel berdasarkan id
            $sql = "SELECT * FROM blog_artikel WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            // Periksa apakah ada hasil dari query
            if (mysqli_num_rows($result) > 0) {
                // Tampilkan data artikel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='heading'>";
                    echo "<h2>" . $row['judul'] . "</h2>";
                    echo "<span>" . $row['tanggal'] . "</span>";
                    echo "</div>";
                    echo "<div class='artd-img'>";
                    echo "<img src='" . $row['gambar'] . "' alt='Article Image'>";
                    echo "</div>";
                    echo "<div class='artd-text'>";
                    echo "<p>" . $row['konten'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No article found";
            }
        } else {
            echo "No article selected";
        }

        // Tutup koneksi ke database
        mysqli_close($conn);
        ?>
    </section>

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
