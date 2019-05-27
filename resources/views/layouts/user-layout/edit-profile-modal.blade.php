<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white text-center col-12" id="exampleModalCenterTitle">Edit Profile</h5>
            </div>

            <div class="modal-body">
{{--                change the method and route later--}}
                <form method="POST" action="{{ route('users.update' , [ Auth::user()->id ] ) }}">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="form-group">

                        <div class="row">

                            <div class="col-4">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-8">

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
                    </div>


                    <div class="form-group">

                        <div class="row">
                            <div class="col-4">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-8">

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
                    </div>


                    <div class="form-group">

                        <div class="row">

                            <div class="col-4">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-8">

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

                    </div>

                    <div class="form-group">

                        <div class="row">

                            <div class="col-4">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="col-8">

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

                    </div>


                    <div class="form-group">

                        <div class="row">

                            <div class="col-4">
                                <label for="profession">Profession</label>
                            </div>
                            <div class="col-8">
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

                    </div>


                    <div class="form-group">

                        <div class="row">
                            <div class="col-4">
                                <label for="password">Password</label>
                            </div>

                            <div class="col-8">

                                <input id="edit-profile-password" placeholder="Password *" type="password" class="form-control @error('password') is-invalid @enderror" min="11" name="password" autocomplete="new-password">
                                <span class="text-muted">(Leave blank if you don't want to change.)</span> <br>
                                <span class="edit-profile-pass-error text-danger"></span><br/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                    </div>


                    <div class="form-group">

                        <div class="row">

                            <div class="col-4">
                                <label for="password">Confirm Password</label>
                            </div>

                            <div class="col-8">
                                <input id="edit-profile-password-confirm" placeholder="Confirm Password *" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                <span class="edit-profile-passconf-error text-danger"></span><br/>
                            </div>

                        </div>

                    </div>


                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button id="profile-edit-submit-btn" type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>