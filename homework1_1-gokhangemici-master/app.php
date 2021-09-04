<?php // dosyamızın php diline ait olduğunu belirtmek için kullanılan açılış etiketi

$age = 32; // php de değişkenler $ işareti ile tanımlanır

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
  



    if($age >= 0 and $age <= 14) // and operatörü her iki koşul doğruysa çalışır. Diğer durumlarda çalışmaz.
    {
        echo "Çocuk"; // echo ekrana bir ifade yazdırmak için kullanılır. echo yerine print de kullanılabilir.
    }
    else if($age >= 15 and $age <= 24)
    {
        echo "Genç"; // tüm ifadeler noktali virgül ile sonlandırılmak zorundadır.
    }
    else if($age >= 25 and $age <= 64) // age değişkeni 32 değerine sahip olduğu için bu koşul içerisindeki kod bloğu çalışır ve ekrana yetişkin değerini yazar.
    {
        echo "Yetişkin";
    }
    else // yukardaki üç koşulun sağlanmadığı tüm durumlarda bu kod bloğu çalışır.
    {
        echo "Yaşlı";
    }





