@extends('admin.app')
@section('content')

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Kategori Ekle</h2>
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
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group mb-3">
                    <label>Kategori Adı</label>
                    <input
                      name="categoryName"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Kategori Ekle</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection