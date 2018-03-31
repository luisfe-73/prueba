@extends('layouts.default')
@section('content')
<body class="login-container">
   <div class="page-container">
      <div class="page-content">
         <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="panel panel-body login-form">
               <div class="text-center">
                  <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                  <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
               </div>

               <div class="form-group has-feedback has-feedback-left">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email_user'))
                     <span class="invalid-feedback">
                        <strong>{{ $errors->first('email_user') }}</strong>
                     </span>
                  @endif
                  <div class="form-control-feedback">
                     <i class="icon-user text-muted"></i>
                  </div>
               </div>

               <div class="form-group has-feedback has-feedback-left">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                     <span class="invalid-feedback">
                        <strong>{{ $errors->first('password_user') }}</strong>
                     </span>
                  @endif
                  <div class="form-control-feedback">
                     <i class="icon-lock2 text-muted"></i>
                  </div>
               </div>

               <div class="form-group">
                  <button type="submit" class="btn bg-pink-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
               </div>

               <div class="text-center">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                  </div>
               </div>
            </form>
         </div>
      </div>
@endsection
