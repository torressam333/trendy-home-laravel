<!--Contact Section-->
<div id="contact">
    <div class="contact-form">
        <h3 class="heading-contact">Contact Form</h3>
        <p class="lead-contact">If you would like to get in touch to schedule a consultation,
            please fill out the form below.</p>

        <hr class="socket2">
        <form action="{{ action('MessagesController@submit') }}" accept-charset="UTF-8" method="POST">
            @csrf
            <!--Errors variable used from form validation -->
                @if($errors->any())
                    <div class="notification is-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="input-fields" onload="telephone()">
                <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}"
                       placeholder="Your name" value="{{old('name')}}">
                <input type="email" name="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}"
                       placeholder="Enter your email" value="{{old('email')}}">
                <input type="text" onkeydown="telephone()" id="phone" name="phone" class="input {{$errors->has('phone') ? 'is-danger' : ''}}"
                       placeholder="Phone Number" value="{{old('phone')}}">
                <input type="text" name="subject" class="input {{$errors->has('subject') ? 'is-danger' : ''}}"
                       placeholder="Subject" value="{{old('subject')}}">
                <div class="msg">
                    <textarea name='message' placeholder="How may we help you?"
                              class="{{$errors->has('message') ? 'is-danger' : ''}}">{{old('message')}}</textarea>
                    <button class="btn btn-outline-light btn-sm btn-block" type="submit">Send</button>
                </div>
            </div>
        </form>

    </div>
</div>
<!--End Contact Section-->
