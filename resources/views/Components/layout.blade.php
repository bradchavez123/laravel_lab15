<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <title>Document</title>
</head>

<body>
  <nav>
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
  </nav>
  <?php echo $slot ?>  
</body>

</html>