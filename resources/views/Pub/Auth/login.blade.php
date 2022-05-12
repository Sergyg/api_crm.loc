@extends('Pub::layouts.layout')

@section('content')
    <div class="content d-flex justify-content-center align-items-center">
    <form method="POST" class="login-form" action="{{route('login')}}">
          @csrf
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
{{--                    <i class="icon-reading icon-2x text-slate-300 border"></i>--}}
                        <h5 class="mb-0">{{__('public.login_title')}}</h5>
                        <span class="d-block text-muted">Enter your credential below</span>
                </div>
              <div class="form-group form-group-feedback form-group-feedback-left">
                  <input id="email" type="email"
                         class="form-control" {{$errors->has('email') ? ' is-invalid':''}}"
                        placeholder="{{__('E-Mail Address')}}" name="email" value="{{ old('email')}}" required autofocus>
                  <div class="form-control-feedback">
                         <i class="icon-user text-muted"></i>
                  </div>
              </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                     <input id="password" type="password"
                            class="form-control {{$errors->has('password') ? ' is-invalid':''}}"
                            placeholder="{{__('Password')}}" name="password" required autofocus>
                    <div class="form-control-feedback">
                             <i class="icon-user text-muted"></i>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{__('Login') }}<i class="icon-circle-right2 ml-2"></i>
                    </button>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="{{route('register')}}">{{__('Register')}}</a>--}}
{{--                    <div class="col-md-6 text-right">--}}
{{--                        <a href="{{route('password.request')}}">{{__('Recovery')}}</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>
{{--        <form action="">--}}
{{--        <input type ="text">--}}
{{--        <input type ="text">--}}

        </form>
    </form>
    </div>
@endsection

