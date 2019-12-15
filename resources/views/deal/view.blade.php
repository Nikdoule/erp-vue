@extends('layouts.app')
@section('view-case')
<section class="mt-5">
    <h2 class="text-center mb-5">Deals</h2>
<case-view :deals="{{ $deals }}" :contacts="{{ $contacts }}"></case-view>
</section>
@endsection