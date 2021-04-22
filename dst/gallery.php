<?php
include('config.php');
include('selectbooks.php');
include('selectaut.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style/gallery.css">
   <link rel="stylesheet" href="../style/responsive-gallery.css">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <title>Document</title>
</head>
<body>
   <header class="main-header">
      <nav class="main-nav">
         <div class="logo">
            <img src="../main__Images/Asset 2hdpi.svg" class="logo-img" alt="logo">
         </div>
         <a href="#" class="menu" onclick="menuBar()"><i class="fas fa-bars"></i></a>
         <div class="nav-list" id="nav">
            <ul class="nav-items" id="menu">
               <li class="nav-links"><a href="index.php" class="links">Home</a></li>
               <li class="nav-links"><a href="gallery.php" class="links">gallery</a></li>
               <li class="nav-links"><a href="books.php" class="links">Our Books</a></li>
               <li class="nav-links"><a href="auteur.php" class="links">Our Authers</a></li>
            </ul>
         </div>
      </nav> 
   </header>
   <section class="gallery-section">
      <div class="imgs">
      <?php while ($row = $q->fetch()) : ?>
         <div class="pict"><img src="../books/<?php echo htmlspecialchars($row['Img']) ?>" alt="immg" width="100px" height="100px"></div>
         <?php endwhile; ?>
      </div>
      
   </section>
   <footer class="main-footer">
      <div class="footer-content">
         <img src="../main__Images/section-footer.jpg" alt="footer-background">
      </div>
      <div class="social-media">
         <h3>Our Social Media</h3>
         <div class="social-icons">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
         </div>
      </div>
      <div class="news-letter">
         <h3>Our News Letter</h3>
         <input type="text" class="news-input" placeholder="     Contact Us">
         <button>Send</button>
      </div>
   </footer>
   <script src="/js/responsive-menu.js"></script>
</body>
</html>