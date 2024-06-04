@extends('Layouts.authLayout')
@section('content')


<div class='p-3 bg-white rounded' style='p-3'>
    <div class=' text-xl font-bold text-center' style='font-size:2rem'>login {{$compte}}</div>
    <form action='{{route("vendeur.login")}}' method='post'>
    @csrf
        <x-login-vendeur></x-login-vendeur>
    </form>
</div>
@endsection
@section('scripts')
    <script src='{{asset("js/login.js")}}' ></script>
@endsection