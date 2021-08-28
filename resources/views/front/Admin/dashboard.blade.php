@extends('front.Admin.front_dashboard.app')
@section('body')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2 pt-club  text-white">Fitness_LifeStyle</h1>
                </div>
                <div class="flex justify-center">
                  <div class="bg-gray-100 p-4 flex justify-center  w-2/3">
                    <form action="{{ route('store.post')}}" role="form" method="POST">
                      @method("POST")
                      @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Tên PT</label>
                          <input type="text" name="post_name"class="form-control"  style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Tuổi</label>
                          <input type="number" name="post_age"class="form-control"  style="width: 600px" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">image</label>
                          <input type="text" name="post_image"class="form-control"  style="width: 600px" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">giới thiệu</label>
                          <input type="text" name="post_introduce"class="form-control"  style="width: 600px" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Năm kinh nghiệm</label>
                          <input type="number" name="post_experience"class="form-control"  style="width: 600px" id="exampleFormControlInput1" placeholder="">
                        </div>
                      
                          <div class="flex justify-center"> 
                            <button type="submit" name="submit"class="btn btn-success px-12">Create</button>
                           </div>
                      </form>
                  <div>

                  </div>
                </div>
               
            </main>
        </div>
    </div>
    @endsection