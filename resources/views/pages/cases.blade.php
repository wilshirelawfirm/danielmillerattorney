@extends('layouts.base')

@section('title', "Daniel Miller's Cases")

@section('description', "Discover the cases that trial attorney Daniel Miller handles." )

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>Cases</h1>
            <h2>{{ config('attorney.first_name') }}'s cases</h2>
        </div>

        <div class="content">
	        <div class="content-inner">
		
				<h2 class="content-subhead">Case Types</h2>
				<p>
					Daniel and his colleagues exclusively handle major accident and catastrophic injury cases where case outcomes are expected to yield their clients million dollar and multi-million dollar verdicts. 
				</p>
				<h2 class="content-subhead">Case Outcomes</h2>
	            <p>
	                In a recent closed head injury case, Daniel was a part of a team that obtained a <strong>$7,200,000 verdict</strong> for the injured. His other recent case successes include numerous <strong>multi-million dollar</strong> verdicts and settlements for truck accidents and a recent <strong>$500,000 verdict</strong> for a store slip-and-fall accident. </p>

			
	        </div>
        </div>

@endsection