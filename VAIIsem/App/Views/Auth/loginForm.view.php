<?php /** @var Array $data */ ?>
<script src="public/js/loginForm.js"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <?php if ($data['error'] != "") {?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Nesprávne prihlasovacie údaje.<strong>
                    </div>
                <?php } ?>
                <?php if ($data['note'] != "") {?>
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Registrácia úspešná.</strong>
                    </div>
                <?php } ?>

                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Prihlásenie</h5>
                    <form method="post" action="?c=auth&a=login" style="display: inline">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="login" placeholder="name@example.com" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Heslo</label>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" id="submit" type="submit">Prihlásenie
                            </button>
                        </div>
                        <hr class="my-4">
                        <p style="justify-content: center">Ešte nie si zaregistrovaný? Vytvor si účet!</p>
                        <div class="d-grid mb-2">
                            <button href="?c=auth&a=registerForm"  class="btn btn-primary btn-login text-uppercase fw-bold" type="button">
                                Registrácia
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
