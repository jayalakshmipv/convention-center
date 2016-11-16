@extends('back-end.layouts.layout')

@section('title', 'Change Password')

@section('body')

      <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <div class="box-header">
               <h3 class="box-title">Change Password</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['route' => ['password.change',$enc_id]]) !!}
                <fieldset>

                   @if (session()->has('flash_message'))
                       @include('session_flash')
                   @endif
                   

                   <!--Password field-->
                    <div class="form-group">
                                {!! Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required'])!!}
                                
                    </div>  

                   <!--Password Confirmation field-->
                   <div class="form-group">
                                {!! Form::password('password_confirmation', ['placeholder' => 'Password Confirm','class' => 'form-control', 'required' => 'required'])!!}

                   </div>


                   <!--Submit field-->
                    <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'btn btn btn1 btn-lg btn-success btn-block']) !!}
                    </div>
                 </fieldset>

                        {!! Form::close() !!}

                   </div>
               </div>            
           </div>
        </div>
    </div>

@endsection