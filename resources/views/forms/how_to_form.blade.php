
@extends('layouts.app')

@section('content')
<div class="container">
    

    <div class="row justify-content-center"> 
        <div class="col-md-4 ">
            <div>Choose language</div>
            <div>
                <ul class= "" style="">
                    <li><a href="php">PHP</a></li>
                    <li><a href="Javascript">Javascript</a></li>
                    <li><a href="C++">C++</a></li>
                    <li><a href="React">React</a></li>
                    <li><a href="Vue">Vue</a></li>
                    <li><a href="Golan">Golan</a></li>
                </ul>
            </div>
        </div>
     
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="How_to" class="col-md-4 col-form-label text-md-right">{{ __('How To') }}</label>

                            <div class="col-md-6">
                                <input id="How_to" type="text" class="form-control @error('name') is-invalid @enderror" name="How_to" value="" required autocomplete="name" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="function" class="col-md-4 col-form-label text-md-right">{{ __('Function') }}</label>

                            <div class="col-md-6">
                                <textarea id="function" type="textarea" class="form-control @error('username') is-invalid @enderror" name="function" value="" required></textarea>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tag') }}</label>

                            <div class="col-md-6">
                                <input id="tag" type="text" class="form-control @error('email') is-invalid @enderror" name="tag" value="" required>

                               
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="tag" type="hidden" class="form-control @error('email') is-invalid @enderror" name="tag" value="" required>

                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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