<section id="contact" class="contact">
    <div class="section-title container">
        <div class="section-title">
            <h2>@lang('public.Contact')</h2>
            <span class="d-flex">
                <span class="C-black"></span>
                <span class="C-red"></span>
                <span class="C-gold"></span>
            </span>
            <h1>@lang('public.Let’s')  <span class='connect'>@lang('public.connect')</span> </h1>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>@lang('public.Location')</h4>
                        <p>fes</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.3228303833303!2d-4.992723767000938!3d34.031616645849105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b9c36e71aa1%3A0xe0ce78950909a0d3!2satlas!5e1!3m2!1sen!2sma!4v1709428374426!5m2!1sen!2sma"
                        frameborder="0"
                        width="400px"
                        height="300px"
                        allowfullscreen
                        title="Fez Location">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                <form id="contact-form" action="/post-mail" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::has('redirectAfter') && Session::get('redirectAfter'))
                    <script>
                        setTimeout(function(){
                            window.location.href = "{{ url()->previous() }}";
                        }, {{ Session::get('redirectDelay',2) * 1000 }});
                    </script>
                @endif
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">@lang('public.Your Name')</label>
                            <input type="text" name="name" class="form-control" required />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">@lang('public.Your Email')</label>
                            <input type="email" name="email" class="form-control" required pattern=".+@gmail\.com"/>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">@lang('public.Subject')</label>
                        <input type="text" name="subject" class="form-control" required />
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">@lang('public.Message')</label>
                        <textarea name="message" class="form-control" rows="10" required></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br />
                    <div class="d-flex justify-center align-center">
                        <button class="send" type="submit">
                            <div class="svg-wrapper-1">
                              <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                  <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                </svg>
                              </div>
                            </div>
                            <span>@lang('public.Send')</span>
                          </button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</section>
