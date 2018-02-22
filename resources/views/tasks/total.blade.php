@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Total
        </h1>

    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(count($totals))
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">title</th>
                        <th class="text-right">project_days</th>
                        <th class="text-right">project_hour</th>
                        <th class="text-right">man_hour</th>
                        <th class="text-right">remain</th>
                        <th class="text-center">start</th>
                        <th class="text-center">end</th>
                        <th class="text-center">status</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($totals as $total)
                        <tr>
                        <td class="text-right">{{$total->id}}</td>
                        <td>{{$total->id}}:{{$total->title}}</td>
                        <td class="text-right">{{number_format($total->days)}}</td>
                        <td class="text-right">{{number_format($total->hour)}}</td>
                        <td class="text-right">{{number_format($total->man_hour)}}</td>
                        <td class="text-right">{{number_format($total->remain)}}</td>
                        <td class="text-center">{{$total->pre}}</td>
                        <td class="text-center">{{$total->end}}</td>
                        <td>{{$total->status}}</td>
                        </tr>
                    @endforeach
                        <tr>
                        <td></td>
                        <td class="text-center"> --- total ---</td>
                        <td class="text-right">{{number_format($tasks[0]->days)}}</td>
                        <td class="text-right">{{number_format($entries[0]->hour)}}</td>
                        <td class="text-right">{{number_format($tasks[0]->hour)}}</td>
                        <td class="text-right">{{number_format($entries[0]->hour-$tasks[0]->hour)}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                    </tbody>
                </table>
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
