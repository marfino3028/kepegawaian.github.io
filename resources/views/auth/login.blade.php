
<html lang="en"><head>
  <link rel="icon" href="{{ asset('img/ybm.png') }}" width>
<meta charset="UTF-8">

<meta name="apple-mobile-web-app-title" content="">
<title>login</title>
<style>
@import url("https://fonts.googleapis.com/css?family=Nunito:400,600,700");
* {
  box-sizing: border-box;
}

body {
  font-family: "Nunito", sans-serif;
  color: rgba(0, 0, 0, 0.7);
}

.container {
  height: 190vh;
  background-image: url(assets/img/masjid.jpg); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.modal {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 60px;
  background: rgba(51, 51, 51, 0.5);
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.modal-container {
  display: -webkit-box;
  display: flex;
  max-width: 720px;
  width: 100%;
  border-radius: 10px;
  overflow: hidden;
  position: absolute;
  opacity: 0;
  pointer-events: none;
  -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
  background: #fff;
  -webkit-transform: translateY(100px) scale(0.4);
          transform: translateY(100px) scale(0.4);
}
.modal-title {
  font-size: 26px;
  margin: 0;
  font-weight: 400;
  color: #55311c;
}
.modal-desc {
  margin: 6px 0 30px 0;
}
.modal-left {
  padding: 60px 30px 20px;
  background: #fff;
  -webkit-box-flex: 1.5;
          flex: 1.5;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
  -webkit-transform: translateY(80px);
          transform: translateY(80px);
  opacity: 0;
}
.modal-button {
  color: #7d695e;
  font-family: "Nunito", sans-serif;
  font-size: 18px;
  cursor: pointer;
  border: 0;
  outline: 0;
  padding: 10px 40px;
  border-radius: 30px;
  background: white;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.16);
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.modal-button:hover {
  border-color: rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.8);
}
.modal-right {
  -webkit-box-flex: 2;
          flex: 2;
  font-size: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  overflow: hidden;
}
.modal-right img {
  background-color: #439797;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(2);
          transform: scale(2);
  -o-object-fit: cover;
     object-fit: cover;
  -webkit-transition-duration: 1.2s;
          transition-duration: 1.2s;
}
.modal.is-open {
  height: 100%;
  background: rgba(51, 51, 51, 0.85);
}
.modal.is-open .modal-button {
  opacity: 0;
}
.modal.is-open .modal-container {
  opacity: 1;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  pointer-events: auto;
  -webkit-transform: translateY(0) scale(1);
          transform: translateY(0) scale(1);
}
.modal.is-open .modal-right img {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.modal.is-open .modal-left {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  -webkit-transition-delay: 0.1s;
          transition-delay: 0.1s;
}
.modal-buttons {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
          align-items: center;
}
.modal-buttons a {
  color: rgba(51, 51, 51, 0.6);
  font-size: 14px;
}

.sign-up {
  margin: 60px 0 0;
  font-size: 14px;
  text-align: center;
}
.sign-up a {
  color: #8c7569;
}

.input-button {
  padding: 8px 12px;
  outline: none;
  border: 0;
  color: #fff;
  border-radius: 4px;
  background: #437897;
  font-family: "Nunito", sans-serif;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
}
.input-button:hover {
  background: #439797;
}

.input-label {
  font-size: 11px;
  text-transform: uppercase;
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  letter-spacing: 0.7px;
  color: #8c7569;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.input-block {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  padding: 10px 10px 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 20px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.input-block input {
  outline: 0;
  border: 0;
  padding: 4px 0 0;
  font-size: 14px;
  font-family: "Nunito", sans-serif;
}
.input-block input::-webkit-input-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input::-moz-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input:-ms-input-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input::-ms-input-placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block input::placeholder {
  color: #ccc;
  opacity: 1;
}
.input-block:focus-within {
  border-color: #8c7569;
}
.input-block:focus-within .input-label {
  color: rgba(140, 117, 105, 0.8);
}

.icon-button {
  outline: 0;
  position: absolute;
  right: 10px;
  top: 12px;
  width: 32px;
  height: 32px;
  border: 0;
  background: 0;
  padding: 0;
  cursor: pointer;
}

.scroll-down {
  position: fixed;
  top: 50%;
  left: 50%;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-align: center;
          align-items: center;
  text-align: center;
  color: #7d695e;
  font-size: 32px;
  font-weight: 800;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.scroll-down svg {
  margin-top: 16px;
  width: 52px;
  fill: currentColor;
}

@media (max-width: 750px) {
  .modal-container {
    width: 90%;
  }

  .modal-right {
    display: none;
  }
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no" style="overflow: hidden;">
<!--div class="scroll-down" style="display: none;">SCROLL DOWN
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
<path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"></path>
</svg></div-->
<div class="container"></div>
<div class="modal is-open">
<div class="modal-container">
<div class="modal-left">
<h1 class="modal-title"><b><center>LOGIN</center></b></h1>
<br/><br/>

   <form method="POST" action="{{ route('login') }}">
                        @csrf
<div class="input-block">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="input-block">
 <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="modal-buttons">
<a href="" class="">Forgot your password?</a>
<button type="submit" class="input-button">{{ __('Login') }}</button>


</div>
</form>
</div>
<div class="modal-right">
<img src="{{ asset('assets/img/logo kepegawaian.png') }}">
</div>
<button class="icon-button close-button">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
<path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
</button>
</div>
<button class="modal-button">Click here to login</button>
</div>
<script id="rendered-js">
const body = document.querySelector("body");
const modal = document.querySelector(".modal");
const modalButton = document.querySelector(".modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
let isOpened = false;

const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal = () => {
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});

modalButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};
//# sourceURL=pen.js
    </script>

</body></html>