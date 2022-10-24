

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Zaloguj się do konta administratora</h2>
                    
                    <form class="text-left clearfix mt-50" method="post" action="<?php echo ROOT_URL; ?>users/authenticate">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control"  placeholder="login">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-main" >Zaloguj się</button>
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</section>
