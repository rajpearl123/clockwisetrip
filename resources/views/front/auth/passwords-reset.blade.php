<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    section {
        position: relative;
    }

    .redBg {
        background-color: #d93025;
        padding: 10px 0;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 350px;
    }

    .redBg img {
        width: 350px;
    }

    @media screen and (max-width: 576px) {
        .redBg img {
            width: 250px;
        }
    }

    .forgotPasswordScreen {
        background-color:#f4f5f6;
        width: 100%;
        max-width: 600px;
        position: absolute;
        top: -20%;
        left: 50%;
        transform: translate(-50%, 50%);
        padding: 30px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .form-content h2 {
        font-size: 30px;
        color: #1b1c1d;
        font-weight: 600;
        line-height: 42px;
    }

    .form-content p {
        font-size: 20px;
        color: #404141;
        font-weight: 400;
        line-height: 26px;
        text-align: center;
    }

    form.form-section {
        margin-top: 40px;
        display: flex;
        flex-direction: column;
        width: 80%;
    }

    input.form-control {
        border: 1px solid #d6d6d6;
        border-radius: 4px;
        padding: 5px 15px;
        min-height: 50px;
        transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
        font-size: 14px;
        color: #1b1c1d;
        margin-bottom: 10px;
    }

    .forgotSubmitBtn {
        padding: 15px 0;
        background-color: #d93025;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;
        text-align: center;
        font-weight: 500;
        font-size: 15px;
        line-height: 1.2;
        border-radius: 4px;
        border: 1px solid transparent;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .form-section a {
        font-size: 20px;
        text-transform: capitalize;
        text-decoration: none;
        color: #d93025;
        text-align: center;
        margin: 20px 0;
        font-weight: 700;
    }
</style>
<section>


<div class="redbg">
<div class="d-flex items-center">
            <a href="{{url('/')}}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/logo/chockwisehotel_logo.png" alt="logo icon">
            </a>
        </div>

<div class="container">
    <div class="forgotPasswordScreen">
        <div class="form-content">
            <i class="fas fa-exclamation"></i>
            <h2 class="text-center">Reset Password</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" style="color: #dc3545; font-size: 18px; margin-top: 10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="post" class="form-section">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email', $email) }}" required>
            <input type="password" class="form-control" name="password" placeholder="New Password" required>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit" class="forgotSubmitBtn">Reset Password</button>
            <a href="{{ route('login') }}">Back to Login</a>
        </form>
    </div>
</div>
</div>
</section>