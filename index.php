<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Application: A</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="box">
      <h1>A</h1>
      <h2><?php echo getenv('HOSTNAME') ?></h2>
      <hr>
      <p>refresh in:</p>
      <h1 id="countdown">3</h1>
    </div>
  </body>
</html>
