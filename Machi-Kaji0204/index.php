<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>MaMa-Kaji TOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="styles/reset.min.css" >
    <link rel="stylesheet" href="styles/style.css" >
    <link rel="stylesheet" href="styles/suraido.css" > 
    <link rel="stylesheet" href="styles/header-10.css" >   
  </head>

  <?php include "SmallHeader.html" ?>
    <body>
      <div class="center">
          <img class="mamano" src="img/topcenter2.png"><br>
      </div>
      <div>
          <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
            <li class="slider-item slider-item04"></li>
            <li class="slider-item slider-item05"></li>
            <li class="slider-item slider-item06"></li>
            <!-- <li class="slider-item slider-item07"></li>
            <li class="slider-item slider-item08"></li>
            <li class="slider-item slider-item09"></li> -->
          </ul>     
      </div>   
      <select class="pull" name="search_area" id="search_area_pc">
        <option value>エリアから探す</option>
        <option value="札幌市中央区">札幌市中央区</option>
        <option value="札幌市北区">札幌市北区</option>
        <option value="札幌市東区">札幌市東区</option>
        <option value="札幌市白石区">札幌市白石区</option>
        <option value="札幌市厚別区">札幌市厚別区</option>
        <option value="札幌市豊平区">札幌市豊平区</option>
        <option value="札幌市清田区">札幌市清田区</option>
        <option value="札幌市南区">札幌市南区</option>
        <option value="札幌市西区">札幌市西区</option>
      </select>

      <footer id="footer">
      <p>Copyright&copy;2022 maternity-support.</p>
    </footer> 
      <!--/slider-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/header-10.js"></script>
    <script src="js/suraido.js"></script>
  </body>
</html>
