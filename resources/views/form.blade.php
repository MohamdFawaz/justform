@extends('default')
@section('content')
    <div style="padding:10px;">
    <form class = "form-horizontal col-md-10" role = "form" action="{{route('submit')}}" method="post">
        {{csrf_field()}}
        <div class = "form-group">
            <label for = "contact_name" class = "col-sm-2 control-label">Contact Name</label>
            <div class = "col-sm-10">
                <input type = "text" required class="form-control" name="contact_name" id="contact_name" placeholder="Enter Contact Name">
            </div>
        </div>
        <div class = "form-group">
            <label for="contact_number" class="col-sm-2 control-label">Contact Number</label>
            <div class="col-sm-10">
                <input type="number" required class = "form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number">
            </div>
        </div>
        <div class = "form-group">
            <label for="user" class="col-sm-2 control-label">User</label>
            <div class="col-sm-10">
                <select name="user_id" id="user" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class = "form-group">
            <label for="deal-status" class="col-sm-2 control-label">Deal Status</label>
            <div class="col-sm-10">
                <select name="deal_status" id="deal-status" class="form-control">
                    <option value="New">New</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="Done">Done</option>
                </select>
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Add New</button>
            </div>
        </div>
    </form>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Contact Name</th>
            <th scope="col">Contact Number</th>
            <th scope="col">User</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sales as $sale)
        <tr>
        <td>{{$sale->id}}</td>
        <td>{{$sale->contact_name}}</td>
        <td>{{$sale->contact_number}}</td>
        <td>{{$sale->user->name}}</td>
        <td>{{$sale->deal_status}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
