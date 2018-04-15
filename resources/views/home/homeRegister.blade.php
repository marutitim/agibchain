
 <div class="abc-row abc-main">
                                      <div class="abc-main-login abc-main-center">
                                          <div class="agribchain-register-form-signup">
                                              <img alt="" class="img-valign" height="50px" src="{{url('templates/themes/rose/images/buyer-icon.png')}}" width="50px" />
                                              <div class="agribchain-register-form-signup-text">
                                                  <span class="agribchain-register-form-into-text">Buy with AgriBChain?
                                                      <a href="#">Sign Up </a>
                                                  </span>
                                              </div>
                                          </div>

                                          <div class="agribchain-register-form-signup agribchain-register-form-signup-center">OR </div>

                                          <div class="agribchain-register-form-signup">
                                              <img alt="" class="img-valign" height="50px" src="{{url('templates/themes/rose/images/producer-icon.png')}}" width="50px" />
                                              <div class="agribchain-register-form-signup-text">
                                                  <span class="agribchain-register-form-into-text">
                                                      Sign Up as a Producer </span>
                                              </div>
                                          </div>

                                          <form method="POST" action="{{ route('register') }}">
                                                                  @csrf
                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="name">Your Name</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" value="{{ old('name') }}" required autofocusid  placeholder="Enter your Name" type="text" />
                                                      </div>
                                                       @if ($errors->has('name'))
                                                          <span class="invalid-feedback">
                                                              <strong>{{ $errors->first('name') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="email">Your Address</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  name="address" value="{{ old('address') }}" required id="address" name="address" placeholder="Enter your Address" type="text" />
                                                      </div>
                                                       @if ($errors->has('address'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="email">Your Location</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"  name="location" value="{{ old('location') }}" required  id="location" name="location" placeholder="Enter your Location" type="text" />
                                                      </div>
                                                      @if ($errors->has('location'))
                                                          <span class="invalid-feedback">
                                                              <strong>{{ $errors->first('location') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="email">Your Email</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" value="{{ old('email') }}" required id="email" name="email" placeholder="Enter your Email" type="email" />
                                                      </div>
                                                         @if ($errors->has('email'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="email">No. of Members</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('members_number') ? ' is-invalid' : '' }}"  name="members_number" value="{{ old('members_number') }}" required id="members_number" name="members_number" placeholder="Enter # of Members" type="number" />
                                                      </div>
                                                       @if ($errors->has('members_number'))
                                                          <span class="invalid-feedback">
                                                              <strong>{{ $errors->first('members_number') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="email">No. of Trees</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('trees_number') ? ' is-invalid' : '' }}"  name="trees_number" value="{{ old('trees_number') }}" required id="trees_number" name="trees_number" placeholder="Enter # of Trees" type="number" />
                                                      </div>
                                                       @if ($errors->has('trees_number'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('trees_number') }}</strong>
                                                        </span>
                                                    @endif
                                                  </div>
                                              </div>

                                              <div class="abc-form-group">
                                                  <!--<label class="cols-sm-2 control-label" for="password">Password</label>-->
                                                  <div class="cols-sm-10">
                                                      <div class="abc-input-group">
                                                          <input class="abc-form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" value="{{ old('password') }}" required id="password" name="password" placeholder="Enter your Password" type="password" />
                                                      </div>
                                                       @if ($errors->has('password'))
                                                          <span class="invalid-feedback">
                                                              <strong>{{ $errors->first('password') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                                  <div class="abc-form-group">
                                                   <div class="cols-sm-10">
                                               <input id="password-confirm" type="password" class="abc-form-control" name="password_confirmation" placeholder="confirm Password" required>
                                                    </div>
                                                    </div>
                                                </div>

                                              <div class="abc-form-group ">
                                                   <button type="submit" class="btn btn-default btn-lg btn-block abc-login-button">

                                                                                  </button>
                                              </div>
                                              <!-- end:Main Form -->
                                              <!-- REGISTRATION FORM -->
                                              <!--LOGIN FORM-->
                                              <!-- LOGIN FORM -->
                                          </form>

                                      </div>
                                  </div>
