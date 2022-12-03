İlk olarak program, üye giriş işleminde veritabanına bağlanıyor ve girilen değerlerle veritabanındaki değerleri karşılaştırıyor. Sisteme giriş yaptıktan sonra burada hem kayıt listesine hem de yeni kayıt ekleme sayfasına ulaşabiliyoruz.

Üye Giriş Sayfası (login.php)

Burada input kutusundan girilen değerleri form üzerinden aldım ve önceden veritabanına yönetici olarak kaydedilen verilerle karşılaştırdım. Eğer belirlenen şartlar sağlanırsa kullanıcıyı sistem.php dosyasına yönlendirdim.

Şifremi Unuttum(yenisifre.php)

Login formuna yerleştirdiğim “Şifremi Unuttum” linkiyle kulalnıcıyı yenisifre.php sayfasına yönlendirdim. Burada kullanıcıdan aldığım kullanıcı adı, eski şifre ve yeni şifre gibi verileri veritabanıyla karşılaştırdım ve kullanıcının var olup olmadığını sorguladım. Eğer kullanıcı adı ve şifre mevcut veritabanında halihazırda varsa if komutunu devam ettirdim. Eğer yeni belirlenen şifre ile şifre kontrol bölümü uyuşuyorsa veritabanına bağlanarak yöneticinin şifresini, inputtan alınan yeni şifre verisi ile değiştirdim. Şifrenin başarılı bir şekilde gerçekleşmesini, kullanıcının olup olmadığını ve girilen şifre ile kontrol şifresinin aynı olup olmadığı kullanıcıya bildirdi.

Sistem(sistem.php) 

Burada yeni kayıt eklemek ve mevcut kayıtları listelemek için iki ayrı link oluşturdum.

Yeni Kayıt Ekleme(yeni.php)

Burada girilmesini beklediğim veriler için inputlar oluşturdum ve inputtan alan verileri form üzerinden $_POST yöntemiyle kaydettim. Aynı sayfada, form üzerinden gelen verileri veritabanındaki öğrenciler için oluşturduğum tabloya kaydettim. Kayıt ekleme işlemi tamamlandığında bir alert() fonksiyonu oluşturdum ve kullanıcıya bilgi vererek öğrenci kayıtlarının listelendiği sayfaya yönlendirdim.

Öğrencileri Listeleme(liste.php)

Burada ilk olarak, kayıtla eklenen öğrencilerin bilgilerini veritabanından çektim. Öğrencilerin sınıfı geçme durumunu listeleyeceğim tabloya aktarmak için, while döngüsü ile çektiğim öğrenci verilerinden aldığım sınav notlarının ortalamasının aldı. Ardından döngüden gelen öğrencileri tabloda listeledikten sonra if sorgusuyla öğrencinin geçip geçmediğini öğrendim ve buna bağlı olarak tabloya yazdırdım.
