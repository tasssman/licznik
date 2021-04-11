<link href=<?php echo base_url('assets/css/signin.css'); ?> rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">
  <?php echo $message;?>
  <?php echo form_open('auth/login');?>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <!-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
      <?php
        $identity['class'] = 'form-control';
        echo form_input($identity);
      ?>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <!-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
      <?php
        $password['class'] = 'form-control';
        echo form_input($password);
      ?>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
      <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
      <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
      </label>
    </div>
    <?php echo form_submit('submit', lang('Auth.login_submit_btn'));?>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>