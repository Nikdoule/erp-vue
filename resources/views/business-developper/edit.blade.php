@extends('layouts.app')

@section('edit-developper')
<section class="mt-5 container form-shadow bg-white">
    <edit-business-developper :developper="{{ $developper }}"></edit-business-developper>
</section>
@endsection