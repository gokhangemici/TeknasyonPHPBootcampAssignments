<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

include_once "functions.php"; //we included our source file to leverage its functionalities.
/*
    if id variable is not exist, then create it and set id to 1, 
    if it is set, leave its value as it is. Do same tasks for title and type variables too. 
    I can set any value that I want to the type and title variables.
*/
if(!isset($id)){
     $id = 1; 
}
else{
     $id = $key; 
}
if(!isset($title)){ 
     $title = "BTK Akademi ile Veri Bilimi Derslerine Hoşgeldiniz"; 
} 
else{ 
    $title = $value['title']; 
}
if(!isset($type)){ 
    $type = "urgent"; 
} 
else{ 
    $type = $value['type']; 
}
// I created an array which holds color information according to the value of type variable (urgent => red, warning => yellow, normal => none, blue => blue)
$bgColor = array("urgent" => "#B71C1C", "warning" => "#FFEB3B", "normal" => "#FFFFFF", "blue" => "#0277BD");

echo "<div style = 'background-color:". $bgColor[$type]."; '<br>"; //background color was set and opened a div tag with style property. 
echo getPostDetails($id,$title); //triggered getPostDetails to run. 
// It shows us the content of main post located in getPostDetails(). 
echo "</div>"; // Closed div tag. 
?>



