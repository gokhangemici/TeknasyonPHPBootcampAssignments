<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

include_once "functions.php"; //included this file only one time to use its functionalities

$randomPostCount = getRandomPostCount(10, 20); //a random value returned by the function was assigned to our variable
$allRandomPosts = getLatestPosts($randomPostCount); //we used this variable to get random number of posts
// as a result we got an array which holds title, type and id attributes of the posts.

foreach($allRandomPosts as $key => $value){ 
    echo $key."---> Title: ".$value["title"]." | Type: ".$value["type"]."<br>";  //showed necessary details for every post
    include "post.php";  //this code script is included more than once into posts.php file
}
?>

