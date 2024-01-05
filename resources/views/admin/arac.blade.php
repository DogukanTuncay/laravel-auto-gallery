@extends('admin.dashboard')

@section('content')
<h2 class="mb-4 text-center">Araç Bilgileri</h2>
<div class="row d-flex flex-column-center">
    <div class="col text-center"><a href="{{route('admin.arac.ekle')}}" class="btn btn-primary">ARAÇ EKLE</a></div>
    <div class="col text-center"><a href="{{route('admin.arac.ekle')}}" class="btn btn-warning">ARAÇ GÜNCELLE</a></div>
</div>

    <div class=" mt-5">
        @if ($araclar->isEmpty())
        <div class="card">
            <div class="card-header">
              Araçlar
            </div>

            <div class="card-body">
              <h5 class="card-title">Henüz Ekli Araç Yok</h5>
              <p class="card-text">Araç eklemek için yukarıdaki     <span class=" text-center"><a href="{{route('admin.arac.ekle')}}" class="btn btn-primary">ARAÇ EKLE</a></span>
                butonuna basın.</p>
            </div>
          </div>
        @else
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Marka</th>
                        <th scope="col">Model</th>
                        <th scope="col">Yıl</th>
                        <th class="d-none d-sm-table-cell" scope="col">Kilometre</th>
                        <th class="d-none d-sm-table-cell" scope="col">Fiyat</th>
                        <th scope="col">Araç Sil</th>
                        <th scope="col">Araç Gider Ekle</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($araclar as $arac)
                        <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{$arac->marka}}</td>
                        <td>{{$arac->model}}</td>
                        <td>{{$arac->yil}}</td>
                        <td class="d-none d-sm-table-cell">@convert($arac->kilometre) KM</td>
                        <td class="d-none d-sm-table-cell">@convert($arac->fiyat) TL</td>
                        <td>
                            <span class="btn btn-danger" data-toggle="modal" data-arac-marka="{{ $arac->marka }}"data-arac-model={{$arac->model}}  data-arac-id="{{ $arac->id }}"  data-target="#aracSil">ARAÇ SİL</span>
                        </td>
                        <td>
                            <span class="btn btn-danger" data-toggle="modal" data-arac-marka="{{ $arac->marka }}           "data-arac-model={{$arac->model}}  data-arac-id="{{ $arac->id }}"  data-target="#aracGiderEkle">ARAÇ GİDER EKLE</span>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
        @endif


    </div>

  <!-- Modal -->
  <div class="modal fade" id="aracSil" tabindex="-1" role="dialog" aria-labelledby="aracSilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aracSilLabel">ARAÇ SİL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Seçilen araç:</p>
            <p><strong id="aracMarkaSil"></strong> <strong id="aracModelSil"></strong> Bu aracı silmek istediğinize emin misiniz?</p>


            <form id="silForm" action="{{ route('admin.arac.sil') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="arac_id" id="aracIdInputSil">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Vazgeç</button>
          <button type="button" class="btn btn-danger" id="silButton">Sil</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="aracGiderEkle" tabindex="-1" role="dialog" aria-labelledby="aracGiderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aracGiderLabel">ARAÇ SİL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Seçilen araç:</p>
            <p><strong id="aracMarkaGider"></strong> <strong id="aracModelGİder"></strong> </p>
            <p>Lütfen Gider Miktarını Giriniz?</p>

            <form id="giderForm" action="{{ route('admin.arac.giderEkle') }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="arac_id">Gider Miktarı</label>
                <input type="hidden" name="arac_id" id="aracIdInputGider">
                <input type="number" name="arac_gider" placeholder="15000" id="GiderMiktarı">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Vazgeç</button>
          <button type="button" class="btn btn-danger" id="giderButton">Gider Ekle</button>
        </div>
      </div>
    </div>
  </div>
@endsection
