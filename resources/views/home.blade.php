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
<div class="cards container-fluid">
    <div class="card-container container row">
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-left">
                        <img src="{{ asset('images/Rectangle7.png')}}" class="card-img-top" alt="" >
                    </div>
                    <div class="card-body">
                        <p class="card-title">HTML/CSS/js Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML,
                                JS, and CSS before entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-center">
                        <img src="{{ asset('images/laravel-1-logo-black-and-white1.png') }}" class="card-img-top" alt="" >
                    </div>
                        <div class="card-body">
                            <p class="card-title">LARAVEL Tutorial</p>
                            <p class="card-text">I knew hardly anything about HTML,
                                JS, and CSS before entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.</p>
                            <button class="card-btn">Take This Course</button>
                        </div>
                    </div>
                </div>

            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-right">
                        <img src="{{asset('images/Rectangle15.png')}}" class="card-img-top" alt="" >
                    </div>
                    <div class="card-body">
                        <p class="card-title">PHP Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML,
                                JS, and CSS before entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="other">
    <p class="other-title">
         Other courses
    </p>
</div>
<div class="cards container-fluid">
    <div class="card-container container row">
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-left other-left">
                        <img src="{{ asset('images/CSS.png')}}" class="card-img-top img-left" alt="" >
                    </div>
                    <div class="card-body">
                        <p class="card-title">CSS Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS
                            before entering New Media,...</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-center other-center">
                        <img src="{{ asset('images/Group.png') }}" class="card-img-top img-center" alt="" >
                    </div>
                        <div class="card-body">
                            <p class="card-title">Ruby on rails Tutorial</p>
                            <p class="card-text">I knew hardly anything about HTML, JS,
                                and CSS before entering New Media,...</p>
                            <button class="card-btn">Take This Course</button>
                        </div>
                    </div>
                </div>
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-right other-right">
                        <img src="{{asset('images/java1.png')}}" class="card-img-top" alt="" >
                    </div>
                    <div class="card-body">
                        <p class="card-title">Java Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML, JS,
                                and CSS before entering New Media,...</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
