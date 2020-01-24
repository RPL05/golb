@extends('layouts.template')

@section('content')

<div class="pt-5">
    <h2 class="font-weight-bold">
        Recommended
    </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                <img src="{{asset('images/maxresdefault (1).jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/maxresdefault (1).jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <a href="{{route('watch.B-art-Showcase')}}">
                                <h6 class="font-weight-bold">B-art Showcase</h6>
                            </a>
                            
                            <small class="text-muted">Swissbeatbox</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/maxresdefault (2).jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/maxresdefault (2).jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Streaming</h6>
                            <small class="text-muted">Dota 2</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/maxresdefault.jpg')}}" class="card-img-top" alt="">   
                </div>
                <div class="card-body">
                <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/maxresdefault.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Streaming</h6>
                            <small class="text-muted">GTA 5</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0" >
                <img src="{{asset('images/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" class="card-img-top" alt="" >
                </div>
                <div class="card-body">
                <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Streaming</h6>
                            <small class="text-muted">Fortnite</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/gsmarena_001-5-696x391.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/gsmarena_001-5-696x391.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Streaming</h6>
                            <small class="text-muted">Viva Oficial</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/respawn-announce-500-000-apex-legends-preseason-invitational-tournament.jpg')}}" class="card-img-top" alt="">   
                </div>
                <div class="card-body">
                <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/respawn-announce-500-000-apex-legends-preseason-invitational-tournament.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Streaming</h6>
                            <small class="text-muted">Apex Legend</small>
                            <br>
                            <small class="text-muted">1M View .  i day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="pt-5">
    <h2 class="font-weight-bold">
        Youtube Mix
    </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                <img src="{{asset('images/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/600px-The_International_2019.png')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/respawn-announce-500-000-apex-legends-preseason-invitational-tournament.jpg')}}" class="card-img-top" alt="">   
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection