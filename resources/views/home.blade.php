@extends('layouts.app')

@section('content')
<div class="info">
</div>
<?php if(isset($user->id)){$id = $user->id;}else{$id = '';}?>
<div class="container dashboard">
    <div class="row ">
        <div class="col-md-3 justify-content-left">
            <div class="card">
                <div class="card-header"><strong>Traceboard</strong>
                    <p>This is your dashboard</p>
                    <div><a href="{{ url('/activitylog/'.$id) }}"><strong>Activities</strong></a></div>
                    <div>
                        <p>Activity score 0 </p>
                    </div>
                </div>
                
                
                <div class="card-header">
                
                    <div>
                        <ul>
                            <li><a href="{{ url('/form/'.$id) }}"><strong>Submit code</strong></a></li>
                        </ul>
                    </div>
                </div>
                
                
                
            </div>

        </div>

        <div class="display col-md-9 justify-content-right">
            <div class="card-body "> 
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            
            </div>
        </div>
    </div>


    
</div>


@endsection
