@extends('layouts.app')
@section('view-contact')
<section class="mt-5">
    <h2 class="text-center mb-5">Contact</h2>
    <div class="table-radius p-4">
    <contact-view :contacts="{{ $contacts }}"></contact-view>
    </div>
</section>
@endsection