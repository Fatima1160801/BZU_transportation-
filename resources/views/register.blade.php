@extends('layout')
@section('main')


<div  style="height: 100px;">
    <div class="page-header float-left">
        <div class="page-title">
            <a  href="#"> <h2>BZU Transportation</h2></a>
        </div>
    </div>

        <div class="page-header float-right col-sm-2">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Register</a></li>
                    <li class="active"><a href="#">Login</a></li>
                </ol>
            </div>

    </div>
</div>
<div class="sufee-login d-flex align-content-center flex-wrap">



    <div class="container">
        <div class="login-content">
            <div class="login-logo">

            </div>
            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="email" class="form-control" placeholder="User Name">
                    </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>User phone</label>
                        <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>User BZU Id</label>
                    <input type="number" class="form-control" placeholder="Email">
               </div>
               <div class="form-group">
                <label> BZU Id</label>
                <input type="number" class="form-control" placeholder="Email">
                 </div>
                 <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                </div>
                                <div class="checkbox">
                                    <label>
                            <input type="checkbox"> Agree the terms and policy
                        </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="#"> Sign in</a></p>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
