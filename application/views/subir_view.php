<!DOCTYPE html>
<html>
   <head>
   </head>
<body>
   <form action="<?php echo site_url()?>/subir/guardar" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
      <input type="file"name="file">
      <input type="submit">
   </form>
</body>
<html>