<html>
 <head>
  <title>hello php</title>
 </head>
 <body>
   <?php 
    echo '<p>hello world from ' .$_ENV["HOSTNAME"] . '</p>';
    echo '<p>TEXT = ' .$_ENV["TEXT"] . '</p>';
    echo '<p>PASSWORD = ' .$_ENV["PASSWORD"] . '</p>';
?>
 </body>
</html>

