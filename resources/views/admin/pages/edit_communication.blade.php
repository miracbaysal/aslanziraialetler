@extends('admin.app')
@section('content')

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">İletişim Düzenle</h2>
              </div>
            </div>
            {{-- HATA MESAJLARI --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-6 col-md-12">
                <form action="{{route('admin.iletisim.update', $comm->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="form-group mb-3">
                        <label>Adres</label>
                        <textarea class="form-control" name="address" rows="2" >{{$comm->address}}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>E-mail</label>
                        <textarea class="form-control" name="email" rows="2" >{{$comm->email}}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Telefon </label>
                        <input type="tel" class="form-control" name="phone" maxlength="12" value="{{$comm->phone}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Çalışma Saatleri</label>
                        <textarea class="form-control" name="workingHours" rows="2">{{$comm->workingHours}}</textarea>
                    </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Kaydet</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection