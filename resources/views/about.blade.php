@extends('shell')

@section('content')
    <h1>About</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="ide-image">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3>My IDE</h3>
            <ul class="home-list">
              <li>An old 27" Citizen TV as a second monitor</li>
              <li>Asus Republic of Gamers Laptop:</li>
              <ul class="home-list inside">
                <li>Intel Core i7 7700HQ @ 2.8GHz</li>
                <li>16GB RAM</li>
                <li>1TB HD & 128GB SSD</li>
                <li>Ubuntu 18.04 LTS & Windows 10</li>
              </ul>
              <li>Text Editor of Choice: Atom</li>
              <li>CLI Tool: <a href="https://gnometerminator.blogspot.com/p/introduction.html" target="_blank">Terminator</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="tabs">
                <ul class="row">
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-1">Why Web Development?</a></li>
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-2">Future Goals</a></li>
                </ul>
                <div id="tabs-1">
                    <ul class="home-list">
                        <li>A stepping stone to future goals</li>
                        <li>Expand on previous experience and fill in some gaps while continuing to learn</li>
                        <li>Develop the credibility that comes with certification & experience</li>
                        <li>Programming is a skill that is increasingly in demand</li>
                        <li>Job and freelancing opportunities</li>
                        <li>Possiblities to work remotely at times</li>
                        <li>I like to talk nerdy</li>
                    </ul>
                </div>
                <div id="tabs-2">
                    <ul class="home-list">
                        <li>Gain valuable work experience with entrepreneurial companies developing online based platforms</li>
                        <li>Cover (almost) every Tool song on the drums and post it on YouTube</li>
                        <li>Buy property in Sicamous B.C.</li>
                        <li>Be alive long enough to see the Oilers win the Stanley Cup again</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
