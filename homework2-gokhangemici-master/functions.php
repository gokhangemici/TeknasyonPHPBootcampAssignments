<?php

/**
 * functions.php
 *
 * Direk olarak çalıştırılmasını istemediğimiz betik dosyasıdır.
 * Bu dosya başka bir yerde dahil edilmediyse çalıştırılmasını engellemek istiyoruz.
 * Örneğin, `http://localhost/functions.php` adresiyle ziyaret etmek istediğimizde,
 * bir hata mesajı verip betiğin sonlanmasını istiyoruz.
 *
 * > Betiği herhangi bir yerde sonlandırmak için `exit`
 * > (https://www.php.net/manual/en/function.exit.php) veya `die` kullanabilirsiniz.
 *
 * Bu dosyada tanımlanan fonksiyonları diğer iki betik dosyasında kullanmanızı
 * istiyoruz. Ek olarak, `getRandomPostCount` isminde bir fonksiyon tanımlamanızı
 * bekliyoruz. Bununla ilgili detaylı bilgi diğer betiklerde yer alıyor.
 */
// $_SERVER['PHP_SELF'] -->  Returns the filename of the currently executing script
// basename(__FILE__) -->  returns the basename of the file whose path has been given as a parameter by the user

if(basename($_SERVER['PHP_SELF']) == basename(__FILE__)){ 
    
    exit("Direct access is not allowed to!"); // we printed out a warning message that this script code could not be executed directly.
}

function getLatestPosts($count = 5)
{
    $posts = [];
    $postTypes = ["urgent", "warning", "normal", "blue"]; //added one post type whose name is blue

    for($i=1; $i<=$count; $i++) {
        do {
            $id = rand(1, 1000);
        } while (array_key_exists($id, $posts));

        $type = $postTypes[rand(0, count($postTypes)-1)];

        $posts[$id] = [
            "title" => "Yazı " . $i,
            "type" => $type
        ];
    }

    return $posts;
}
function getPostDetails($id, $title){
    echo "<h1>".$title." (#".$id.")</h1>";
    echo<<< EOT
    <p>
    <strong>Yapay zeka</strong>, karşılaşılan durumlar/gözlemler/olaylar karşısında insanlara benzer hatta daha rasyonel tepkiler/çıktılar/kararlar verebilen bilgi işleme mekanizmasıdır.
    Bilgi işlemeyi gerçekleştirebilecek işlemci ve hafıza taşıyan, bilgi işlemeye girdi sağlayabilecek kanalları (sensör, kamera, mikrofon vs.) olan her cihaz yapay zeka sahibi olabilir.
    </p>
    <h2>Makineler Neyi Öğrenir?</h2> 
    <p> Herşeyden önce ilk bilmemiz gereken nokta şu: 
    makineler ancak sayılarla ifade edilen kavramları anlayabilirler. 
    Bahsettiğimiz kavramlar soyut da olsa, somut da olsa; ancak sayılara dökülebildiği anda makinelerin anlayabileceği bir hale geliyor. 
    Kafanız karışmasın. Diyebilirsiniz ki “Google Çeviri yazılı cümleleri bir dilden bir başkasına çeviriyor, 
    <em>Amazon Alexa</em> konuşmamızı anlayıp bize yardımcı olabiliyor. Sonuçta ortada sayı falan yok.” 
    İşin aslı, Google Translate’i ya da Amazon Alexa’yı kullanırken hissetmesek de arka planda kelimeler ve sesler sayılara çevriliyor. 
    Kelimeleri ve sesleri sayılara nasıl döktüğümüz konusuna burada girmeyeceğiz. 
    Fakat bilin ki bunun birçok yolu var ve bu konu aktif bir araştırma konusu olmaya devam ediyor.
    </p>
    EOT;
}


// Aşağıya fonksiyonu tanımlayabilirsiniz.

//this function generates a random number between two given numbers and returns it
function getRandomPostCount($min, $max){ 
    $randomNumber = rand($min, $max);
    return $random_number;
}
?>
