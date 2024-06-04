@extends('Layouts.authLayout')
@section('content')


<div class='p-3 bg-white rounded' style='p-3'>
    <div class=' text-xl font-bold text-center' style='font-size:2rem'>Test connexion</div>
    <div>
    @if (Auth::check())
    <p>vous etes connecte mr : {{ Auth::user()->nom }}</p>    
    <p>Numéro : {{ Auth::user()->numero }}</p>
@else
    <p>Vous n'êtes pas connecté.</p>
@endif
    </div>
</div>
@endsection
@section('scripts')
    <script src='{{asset("js/login.js")}}' ></script>
@endsection