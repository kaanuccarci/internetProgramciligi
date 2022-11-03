<?php

class Sinif{

/* 
Yapıcı metotlara parametre gönderilebilir.
Yapıcı metotlara gönderilecek parametrelere varsayılan değer atanabilir.
Değer gelmediğinde varsayılan değer aktif olur.
Geldiğinde ise gelen değer aktif olur
 */
    public function __construct($hostname, $username, $pass, $dbName){
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    public $isim = "Kaan";
    public $soyisim = "Uçarcı";

    public function write(){
        $metin = "write fonksyonu çalıştı <br>";
        return $metin;
        
    }

    public function __destruct(){
        echo "yıkıcı metot çalıştı <br>";
    }



}

$nesne = new Sinif("kaanucarci.com", "kaanucarci", "123", "ku_db");

    echo gettype($nesne);
    echo "<br>";

    print_r($nesne);
    echo "<br>";

    echo $nesne->write(); /*nesne içerisindeki değişkene erişim*/



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




        










?>