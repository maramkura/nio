@extends('layouts.admin')


@section('content')

<h1> Users<h1>
  <table class="table">
                  <thead>
                      <tr class="filters">
                          <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                          <th><input type="text" class="form-control" placeholder="E-mail" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Role" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Created" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Updated" disabled></th>
                      </tr>
                  </thead>
                  <tbody>

                    @if($users)

                    @foreach($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role->name}}</td>
                          <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                          <td>{{$user->created_at->diffForHumans()}}</td>
                          <td>{{$user->updated_at->diffForHumans()}}</td>
                      </tr>

                    @endforeach
                    @endif

                  </tbody>
              </table>


@stop
