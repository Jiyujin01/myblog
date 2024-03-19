@extends('layouts.template')

@section('content')
<div class="jumbotron text-center content-container-contactme">
  <h1>Get in touch</h1>
  <p>Let's start a conversation that sparks innovation and collaboration!.</p>
  <br>
  <h6><i>You have the option to complete the contact form below by simply clicking the button.</i></h6>
  <div class="contactForm">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commentModal">
      <span class="glyphicon glyphicon-envelope"></span> Contact Form
    </button>
  </div>
</div>

<!-- Modal -->
<div id="commentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Message Form</h4>
      </div>
      <div class="modal-body">
        <!-- Your comment form goes here -->

          @csrf
          @method('post')
          <form method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Enter name">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <small><small><small style="color: red;">{{ $message }}</small></small></small>
            </span>
            @enderror
          </div>
          
          <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" placeholder="Enter email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                          <small><small><small style="color: red;">{{ $message }}</small></small></small>
                        </span>
                    @enderror
                </div> 

          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="3" placeholder="Enter message">{{ old('message') }}</textarea>
            @error('message')
            <span class="invalid-feedback" role="alert">
              <small><small><small style="color: red;">{{ $message }}</small></small></small>
            </span>
            @enderror
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button  type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container content-container">
    <div class="row">
    <div class="col-md-12 text-justify">
      <h1><b>Contact Me</b></h1>
      <p>Whether you find yourself grappling with intricate questions, harboring innovative ideas for potential collaboration, or simply desiring a casual
 conversation about the riveting realms of technology and programming, I extend a warm invitation to engage in discourse with me. I am readily available,
 poised to immerse myself in the exchange of ideas and information. Your queries, musings, or even a spontaneous chat are all welcomed with open arms, 
 as I relish the opportunity to connect with like-minded individuals who share a passion for the ever-evolving world of technology. Feel free to drop
 me a message at your convenience, and rest assured that I am committed to promptly responding, ensuring that our dialogue is both meaningful and enriching.

In the vast expanse of the digital landscape, communication serves as the linchpin that facilitates knowledge-sharing and collaborative exploration. 
My eagerness to converse extends beyond mere availability; it is a manifestation of my belief in the transformative power of dialogue within the tech 
community. Each message received is not just a correspondence but a potential avenue for the exchange of insights, the germination of new ideas, and the 
forging of connections that contribute to the collective growth of our technological ecosystem. So, whether you have burning questions, creative propositions,
 or simply wish to embark on a casual dialogue, consider this an open invitation to initiate a conversation that transcends boundaries and fosters a shared enthusiasm 
 for the dynamic world of technology and programming.</p>
 
 <p>If you'd like to get in touch with me, please use the following contact information:</p>
    </div>
 <div class="row">
    <div class="col-md-12 d-flex mx-auto >  
      <br>
      <br>
      <br>
      <a href="https://www.facebook.com/charles.carcallas.37" target="_blank" id="fb-link">
        <img src="image/facebook.png" alt="Facebook" id="fb-button">
      </a>
      <a href="https://www.facebook.com/messages/t/100015373818671" target="_blank" id="ms-link">
        <img src="image/messenger.png" alt="Messenger" id="ms-button">
      </a>
      <a href="https://instagram.com/chang_carcallas?igshid=MzMyNGUyNmU2YQ==" target="_blank" id="in-link">
        <img src="image/instagram.png" alt="Instagram" id="in-button">    
      </a>
      <img src="image/gmail.png" alt="Charles Carcallas">
      
      <p>Email: ccarcallas@sanagustinnhs.net</p>
      <p>Phone: (123) 456-7890</p>
      <br>
      <br>
    </div>
    
	</div>
  </div>
</div>
  @endsection