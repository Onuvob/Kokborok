
<div class="emp-profile">

        <div class="row align-items-center text-md-left text-center">

            <div class="col-md-4">
                <div class="profile-img">
                    <img width="150px" height="150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
{{--                    <div class="file btn btn-lg btn-primary">--}}
{{--                        Change Photo--}}
{{--                        <input type="file" name="file"/>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="profile-head">
                    <h5>
                        Kshiti Ghelani
                    </h5>
                    <h6>
                        Web Developer and Designer
                    </h6>

                </div>
            </div>

            <div class="col-md-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Edit Profile
                </button>

{{--                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>--}}
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 text-center mb-3">
                <div class="profile-work">
                    <p>Social Networks</p>
                    <a href=""><i class="fab fa-facebook-square" style="color: #3b5998"> Facebook</i></a><br/>
                    <a href=""><i class="fab fa-twitter-square" style="color: #00acee"> Twitter</i></a> <br>
                    <a href=""><i class="fab fa-instagram" style="color: #3f729b"> Instagram</i></a> <br>
                    <a href=""><i class="fab fa-linkedin" style="color: #0077B5"> LinkedIn</i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 profile-about-head">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">
                                <div class="col">
                                    <label>Name</label>
                                </div>
                                <div class="col">
                                    <p>Kshiti Ghelani</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Email</label>
                                </div>
                                <div class="col">
                                    <p>kshitighelani@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Phone</label>
                                </div>
                                <div class="col">
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Profession</label>
                                </div>
                                <div class="col">
                                    <p>Web Developer and Designer</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col">
                                    <label>Experience</label>
                                </div>
                                <div class="col">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>English Level</label>
                                </div>
                                <div class="col">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Availability</label>
                                </div>
                                <div class="col">
                                    <p>6 months</p>
                                </div>
                            </div>

                            <div class="text-md-left text-center mb-2">
                                <!-- Button trigger -->
                                <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Add Word Meaning') }}</a>
                            </div>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addWordModal">
                                Add Word
                            </button>

                        </div>



                    </div>
                </div>

            </div>

        </div>

</div>

{{--Editing user profile--}}
@include('layouts.user-layout.edit-profile-modal')

{{--Admin modal for adding new word with details--}}
@include('layouts.user-admin.add-word')