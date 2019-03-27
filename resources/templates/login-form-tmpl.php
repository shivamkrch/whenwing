<section class="form-sec">
    <form id="cust-login-form" action="/handlers/formhandle/cust-login/" method="POST">
        <div>
            <p class="form-title">Sign in</p>
            <div>
                <span class="input-title">Email</span>
                <span class="error error-email"></span>
            </div>
            <input type="text" name="cust-email" class="inp-text-1">
            <div>
			    <span class="input-title">Password</span>
                <span class="error error-password"></span>
            </div>
            <input type="Password" name="cust-password" class="inp-text-1">
            <div class="btn cust-login-btn">Sign in</div>
            <div class="social-wrap">
                <div class="line">or login with</div>            
                <a href="javascript:void(0);" class="btn-ib fb-login-btn"><span class="fb-icon"></span>facebook</a>
                <div class="btn-ib gplus-login-btn"><span class="gplus-icon"></span>Google</div>
            </div>
            
            <div id="status">
            </div>
            <div class="acc-link"><a href="/sign-up">Dont have an account? Create New Account</a></div>
        </div>
    </form>
</section>
