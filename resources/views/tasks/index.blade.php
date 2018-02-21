@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Tasks
            <a class="btn btn-success pull-right" href="{{ route('tasks.create') }}"><i class="glyphicon glyphicon-plus"></i> {{ trans('ui.create')}}</a>
        </h1>

    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if($tasks->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <th class="text-right">ID</th>
                        <th class="text-left">ENTRY</th>
                        <th class="text-left">LOG</th>
                        <th class="text-center">DATE</th>
                        <th class="text-right">HOUR</th>
                        <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                        <td class="text-right">{{$task->id}}</td>
                        <td>{{$task->entry->title}}</td>
                    	<td>{{$task->log}}</td>
                    	<td class="text-center">{{$task->task_day}}</td>
                    	<td class="text-right">{{number_format($task->task_hour)}}</td>
                        <td class="text-right">
                          <a class="btn btn-xs btn-primary" href="{{ route('tasks.show', $task->id) }}"><i class="glyphicon glyphicon-eye-open"></i> {{ trans('ui.view') }}</a>
                          <a class="btn btn-xs btn-success" href="{{ route('tasks.copy', $task->id) }}"><i class="glyphicon glyphicon-plus"></i> {{ trans('ui.copy') }}</a>
                          <a class="btn btn-xs btn-warning" href="{{ route('tasks.edit', $task->id) }}"><i class="glyphicon glyphicon-edit"></i> {{ trans('ui.edit') }}</a>
                          <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('{{ trans('ui.areyousuredelete')}}')) { return true } else {return false };">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> {{ trans('ui.delete') }}</button>
                          </form>
                        </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tasks->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
