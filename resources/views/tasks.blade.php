@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

            <!-- New Task Form -->

        <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <table style="width:70%">
                <!-- Task Name -->
        <tr><div class="form-group">
            <td><label for="task" class="col-sm-3 control-label">Staff ID*: </label></td>
               <td><input type="text" name="stafid" id="staff-id" class="form-control" placeholder="Ex:019"></td>
        </div></tr>


        <tr><div class="form-group">
            <td><label for="task" class="col-sm-3 control-label">Author Names*: </label></td>
                <td><input type="text" name="Authornames" id="Authornames" class="form-control" placeholder="Ex:Hamid"></td>
        </div></tr>

        <tr><div class="form-group">
            <td><label for="task" class="col-sm-3 control-label">Fields of Researchs(FOR)*: </label></td>
                <td><select>
                    <option value="A">AAAAAAAAAA</option>
                    <option value="B">BBBBBBBBBB</option>
                    <option value="C">CCCCCCCCCC</option>
                    </select></td>
        </div></tr>

        <tr><div class="form-group">
            <td><label for="task" class="col-sm-3 control-label">Socio-economic Objectives(SEO)*: </label></td>
            <td><select>
                <option value="A">AAAAAAAAAA</option>
                <option value="B">BBBBBBBBBB</option>
                <option value="C">CCCCCCCCCC</option>
            </select></td>
        </div></tr><br>

                <tr><div class="form-group">
                        <td><label for="task" class="col-sm-3 control-label" >Comment : </label></td>
                        <td><input type="text" name="comment" id="comment" class="form-control" placeholder="Ex:nice"></td>
                    </div></tr>

                <!-- Add Button -->
                <tr><td><div class="container"><button type="button" class="btn btn-primary btn-md" style="background-color:#4169E1" onclick="alert('NOT!')"><i class="fa fa-plus"></i>Submit</button>
                        <button style="background-color:#FFA500" type="button" ><i class="fa fa-plus"></i>Clear</button>
                    </div></td></tr>


            </table>

            <div class="container"><a type="button" class="btn btn-primary btn-lg" style="background-color:#4169E1" onclick="alert('NOT!')"><i class="fa fa-plus"></i>Submit</a>
                <button style="background-color:#FFA500" type="button" ><i class="fa fa-plus"></i>Clear</button>
            </div>
    </form>
</div>





@if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Tasks
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Task</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        <td>
                            <tr>

                        <td>
                            <form action="/task/{{ $task->id }}" method="POST">
                            {!! csrf_field() !!}
                            {!!method_field('DELETE') !!}
                            <button type="submit" class="btn-danger">
                                <i class="fa-trash"></i> Delete
                                </button>
                                </form>
                            </td>
                        </tr>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <p><footer>
            <label>&copy Universiti Putra Malaysia. All rights reserved.</label>
        </footer></p>
@endif
@endsection