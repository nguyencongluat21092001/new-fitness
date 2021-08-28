@extends('front.Admin.front_dashboard.app')
@section('body')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2 pt-club text-white">Fitness_LifeStyle</h1>
                </div>
                <div class="flex justify-center">
                  <div class="bg-gray-100 p-4 flex justify-center  w-2/3">
                    <form action="{{ route('store.pack')}}" role="form" method="POST">
                      @method("POST")
                      @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">categpry</label>
                          <input type="text" name="post_category" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Price</label>
                          <input type="text" name="post_price" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">month</label>
                          <input type="text" name="post_month" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">cardio</label>
                          <input type="text" name="post_cardio" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">swimming</label>
                          <input type="text" name="post_swimming" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">yoga</label>
                          <input type="text" name="post_yoga" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">zumba</label>
                          <input type="text" name="post_zumba" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">massage</label>
                          <input type="text" name="post_massage" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">boxing</label>
                          <input type="text" name="post_boxing" class="form-control" style="width: 600px" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                         <div class="flex justify-center"> 
                          <button type="submit" name="submit"class="btn btn-success px-12">Create</button>
                         </div>
    
                      </form>
                  </div>
                </div>
                
                
            </main>
        </div>
    </div>
    @endsection