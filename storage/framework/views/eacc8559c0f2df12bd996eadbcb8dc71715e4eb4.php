<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8/>
  <meta http-equiv=x-ua-compatible content="ie=edge"/>
  <title>Sign Up</title>
  <meta name=description content=""/>
  <meta name=viewport content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
              <ul id=nav class="navbar-nav ms-auto">
                <li class=nav-item>
                  <a href="/" aria-label="Toggle navigation">Home</a>
                </li>

                <li class=nav-item>
                  <a class="dd-menu active collapsed">Pages</a>
                  <ul class="sub-menu collapse" id=submenu-1-1>

                    <li class=nav-item>
                      <a href="/signin" >Sign In</a>
                    </li>
                    <li class="nav-item active">
                      <a href="/signup" >Sign Up</a>
                    </li>
                </li>
                <li class=nav-item>

                  </ul>
                </li>
              </ul>

            </div>
            <div class=button>
              <a href="/" class=btn>Get started</a>
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
          <h1 class=page-title>Sign Up</h1>
          <ul class=breadcrumb-nav>
            <li>
              <a href="/">Home</a>
            </li>
            <li>Sign Up</li>
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
        <form method="POST" action="/signup" class="card login-form inner-content">
          <?php echo csrf_field(); ?>
          <div class=card-body>
            <div class=title>
              <h3>Sign Up Now</h3>
              <p>Use the form below to create your account.</p>
            </div>
            <div class=alt-option>
              <span class=small-title>Sign up with your work email</span>
              <a href="javascript:void(0)" class=option-button>
                <img src="<?php echo e(asset('/assets/images/account-login/google.png')); ?>">
                Sign
                Up With Google
              </a>
            </div>
            <div class=or>
              <span>Or</span>
            </div>
            <div class=input-head>
              <div class=row>
                <div class="col-lg-6 col-12">
                  <div class="form-group input-group">
                    <label>
                      <i class="glyphicon glyphicon-user" ></i>
                    </label>
                    <input class=form-control type=text placeholder="Your name"  name="name">
                    <?php $__errorArgs = ['name'];
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
                <div class="col-lg-6 col-12">
                  <div class="form-group input-group">
                    <label>
                      <i class="fa fa-envelope"></i>
                    </label>
                    <input class=form-control type=email placeholder="Your email" name="email">
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
                </div>
              </div>
              <div class="form-group input-group">
                <label>
                  <i class="fa fa-lock" ></i>
                </label>
                <input class=form-control  type=password placeholder="Your password"  name="password">
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
              <div class="form-group input-group">
                <label>
                  <i class="fa fa-lock" ></i>
                </label>
                <input class=form-control type=password placeholder="Confirm password"  name="password_confirmation">
                <?php $__errorArgs = ['password_confirmation'];
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
            <div class=button>
              <button class=btn type=submit>Create Account</button>
            </div>
            <h4 class=create-account>
              Already have an account?
              <a href="/signin">Sign In</a>
            </h4>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php /**PATH /Users/sergeybegrakyan/MY_PROJECT/resources/views/users/signup.blade.php ENDPATH**/ ?>