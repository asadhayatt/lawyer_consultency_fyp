
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lawyer - @yield('title')</title>
	<link rel="icon" href="{{ asset('web_asset/img/Fevicon.png') }}" type="image/png">

  {{-- header section --}}
  @include('layouts.web_asset.header')
  {{-- --------------------------- --}}
</head>
<body>

{{-- Navbar Section  --}}
@include('layouts.web_asset.navbar')
<style>
  #whatsapp {
    position: fixed;
    bottom: 15px;
    z-index: 999999;
    right: 15px;
  }
#whatsapp-logo{
width: 70px;
}
</style>
<a aria-label="Chat on WhatsApp" id="whatsapp" href="https://wa.me/923060978782"> <img id="whatsapp-logo" src="{{ asset('web_asset/img/whatsapp-logo.png') }}" alt="Chat on WhatsApp" />
</a>

{{-- main content starts here using 'content'--}}
  @yield('content')  
 

{{-- Footer section  --}}
@include('layouts.web_asset.footer')
</body>
</html>