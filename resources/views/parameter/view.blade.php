@extends('layouts.app')

@section('view-parameter')
<section class="mt-5">
    <h2 class="text-center">parameters</h2>
    <div class="d-flex mt-5">
        <div class="col-4 pr-0 pl-0">
            <view-param-action :param_actions="{{ $param_actions }}"></view-param-action>
        </div>
        <div class="col-4 pr-0 pl-0">
            <view-param-contact :param_contacts="{{ $param_contacts }}"></view-param-contact>
        </div>
        <div class="col-4 pr-0 pl-0">
        <view-param-todo :param_todos="{{ $param_todos }}"></view-param-todo>
        </div>
    </div>

</section>
@endsection
