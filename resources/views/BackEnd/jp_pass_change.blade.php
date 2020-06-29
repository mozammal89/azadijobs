@extends('BackEnd.layout')

@push('css')



@endpush()

@section('content')

<div class="row" style="margin-bottom: 60px;">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: #2c699c;padding: 6px;text-align: center;">
                <h4 style="color: white;">Change Password</h4>
            </div>
            <div class="card-body" style="padding: 10px;">
                <form method="POST" action="{{route('provider.jpChangePasswordUpdate')}}">
                    @csrf 

                     <!-- @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                     @endforeach  -->

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                        <div class="col-md-6" style="margin-bottom: 8px;">
                            <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                        <div class="col-md-6" style="margin-bottom: 8px;">
                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                        <div class="col-md-6">
                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="margin-top: 30px;margin-bottom: 30px;">Update Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>


@endsection()

@push('js')

@endpush()