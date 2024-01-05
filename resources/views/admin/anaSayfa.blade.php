@extends('admin.dashboard')

@section('content')

@if ($ana_sayfa)

@else
    <div class=" text-center">Henüz Bir Ana Sayfaya Sahip Değilsiniz. Formu Doldurarak Sitenizi Güncelleyin :)</div>
@endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach
    @endif
<form method="POST" action="">
    <div class="display-4 text-center">ANA SAYFA ALANI</div>
    @csrf
    <div class="form-group">
        <label for="title">Sayfa Adı</label>
        <input type="text" class="form-control" value="{{ old('title', $ana_sayfa->title ?? '') }}" id="title" name="title" placeholder="Sayfa Adı">
    </div>
    <div class="form-group">
        <label for="sirket_adi">Şirket Adı</label>
        <input type="text" class="form-control" value="{{ old('sirket_adi', $ana_sayfa->sirket_adi ?? '') }}" id="sirket_adi" name="sirket_adi" placeholder="Şirket Adı">
    </div>
    <div class="form-group">
        <label for="baslik">Başlık</label>
        <input type="text" class="form-control" value="{{ old('baslik', $ana_sayfa->baslik ?? '') }}" id="baslik" name="baslik" placeholder="Başlık">
    </div>
    <div class="form-group">
        <label for="alt_baslik">Alt Başlık</label>
        <input type="text" class="form-control" value="{{ old('alt_baslik', $ana_sayfa->alt_baslik ?? '') }}" id="alt_baslik" name="alt_baslik" placeholder="Alt Başlık">
    </div>
    <div class="form-group">
        <label for="contact_yazi">İletişim Yazısı</label>
        <input type="text" class="form-control" value="{{ old('contact_yazi', $ana_sayfa->contact_yazi ?? '') }}" id="contact_yazi" name="contact_yazi" placeholder="İletişim Yazısı">
    </div>
    <div class="form-group">
        <label for="contact_adres">İletişim Adres Bölümü</label>
        <input type="text" class="form-control" value="{{ old('contact_adres', $ana_sayfa->contact_adres ?? '') }}" id="contact_adres" name="contact_adres" placeholder="İletişim Adres Bölümü">
    </div>
    <div class="form-group">
        <label for="contact_iframe">İletişim iframe</label>
        <input type="text" class="form-control" value="{{ old('contact_iframe', $ana_sayfa->contact_iframe ?? '') }}" id="contact_iframe" name="contact_iframe" placeholder="İletişim Yazısı">
    </div>

      <button type="submit" class="btn btn-primary">Güncelle</button>



  </form>

  <div class="mt-3 alert alert-primary">
    <strong> İletişim iframe bölümü için Google'de Şirketinizin ekli olması gerek. Eğer yoksa yakınınızdaki bir yerin adresini de kullanabilirsiniz.iframe alanını Kullanmak için öncelikle Google Haritalar'da seçili şirkete, adrese tıklamanız gerek. Ardından paylaş kısmına tıklayıp "Harita Yerleştirme" bölgesinde bulunan bağlantıyı kopyalayıp "İletişim iframe" alanına yapıştırın.</strong>
</div>


@endsection
