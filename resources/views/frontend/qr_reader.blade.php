@extends('frontend.f_layouts.main')

@section('content')

{{-- warning kalau nda ad js nda bs jalan --}}

<noscript>
    <div class="row-element-set error_message">
        Web browser harus menjalankan JavaScript agar website bisa jalan dengan benar
    </div>
</noscript>
    <div class="row-element-set error_message" id="secure-connection-message" style="display: none;" hidden >
     You may need to serve this page over a secure connection (https) to run JsQRScanner correctly.
    </div>
<script> 
    if (location.protocol != 'https:') { 
    document.getElementById('secure-connection-message').style='display: block';
    }
</script>  


<div class="container-fluid py-3 px-3 "  >
    
    <div class="py-3 px-2" style="background-color: #BAD5F0; border-radius: 25px; box-shadow: -10px 10px 5px;  ">
        <h1 class="text-center"> Selamat datang di QR Reader Explore Lemukutan </h1>

        <div class="row text-center">
          <div style="width: 500px;margin-left: auto; margin-right: auto; " id="reader"></div>
        </div>
    

   
</div>

<script>
  function onScanSuccess(decodedText, decodedResult) {
      
    html5QrCode.stop()
    window.location.href = decodedText;
  
     
    // console.log(`Scan result: ${decodedText}`, decodedResult);
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);

</script>


@endsection