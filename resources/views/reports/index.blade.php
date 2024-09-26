@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped">
    <table class="table table-hover">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href= "/reports/{{$report->id}} " class="btn btn-primary">Details</a></td>
            
            <td><a href= "/reports/{{$report->id}}/edit "class="btn btn-warning">Kemaskini</a></td>
                <td><form action="/reports/
                    {{$report->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" value="Padam" class="btn btn-danger" onclick="return confirm( 'woiii betoi ka nak padam?')"> </form></td>

        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection