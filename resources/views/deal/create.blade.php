@extends('layouts.app')

@section('create-deal')
<section class="mt-5 container form-shadow bg-white">
    <h2 class="text-center mb-5">Create deal</h2>
    <create-deal :contacts="{{ $contacts }}">
    </create-deal>
</section>
@endsection