@extends('layouts.app')
@section('view-case')
<section>
    <h2 class="text-center mb-5">Suivi Des Affaires</h2>
<case-view :deals="{{ $deals }}" :contacts="{{ $contacts }}"></case-view>
</section>
@endsection