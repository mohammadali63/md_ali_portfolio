@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="text-center">Manage Message</h1>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>username</th>
                                <th>useremail</th>
                                <th>usermessage</th>
                            </tr>
                            </thead>
                            @php $i=1  @endphp
                            <tbody>
                            @foreach($messages as $massage)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$massage->username}}</td>
                                    <td>{{$massage->useremail}}</td>
                                    <td>{{$massage->usermessage}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

