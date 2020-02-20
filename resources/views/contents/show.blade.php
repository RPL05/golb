@extends('layouts.template')

@section('content')
<div class="row pyt-4">
    <!-- posisi image dan komen -->
    <div class="col-md-8">
        <!-- posisi image pembuka -->
        <img src="{{asset('images/maxresdefault (1).jpg')}}" class="rounded" width="100%" height="100%" alt="">
        <!-- penutup image  -->
        <!-- posisi title  -->
        <div class="pt-3">
            <a href="http://">
                #berywam #B-artLive #Swissbeatbox
            </a>
            <h4>
                B-art - Swissbeatbox
            </h4>
        </div>
        <!-- penutup title -->
        <!-- posisi informasi -->
        <div class="d-flex">
            <div class="mr-auto">
                <p>55,555,555 views ~ Jun 13, 2020</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="mr-3">1.7k</p>
                <p class="mr-3">like</p>
                <p class="mr-3">subscribe</p>
                <p class="mr-3">Save</p>
            </div>
        </div>
    </div>
        <!-- penutup inforamsi -->
    <!-- posisi up next -->
    <div class="col md-4">
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h6 class="font-weight-bold">
                            Up Next
                        </h6>
                    </div>
                    <!-- <div class="">
                        <div class="custom-control custom-switch">
                            <label for="customSwitch1" class="custom-control-label">
                                Auto Play
                            </label>
                            <input type="checkbox" class="custom-control-input" name="" id="customSwitch1">
                        </div>
                    </div> -->

                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                        <span class="absolute-no">NO</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection