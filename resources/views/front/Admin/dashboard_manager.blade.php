@extends('front.Admin.front_dashboard.app')
@section('body')
    
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2  pt-club text-white">Fitness_LifeStyle</h1>

                </div>
                <div class="flex justify-center"> 
                    <button type="button" class="btn btn-success mb-4 w-96">Create</button>
                </div>
               

                <div class="table-responsive flex justify-center "  >
                    <div class="text-center shadow p-4 bg-gray-100" style="width: 700px">
                        <table class="table  table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Image</th>
                                    <th>Introduce</th>
                                    <th>Experience</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->post_name}}</td>
                                    <td>{{$post->post_age}}</td>
                                    <td>{{$post->post_image}}</td>
                                    <td>{{$post->post_introduce}}</td>
                                    <td>{{$post->post_experience}}</td>
                                    <td> <button type="button" class="btn btn-info">edit</button></td>
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