@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <h2 class="tm-block-title text-center">İLETİŞİM</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">Adres</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Telefon Numarası</th>
                  <th scope="col">Çalışma Saatleri</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comm as $item)
                    
                    
                
                <tr>
                  <td>{{ Str::limit($item->address, 20, '...') }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->workingHours }}</td>
                  <td>
                    <a href="{{route('admin.iletisim.edit', $item->id)}}">
                      <i class="fas fa-3x fa-edit"></i>
                    </a>
                  </td>
                  <td class="text-right">
                    <form method="post" action="{{route('admin.iletisim.destroy', $item->id)}}">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm show_confirm" id="deletebutton">Sil</button>
                    </form>
                    
                  </td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="mt-auto">
            <a href="{{route('admin.iletisim.add')}}" class="btn btn-primary btn-block text-uppercase mb-3">İletişim Ekle</a>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection