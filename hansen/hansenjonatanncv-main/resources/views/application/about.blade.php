@extends('layouts.app')

@section('title', 'About')

@section('about')
    <section id="about" class="about-mf sect-pt4 route">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="assets/img/hansenjonatan.jpg" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Hansen Jonatan</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Web Developer</span></p>
                                            <p><span class="title-s">Email: </span> <span>hansenjonatann@gmail.com</span>
                                            </p>
                                            <p><span class="title-s">Phone: </span> <span>+62 812-7649-3348</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>HTML</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP</span> <span class="pull-right">60%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Bootstrap</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Laravel</span> <span class="pull-right">45%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Hi, my name is Hansen Jonatan, I am a college student majoring in information
                                        systems at Batam International University. My dream is to become a full stack web
                                        developer
                                    </p>
                                    <p class="lead">
                                        I do not have experience working in the IT field, but I am interested in the IT
                                        field, so I learned it self-taught and academically on campus, my way of learning is
                                        by learning while implementing it so that it can be understood
                                    </p>
                                    <blockquote>"No one lives alone here, we all need each other"</blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
