<section class="form-sec">
    <form id="cust-signup-form" class="" action="/handlers/formhandle/cust-signup/" method="POST">
        <div>
            <p class="form-title">Create New Account</p>
            <div>
                <span class="input-title">Full Name</span>
                <span class="error error-name"></span>
            </div>
			<input type="text" name="cust-name" class="inp-text-1">
            <div>
                <span class="input-title">Email</span>
                <span class="error error-email"></span>
            </div>
            <input type="text" name="cust-email" class="inp-text-1">
            <div>
                <span class="input-title">Mobile</span>
                <span class="error error-mobile"></span>
            </div>
			<input type="text" name="cust-mobile" class="inp-text-1">
			<div>
                <span class="input-title">Password</span>
                <span class="error error-password"></span>
            </div>
			<input type="Password" name="cust-password" class="inp-text-1">
            <div class="btn cust-signup-btn">Sign Up</div>
            <div class= "social-wrap">
                <div class="line">or signup with</div>
                <div class="btn-ib fb-login-btn"><span class="fb-icon"></span>facebook</div>
                <div class="btn-ib gplus-login-btn"><span class="gplus-icon"></span>Google</div>
            </div>
            <div class="acc-link"><a href="/login">Already have an account? Sign In</a></div>
        </div>
    </form>
</section>
