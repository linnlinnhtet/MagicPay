@extends('backend.layouts.app')
@section('title', 'Edit Admin User')
@section('admin-users-active','mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="metismenu-icon pe-7s-users">
                </i>
            </div>
            <div>Edit Admin User
            </div>
        </div>
    </div>
</div>
<div class="content pt-3">
    <div class="card">
        <div class="card-body">
            @include('backend.layouts.flash')
            <form action="{{ route('admin.admin-users.store') }}" method="POST" id="create">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{ $admin_user->name }}" name="name" class="form-control" placeholder="Please enter name...">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{ $admin_user->email }}" name="email" class="form-control" placeholder="Please enter email...">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" value="{{ $admin_user->phone }}" name="phone" class="form-control" placeholder="Please enter phone...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" value="{{ $admin_user->password }}" name="password" class="form-control" placeholder="Please enter password...">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary mr-2 back-btn">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\StoreAdminUserRequest', '#create') !!}
<script>
</script>
@endsection
