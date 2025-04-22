@extends('admin.app')
@section('content')
@php
  use Illuminate\Support\Str;
@endphp  

    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <h2 class="tm-block-title text-center">ÜRÜNLER</h2>
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">ÜRÜN RESMİ</th>
                    <th scope="col">ÜRÜN ADI</th>
                    <th scope="col">FİYATI</th>
                    <th scope="col">AÇIKLAMA</th>
                    <th scope="col">KATEGORİ</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($product as $item)
                      
                  
                  <tr>
                    <td><img src="{{ ('../dist/img/products/'.$item->productImage) }}" alt="ÜRÜN RESMİ" height="100" width="150"></td>
                    <td class="tm-product-name">{{ Str::limit($item->productName, 20, '...') }}</td>
                    <td>{{ $item->productPrice }}</td>
                    <td>{{ Str::limit($item->productDescription, 20, '...') }}</td>
                    <td>{{ Str::limit($item->category ? $item->category->categoryName : 'Uncategorized', 20, '...') }}</td>
                    <td>
                      <a href="{{route('product.edit', $item->id)}}">
                        <i class="fas fa-3x fa-edit"></i>
                      </a>
                    </td>
                    <td class="text-right">
                      <form method="post" action="{{route('product.destroy', $item->id)}}">
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
              <a href="{{route('product.add')}}" class="btn btn-primary btn-block text-uppercase mb-3">Yeni Ürün Ekle</a>
            </div>
            <div class="text-center mt-auto">
              <a href="{{ route('admin') }}" class="btn btn-light">Geri Dön</a>
          </div>
            
          </div>
        </div>

      </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

     $('.show_confirm').click(function(event) {

          var form =  $(this).closest("form");

          var name = $(this).data("name");

          event.preventDefault();

          swal({

              title: `Bu Ürünü Silmek İstediğinizden Emin Misiniz?`,

              text: "Eğer silerseniz sonsuza dek kaybolacak!",

              icon: "warning",

              buttons: ['Vazgeç', 'Sil'],

              dangerMode: true,

          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

  

</script>

@endsection


