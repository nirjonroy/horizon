@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add International Student Life options</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('studentlife.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputName"> Name Of Country </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of Country" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Hero Banner</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="hero_banner">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>



                <div class="form-group">
                    <label for="exampleInputName"> Hero Banner Text </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="hero_banner_text"></textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Sporting Event  </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="Sporting_event_text"></textarea>
                    </div>

                  </div>



                  <div class="form-group">
                    <label for="exampleInputFile">Sporting Event Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="Sporting_event_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 1  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_1">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 1 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_1"></textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 2  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_2">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 2 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_2"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 3  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_3">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 3 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_3"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 4  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_4">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 4 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_4"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 5  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_5">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 5 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_5"></textarea>
                    </div>

                  </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>

@endsection
