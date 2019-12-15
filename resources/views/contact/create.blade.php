@extends('layouts.app')

@section('create-contact')
<section class="mt-5 container form-shadow bg-white">
    <h2 class="text-center mb-5">Create a Contact</h2>
    
    <create-contact :developpers="{{ $developpers }}">
    </create-contact>
</section>
@endsection