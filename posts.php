<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolPress</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <?php

        //prendo il parametro get nel url
        $slug = $_GET['tag'];
        $notSlug = 'Parola non trovata';
      ?>
      <header>
        <h1><i>BoolPress</i></h1>
      </header>
      <main>
        <div class="container">

        <?php  //ciclo sull array posts
          foreach($posts as $post){
        ?>

        <?php
            //controllo se slug è contenuto nell array
            if(in_array($slug, $post['tags'])){
          ?>
            <div class="item">

              <a href="post-detail.php?slug=<?php echo $post['slug']; ?>"><h2><?php echo $post['title']; ?></h2></a>
              <span><?php echo $post['published_at'];?></span>
              <p><?php echo substr($post['content'], 0, 150);?></p>
              <span>tags--<?php echo implode(',', $post['tags']);?></span>

            </div>

          <?php
              }else if($slug === false || $slug == null){
           ?>
              <div class="item">

                <a href="post-detail.php?slug=<?php echo $post['slug']; ?>"><h2><?php echo $post['title']; ?></h2></a>
                <span><?php echo $post['published_at'];?></span>
                <p><?php echo substr($post['content'], 0, 150);?></p>
                <span>tags--<?php echo implode(',', $post['tags']);?></span>

              </div>
              
            <?php }else{
              echo $notSlug;
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

    <script src="main.js"></script>
  </body>
</html>
