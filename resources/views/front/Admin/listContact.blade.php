@extends('front.Admin.front_dashboard.app')
@section('body')
    
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2 pt-club  text-white">Fitness_LifeStyle</h1>

                </div>

                <div class="table-responsive flex justify-center">
                    <div class="shadow p-4 bg-gray-100 overflow-y-scroll" style="width: 1000px; height:600px">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Adress</th>
                                <th>Phone</th>
                                <td>Comment</td>
                                <td>time</td>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        @foreach ($contacts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->post_name}}</td>
                                <td>{{$post->post_age}}</td>
                                <td>{{$post->post_adress}}</td>
                                <td>{{$post->post_phone}}</td>
                                <td>{{$post->post_comment}}</td>
                                <td>{{$post->created_at}}</td>
                                <td><button type="button" class="btn btn-info">edit</button></td>
                                <td><button type="button" class="btn btn-danger">remove</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @endsection