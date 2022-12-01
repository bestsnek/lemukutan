@extends('frontend.f_layouts.main')

@section('content')

{{-- warning kalau nda ad js nda bs jalan --}}

<noscript>
    <div class="row-element-set error_message">
        Your web browser must have JavaScript enabled
        in order for this application to display correctly.
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
        <h1 class="text-center"> Selamat datang di QR Reader LemukutanKu </h1>

        <div class="row text-center">
            <div class="qrscanner" id="scanner">
            </div>
        </div>
    

    <div class="row-element">
        <div class="form-field form-field-memo">
          <div class="form-field-caption-panel">
            <div class="gwt-Label form-field-caption">
              Scanned text
            </div>
          </div>
          <div class="FlexPanel form-field-input-panel">
            <textarea id="scannedTextMemo" class="textInput form-memo form-field-input textInput-readonly" rows="3" readonly>
            </textarea>
          </div>
        </div>
        
      </div>
    </div>
</div>



<script type="text/javascript">
    function onQRCodeScanned(scannedText)
    {
    	var scannedTextMemo = document.getElementById("scannedTextMemo");
    	if(scannedTextMemo)
    	{
            window.location.assign(scannedText);
    		// scannedTextMemo.value = scannedText;
    	}
    }
  
    //this function will be called when JsQRScanner is ready to use
    function JsQRScannerReady()
    {
        //create a new scanner passing to it a callback function that will be invoked when
        //the scanner succesfully scan a QR code
        var jbScanner = new JsQRScanner(onQRCodeScanned);
        //reduce the size of analyzed images to increase performance on mobile devices
        jbScanner.setSnapImageMaxSize(300);
    	var scannerParentElement = document.getElementById("scanner");
    	if(scannerParentElement)
    	{
    	    //append the jbScanner to an existing DOM element
    		jbScanner.appendTo(scannerParentElement);
    	}        
    }
  </script> 
@endsection