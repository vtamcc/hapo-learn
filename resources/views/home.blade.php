@extends('layouts.app')

@section('content')

<section class="banner">
   <div class="banner-content">
        <div class="banner-header">
            <p class="banner-title">Learn Anytime, Anywhere
                <span class="banner-title title-weight">at HapoLearn
                    <img class="banner-image" src="{{ asset('images/Group 6.png') }}" 
                    alt="HapoLearn Logo"> !
                </span>
            </p>
        </div>

        <!-- <div class="banner-logo>">
            <p ></p>
        </div> -->

        <div class="banner-text">
            <p class="paragrap">Interactive lessons, "on-the-go"
               practice, peer support.
            </p>
        </div>

        <button class="banner-btn"> Start Learning Now!</button>
   </div>
</section>
<div class="banner-footer"></div>
@endsection
