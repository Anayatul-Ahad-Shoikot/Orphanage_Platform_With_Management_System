<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/Root/Blog/CREATE_BLOG_STYLE.css"/>
    <title>Admin | Create Blog</title>
  </head>

  <body>
    <header class="header">
            <nav class="y">
                <div class="logo">
                    <a href="/Root/Admin_Side/website/HOME.php"><img src="/Root/Landing_Page/LOGO_NoBackground.png" alt="LOGO"></a>
                </div>
                <div class="links">
                    <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Orgs.</a></li>
                    <li><a href="/Includes/logout.php" class="btn">LogOut</a></li>
                    </ul>
                </div>
            </nav>

    </header>
    <div class="container">
        <h1>Create a Blog Post</h1>
        <form action="/Root/Blog/UPLOADS_BLOG_BE.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" required placeholder="Content"></textarea>
            <div class="xxx">
            <select name="category">
              <option value="">Category</option>
                <option value="child">Child</option>
                <option value="old">Old</option>
            </select>
            <input class="img" type="file" name="img" accept="image/*">
            </div>
            <button type="submit" name="submit">Post</button>
        </form>
    </div>
</body>
</html>