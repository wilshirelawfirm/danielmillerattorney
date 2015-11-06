@extends('layouts.base')

@section('title', 'Thank You')

@section('description', "Thank you for contacting Daniel Miller of Wilshire lAw Firm. Someone will be in touch with you soon." )

@section('follow', 'noindex, follow')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>Thank You</h1>
            <h2>Your Message Has Been Received</h2>
    </div>

    <div class="content">
    	<div class="content-inner">
	        <h2 class="content-subhead">Message Received</h2>
	        <p>
	            Your message has been received. We will respond to it as quickly as possible. If you would like to speak with {{ config('attorney.first_name') }} or a Wilshire Law Firm team member urgently, please call 1 (800) 522-7274 now. Otherwise, we will be in touch with you soon.
	        </p>

        </div>
    </div>

@endsection