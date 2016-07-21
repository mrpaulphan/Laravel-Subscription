@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Plans</div>

                <div class="panel-body">
                    Plans
                    @foreach($plans as $plan)
                    <h4>{{ $plan->name }}</h4>
                    <p>${{ number_format($plan->cost, 2) }}/monthly</p>
                    @if($plan->description)
                      <p>{{ $plan->description}}</p>
                    @endif
                    @if (!Auth::user()->subscribedToPlan($plan->braintree_plan, 'main'))
                      <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-default pull-right">Choose</a>
                    @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
