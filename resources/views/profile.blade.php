@include('include.header')
@include('include.sidebar')
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 updateprofile-outer">
                                <form class="update-form" method="post" action="" enctype="multipart/form-data">
                                    {{-- <div class="profile-image">
                                        <img src="" alt="">
                                    </div> --}}
                                    <fieldset>
                                        <legend>Update Profile</legend>
                                        <div class="outer">
                                            <div class="right">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control">
                                            </div>
                                            <div class="right">
                                                <label for="email">Email id</label>
                                                <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                        </div>
                                        <div class="outer">
                                            <div class="right">
                                                <label for="no">Phone Number</label>
                                                <input type="number" id="no" name="phone"class="form-control">
                                            </div>
                                           <div class="right">
                                                <label for="dob">Date Of Birth</label>
                                                <input type="date" id="dob" name="dob"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="outer">
                                            <div class="right">
                                                <label class="w-100" for="gen">Gender</label>
                                                <input type="radio" id="gen" name="gender" value="male">Male
                                                <input type="radio" id="gen" name="gender" value="female">Female
                                                <input type="radio" id="gen" name="gender" value="other">Other
                                            </div>
                                            <div class="right">
                                            <label for="state">State</label>
                                            <select class="form-control" name="state">
                                                    <option value="">---select---</option>                                                      
                                            </select>
                                            </div>
                                        </div>
                                        <div class="outer">
                                            <div class="right">
                                                <label for="city">City</label>
                                                <input type="text" id="city" name="city" class="form-control">
                                            </div>
                                            <div class="right">
                                                <label for="file">Photo</label>
                                                <input type="file" id="file"  name="profile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="outer">
                                            <input type="submit" value="save">
                                        </div>
                                </form>
                            </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
        </div>
    </div>
</section>
@include('include.footer')
