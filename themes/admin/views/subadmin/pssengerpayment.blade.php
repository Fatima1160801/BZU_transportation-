@extends('layouts.sublayout')
@section('main')

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><h1>{{__('web.Passengers Payments')}}</h1></strong>
        </div>
        <div class="card-body ">
            @include('inc.requestTrip')

            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper  dt-bootstrap4 no-footer">
               

            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex">
                                    <div class="p-2"><h2>{{$passenger->BZUid}}</h2></div>
                                    <div class="p-2"><h2> {{$passenger->users->name}} </h2></div>
                                    <div class="ml-auto p-2"><h2>Total Balance: {{$passenger->balance}}₪</h2></div>
                                  </div>

                            </div>

                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>{{__('web.Balance')}} </th>
                                <th>{{__('web.date')}} </th>


                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                            <tr>

                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>{{$payment->balance}} ₪</td>
                                <td>{{$payment->created_at}}</td>



                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{$payments->links('inc.paginator')}}
                </div>
            </div>


    </div>

</div><!-- .content -->





@endsection
