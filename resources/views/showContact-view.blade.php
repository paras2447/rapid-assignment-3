@extends('layout.main')
@section('section')
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-primary bg-light">
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
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item"></li>
                        <a class="nav-link" href="/showContact">Show Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="container">
        <br>
        <h3 class="text-center">This is show contact page</h3>
        <br>
        <br>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Message</th>
                <th scope="col">Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($feedback as $fb)
                <tr>
                  <th scope="row">{{$fb->id}}</th>
                  <td>{{$fb->name}}</td>
                  <td>{{$fb->email}}</td>
                  <td>{{$fb->address}}</td>
                  <td>{{$fb->city}}</td>
                  <td>{{$fb->state}}</td>
                  <td>{{$fb->message}}</td>
                  <td>
                      <a href="{{route('showContact.edit', ['id' => $fb->id])}}">
                          <button>Edit</button>
                      </a>
                      <a href="{{route('showContact.delete', ['id' => $fb->id])}}">
                          <button>Delete</button>
                      </a>
                  </td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
