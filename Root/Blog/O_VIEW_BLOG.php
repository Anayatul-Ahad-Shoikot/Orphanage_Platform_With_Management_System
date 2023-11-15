<?php
    include ('/xampp/htdocs/DBMS_Project_Organized_One/Root/Blog/FETCH_BLOG_BE.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Blog/O_VIEW_BLOG_STYLE.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CareSenerity.org | Blog</title>
  </head>

<body>
    <header class="header">
      <nav>
          <div class="logo">
            <a href="/Root/Home_Page/O_HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
          </div>
          <div class="links">
            <ul>
              <li><a href="/Root/Home_Page/O_HOME.php">Home</a></li>
              <li><a href="/Root/Org_Page/O_ORG.php">Orgs.</a></li>
              <<li><a href="/Root/Dashboards/Own-Profiles/Org/PROFILE_DETAILS.php">Profile</a></li>
            </ul>
          </div>
      </nav>
    </header>
    
    <div class="blog-details-container">
        <div class="IMG">
          <img src="<?php echo $img_path ?>" alt="image name here">
        </div>
    
        <div class="blog-details">
          <h1 class="blog-details-title"><?php echo $title; ?></h1>
          <h3 class="blog-details-author">By <?php echo $user_name . ", " . $published ?></h3>
          <p class="blog-details-content">
             <?php echo $content ?>
          </p>
        </div>
        
            <div class="blog-actions">
                <form action="/Root/Blog/LIKES_HANDLE_BE.php" method="post">
                <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                <button type="submit" name="like"><i class='bx bxs-like'></i></button>
            </form>
                <p class="likes-count"><?php echo $likes ?></p>
            </div>

            <h2><i class='bx bxs-message-dots'></i> Comments:</h2>

            <div class="comments">
              <?php include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Blog/FETCH_COMMENTS_BE.php'); ?>
            </div>
            

            <h4>Add a comment :</h4>
            <form action="/Root/Blog/COMMENT_HANDLE_BE.php" method="post">
                <input type="hidden" name="user_name" value="<?php echo $user_name ?>">
                <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                <input type="text" name="comments" placeholder="Add a comment" required>
                <button type="submit" name="submit">Comment</button>
            </form>
    </div>
</body>
</html>
