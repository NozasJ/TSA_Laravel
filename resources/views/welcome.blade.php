@extends('layouts.app')

@section('content')
    <h1>Tasks for Today</h1>

    <p>{{ today()->format('F j, Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No tasks scheduled for today.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection