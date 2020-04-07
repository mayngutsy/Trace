
@extends('layouts.app')

@section('content')
<div class="container">
    

    <div class="row justify-content-center"> 
        <div class="col-md-2 ">
            <div>Choose editor mode</div>
            <div>
                <ul class= "" style="">
                    <li><a href="html">HTML</a></li>
                    <li><a href="php">PHP</a></li>
                    <li><a href="javascript">Javascript</a></li>
                    <li><a href="c++">C++</a></li>
                    <li><a href="react">React</a></li>
                    <li><a href="vue">Vue</a></li>
                    <li><a href="golan">Golan</a></li>
                </ul>
            </div>
        </div>
     
        <div class="col-md-10">

            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="How_to" class="col-md-2 col-form-label text-md-right">{{ __('How To') }}</label>

                            <div class="col-md-10">
                                <input id="How_to" type="text" class="form-control @error('name') is-invalid @enderror" name="How_to" value="" required autocomplete="name" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="function" class="col-md-2 col-form-label text-md-right">{{ __('Function') }}</label>

                            
                                

                            <div class="col-md-10">
                                <textarea id="editor" type="textarea" class="form-control @error('username') is-invalid @enderror" name="function" value="" required></textarea>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Tag') }}</label>

                            <div class="col-md-10">
                                <input id="tag" type="text" class="form-control @error('email') is-invalid @enderror" name="tag" value="" required>

                               
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-10">
                                <input id="tag" type="hidden" class="form-control @error('email') is-invalid @enderror" name="tag" value="" required>

                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="action">Click Me!</button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection