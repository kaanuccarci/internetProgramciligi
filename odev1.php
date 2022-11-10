
<?php


    /*
    uygulama-1
    
    1. kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
    2. construct metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değikenlere atayınız.
    3. sınıf içerisine public iki tane metot yazınız
    4. birinci metotta girilen sayının karesi ekrana yazdır.
    5. ikinci metotta girilen sayıya kadar tüm sayıların karesi alt alta yazdır.


    uygulama-2

    1. kendi belirleyeceğiniz isimde bir sınıf oluştur.
    2. constuct metodunda bir karşılaştırma mesajını ekrana yazdır.
    3. destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdır.
    4. sınıf içerisine public 2 metot yazdır
    5. birinci metoda parametre olarak gönderilen vize ve final notlarını alarak ortalama hesabı yaptırıp geçiğ geçmediğini yazdır
    6. ikinci metotda parametre olarak gelen sayının faktoriyel hesabunu yaptırarak ekrana sonucu yazdır.


    */ 



class Degisken{



public function __construct($degisken1, $degisken2, $degisken3)
{
    echo   "Değişkenler Aktarıldı:" . $degisken1 . $degisken2 . $degisken3;
    
}
 
}

  $deneme = new Degisken("Kaan", "Uçarcı", "216001040");



?>