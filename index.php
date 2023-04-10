<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
        <li><span><a href="index.php">logo</a></span></li> 
            <li><a href="products.php">مجصولات</a></li>
          <li><a href="">دسته بندی</a></li>
          <li class="dropdown">
            <a class="dropbtn">تماس</a>
            <div class="dropdown-content">
              <a href="#">Email</a>
              <a href="#">Instagram</a>
              <a href="#">Whatsapp</a>
            </div>
          </li>
          
             
</ul>
      </nav>
      <div style="width:1px;height:40px"></div>

      <?php
     $json_file ="news.json";
      $json_data = file_get_contents($json_file);
      $data = json_decode($json_data, true);
      foreach($data as $item){
        echo '<div class="item" onclick="window.location.href=\''.$item["link"].'\'" >';
        echo '<h1>'.$item['category'].'</h1>';
        echo '<p>'. $item["text"].'</p>';
        echo '<h3>'.$item["date"].'</h3>';
        echo '</div>';

      }
    ?>
</body>
</html>