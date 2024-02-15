@include('admin/header', [
    'isAuthenticated' => $isAuthenticated ?? false
])
<div class="container py-5">

    <div class="pagetitle">
        <h1>Form Login</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                <li class="breadcrumb-item active">Authentication</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$title ?? 'Form Login'}}</h5>
                        @if(isset($error))
                            <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endif
                        {{--<p>For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. </p>--}}

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" action="/login" method="post" novalidate>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="col-md-6">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    {{--<span class="input-group-text" id="inputGroupPrepend">@</span>--}}
                                    <input name="email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustomPassword" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    {{--<span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-key"></i></span>--}}
                                    <input name="password" type="password" class="form-control" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- End #main -->

@include('admin/footer', [
    'isAuthenticated' => $isAuthenticated ?? false
])
