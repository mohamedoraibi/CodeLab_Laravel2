@extends('layout.master')

@section('table')
    active
@endsection

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 pull-right">
                <form name="usrform" method="post" action="/students/insert" class="form-inline">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="first_name">first_name</label>
                        <input name="first_name" type="text" class="form-control" id="title_input"
                               placeholder="enter first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">last_name</label>
                        <input name="last_name" type="text" class="form-control" id="content_input"
                               placeholder="enter last_name">
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label for="grade">grade</label>
                        <input type="text" name="grade" class="form-control" id="user_input" placeholder="enter grade">
                    </div>
                    <div class="form-group">
                        <label for="level">level</label>
                        <input type="text" name="level" class="form-control" id="user_input" placeholder="enter level">
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-default">Insert</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th class="text-center">id</th>
                    <th class="text-center">Fitst Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Grade</th>
                    <th class="text-center">Soft Delete</th>
                    <th class="text-center">Level</th>
                    </thead>
                    <tbody>

                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->full_name}}</td>
                                <td>{{$student->grade_string}}</td>
                                <td>{{$student->deleted_at}}</td>
                                <td>{{$student->level->name}}</td>
                                {{--<td>{{$student->grade}}</td>--}}
                                {{--<td>{{$student->first_name . " ".$student->last_name}}</td>--}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection