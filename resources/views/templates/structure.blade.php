<link href="{{ asset('css/app.css') }}"  rel="stylesheet">
<link href="{{ asset('js/app.css') }}"  rel="stylesheet">
<div class="container">
	@section('header')
	    <h1>header</h1>
	@endsection
	@yield("header")
</div>
<div class="container">
  @section("nav")
<h2><a href='{{url("/")}}'>home</a></h>
    <h2><a href='{{url("/about")}}'>about</a></h>
<h2><a href='{{url("/buy")}}'>buy</a></h>

  @endsection
  @yield("nav")
</div>
<div class="container">
	@section('content')
	    <h1>content</h1>
	@endsection
	@yield("content")
<div class="container">
</div>
	@section('footer')
	    <h1>footer</h1>
	@endsection
	@yield("footer")
</div>
