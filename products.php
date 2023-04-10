<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
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
<body>
    <?php
    $json_file = "products.json";
    $json_data = file_get_contents($json_file);
    $data = json_decode($json_data, true);
    foreach($data as $item){
        echo'<article class="card">';
        echo'<div class="productimg">';
        echo' <img class="productimg" src="'.$item['imageone'].'">';
        echo'</div>';
        echo'<div class="card_content">';
        echo'<span class="card_title">'.$item["name"].'</span>';
        echo'    <span class="card_subtitle">:قیمت</span>';
        echo'    <span class="card_subtitle">'.$item["price"].'</span>';
        echo'</div>';
        echo'</article>';
        echo'</div>';
    }
    
    ?>
</body>
</html>