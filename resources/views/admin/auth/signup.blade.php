<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.partials.head')

</head>

<body class="ms-body ms-dark-theme ms-logged-out">

  <!-- Setting Panel -->
  <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-paint"></i>
  </div>
  <div class="ms-settings-panel ms-d-block-lg">
    <div class="row">

      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Customize</h4>
        <div>
          <label class="ms-switch">
             <input type="checkbox" id="dark-mode">
             <span class="ms-switch-slider round"></span>
           </label>
          <span>Light Mode</span>
        </div>
        <div>
          <label class="ms-switch">
             <input type="checkbox" id="remove-quickbar">
             <span class="ms-switch-slider round"></span>
           </label>
          <span> Remove Quickbar </span>
        </div>
      </div>
      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Keyboard Shortcuts</h4>
        <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
        <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
        <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

      </div>

    </div>
  </div>

  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  

  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../dashboard/index.html"><img src="../../assets/img/m-logo-1.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
          <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
              <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value="">
              <i class="flaticon-search text-disabled"></i>
            </div>
          </form>
        </li>
        <li class="ms-nav-item">
          <a href="#" class="btn btn-primary mt-0">Login</a>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">

      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form class="needs-validation" novalidate="">
              <h1>Create Account</h1>
              <p>Please enter personal information to continue</p>
              <div class="form-row">
                <div class="col-md-6 ">
                  <label for="validationCustom01">First name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="John" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <label for="validationCustom02">Last name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Doe" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 ">
                  <label for="validationCustom03">Email Address</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="validationCustom03" placeholder="Email Address" required="">
                    <div class="invalid-feedback">
                      Please provide a valid email.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <label for="validationCustom04">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom04" placeholder="Password" required="">
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check pl-0">
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span> Agree to terms and conditions </span>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Create Account</button>
              <span class="d-block text-center my-4">Or</span>
              <button type="button" class="btn mt-4 d-block w-100 btn-social-login"> <img src="../../assets/img/others/facebook.png" alt="image"> <span>Signup with Facebook</span> </button>
              <button type="button" class="btn mt-4 d-block w-100 btn-social-login"> <img src="../../assets/img/others/google.png" alt="image"> <span>Signup with Google</span> </button>
              <p class="mb-0 mt-3 text-center">Already have an account? <a class="btn-link" href="default-login.html">Login</a> </p>
            </form>

          </div>
        </div>
      </div>

    </div>

  </main>

  <!-- SCRIPTS -->
  @incude('admin.partials.footer')

</body>

</html>
