@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Where To Study options</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('whereToStudy.update', $studies->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputName"> Name Of University  </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$studies->name}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Link  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="link" value="{{$studies->link}}">
                  </div>

                <img src="{{asset($studies->slider1)}}" alt="" width="50px" height="50px">
                <div class="form-group">

                  <label for="exampleInputFile">Slider 1</label>
                  <div class="input-group">
                    <div class="custom-file">

                      <input type="file" class="custom-file-input" id="exampleInputFile" name="slider1">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <img src="{{asset($studies->slider2)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Slider 2</label>
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input" id="exampleInputFile" name="slider2">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>
                <img src="{{asset($studies->slider3)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Slider 3</label>
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input" id="exampleInputFile" name="slider3">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Short Description </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="short_description">{{$studies->short_description}}</textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Rate </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="rated">
                        {{$studies->rated}}
                      </textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Global Network </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="global_network">
                                {{$studies->global_network}}
                     </textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Award </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="award">
                                {{$studies->award}}
                      </textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Rank </label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="rank">
                                {{$studies->rank}}
                      </textarea>
                    </div>

                  </div>
                  <img src="{{asset($studies->image_1)}}" alt="" width="50px" height="50px">

                  <div class="form-group">
                    <label for="exampleInputFile">Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_1">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <img src="{{asset($studies->image_2)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_2">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <img src="{{asset($studies->image_3)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_3">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <img src="{{asset($studies->image_4)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_4">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <img src="{{asset($studies->image_5)}}" alt="" width="50px" height="50px">
                <div class="form-group">
                    <label for="exampleInputFile">Image 5</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_5">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 1  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_1" value="{{$studies->faq_question_1}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 1 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_1">
                                {{$studies->faq_answer_1}}
                     </textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 2  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_2" value="{{$studies->faq_question_2}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 2 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_2">{{$studies->faq_answer_2}}</textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 3  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_3" value="{{$studies->faq_question_3}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 3 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_3">{{$studies->faq_answer_3}}</textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 4  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_4" value="{{$studies->faq_question_4}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 4 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_4">{{$studies->faq_answer_4}}</textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputName"> FAQ Question 5  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="faq_question_5"  value="{{$studies->faq_question_5}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> FAQ Answer 5 </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="faq_answer_5">{{$studies->faq_answer_5}}</textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Meta title </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="meta_title">{{$studies->meta_title}}</textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Meta description </label>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="meta_description">{{$studies->meta_description}}</textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">Keywords</label>
                    @php
                        // Decode the keywords JSON string into an array
                        $keywordsArray = json_decode($studies->keywords, true);
                    @endphp
                    <input type="text" class="form-control" name="keywords" 
                           value="{{ is_array($keywordsArray) ? implode(', ', $keywordsArray) : '' }}" 
                           placeholder="Enter keywords separated by commas" required>
                </div>
                
                
                
                 <div class="form-group">
                    <label for="exampleInputFile">Is done</label>
                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="is_done">
                    <option selected>Open this select menu</option>

                    <option value="1" {{ $studies->is_done == '1' ? 'selected' : '' }}>Done</option>
                    <option value="0" {{ $studies->is_done == '0' ? 'selected' : '' }}>comming soon</option>
                  </select>
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
