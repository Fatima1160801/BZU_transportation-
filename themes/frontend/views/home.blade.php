
@section('showButton')
@if ($user[0]->PR==1)
@if ($in[0]->canbook ==1)
<div class="nav-link">
    <?php $id=Auth::user()->id?>
    <a href="{{url("/passenger/$id")}}">New Booking</a>
</div>
@else
<div class="nav-link">
    <a href="{{url('/passenger/send/CanNotBook')}}">New Booking</a>
</div>
@endif
@endif
@endsection
<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('web.Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                            <div>
                            @include('inc.requestTrip')
                            @if ($user[0]->PR==0)
                            <form method="POST" action="{{url('/information')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone')}}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BZUid" class="col-md-4 col-form-label text-md-right">{{ __('BZU Id') }}</label>

                                    <div class="col-md-6">
                                        <input id="BZUid" type="text" class="form-control @error('BZUid') is-invalid @enderror" name="BZUid" value="{{ old('BZUid') }}" required autocomplete="BZUid" autofocus>

                                        @error('BZUid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                    <div class="mb-0 form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit')}}
                                            </button>
                                        </div>
                                    </div>

                            </form>
                            @endif



                            @if(App::getLocale()=="ar")
                            <a class="nav-link mr-1" href="{{url('lang/set/en')}}"><i class="fa fa-question-circle"></i> English</a>
                            @else
                            <a class="nav-link mr-1" href="{{url('lang/set/ar')}}"><i class="fa fa-question-circle"></i> Arabic</a>
                           @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
