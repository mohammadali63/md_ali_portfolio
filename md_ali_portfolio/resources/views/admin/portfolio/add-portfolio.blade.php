@extends('admin.master')
@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create portfolio</h3></div>
                                <div class="card-body">
                                    <form action="{{route('save.portfolio')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="portfolioname"  type="text" placeholder="portfolioname" />
                                            <label >portfolioname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea name="portfoliodescription" class="form-control" placeholder=" portfoliodescription"></textarea>
                                            <label >portfoliodescription</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="portfoliolink"  type="text" placeholder="portfoliolink" />
                                            <label >portfoliolink</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="image" class="form-control" />
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

