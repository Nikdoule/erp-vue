@extends('layouts.app')
@section('graphical')
<section>
    <line-chart :data="{'2019-01-01': 0, '2019-01-02': 1, '2019-01-03': 2, '2019-01-04': 3, '2019-01-05': 2, '2019-01-06': 5}"></line-chart>
</section>
@endsection