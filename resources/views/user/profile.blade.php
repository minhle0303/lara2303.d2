@extends('layout.master')
@section('title','profile')
@section('main-section')
<div>
    <h3>Profile</h3>
    <p>User name:{{$user->name}}</p>
    <p>Email:{{$user->email}}</p>
    <p>Role:{{$user->role}}</p>
    <div>
        <form action="{{url('changePassword')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-outline mb-4">
                <input type="password" name="newPwd" id="form2Example27" class="form-control form-control-lg" value="123" />
                <label class="form-label" for="form2Example27">New Password</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" name="newPwd2" id="form2Example27" class="form-control form-control-lg" value="123" />
                <label class="form-label" for="form2Example27">Confirm New Password</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" name="pwd" id="form2Example27" class="form-control form-control-lg" value="123" />
                <label class="form-label" for="form2Example27">Old Password</label>
              </div>
              <div><input type="submit" value="change password">Change Password</div>
        </form>


    </div>

</div>
@endsection
