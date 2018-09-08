@extends('layouts.app')

@section('content')
<div class="container">
    @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @foreach($entry as $list)
        <div class='entry'>
            <h3>{{ $list->user->name }}</h3>
            <em>Posted at
                @php
                echo \Carbon\Carbon::parse($list->created_at)->diffForHumans();
                @endphp
            </em>
            <p class='message'>{{ $list->message }}</p> 
        </div>
    @endforeach 

    @include('guestbook.form')
    
    <div class='paginate'>
        {{ $entry->links() }}
    </div>
</div>
@endsection