@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>タスク</td>
            <td>status</td>
        </tr>
        <tr>
            <th>{{ $task->id }}</th>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}
        {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection