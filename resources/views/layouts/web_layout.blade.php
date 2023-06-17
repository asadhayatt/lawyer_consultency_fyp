
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

{{-- main content starts here using 'content'--}}
  @yield('content')  

{{-- Footer section  --}}
@include('layouts.web_asset.footer')
</body>
</html>