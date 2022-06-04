
<?php  if (count($error) > 0) : ?>
  <div style=" width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;">
      <?php foreach ($error as $error) : ?>
       


<p><?php echo $error ?></p>



      <?php endforeach ?>
  </div>
<?php  endif ?>
