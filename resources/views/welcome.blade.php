@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-3">
                <div>
                    <div>
                        <h3>{{ Auth::user()->name }}</h3>
                    </div>

                </div>
            </aside>
            <div class="col-sm-9">
                @if (Auth::id() == $user->id)
                    {!! Form::open(['route' => 'tasks.store']) !!}
                    {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}
                @endif
                @if (count($tasks) > 0)
                    @include('tasks.index')
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Task</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection