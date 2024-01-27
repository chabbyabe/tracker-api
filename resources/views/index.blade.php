<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Website</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
  .header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    opacity: 0;
    transform: translateY(-50px);
    transition: opacity 0.5s, transform 0.5s;
  }
  .header.show {
    opacity: 1;
    transform: translateY(0);
  }
  .content {
    text-align: center;
    margin-top: 50px;
  }
  .content h2 {
    font-size: 36px;
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s, transform 0.5s;
  }
  .content h2.show {
    opacity: 1;
    transform: translateY(0);
  }
</style>
</head>
<body>
  <header class="header">
    <h1>Welcome to Abe website</h1>
  </header>
  <div class="content">
    <h2>Income and Expenses tracker 333</h2>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Fade and slide in header
      setTimeout(function() {
        document.querySelector('.header').classList.add('show');
      }, 500);
      // Fade in content
      setTimeout(function() {
        document.querySelector('.content h2').classList.add('show');
      }, 1000);
    });
  </script>
</body>
</html>