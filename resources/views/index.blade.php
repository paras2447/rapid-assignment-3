@extends('layout.main')
@section('section')
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-primary bg-secondary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item"></li>
                        <a class="nav-link" href="/showContact">Show Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <div class="container">
        <h1>This is Home Page</h1>
        <h3>This is my third assignment of Rapid Web Development</h3>
        {{-- <p>Extending class assignment to assignment 3</p> --}}

    </div>
@endsection
