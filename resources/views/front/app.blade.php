<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$ana_sayfa->title ?? 'Oto Galeri - En iyi araçlar'}}</title>
    <meta name="description" content="Doğukan Otomotiv, en iyi kalitede kullanılmış ve yeni araçları en uygun fiyatlarla sunar. Geniş araç seçeneğimiz ve güvenilir hizmetimizle sizleri bekliyoruz.">
    @yield('css')

</head>
<body>


    @include('front.layouts.header')


    @yield('content')


    @include('front.layouts.footer')


</div>
@yield('js')
</body>
</html>
