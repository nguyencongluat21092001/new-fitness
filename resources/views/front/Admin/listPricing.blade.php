@extends('front.Admin.front_dashboard.app')
@section('body')
    
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2 pt-club text-white">Fitness_LifeStyle</h1>
                </div>
                <div class="flex justify-center"> 
                    <button type="button" class="btn btn-success mb-4 w-96">Create</button>
                </div>
                <div class="table-responsive flex justify-center">
                    <div class="text-center shadow p-4 bg-gray-100 overflow-y-scroll" style="width: 1000px; height:600px">
                        <table class="table  table-sm ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>price</th>
                                    <th>Month</th>
                                    <th>Cardio</th>
                                    <th>Swimming</th>
                                    <th>Yoga</th>
                                    <th>Zumba</th>
                                    <th>Masssage</th>
                                    <th>Boxing</th>
                                    <th>Edit</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packs as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->post_category}}</td>
                                    <td>{{$post->post_price}}</td>
                                    <td>{{$post->post_month}}</td>
                                    <td>{{$post->post_cardio}}</td>
                                    <td>{{$post->post_swimming}}</td>
                                    <td>{{$post->post_yoga}}</td>
                                    <td>{{$post->post_zumba}}</td>
                                    <td>{{$post->post_massage}}</td>
                                    <td>{{$post->post_boxing}}</td>
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