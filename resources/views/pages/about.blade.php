@extends('layouts.base')

@section('title', 'About '. config('attorney.name') )

@section('description', "Daniel Miller, Esq. is a trial attorney at Wilshire Law Firm, one of the top personal injury law firms in the nation." )


@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>About</h1>
            <h2>Meet {{ config('attorney.name') }}</h2>
    </div>

    <div class="content">
    	<div class="content-inner">
	        <h2 class="content-subhead">{{ config('attorney.first_name') }}'s Mission</h2>
	        <p>
	            Although they would have the public believe otherwise, insurance companies are NOT benevolent entities. They are businesses purely driven by the profit motive. In order to preserve their bottom line, many are willing to resort to deceitful, even predatory tactics. It is part of their strategy to approach injury victims at their most vulnerable, present themselves as allies, and ultimately guide the victim towards a case resolution that benefits them – but at the expense of the victim.
	        </p>
	        <p>
				Daniel is thoroughly familiar with the way insurance companies operate, and he uses this knowledge to make sure that his clients get the compensation they need to recover – not just physically, but also mentally, emotionally, and financially. He knows that it is very difficult, if not impossible, to put a price on the devastating, oftentimes life-changing effects of a serious injury. He always strives towards high settlements and verdicts so that his clients can gain access to the best physical and mental health services available.
			</p>
			<p>
				Some injury lawsuits become bigger than just one person. Mass torts, product liability, medical malpractice, etc. – these cases concern the general public because when a large entity commits negligence, everyone is affected. The best way to hold such entities accountable for their actions is to hit them where it hurts the most – their finances. That is why Daniel pursues exorbitant numbers in lawsuits involving corporations and other powerful organizations. Only significant penalties can keep them in line and ensure that the people are protected.
	        </p>
        </div>
    </div>

@endsection