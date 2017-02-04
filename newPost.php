<?php
  require("inc/functions.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
      $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
      $content = trim(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));

      if (add_post($title, $date, $content)) {
          header('Location: blogmain.php');
          exit;
      } else {
          $error_message = "Could not add post";
      }
  }

?>

<html>
<head>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</head>


<body>
<?php include("inc/navbar.php");?>

<div class='mainContainer'>
  <div class='newPostForm'>
    <h1> New Blog Post</h1>
    <form method="post" action="newPost.php">
      <table>
          <tr>
              <th><label for="title">Title<span class="required">*</span></label></th>
              <td><input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title);?>" /></td>
          </tr>
          <tr>
            <th><label for="date">Date<span class="required">*</span></label></th>
            <td><input type="text" id="date" name="date" value="<?php echo htmlspecialchars($date);?>" placeholder="mm/dd/yyyy"/></td>
          </tr>
          <tr>
            <th><label for="content">Content<span class="required">*</span></label></th>
            <td><textarea type="text" id="content" name="content" value="<?php echo htmlspecialchars($content);?>"></textarea></td>
          </tr>
      </table>
      <input type="submit" value="Submit" />
    </form>
  </div>
</div>

</body>
</html>
