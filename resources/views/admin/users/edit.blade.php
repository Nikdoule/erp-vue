@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Edit {{ $user->name }}</div>
                <div class="card-body">
                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    @foreach ($roles as $item)
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $item->id }}" id="{{ $item->id }}" @foreach ($user->roles as $itemRole) @if ($itemRole->id == $item->id) checked @endif @endforeach>
                            <label for="{{ $item->id }}" class="form-check-label">{{ $item->name }}</label>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Change roles</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection