@extends('admin.app')
@section('content')

<style>
    .click{cursor:pointer}

</style>
<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-12 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="tm-bg-primary-dark tm-block" style="width: 70%;">
                <h2 class="tm-block-title text-center">BÖLÜMLER</h2>
                <div class="d-flex justify-content-center align-items-center" style=" text-align: center;">
                    <table class="table table-hover tm-table-small tm-product-table w-hover" style="width: 40%; margin: 0 auto;">
                        <tbody>

                            <tr class="click" data-href="{{route('admin.products')}}">
                                <td class="section-name" style="width: 70%;">ÜRÜNLER</td>
                            </tr>
                            <tr class="click" data-href="{{route('admin.category')}}">
                                <td class="section-name" style="width: 70%;">KATEGORİLER</td>
                            </tr>
                            <tr class="click" data-href="{{route('admin.about')}}">
                                <td class="section-name" style="width: 70%;">HAKKIMIZDA</td>
                            </tr>
                            <tr class="click" data-href="{{route('admin.iletisim')}}">
                                <td class="section-name" style="width: 70%;">İLETİŞİM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div> 
<script>
    $('.click').click(function(){
     window.location = $(this).data('href');
     //use window.open if you want a link to open in a new window
});
</script>
@endsection