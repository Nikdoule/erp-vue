@extends('layouts.app')
@section('edit-deal')
<section class="mt-5 container form-shadow bg-white">
    <edit-deal :contacts="{{ $contacts }}" :deal="{{ $deal }}"></edit-deal>
</section>  
@endsection