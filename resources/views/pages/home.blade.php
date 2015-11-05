@extends('layouts.base')

@section('title', config('attorney.name'))

@section('description', "Daniel Miller is a California personal injury lawyer, specializing in major accident cases." )

@section('sidebar')
    @parent
@endsection

@section('content')
	
    <div class="header">
            <h1>{{ config('attorney.name') }}</h1>
            <h2>California Trial Attorney</h2>
        </div>

        <div class="content">
        <div class="content-inner">
        
            <h2 class="content-subhead">Personal Injury Attorney</h2>
            <p>
				Many consider Attorney Daniel Miller to be an exemplar in his field because he always goes above and beyond the call of duty to achieve optimal case results on behalf of his clients. Throughout his illustrious legal career, he has taken on a variety of serious injury cases, including paralysis, amputation, traumatic brain injury, and wrongful death. A ferocious opponent of injustice, Daniel cannot stand it when insurance companies refuse to do right by innocent injury victims and their families, which is why he fights aggressively in and out of court to see his clients adequately compensated for the pain they have suffered due to no fault of their own.
            </p>

            <p style="text-align: center">
                <a class="button-xlarge pure-button pure-button-primary" href="{{ route('contact')}}">Contact {{ config('attorney.first_name') }}</a>
            </p>

            <blockquote>
	        	"Being a trial lawyer is a tough job, but also a deeply rewarding one. It always makes my day when a client tells me that I have restored happiness and stability in his or her life... There really is no greater feeling." - Daniel Miller
	        </blockquote>
            </div>
        </div>
    </div>

@endsection