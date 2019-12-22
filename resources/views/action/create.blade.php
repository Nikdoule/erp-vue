@extends('layouts.app')
@section('create-action')
<section class="mt-5 container form-shadow bg-white">
    <h2 class="text-center mb-5">Create action on deal</h2>
<create-action :deal="{{ $deal }}"></create-action>
</section>
@endsection