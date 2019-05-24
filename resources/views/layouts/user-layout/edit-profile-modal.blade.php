<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white text-center col-12" id="exampleModalCenterTitle">Edit Profile</h5>

            </div>
            <div class="modal-body">
{{--                change the method and route later--}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="profile-img">
                        <img width="150px" height="150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    </div>



                    <hr>

                    <div class="row form-group ">
                        <div class="col">
                            <label for="name">Name</label>
                        </div>
                        <div class="col">

                            <input id="name" placeholder="Full Name *" type="text"
                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ Auth::user()->name }}{{ old('name') }} " required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col">
                            <label for="email">Email</label>
                        </div>
                        <div class="col">

                            <input id="email" placeholder="Email *" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ Auth::user()->email }}{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col">
                            <label for="address">Address</label>
                        </div>
                        <div class="col">

                            <input id="address" placeholder="Address *" type="text"
                                   class="form-control @error('address') is-invalid @enderror" name="address"
                                   value="{{ Auth::user()->address }}{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col">

                            <input type="text" minlength="11" name="phone"
                                   class="form-control @error('phone') is-invalid @enderror" placeholder="Your Phone *"
                                   value="{{ Auth::user()->phone }}{{ old('phone') }}" required autocomplete="phone" autofocus/>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label for="profession">Profession</label>
                        </div>
                        <div class="col">
                            <input type="text" name="profession"
                                   class="form-control @error('profession') is-invalid @enderror" placeholder="Profession *"
                                   value="{{ Auth::user()->profession }}{{ old('profession') }}" required autocomplete="profession" autofocus/>

                            @error('profession')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>