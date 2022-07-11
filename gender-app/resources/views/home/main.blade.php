@extends('layouts.app')

@section('content')


    <form action="{{route('home')}}" method="GET">
        <input class="firstName" type="text" name="FirstName">
        <select class="country" name="country" >
            @foreach($countries as $country)
                <option value="{{$country['code']}}">{{$country['name']}}</option>
            @endforeach
        </select>
        <button class="button-form" type="submit">Check gender</button>
    </form>

    <div class="result-field"></div>
@if($gender)
   <div> Your gender:
       <div class="result">
           {{$gender}}
       </div>
   </div>
@endif


{{--   responce: {{$user}}--}}


@endsection
