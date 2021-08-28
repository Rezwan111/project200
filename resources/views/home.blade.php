@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-lg-5">
                <div class="card shadow-lg home">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row ml-5 mt-5 mr-5">
                                <div class="home-select-blood-text">Select your desire blood group
                                </div>
                            </div>

                            <div class="row ml-5 mt-4 mr-5">
                                <div class="home-blood-list">
                                    @foreach($groups as $group)
                                        <div class="home-blood-item"><a href="{{route('searchBlood',$group->id)}}">{{$group->name}}</a></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row ml-5 mt-3 pb-5 home-nb-text">NB: You must go through<span class="home-login-register-text"><a href="#"> login/register</a></span> to get
                                support from other donors
                            </div>
                        </div>

                        <div class="col-lg-6 home-blood-animation">
                            <div>
                                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_Y4K852.json" background="transparent" speed="1"
                                               style="width: 350px; height: 350px;"
                                               loop
                                               autoplay>
                                </lottie-player>
                            </div>
                        </div>

                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
