<?php

/**
 * UML diyagramında yer alan Form sınıfını oluşturmanız beklenmekte.
 * 
 * Sınıf içerisinde static olmayan `fields`, `action` ve `method`
 * özellikleri (property) olması gerekiyor.
 * 
 * Sınıf içerisinde static olan ve Form nesnesi döndüren `createPostForm`,
 * `createGetForm` ve `createForm` methodları bulunmalı. Bu metodlar isminde de
 * belirtilen metodlarda Form nesneleri oluşturmalı.
 * 
 * Sınıf içerisinde bir "private" başlatıcı (constructor) bulunmalı. Bu başlatıcı
 * içerisinden `action` ve `method` değerleri alınıp ilgili property'lere değerleri
 * aktarılmalıdır.
 * 
 * Sınıf içerisinde static "olmayan" aşağıdaki metodlar bulunmalıdır.
 *   - `addField` metodu `fields` property dizisine değer eklemelidir.
 *   - `setMethod` metodu `method` propertysinin değerini değiştirmelidir.
 *   - `render` metodu form'un ilgili alanlarını HTML çıktı olarak verip bir buton çıktıya eklemelidir.
 * 
 * Sonuç ekran görüntüsüne `result.png` dosyasından veya `result.html` dosyasından ulaşabilirsiniz.
 * `app.php` çalıştırıldığında `result.html` ile aynı çıktıyı verecek şekilde geliştirme yapmalısınız.
 * 
 * > **Not: İsteyenler `app2.php` ve `form2.php` isminde dosyalar oluşturup sınıfa farklı özellikler kazandırabilir.
 */
class Form
{
    /* sınıf özellikleri tanımlandı*/
    private $fields = array(); 
    private string $method;
    private string $action;
    private function __construct(string $method, string $action){ //private constructor ile method ve action değerleri alınıp sınıfın ilgili değerlerine atandı 
        $this->action = $action;
        $this->method = $method;
    }
    // form nesnei oluşturan ve geriye form nesnesi döndüren statik fonksiyonlar tanımlandı
    public static function createPostForm(string $action):Form
    {
        return new Form($action, "POST");
    }
    public static function createGetForm(string $action):Form
    {
        return new Form($action, "GET");
    }
    public static function createForm(string $action, string $method):Form
    {
        return new Form($action, $method);
    }
    public function addField(string $label, string $name, ?string $defaultValue = null):void{
        // field adında bir dizi oluşturuldu ve anahtar değer şeklinde 
        $field["label"] = $label;
        $field["name"] = $name;
        $field["defaultValue"] = $defaultValue;
        array_push($this->fields, $field); //oluşturulan anahtar değer ikilileri ilgili diziye gönderildi
    }
    public function setMethod(string $method):void{
        //method değişkeninin değeri değiştirildi
        $this->method = $method;
    }
    public function render():void
    {
        //dizinin ilgili değerleri alınarak formun gerekli alanları gösterildi
        echo "<form method = '". $this->method."' action = '". $this->action."'";
        foreach($this->fields as $field){
            echo "<label for='".$field["name"]." '>".$field["label"]."</label>";
            if(isset($field["defaultValue"])){
                echo "<input type='text' name='".$field["name"]." ' value='".$field["defaultValue"]."'/>";
            }
            else{
                echo "<input type='text' name='".$field["name"]. "/>";
            }
        }
        echo "<button type='Submit'>Gönder</button>";
        echo "</form>";
    }
}


