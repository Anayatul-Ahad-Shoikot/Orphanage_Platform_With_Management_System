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
          <img src="<?php echo $post_image ?>" alt="image name here">
        </div>
    
        <div class="blog-details">
          <h1 class="blog-details-title"><?php echo $post_title ?></h1>
          <h3 class="blog-details-author">By <?php echo $acc_name . ", " . $published ?></h3>
          <p class="blog-details-content">
             <?php echo $post_content ?>
          </p>
        </div>
        
            <div class="blog-actions">
                <form action="/Root/Blog/LIKES_HANDLE_BE.php" method="post">
                <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                <button type="submit" name="like" onclick="storeScrollPosition('LIKE')"><i class='bx bxs-like'></i></button>
            </form>
                <p class="likes-count"><?php echo $likes ?></p>
            </div>

            <h2><i class='bx bxs-message-dots'></i> Comments:</h2>

            <div class="comments">
              <?php include('/xampp/htdocs/DBMS_Project_Organized_One/Root/Blog/FETCH_COMMENTS_BE.php'); ?>
            </div>
            

            <h4>Add a comment :</h4>
            <form id="COMMENT" action="/Root/Blog/COMMENT_HANDLE_BE.php" method="post">
                <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                <input type="text" name="comment" placeholder="Add a comment" required>
                <button type="submit" name="submit" onclick="storeScrollPosition('COMMENT')">Comment</button>
            </form>
    </div>


    <script>
      function storeScrollPosition(formId) {
        const form = document.getElementById(formId);
        const scrollPosition = window.scrollY || window.pageYOffset;
        sessionStorage.setItem(formId, scrollPosition);
      }
      document.addEventListener('DOMContentLoaded', function() {
        const likeFormScroll = sessionStorage.getItem('LIKE');
        const commentFormScroll = sessionStorage.getItem('COMMENT');
        if (likeFormScroll !== null) {
          window.scrollTo(0, likeFormScroll);
          sessionStorage.removeItem('LIKE');
        } else if (commentFormScroll !== null) {
          window.scrollTo(0, commentFormScroll);
          sessionStorage.removeItem('COMMENT');
        }
      });
  </script>
</body>
</html>
