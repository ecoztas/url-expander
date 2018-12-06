# url-expander

### Açıklama:
Çeşitli servisler tarafından kısaltılan URL'i asıl formuna çevirme işlemini yerine getiren metot barınmaktadır.

Daha önce blogumda yazmış olduğum kısaltılmış URL'in asıl formuna çevirilmesiyle ilgili makaleyi [buradan](http://emrecanoztas.com/kisaltilmis-urli-eski-haline-cevirme/) okuyabilirsiniz.

### Gereksinimler:
- cURL

### Kullanımı:
url-expander, cURL ile işlem yapmaktadır.

`method.expander.php` dosyasını projenize dahil ettikten sonra;
```
expand($url);
```
metodunu çağırmanız yeterlidir. Dönen değer string tipindedir.

Canlı bir örnek olarak;
```
expand('https://tinyurl.com/ycrtdwxa');
```
verebiliriz. Dönen değer; `http://emrecanoztas.com/` şeklinde olacaktır.


**NOT:** Daha önce herhangi bir servis üzerinden kısaltılmış URL, başka bir servis üzerinden yeniden kısaltılırsa; `expand($url)` metodu size;
daha bir önceki kısaltılmış URL formunu verir. Dolayısıyla; sağlıklı bir sonuç elde etmek için dönen değerle birlikte en az 2 defa
çalıştırılmalıdır.
