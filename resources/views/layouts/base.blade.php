@extends('layouts.meta')

@section('page')
<div id="layout">
	@section('sidebar')
        @include('partials.menu')
	@show
	<div id="main">
	<div class="backdrop">
		<img src="{{ asset('assets/img/attorney-full-screen.jpg') }}">
	</div>
    @yield('content')
    </div>

</div>
<footer>
	<a href="http://wilshirelawfirm.com" title="Californaia's best personal injury law firm">&copy; {{ date('Y') }} - Wilshire Law Firm</a>
</footer>
@include('partials.modal')
@endsection