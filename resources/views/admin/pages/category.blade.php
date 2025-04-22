@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title text-center">ÜRÜN KATEGORİLERİ</h2>
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                    <tbody>

                        @foreach ($category as $item)
                        <tr>
                            <td class="tm-product-name" style="width: 70%;">{{$item->categoryName}}</td>
                            <td class="text-right">
                                <a href="{{route('category.edit', $item->id)}}">
                                <i class="fas fa-3x fa-edit"></i>
                                </a>
                            </td>
                            <td class="text-right">
                                <form method="post" action="{{route('category.destroy', $item->id)}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm show_confirm" id="deletebutton">Kategoriyi Sil</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- table container -->
                    <a href="{{route('category.add')}}" class="btn btn-primary btn-block text-uppercase mb-3">Yeni Kategori Ekle</a>
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