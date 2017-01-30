<?php
  include("inc/functions.php");
  $catalog = full_blog_array();
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
  <div class='mainContainer'>
<?php include("inc/navbar.php");?>


<!-- Blog Section -->
<div class='container'>
  <h1 class = 'display-1'>Blog</h1>
  <?php
    foreach ($catalog as $article) {
        echo "<div class='article'><p class='articleSubject'>"
        . $article['subject'] . "</p><p class='articleContent'>"
        . $article['content'] . "</p></div>";
    };

  ?>

<div class = 'article'></div>

</div>

</div>



</body>
</html>
