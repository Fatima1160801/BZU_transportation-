@extends('web.layout')
@section('title') Rewords @endsection
@section('main')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <a  href="index.html"> <h1>BZU Transportation</h1></a>

            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">

                    <li><a href="index.html">Home</a></li>
                    <li class="active">Rewards</li>

                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

</div>
    <!-- footer start  -->
    <div class="card-footer">
        <div class="panel-footer">
            <div class="col-sm-3 mt-3">
                <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
            </div>
            <div class="col-sm-5 "></div>
            <div class="col-sm-4 mt-3  d-flex justify-content-around ">

                    <div class="form-group d-flex  ">
                        <select class="form-control " id="PickUp_SelectedCity" name="PickUp.SelectedCity">
                        <option selected="selected" value="53.479874/-2.239151">english </option>
                        <option value="51.507033/-0.116043">arabic</option>
                        </select>
                </div>

                <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
                <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS</a>
            </div>
        </div>
    </div>

    <!-- footer end -->


</div><!-- /#right-panel -->
@endsection
