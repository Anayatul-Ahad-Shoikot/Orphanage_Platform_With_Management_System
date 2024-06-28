<?php 
  session_start();
  include_once "../../Includes/db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $out_id = mysqli_real_escape_string($con, $_GET['out_id']);
          $in_id = mysqli_real_escape_string($con, $_GET['in_id']);
          $sql = mysqli_query($con, "SELECT org_name, org_id, org_logo FROM org_list WHERE org_id = $in_id");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="/Root/Dashboards/Own-Profiles/User/PROFILE_DETAILS.php?user_id= <?php echo $_SESSION['acc_id']; ?>" class="logout">back</a>
        <img src="../Dashboards/Own-Profiles/Org/<?php echo $row['org_logo'] ?>" alt="">
        <div class="details">
          <span><?php echo $row['org_name'] ?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $in_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="text" name="outgoing_id" value="<?php echo $out_id; ?>" hidden>
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="chat.js"></script>

</body>
</html>
