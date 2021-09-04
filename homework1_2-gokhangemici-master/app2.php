<?php //başlangıç etiketi

$gender = "male"; // cinsiyet
$weight = 57; // kilo
$height = 178; // boy
$age = 28; // yaş

$guess = 1470; // tahmin

if($gender == "male")
{
    $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.667 * $age); //erkek için bazal metabolizma hesaplaması
}
else if($gender == "female") // çift eşittir ifadesi değişkenin verilen değere eşit olup olmadığını kontrol eder.
{
    $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age); // kadın için bmr hesaplaması
}

echo "BMR: $bmr <br>"; //br etiketi yeni satıra geçmeyi sağlar

if($bmr < $guess)
{
    echo "Tahmin değerinden düşük";
}
else if($bmr > $guess)
{
    echo "Tahmin değerinden büyük";
}
else
{
    echo "Tahmin değerine eşit";
}
?>




