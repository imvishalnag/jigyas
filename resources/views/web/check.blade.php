<html>
                        <div class="inner-heading">
                            <h3>Sign In</h3>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" >{{ Session::get('message') }}</div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" >{{ Session::get('error') }}</div>
                        @endif
                        <form method="post" action="{{ route('web.student_login_submit') }}">
                            @csrf
                            <div class="">
                                <label>Mobile number:</label>
                                <input type="number" class="" name="mobile">
                                @error('mobile')
                                    <span role="">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if ($message = Session::get('login_error'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="">
                                <label>Password:</label>
                                <input type="password" class="" name="password">
                                 @error('password')
                                    <span role="">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="">
                                <input class="" type="submit" value="Login">
                            </div>
                            <p class="lost_password">
                                <a href="{{route('web.register')}}">If not registered, click here</a>
                            </p>
                        </form>
                    </div>
</html>