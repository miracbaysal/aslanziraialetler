@extends('admin.app')
@section('content')

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Hakkımda Ekle</h2>
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
                <form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group mb-3">
                    <label>Hakkımda Başlık</label>
                    <input
                      name="aboutTitle"
                      type="text"
                      class="form-control"
                      placeholder="Ana Başlığı Girin."
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label>Hakkımda Açıklama</label>
                    <textarea class="form-control" name="aboutDescription" rows="2" placeholder="Genel Açıklama"></textarea>
                  </div>
                    <div class="form-group mb-3">
                        <label>1. Alt Başlık </label>
                        <input type="text" class="form-control" name="title1" placeholder="1.Alt başlığı girin">
                    </div>

                    <div class="form-group mb-3">
                        <label>1. Açıklama</label>
                        <textarea class="form-control" name="description1" rows="2" placeholder="1.Alt başlık için açıklama"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>2. Alt Başlık </label>
                        <input type="text" class="form-control" name="title2" placeholder="2.Alt başlığı girin">
                    </div>
                    <div class="form-group mb-3">
                        <label>2. Açıklama</label>
                        <textarea class="form-control" name="description2" rows="2" placeholder="2.Alt başlık için açıklama"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>3. Alt Başlık </label>
                        <input type="text" class="form-control" name="title3" placeholder="3.Alt başlığı girin">
                    </div>
                    <div class="form-group mb-3">
                        <label>3. Açıklama</label>
                        <textarea class="form-control" name="description3" rows="2" placeholder="3.Alt başlık için açıklama"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>4. Alt Başlık </label>
                        <input type="text" class="form-control" name="title4" placeholder="4.Alt başlığı girin">
                    </div>
                    <div class="form-group mb-3">
                        <label>4. Açıklama</label>
                        <textarea class="form-control" name="description4" rows="2" placeholder="4.Alt başlık için açıklama"></textarea>
                    </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">EKLE</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection