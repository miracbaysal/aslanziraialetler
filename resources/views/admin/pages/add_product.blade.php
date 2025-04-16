@extends('admin.app')
@section('content')

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ürün Ekle</h2>
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
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group mb-3">
                    <label>Ürün Adı</label>
                    <input
                      name="productName"
                      type="text"
                      class="form-control"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label>Açıklama</label>
                    <textarea
                      name="productDescription"
                      class="form-control"
                      rows="3"
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label>Ürün Fiyatı</label>
                    <input
                      name="productPrice"
                      class="form-control"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label>Kategori</label>
                    <select
                      class="custom-select tm-select-accounts form-control"
                      name="categoryId"
                    >
                      <option>Kategori Seç</option>
                      
                      @foreach($getCategory as $category)
                          <option value="{{ $category->id }}">{{ $category->categoryName}}</option>
                      @endforeach 

                    </select>
                  </div>
                  {{-- FOTOĞRAF KISMI --}}
                  {{-- <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-dummy mx-auto">
                      <i
                        class="fas fa-cloud-upload-alt tm-upload-icon"
                        onclick="document.getElementById('fileInput').click();"
                      ></i>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                      <input id="fileInput" type="file" name="urun_foto "style="display:none;" />
                      <input
                        type="button"
                        class="btn btn-primary btn-block mx-auto"
                        value="ÜRÜN RESMİ EKLE"
                        onclick="document.getElementById('fileInput').click();"
                      />
                    </div>
                  </div> --}}
                  <div class="form-group mb-3">
                    <input type="file" name="productImage">
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Ürünü Ekle</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection