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
                <div class="row">
                    <form action="{{url('/subadmin/search')}}" method="POST" role="search">
                        @csrf
                        <label>{{__('web.Search by Passenger id')}}:<input name="search" type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label>
                        <button class="btn btn-info" type="submit" title="Search projects">
                            <span class="fa fa-search"></span>
                        </button>
                        </form>
            </div><div class="row">
                <div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 140px;">BZU-ID</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">{{__('web.Name')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140px;">{{__('web.Current Balance')}} </th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"   style="width: 140px;">{{__('web.New balance')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;"></th>
                    </tr>
                    </thead>
                <tbody>



                    @foreach ($passengers as $passenger )
                 <tr role="row" class="odd">
                        <td>{{$passenger->BZUid}}</td>
                        <td>{{$passenger->users->name}}</td>
                        <td>{{$passenger->balance}} ₪</td>
                        <form action="/subadmin/insertpayment" method="post" class="form-horizontal">
                         @csrf
                        <td><input type="number" id="NewBalance" name="NewBalance"  class="input-sm form-control-sm form-control wed" min="0" ></td>
                        <input type="hidden" id="oldBalance" name="oldBalance"  class="input-sm form-control-sm form-control wed" value="{{$passenger->balance}}">
                        <input type="hidden" id="passengerId" name="passengerId"  class="input-sm form-control-sm form-control wed" value="{{$passenger->id}}">
                        <td class="d-flex flex-wrap">
                            <button  type="submit" class="btn btn-danger"><i class="fa fa-plus-square-o"></i> {{__('web.Add')}}</button>
                            <a class="p-2" href="{{url("/subadmin/showinsertpayment/$passenger->id")}}"><i class="fa fa-eye"></i></a>
                        </td>


                        </form>
                 </tr>
                    @endforeach

                </tbody>
            </table>
            {{$passengers->links('inc.paginator')}}

         </div>
    </div>

</div><!-- .content -->





@endsection
