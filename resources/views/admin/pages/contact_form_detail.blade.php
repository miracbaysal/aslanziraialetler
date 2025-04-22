@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <h2 class="tm-block-title text-center">DETAYLAR</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
                        <tr>
                            <th>İsim:</th>
                            <td>{{ $msg->name }}</td>
                        </tr>
                        <tr>
                            <th>E-mail:</th>
                            <td>{{ $msg->email }}</td>
                        </tr>
                        <tr>
                            <th>Telefon:</th>
                            <td>{{ $msg->phone }}</td>
                        </tr>
                        <tr>
                            <th>Konu:</th>
                            <td>{{ $msg->subject }}</td>
                        </tr>
                        <tr>
                            <th>Mesaj:</th>
                            <td>
                                <div id="messagePreview">
                                    {{ Str::limit($msg->message, 200, '...') }}
                                    @if (Str::length($msg->message) > 200)
                                        <a href="javascript:void(0);" id="readMoreBtn" onclick="showFullMessage()">Devamını Gör</a>
                                    @endif
                                </div>
                        
                                <div id="fullMessage" style="display:none; ">
                                    {{ $msg->message }}
                                    <br>
                                    <a href="javascript:void(0);" onclick="hideFullMessage()">Kapat</a>
                                </div>
                            </td>
                        </tr>
                        
                    </table>
                    
                </div>
                <div class="text-center mt-auto">
                    <a href="{{ route('admin.mesajlar') }}" class="btn btn-light">Geri Dön</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

<script>
    function showFullMessage() {
        document.getElementById("messagePreview").style.display = "none";
        document.getElementById("fullMessage").style.display = "block";
    }

    function hideFullMessage() {
        document.getElementById("fullMessage").style.display = "none";
        document.getElementById("messagePreview").style.display = "block";
    }
</script>