@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<br><br>
<div class="panel panel-default">
    <div class="panel-headin">
         <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
            <h3>Add New Country</h3>
         </div>
    </div>
    <div class="pull-left">
        <form class="navbar-form" role="search">
            <a type="button" class="btn btn-primary" href="/dashboard/location/create">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Add
            </a>
        </form>     
    </div>
    <div class="pull-right">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-striped table table-hover" id="country">
        <tr>
            <td>Country Code</td>
            <td>Country Name</td>
            <td colspan="2">Action</td>
        </tr>
        <tbody>
        @foreach($data as $country)
            <tr>
                <td>{{ $country->code }}</td>
                <td>{{ $country->name }}</td>
                <td>
                    <a href="{{ url('/dashboard/location/'.$country->id.'/edit')}}">

                        <button class="btn btn-success btn-edit" id="edit">Edit</button></a>&nbsp;

                    <a href="/delete/{{ $country->id }}">
                        <button class="btn btn-danger btn-delete">Delete</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
    $('#country').DataTable();
});
</script>


</div>
@endsection
