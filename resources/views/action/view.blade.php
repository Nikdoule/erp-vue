@extends('layouts.app')
@section('view-action')
<section class="mt-5">
    <h2 class="text-center mb-5">View action on deal</h2>
    <div class="p-4">
        <view-action :deal="{{ $deal }}" :actions="{{ $actions }}"></view-action>
    </div>
</section>
@endsection