*Araç Galerisi Otomasyon Projesi*

Bu proje, Laravel ile geliştirilmiş bir araç galerisi otomasyon sistemidir.

***Kurulum***

1. Repoyu klonlayın: git clone https://github.com/DogukanTuncay/laravel-auto-gallery.git
2. Gerekli paketleri yüklemek için composer install komutunu çalıştırın.
3. .env.example dosyasını .env olarak kopyalayın ve veritabanı bağlantı ayarlarınızı girin.
4. php artisan migrate komutunu kullanarak veritabanı tablolarını oluşturun.
5. php artisan serve komutu ile yerel sunucunuzu başlatın.
***Kullanım***
+ Yönetici paneline giriş yapın.
+ Yönetici paneline giriş yapmak için bir register sayfası mevcut değil, phpmyadmin üzerinden bir user ekleyin. Şifre için bcrypt generator ile 12 roundluk istediğiniz bir texti şifre olarak belirleyebilirsiniz.
+ Araçları listeleyin, ekleyin, düzenleyin veya silebilirsiniz.
+ Müşteri taleplerini takip edin ve satışları yönetin.
+ Raporlama özelliklerini kullanarak verileri analiz edin.
***Katkıda Bulunma***
* Önerileriniz veya hata bildirimleriniz için issue açabilirsiniz.
* Proje geliştirmesine katılmak için pull request gönderebilirsiniz.
**Lisans**
MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasına göz atabilirsiniz.
---
Bu daha öz bir README dosyası formatıdır. Projeye özgü kurulum adımları, kullanım yönergeleri ve katkıda bulunma gibi bilgileri içerir. README dosyası, projenin temel özelliklerini ve nasıl kullanılacağını hızlıca anlatır.
