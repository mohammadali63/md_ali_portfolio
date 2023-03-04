@extends('admin.master')
@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Menu</h3></div>
                                <div class="card-body">
                                    <form action="{{route('save.menu')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="menuname"  type="text" placeholder="menuname" />
                                            <label >menuname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="href"  type="text" placeholder="href" />
                                            <label >href</label>
                                        </div>

                                        <div class="mt-3">
                                            <input type="submit" value="submit" class="form-control btn btn-outline-success">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection


