<?php

if ($_FILES["dosya"]) {

  $yol = "dosyalar";

  $yuklemeYeri = __DIR__ . DIRECTORY_SEPARATOR . $yol . DIRECTORY_SEPARATOR . $_FILES["dosya"]["name"];

  if ( file_exists($yuklemeYeri) ) {  # Dosya kontrolü

      echo "Dosya daha önceden yüklenmiş";

  } else {

      $sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"], $yuklemeYeri);

      echo $sonuc ? "Dosya başarıyla yüklendi linki: /dosyalar/dosyaadinigirin.png : "Hata oluştu";

  }

} else {

  echo "Lütfen bir dosya seçin";

}

?>