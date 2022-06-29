@extends('layouts.app')
@section('content')
<section class="banner">
    <div class="container-fluid banner-wrap">
        <div class="row banner-main">
            <div class="col-lg-5 col-md-6 ml-3 col-sm-12 ">
                <p class="banner-title">Learn Anytime, Anywhere
                    <span class="banner-title title-weight">at HapoLearn
                            <img class="banner-image" src="{{ asset('images/Group6.png') }}"
                             alt="HapoLearn Logo"> !
                    </span>
                </p>
                <div class="row">
                    <p class="col-lg-6 col-md-8 paragraph">
                        Interactive lessons,
                        "on-the-go"
                        practice, peer support.
                    </p>
                </div>
                <button class="banner-btn"> Start Learning Now!</button>
            </div>
        </div>
    </div>
</section>
@endsection
