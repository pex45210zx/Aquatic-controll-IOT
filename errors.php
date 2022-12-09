<?php  if (count($errors) > 0) : ?>
  <div class="error" style="margin: auto;width: 50%;margin-top:10px;text-align:center;">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="margin-top:5px;margin: auto;"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>