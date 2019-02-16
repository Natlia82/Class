<?php
/**
 *
 */
class Classnews
{
  public $title;
  public $author;
  public $date;
  public $description;
  public $fille;

  function __construct($fille)
  {
    $this->fille=$fille;
  }

  public function getnews() {
    $fill = file_get_contents($this->fille);
    $array = json_decode($fill, true);
    foreach ($array as $value) {
      $title = $value[title];
      $author = $value[author];
      $date = $value[date];
      $description = $value[description];
              }
      return array ($title, $author, $date, $description);
  }

}

 ?>

 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <title>news</title>
   <meta charset="utf-8">
   <link type="text/css" href="css/style.css" rel="stylesheet">
 </head>
 <body>
   <?php
   $scandir = scandir(__DIR__, 1);
   foreach ($scandir as $dir) {
             $ra = substr($dir, -4);
             if ($ra === 'JSON' or $ra === 'json') {
               if ($dir != '.' and $dir != '..') {
          $Object=new Classnews ($dir);
          $ogo = $Object -> getnews();
        //  print_r($ogo);
        ?> <section class='section'>
          <h1 class='h1'><?php echo $ogo[0]; ?></h1>
          <span class="span"><?php echo $ogo[1].' '.$ogo[2]; ?></span>
          <p class="p"><?php echo $ogo[3]; ?></p>
        </section> <?php

           }
         }
       }
    ?>
</body>
</html>
