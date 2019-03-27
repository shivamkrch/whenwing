<section class="form-sec">
<form id="provider-form" action="/handlers/formhandle/become-provider/" method="POST" enctype="multipart/form-data">
        <div class="signup-1">
            <p class="form-title"><span>Showroom/Shop </span> Signup</p>
            <div>
                <span class="input-title">Name</span>
                <span class="error error-prov-name"></span>
            </div>
            <input type="text" name="prov-name"  class="inp-text-1 provider-name">
            <div>
                <span class="input-title">Age</span>
                <span class="error error-prov-age"></span>
            </div>
            <input type="text" name="prov-age"  class="inp-text-1 provider-age">
            <div>
                <span class="input-title">Mobile Numbar</span>
                <span class="error error-prov-contact"></span>
            </div>
            <input type="text"  name="prov-contact" class="inp-text-1 provider-contact">
            <div class="btn signup-next-btn">Next</div>
        </div>
        <div class="signup-2">
            <p class="form-title"><span>Service Provider</span> Signup</p>
            <div>
                <span class="input-title">Showroom/Shop</span>
                <span class="error error-prov-service"></span>
            </div>
            <select  name="prov-service" class="inp-text-1 inp-sel provider-service">
                <option value="" disabled selected>Showroom/Shop</option>
                <option>Carpainter</option>
                <option>Painter</option>
                <option>Raj Mistri</option>
                <option>Plumber</option>
                <option>Electrician</option>
                <option>Polisher</option>
                <option>Glass men</option>
                <option>Renovation</option>
                <option>Architect</option>
                <option>Builder</option>
                <option>Interior Designer(Home)</option>
                <option>Internet Provider</option>
                <option>Washermen</option>
                <option>CA</option>
                <option>Pundit/Puja</option>
                <option>Photographer</option>
                <option>Web Designer &amp; Developer</option>
                <option>Concrete Provider</option>
                <option>Driver</option>
                <option>Yoga Trainer</option>
                <option>Dietician</option>
                <option>Naukar</option>
                <option>Security Guard</option>
                <option>Dancer</option>
                <option>Gardener</option>
                <option>Wedding Planner</option>
                <option>Party Planner</option>
                <option>Event Photographer</option>
                <option>Bridal Make-up Artist</option>
                <option>Hair Style &amp; Make-up</option>
                <option>Party Caterers</option>
                <option>Wedding Caterers</option>
                <option>Wedding Florist &amp; Decoraters</option>
                <option>Halwai</option>
                <option>Tent &amp; Decorators</option>
                <option>Mehandi Artist</option>
            </select>
            <div>
                <span class="input-title">Address</span>
                <span class="error error-prov-addr"></span>
            </div>
            <input type="text" name="prov-addr"  class="inp-text-1 provider-addr">
            <div>
                <span class="input-title">Showroom/Shop Type</span>
                <span class="error error-prov-workexp"></span>
            </div>
            <select  name="prov-workexp" class="inp-text-1 inp-sel provider-workexp">
                <option value="" disabled selected>Choose Showroom/shop Type</option>
                <option>New</option>
                <option>Old</option>
            </select>
            <div>
                <span class="input-title">Time</span>
                <span class="error error-prov-record"></span>
            </div>
            <input type="date"  name="prov-record" class="inp-text-1 provider-record">
            <div>
                <span class="input-title">Your Product Listing</span>
                <span class="error error-prov-about"></span>
            </div>
            <textarea   name="prov-about" class="inp-text-1 provider-about"></textarea>
            <div>
                <span class="input-title">Add New</span>
                <span class="error error-prov-speciality"></span>
            </div>
            <input type="text"  name="prov-speciality" class="inp-text-1 provider-speciality">
    
            <div>
                <span class="input-title">Upload PriceList Copy</span>
                <span class="error error-prov-passbook"></span>
            </div>
            <input type="file" name="prov-passbook" class="provider-passbook">
            <div>
                <div class="btn signup-btn">Submit</div>
                <div class="btn signup-prev-btn">&larr;</div>
            </div>
        </div>
</form>
</section>