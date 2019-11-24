@extends('layouts.app')
@section('developper-view')
<section>
    <h2 class="text-center mb-5">Business Developper</h2>
    <div class="table-radius p-4">
        <business-dev :developpers="{{ $developpers }}"></business-dev>
    </div>

</section>
@endsection