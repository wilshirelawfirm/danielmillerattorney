@extends('layouts.base')

@section('title', config('attorney.name'))

@section('description', "Daniel Miller is a California personal injury lawyer at Wilshire Law Firm Daniel specializes in major accident and catastrophic injury cases." )

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
				Personal injury trial attorney Daniel Miller is a ferocious opponent of injustice. He cannot stand it when stingy insurance companies and corporations refuse to do right by innocent injury victims and their families. Although a strong believer in the settlement process, Daniel is always prepared to bring a case to court, especially when the defendant shows no willingness to negotiate in good faith. He fights aggressively in and out of court to even the odds for his clients and make them whole.
            </p>
            <p>
                Daniel takes a very simple approach to trial: he relies on the truth and on the jury's ability to discern right from wrong, not on clever tactics or crafty rhetoric. His unassailable belief in his clients drives him to battle with confidence and integrity, and his unshakeable faith in the court system informs his respectful treatment of jurors. He neither condescends nor stoops to them but treats them as equals, because he knows that they only need to get the full story in order to make the right decision.

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