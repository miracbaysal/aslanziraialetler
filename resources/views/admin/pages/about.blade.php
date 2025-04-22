@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <h2 class="tm-block-title text-center">HAKKIMDA</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">ANA BAŞLIK</th>
                  <th scope="col">Hakkımızda</th>
                  <th scope="col">1. Başlık</th>
                  <th scope="col">1. Açıklama</th>
                  <th scope="col">2. Başlık</th>
                  <th scope="col">2. Açıklama</th>
                  <th scope="col">3. Başlık</th>
                  <th scope="col">3. Açıklama</th>
                  <th scope="col">4. Başlık</th>
                  <th scope="col">4. Açıklama</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($about as $item)
                    
                    
                
                <tr>
                  <td>{{ Str::limit($item->aboutTitle, 20, '...') }}</td>
                  <td>{{ Str::limit($item->aboutDescription, 20, '...') }}</td>
                  <td>{{ $item->title1 }}</td>
                  <td>{{ Str::limit($item->description1, 20, '...') }}</td>
                  <td>{{ $item->title2 }}</td>
                  <td>{{ Str::limit($item->description2, 20, '...') }}</td>
                  <td>{{ $item->title3 }}</td>
                  <td>{{ Str::limit($item->description3, 20, '...') }}</td>
                  <td>{{ $item->title4 }}</td>
                  <td>{{ Str::limit($item->description4, 20, '...') }}</td>
                  <td>
                    <a href="{{route('admin.about.edit', $item->id)}}">
                      <i class="fas fa-3x fa-edit"></i>
                    </a>
                  </td>
                  <td class="text-right">
                    <form method="post" action="{{route('admin.about.destroy', $item->id)}}">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm show_confirm" id="deletebutton">Ürün Sil</button>
                    </form>
                    
                  </td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="mt-auto">
            <a href="{{route('admin.about.add')}}" class="btn btn-primary btn-block text-uppercase mb-3">Hakkımda Ekle</a>
          </div>
          <div class="text-center mt-auto">
            <a href="{{ route('admin') }}" class="btn btn-light">Geri Dön</a>
        </div>
        </div>
      </div>

    </div>
  </div>
@endsection