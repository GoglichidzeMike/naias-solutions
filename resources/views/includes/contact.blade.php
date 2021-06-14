<section class="w-full mb-20" id="contact">
  <div class="w-97 lg:w-11/12 xl:w-9/12 mx-auto bg-white rounded shadow-xl px-2 p-6 lg:px-6">
    <div class="mb-2">
      <h3 class="font-bold text-3xl text-dark filter drop-shadow-md tracking-wider text-center">Contact Us</h2>
      <p class="text-dark text-center mx-auto w-full lg:w-1/2">You can reach us through this form and our team will get back to you shortly!</p>
    </div>
      <div class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-4/12 flex justify-center items-center flex-col mt-6 lg:mt-0">
          <div class="mb-6">
            <div class="flex items-center">
              <img src="/image/contact/mail-dark.png" alt="email icon" class="w-5 h-5 mr-2">
              <p class="text-dark mr-2">Email:</p>
              <p class="text-dark font-semibold hover:text-primary transition-colors duration-200 ease-in"><a href="mailto:info@NaiasSolutions.com" rel="noopener noreferrer" target="_blank">info@NaiasSolutions.com</a></p>
            </div>
            <div class="flex items-center">
              <img src="/image/contact/website-dark.png" alt="website icon" class="w-5 h-5 mr-2">
              <p class="text-dark mr-2">Website:</p>
              <p class="text-dark font-semibold hover:text-primary transition-colors duration-200 ease-in"><a href="http://naiassolutions.com/" target="_blank" rel="noopener noreferrer">https://NaiasSolutions.com</a></p>
            </div>
          </div>
            <img src="/image/contact/contact.svg" alt="Contact illustration" class="w-80 -auto mx-auto">
        </div>

        <form action="{{route('contact')}}" method="POST" class="flex w-full lg:w-8/12 flex-col lg:flex-row">
          @csrf
          <div class="w-full lg:w-1/2">

            <label for="name" class="uppercase text-dark font-semibold tracking-widest text-sm">name</label>
            <div class="input_container relative mb-4">
              <input class="input" type="text" name="name" id="name" placeholder="Name" required  value="{{ old('name') }}">
              <img src="/image/contact/name.png" id="input_img" class="absolute bottom-101 left-3 w-5 h-5 opacity-75" alt="person icon">
            </div>
            <label for="email" class="uppercase text-dark font-semibold tracking-widest text-sm">email</label>
            <div class="input_container relative mb-4">
              <input class="input" type="email" name="email" id="email" placeholder="Email" required  value="{{ old('email') }}">
              <img src="/image/contact/mail.png" id="input_img" class="absolute bottom-101 left-3 w-5 h-5 opacity-75" alt="mail icon">
            </div>
            <label for="company" class="uppercase text-dark font-semibold tracking-widest text-sm">Company Name</label>
            <div class="input_container relative mb-4">
              <input class="input" type="text" name="company" id="company" placeholder="Company name"  value="{{ old('company') }}">
              <img src="/image/contact/company.png" id="input_img" class="absolute bottom-101 left-3 w-5 h-5 opacity-75" alt="company icon">
            </div>
            <label for="website" class="uppercase text-dark font-semibold tracking-widest text-sm">company website</label>
            <div class="input_container relative mb-4 lg:mb-0">
              <input class="input" type="text" name="website" id="website" placeholder="Company website"  value="{{ old('website') }}">
              <img src="/image/contact/website.png" id="input_img" class="absolute bottom-101 left-3 w-5 h-5 opacity-75" alt="website icon">
            </div>
          </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-between items-start">
              <div class="w-full lg:w-10/12">
                <label for="message" class="uppercase text-dark font-semibold tracking-widest text-sm">message</label>
                <textarea name="message" id="message" rows="8" class="p-2 w-full border border-dark rounded text-dark font-semibold focus:outline-none focus:ring-1 focus:ring-dark">{{ old('email') }}</textarea>
              </div>
              <div class="flex items-center mb-1">
                <span id="captchaImg" class="border border-dark rounded overflow-hidden mr-1">{!! Captcha::img('flat'); !!}</span>
                <button type="button" class="reload text-dark text-sm p-1 border border-gray-500 rounded cursor-pointer mr-1 " id="reload">↻</button>
                <input id="captcha" required type="text" class="border border-dark text-xs rounded py-1.5 text-dark font-semibold focus:outline-none focus:ring-1 focus:ring-dark" placeholder="Enter Captcha" name="captcha">
              </div>
              <button  type="submit" class="diag-btn flex items-center mx-auto lg:mx-0 tracking-widest bg-dark rounded px-4 py-2 text-white focus:outline-none focus:ring focus:ring-dark relative uppercase">send message! <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path id="icon" d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="#25283d"/></svg></=>
        </form>
      </div>
    </div>
    @if (session('status'))
      <div class="text-center text-xs animate-pulse text-red-500 font-bold my-4">
        {{ session('status') }} 
      </div>
    @endif
    @if (session('message'))
      <div class="text-center animate-pulse text-secondary font-bold my-4">
        {{ session('message') }} 
      </div>
    @endif

  <script>
    $('#reload').click(function () {
      $.ajax({
        type: 'GET',
        url: 'reload-captcha',
        success: function (data) {
        $("#captchaImg").html(data.captcha);
      }
      });
    });
</script>

</section>