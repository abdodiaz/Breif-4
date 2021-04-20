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
   <link rel="stylesheet" href="../style/book.css">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <title>Document</title>
</head>
<body>
   <header class="main-header">
      <nav class="main-nav">
         <div class="logo">
            <img src="../main__Images/Asset 2hdpi.svg" class="logo-img" alt="logo">
         </div>
         <div class="nav-list" id="nav">
            <ul class="nav-items">
               <li class="nav-links"><a href="index.php" class="links">Home</a></li>
               <li class="nav-links"><a href="" class="links">Contact</a></li>
               <li class="nav-links"><a href="books.php" class="links">Our Books</a></li>
               <li class="nav-links"><a href="" class="links">Our Authers</a></li>
            </ul>
         </div>
      </nav>
      <div class="book-form">
            <form action="insertBooks.php" method="Post"enctype="multipart/form-data" class="frm">
               <input type="text" name="name" id="name" placeholder="      Name">
               <input type="text" name="prix" id="prix" placeholder="      Prix">
               <input type="date" name="date" id="date">
               <input type="file" name="img" id="img" placeholder="      Image">
               <select name="selbooks" class="sel" >
                 <?php while ($row = $z->fetch()) : ?>
                <?php echo "<option value= '".htmlspecialchars($row['id'])."'>".htmlspecialchars($row['name'])."</option>" ?>
                   <?php endwhile; ?>
               </select>
               <input type="submit" name="insert" value="ok" class="btn">
            </form>
      </div>
      <table>
        <?php while ($row = $q->fetch()) : ?>
            <tr>
                <td><?php echo htmlspecialchars($row['Id']) ?></td>
                <td><?php echo htmlspecialchars($row['Name']); ?></td>
                <td><?php echo htmlspecialchars($row['prix']); ?></td>
                <td><?php echo htmlspecialchars($row['Ddate']); ?></td>
                <td><img src="../books/<?php echo htmlspecialchars($row['Img']) ?>" alt="immg" width="100px" height="100px"></td>
                <form action="updatebooks.php" method="post">
                    <td><input type="submit" name="modifier"></td>
                    <input type="hidden" name="mod" value="<?php echo htmlspecialchars($row['Id']) ?>">
                </form>
                <form action="delete.php" method="post">
                    <input type="hidden" name="del" value="<?php echo htmlspecialchars($row['Id']) ?>">
                    <td><input type="submit" value="supprimer"></td>
                </form>
            </tr>
        <?php endwhile; ?>
    </table>
   </header>
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
</body>
</html>