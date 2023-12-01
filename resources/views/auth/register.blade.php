<x-guest-layout>
    <div class="wrapper">
        <div class="logo">
            <img src="https://itstarter.cc/wp-content/uploads/2023/10/Horizontal-Logo-Orange.svg" alt="Logo">
        </div>
        <div class="text-center mt-4 name">
            Twitter
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="name" placeholder="Name" class="form-input" :value="old('name')" required autofocus autocomplete="name">
            </div>
            <!-- Email Address -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="far fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email" class="form-input" :value="old('email')" required autocomplete="username">
            </div>
            <!-- Password -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" class="form-input" required autocomplete="new-password">
            </div>
            <!-- Confirm Password -->
            <div class="form-field d-flex align-items-center mt-4">
                <span class="fas fa-key"></span>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-input" required autocomplete="new-password">
            </div>
            <button class="btn mt-3" type="submit">Register</button>
        </form>
        <div class="text-center fs-6 mt-4">
            <a href="{{ route('login') }}" class="text-link">Already registered?</a>
        </div>
    </div>
</x-guest-layout>

<style>
    /* Styles based on your description */
    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }

    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff;
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }

    .form-input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
    }

    .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    .form-field .fas,
    .form-field .far {
        color: #555;
    }

    .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }

    .btn:hover {
        background-color: #039BE5;
    }

    .text-link {
        text-decoration: none;
        font-size: 0.8rem;
        color: #fff;
    }

    .text-link:hover {
        color: #039BE5;
    }
</style>
