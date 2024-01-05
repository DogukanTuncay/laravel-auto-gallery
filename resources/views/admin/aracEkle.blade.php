@extends('admin.dashboard')

@section('content')

<h2 class="mb-4 text-center">Araç Ekle</h2>
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
@endforeach

@endif

<form action="" method="POST" enctype="multipart/form-data">
    @csrf <!-- Laravel'de CSRF koruması için kullanılacak. -->

    <div class="form-group">
        <label for="marka">Marka:</label>
        <input type="text" class="form-control" value="{{old('marka')}}" id="marka" name="marka" required>
    </div>

    <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" class="form-control" id="model" value="{{old('model')}}" name="model" required>
    </div>

    <div class="form-group">
        <label for="yil">Yıl:</label>
        <input type="number" class="form-control" id="yil" name="yil" value="{{old('yil')}}" required>
    </div>

    <div class="form-group">
        <label for="yakitTuru">Yakıt Türü:</label>
        <select class="form-control" id="yakitTuru" name="yakitTuru" required>
            <option  {{ old('yakitTuru') == 'Benzin' ? "selected" : "" }} value="Benzin">Benzin</option>
            <option {{ old('yakitTuru') == 'Dizel' ? "selected" : "" }} value="Dizel">Dizel</option>
            <option {{ old('yakitTuru') == 'LPG' ? "selected" : "" }} value="LPG">LPG</option>
            <option {{ old('yakitTuru') == 'LPG & Benzin' ? "selected" : "" }} value="LPG & Benzin">LPG & Benzin</option>
            <!-- Diğer seçenekler eklenebilir -->
        </select>
    </div>

    <div class="form-group">
        <label for="vitesTuru">Vites Türü:</label>
        <select class="form-control" id="vitesTuru" name="vitesTuru" required>
            <option  {{ old('vitesTuru') == 'Manuel' ? "selected" : "" }} value="Manuel">Manuel</option>
            <option {{ old('vitesTuru') == 'Yarı Otomatik' ? "selected" : "" }} value="Yarı Otomatik">Yarı Otomatik</option>
            <option {{ old('vitesTuru') == 'Otomatik' ? "selected" : "" }} value="Otomatik">Otomatik</option>
            <!-- Diğer seçenekler eklenebilir -->
        </select>
    </div>

    <div class="form-group">
        <label for="motorHacmi">Motor Hacmi:</label>
        <input type="number" class="form-control" value="{{old('motorHacmi')}}" id="motorHacmi" name="motorHacmi" required>
    </div>

    <div class="form-group">
        <label for="motorGucu">Motor Gücü(HP):</label>
        <input type="number" value="{{old('motorGucu')}}" class="form-control" id="motorGucu" name="motorGucu" required>
    </div>

    <div class="form-group">
        <label for="kilometre">Kilometre:</label>
        <input type="number" value="{{old('kilometre')}}" class="form-control" id="kilometre" name="kilometre" required>
    </div>

    <div class="form-group">
        <label for="fiyat">Fiyat:</label>
        <input type="number" step="0.01" class="form-control" value="{{old('fiyat')}}" id="fiyat" name="fiyat" required>
    </div>

    <div class="form-group">
        <label for="aciklama">Açıklama:</label>
        <textarea class="form-control" id="aciklama" name="aciklama" rows="4">{{old('aciklama')}}</textarea>
    </div>

    <!-- Özellikleri eklemek için ayrı bir bölüm eklemeniz gerekecektir. -->
    <!-- Özellikler Alanları -->
    <div class="form-group">
    <label for="renk">Renk:</label>
        <input type="text" class="form-control" value="{{old('renk')}}" id="renk" name="renk">
    </div>


    <div class="form-group">
        <label for="kapiSayisi">Kapı Sayısı:</label>
        <input type="number" class="form-control" value="{{old('kapiSayisi')}}" id="kapiSayisi" name="kapiSayisi">
    </div>

    <div class="form-group">
        <label for="govdeTipi">Gövde Tipi:</label>
        <select class="form-control" id="govdeTipi"  name="govdeTipi" required>
            <option {{ old('govdeTipi') == 'Sedan' ? "selected" : "" }} value="Sedan">Sedan</option>
            <option {{ old('govdeTipi') == 'Hatchback' ? "selected" : "" }} value="Hatchback">Hatchback</option>
            <option {{ old('govdeTipi') == 'Station Wagon' ? "selected" : "" }} value="Station Wagon">Station Wagon</option>
            <option {{ old('govdeTipi') == 'SUV' ? "selected" : "" }} value="SUV">SUV</option>
            <option {{ old('govdeTipi') == 'Coupe' ? "selected" : "" }} value="Coupe">Coupe</option>
            <option {{ old('govdeTipi') == 'Convertible' ? "selected" : "" }} value="Convertible">Convertible (Cabrio)</option>
            <!-- Diğer gövde tipleri için gerekli seçenekler eklenebilir -->
        </select>
    </div>

    <div class="form-group">
        <label for="koltukSayisi">Koltuk Sayısı:</label>
        <input type="number" class="form-control" id="koltukSayisi" value="{{old('koltukSayisi')}}" name="koltukSayisi">
    </div>

    <div class="form-group">
        <label for="yakitTuketimi">Yakıt Tüketimi:</label>
        <input type="number" step="0.01" class="form-control" value="{{old('yakitTuketimi')}}" id="yakitTuketimi" name="yakitTuketimi">
    </div>

    <div class="form-group">
        <label for="cekisSistemi">Çekiş Sistemi:</label>
        <select class="form-control" id="cekisSistemi" name="cekisSistemi" required>
            <option {{ old('cekisSistemi') == 'fwd' ? "selected" : "" }} value="fwd">Ön Tekerlek Çekişi (FWD)</option>
            <option {{ old('cekisSistemi') == 'rwd' ? "selected" : "" }} value="rwd">Arkadan İtişli (RWD)</option>
            <option {{ old('cekisSistemi') == '4wd' ? "selected" : "" }} value="4wd">Dört Tekerlek Çekişi (4WD)</option>
            <option {{ old('cekisSistemi') == 'awd' ? "selected" : "" }} value="awd">Sürekli Dört Tekerlek Çekişi (AWD)</option>
            <!-- Diğer çekiş sistemi seçenekleri eklenebilir -->
        </select>
    </div>


    <!-- Resimler Alanı -->
    <div class="form-group">
        <label for="resimler">Resimler:</label><br>
        <input type="file" id="resimler" name="resimler[]" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Ekle</button>
</form>

@endsection
