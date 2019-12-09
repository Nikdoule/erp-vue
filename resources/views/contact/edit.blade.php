@extends('layouts.app')

@section('edit-contact')
<section class="mt-5 container form-shadow bg-white">
    <edit-contact :contact="{{ $contact }}" :developpers="{{ $developpers }}"></edit-contact>
</section>  
@endsection