<!DOCTYPE html>
<html class=no-js lang=zxx>
<head>
  <meta charset=utf-8/>
  <meta http-equiv=x-ua-compatible content="ie=edge"/>
  <title>Sign In</title>
  <meta name=description content=""/>
  <meta name=viewport content="width=device-width, initial-scale=1"/>
  <link rel="shortcut icon" type="image/x-icon"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel=stylesheet  href="<?php echo e(asset('/assets/css/A.main.css.pagespeed.cf.87zbbfFnHS.css')); ?>" >
  <link rel=stylesheet  href="<?php echo e(asset('/assets/css/A.bootstrap.min.css+LineIcons.3.0.css+animate.css+tiny-slider.css+glightbox.min.css,Mcc.vhpB8N0AXl.css.pagespeed.cf.2orpiX3RYZ.css')); ?>" >
  
</head>
<body>

<header class="header navbar-area">
  <div class=container>
    <div class="row align-items-center">
      <div class=col-lg-12>
        <div class=nav-inner>

          <nav class="navbar navbar-expand-lg">
            <a class=navbar-brand href="/">
            </a>
            <button class="navbar-toggler mobile-menu-btn" type=button>
              <span class=toggler-icon></span>
              <span class=toggler-icon></span>
              <span class=toggler-icon></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
              <ul id=nav class="navbar-nav ms-auto">
                <li class=nav-item>
                  <a href="/" aria-label="Toggle navigation">Home</a>
                </li>
                    <li class=nav-item>
                      <a href="/signup">Sign Up</a>
                    </li>

                  </ul>
                </li>
              </ul>
            </div>

          </nav>

        </div>
      </div>
    </div>
  </div>
</header>

<div class=breadcrumbs>
  <div class=container>
    <div class="row align-items-center">
      <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
        <div class=breadcrumbs-content>
          <h1 class=page-title>Sign In</h1>
          <ul class=breadcrumb-nav>
            <li>
              <a href="/">Home</a>
            </li>
            <li>Sign In</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="account-login section">
  <div class=container>
    <div class=row>
      <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
        <form method="POST" action="/users/authenticate"  class="card login-form inner-content">
          <?php echo csrf_field(); ?>
          <div class=card-body>
            <div class=title>
              <h3>Sign In Now</h3>
              <p>Sign in by entering the information below.</p>
            </div>
            <div class=input-head>
              <div class="form-group input-group">
                <label>
                  <i class="fa fa-envelope"></i>
                </label>
                <input class=form-control class="fa fa-envelope" type="email" id=reg-email  placeholder="Enter your email"  name="email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text -xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group input-group">
                <label>
                  <i class="fa fa-lock" ></i>
                </label>
                <input class=form-control type="password" id=reg-pass placeholder="Enter your password" name="password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text -xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between bottom-content">
              <div class=form-check>
                <input type=checkbox class="form-check-input width-auto" id=exampleCheck1>
                <label class=form-check-label >Remember me</label>
              </div>
            </div>
            <div  class=button>
              <button class=btn type="submit">  Sign In </button>

            </div>
            <div class=or>
              <span>Or</span>
            </div>
            <div class=alt-option>
              <span class=small-title>Sign in with your work email</span>
              <a  class=option-button>
                <img src="<?php echo e(asset('/assets/images/account-login/google.png')); ?>">
                Sign
                In With Google
              </a>
            </div>
            <h4 class=create-account>
              Don't have an account?
              <a href="/signup">Sign Up Here</a>
            </h4>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php /**PATH /Users/sergeybegrakyan/MY_PROJECT/resources/views/users/signin.blade.php ENDPATH**/ ?>