<?php include 'data.php';?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolPress</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <h1><i>BoolPress</i></h1>
    </header>

      <?php
        $url = $_GET;
        //ciclo sul parametro GET
        foreach($url as $word){
          $check = $word;
        }
      ?>
      <main>

        <div class="container">

          <?php foreach($posts as $item){ ?>
            <?php if($item['slug'] === $word){?>
              <div class="container_img">
                <img src="<?php echo $item['image']; ?>" />
              </div>
            <h2><?php echo $item['title']; ?></h2>
            <p><?php echo $item['content']; ?></p>

            <?php
                }
              } ?>

        </div>

      </main>
      <footer>
        <div class="box">
          <h3><i>by -</i></h3>
          <a href="https://www.boolean.careers">boolean.carriers</a>
        </div>

      </footer>


  </body>
</html>
