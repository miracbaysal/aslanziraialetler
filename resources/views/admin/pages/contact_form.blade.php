@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <h2 class="tm-block-title text-center">MESAJLAR</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">İsim</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Telefon Numarası</th>
                  <th scope="col">Konu</th>
                  <th scope="col">Mesaj</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($msg as $item)
                    
                    
                
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->subject }}</td>
                  <td>{{ Str::limit($item->message, 20, '...') }}</td>
                  <td class="text-right">
                    <a href="{{route('admin.mesajlar.show', $item->id)}}">
                      <button class="btn btn-primary">Detay</button>
                    </a>
                  </td>
                  
                  <td class="text-right">
                    <form method="post" action="{{route('admin.mesajlar.destroy', $item->id)}}">
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

             title: `Bu Mesajı Silmek İstediğinizden Emin Misiniz?`,

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