@extends('common')
@section('title', 'Register')
@section('websitecontent')

<head>
    <style>
       .contact{
        background-color: #1b1b1b;
       }

       .contact-form label{
        color: #c4c4c4;

       }
       .resume{
        background-color: #ee0707;
        border: 1px solid #c4c4c4;
        color: #c4c4c4;
        width: 13vw;
        height: 5vh;
       }
    </style>
</head>

<div class="container">

    {{-- banner section --}}

    <div class="banner">
        <div class="left-container">
            <h1>Hello</h1>
            <h2>I'm Rahul Rawat</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ratione nostrum tempore nobis culpa saepe suscipit quibusdam voluptatem, neque, omnis sequi harum id. Totam?</p>
        </div>
        <div class="right-container">
            <img src="{{ asset('images/dev.webp') }}" alt="">
        </div>
    </div>
</div>
<hr class="my-1">
{{-- spacer div --}}
<div class="spacer"></div>

{{-- about section start from here --}}
<div class="About">
    <h2 class="">About Me</h2>
</div>

<div class="section-About-me">
     {{-- about me section --}}
     <div class="About-me">
        <div class="About-me-left-container">
            <img src="{{ asset('images/aboutme.jpg') }}" alt="">
        </div>
        <div class="About-me-right-container">
            <div class="use">
                <h2>I'm Rahul Rawat</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laboriosam culpa nihil odio, harum eveniet vero totam perspiciatis sit minus! Iusto natus nostrum consequatur impedit magnam illo quia omnis soluta!Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ratione nostrum tempore nobis culpa saepe suscipit quibusdam voluptatem, neque, omnis sequi harum id. Totam?</p>
                <a href=""><button class="resume">Download Resume</button></a>
            </div>
           
        </div>
    </div>
</div>


<hr class="my-1">
{{-- spacer div --}}
<div class="spacer"></div>

{{-- project section start from here --}}
<div class="About">
    <h2 class="">Projects</h2>
</div>

<div class="project-section">
        <div class="main">
        <div class="first">
            <h1>Hello</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
        </div>
        <div class="second">
            <h1>Hello</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
        </div>
        <div class="third">
            <h1>Hello</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
        </div>
    </div>
</div>

<div class="project-section">
    <div class="main">
    <div class="first">
        <h1>Hello</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
    </div>
    <div class="second">
        <h1>Hello</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
    </div>
    <div class="third">
        <h1>Hello</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet dignissimos doloremque, et architecto, obcaecati incidunt nostrum, fuga voluptate error non deserunt. Placeat, dolores deserunt!</p>
    </div>
</div>
</div>


<hr class="my-1">
{{-- spacer div --}}
<div class="spacer"></div>

{{-- project section start from here --}}
<div class="About">
    <h2 class="">Contact Me</h2>
</div>
<div class="spacer"></div>

<div class="contact-me">
    <div class="contact-main">
    <div class="contact-img">
        <img src="{{ asset('images/contact.png') }}" alt="">
    </div>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contact-form">
    <form method="POST" action="/contact" id="contactForm">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <br>
        <div class="submit-button">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
    </form>
    </div>
</div>
</div>
<!-- JavaScript to show modal after form submission -->
{{-- 
<section class="vh-70 contact">
  <div class="mask d-flex align-items-center h-70 gradient-custom-3">
    <div class="container h-70">
      <div class="row d-flex justify-content-center align-items-center h-70">
        <div class="col-18 col-md-18 col-lg-18 col-xl-18">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Contact Me</h2>
              
              @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

              <form method="POST" action="/contact" id="contactForm">
                @csrf
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text"  id="name" name="name"  class="form-control form-control-lg @error('name') is-invalid @enderror"" value="{{ old('name') }}"/>
                  
				  @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"" />
                 
				  @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
                </div>

               <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>

             

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@endsection
