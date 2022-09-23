@extends('layouts.app')
@section('content')
    <div class="">
        <div class="container-fluid bg-light py-5">
            <div class="col-md-6 m-auto text-center">
                <h1 class="h1">Contact Us</h1>
                <p>
                    Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.056575741506!2d-51.405788085240594!3d-22.123818515962018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f4472e8c9fe7%3A0x854f89b7f88252b1!2zUHJhw6dhIGRvIENlbnRlbsOhcmlv!5e0!3m2!1spt-BR!2sbr!4v1656524533552!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container py-5">
            <div class="row py-5">
                <form class="col-md-9 m-auto" method="post" role="form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputname">Name</label>
                            <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputemail">Email</label>
                            <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputsubject">Subject</label>
                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <label for="inputmessage">Message</label>
                        <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                    </div>
                    <div class="row">
                        <div class="col text-end mt-2">
                            <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection