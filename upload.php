<?php 
      $image = $_FILES;
      $NewImageName = rand(4,10000)."-". $image['image']['name'];
      $destination = realpath('../images/testing').'/';
      move_uploaded_file($image['image']['tmp_name'], $destination.$NewImageName);
      $image = imagecreatefromjpeg($destination.$NewImageName);
      $filename = $destination.$NewImageName;

      $thumb_width = 200;
      $thumb_height = 150;

      $width = imagesx($image);
      $height = imagesy($image);

      $original_aspect = $width / $height;
      $thumb_aspect = $thumb_width / $thumb_height;

      if ( $original_aspect >= $thumb_aspect )
      {
         // If image is wider than thumbnail (in aspect ratio sense)
         $new_height = $thumb_height;
         $new_width = $width / ($height / $thumb_height);
      }
      else
      {
         // If the thumbnail is wider than the image
         $new_width = $thumb_width;
         $new_height = $height / ($width / $thumb_width);
      }

      $thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

      // Resize and crop
      imagecopyresampled($thumb,
                         $image,
                         0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                         0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                         0, 0,
                         $new_width, $new_height,
                         $width, $height);
      imagejpeg($thumb, $filename, 80);
      echo "cropped"; die;
      ?>
      <!DOCTYPE html>
  <html>
  <body>

  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
 </form>

 </body>
 </html>