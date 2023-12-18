@extends('layout.master');
@section('title','user-list');

@section('main-section');

<div>
    <h3>LIST of USERS</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>name</th>
                <th>roll</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $item)

            @endforeach
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->roll}}</td>
                <td>delete</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
