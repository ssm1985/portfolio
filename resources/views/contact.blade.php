@extends('shell')

@section('content')
    <h1>Contact</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="" action="/contact" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label id="message">Message:</label>
                    <textarea id="message" name="message" style="width: 100%; height: 200px;"></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
@endsection
