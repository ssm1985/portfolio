@extends('shell')

@section('content')
    <h1>Projects</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project sicamous">
                <a href="https://www.mysicamous.com">
                    <div class="slider">
                        <h4>MySicamous.com</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>Utilizes Wordpress CMS.</li>
                            <li>Started as a passion project to experiment with HTML, CSS, and WP prior to attending SAIT.</li>
                            <li>Social media integration.</li>
                            <li>Brings in RSS feeds for additional posts from local sources</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project portfolio">
                <a href="/proj/portfolio/index.html">
                    <div class="slider">
                        <h4>Responsive Portfolio Site</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>Fully responsive HTML/CSS site built from scratch.</li>
                            <li>Intended to be used as an idea for a portfolio site.</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project hitbeats">
                <a href="http://www.hitbeats.com">
                    <div class="slider">
                        <h4>HitBeats.com</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>Developed fully responsive landing page from scratch for EDM producer.</li>
                            <li>Directly integrated Facebook & Instagram feeds.</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project rock-paper-scissors">
                <a href="/proj/rock-paper-scissors/Assignment3.html">
                    <div class="slider">
                        <h4>Rock, Paper, Scissors, Dynamite</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>First project using JavaScript to build a game.</li>
                            <li>jQuery used for results box.</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project laravel">
                <a href="#">
                    <div class="slider">
                        <h4>SpencerMcLeod.com</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>Built using Laravel framework.</li>
                            <li>Blog format.</li>
                            <li>Create, edit, & delete posts once logged in.</li>
                            <li>Login/Logout capabilities.</li>
                            <li>jQuery & JavaScript used on mobile menu.</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="project acupuncture">
                <a href="http://www.sicamousacupuncture.com">
                    <div class="slider">
                        <h4>SicamousAcupuncture.com</h4>
                        <p>Details...</p>
                        <br><br><br>
                        <ul>
                            <li>Built Wordpress site for local acupuncturist in Sicamous.</li>
                            <li>Google Maps integration.</li>
                            <li>RSS feeds from acupuncture sources appear in news.</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
