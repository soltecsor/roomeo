@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Home Portal</h3>
            </div>
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                @include('flash::message')
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3 class="card-title">Edit Banner</h3>
                            <h6 class="card-subtitle">Change information contained in the portal banner</h6>
                        </div>
                        <form   action="{{ url('edit_banner') }}"  method="post"  class="formentrada"  >
                            <div class="row form-material">
                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                              <input type="hidden" name="id_banner" value="{{ $banner->id }}"> 
                              <div class="col-lg-4">
                                  <div class="form-group">
                                      <label class="col-lg-12 text-dark" for="home_title_one">Title One*</label>
                                      <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="home_title_one" name="home_title_one"  value="{{ $banner->home_title_one }}"  required   >
                                      </div>
                                  </div>
                              </div>            
                              <div class="col-lg-4">
                                  <div class="form-group">
                                      <label class="col-lg-12 text-dark" for="home_title_two">Title Two*</label>
                                      <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="home_title_two" name="home_title_two"   value="{{ $banner->home_title_two }}" required >
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="col-lg-12 text-dark" for="home_boxtitle">Box Title*</label>
                                  <div class="col-lg-12" >
                                    <input type="text" class="form-control" id="home_boxtitle" name="home_boxtitle"  value="{{ $banner->home_boxtitle  }}" required >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="col-lg-12 text-dark" for="home_boxsubtitle">Box Subtitle*</label>
                                  <div class="col-lg-12" >
                                    <input type="text" class="form-control" id="home_boxsubtitle" name="home_boxsubtitle"  value="{{ $banner->home_boxsubtitle  }}" required >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="col-lg-12 text-dark" for="home_boxphone">Box phone*</label>
                                  <div class="col-lg-12" >
                                    <input type="text" class="form-control" id="home_boxphone" name="home_boxphone"  value="{{ $banner->home_boxphone  }}" required >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 mt-2"><button type="submit" class="btn btn-primary">Update data</button></div>                    
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
              @include('flash::message')
              <div class="card">
                  <div class="card-body">
                      <div>
                          <h3 class="card-title">Edit Services</h3>
                          <h6 class="card-subtitle">Change information contained in the portal services</h6>
                      </div>
                      <form  enctype="multipart/form-data"  action="{{ url('edit_service') }}"  method="post"  class="formentrada"  >
                          <div class="row form-material">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_service" value="{{ $service->id }}"> 
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-lg-12 text-dark" for="title">Title Services*</label>
                                    <div class="col-lg-6" >
                                      <input type="text" class="form-control" id="title" name="title"  value="{{ $service->title }}"  required   >
                                    </div>
                                </div>
                            </div> 
                            {{-- Service One --}}
                            <div class="col-lg-7">
                                <div class="row form-group">
                                    <label class="col-lg-12 text-dark" for="home_title_two">Icon One Service*</label>
                                    <div class="col-lg-2"> 
                                      <img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_one }}" width="75px" alt="Search & Choose">
                                    </div>
                                    <div class="col-lg-8 m-t-30" >
                                      <input type="file" class="form-control" name="icon_one" id="icon_one" aria-describedby="fileHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="col-lg-12 text-dark" for="service_one_title">Service One Title*</label>
                                <div class="col-lg-12" >
                                  <input type="text" class="form-control" id="service_one_title" name="service_one_title"  value="{{ $service->service_one_title  }}" required >
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="col-lg-12 text-dark" for="service_one_description">Service One description*</label>
                                <div class="col-lg-12" >
                                  <input type="text" class="form-control" id="service_one_description" name="service_one_description"  value="{{ $service->service_one_description  }}" required >
                                </div>
                              </div>
                            </div>
                            {{-- Service Two --}}
                            <div class="col-lg-7">
                              <div class="row form-group">
                                  <label class="col-lg-12 text-dark" for="icon_two_service">Icon Two Service*</label>
                                  <div class="col-lg-2"> 
                                    <img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_two }}"width="75px" alt="Search & Choose">
                                  </div>
                                  <div class="col-lg-8 m-t-30" >
                                    <input type="file" class="form-control" name="icon_two" id="icon_two" aria-describedby="fileHelp">
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="col-lg-12 text-dark" for="service_two_title">Service Two Title*</label>
                              <div class="col-lg-12" >
                                <input type="text" class="form-control" id="service_two_title" name="service_two_title"  value="{{ $service->service_two_title  }}" required >
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="col-lg-12 text-dark" for="service_two_description">Service Two description*</label>
                              <div class="col-lg-12" >
                                <input type="text" class="form-control" id="service_two_description" name="service_two_description"  value="{{ $service->service_two_description  }}" required >
                              </div>
                            </div>
                          </div>
                          {{-- Service three --}}
                          <div class="col-lg-7">
                            <div class="row form-group">
                                <label class="col-lg-12 text-dark" for="icon_three_service">Icon Three Service*</label>
                                <div class="col-lg-2"> 
                                  <img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_three }}" width="75px" alt="Search & Choose">
                                </div>
                                <div class="col-lg-8 m-t-30" >
                                  <input type="file" class="form-control" name="icon_three" id="icon_three" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="col-lg-12 text-dark" for="service_three_title">Service Three Title*</label>
                            <div class="col-lg-12" >
                              <input type="text" class="form-control" id="service_three_title" name="service_three_title"  value="{{ $service->service_three_title  }}" required >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="col-lg-12 text-dark" for="service_three_description">Service Three description*</label>
                            <div class="col-lg-12" >
                              <input type="text" class="form-control" id="service_three_description" name="service_three_description"  value="{{ $service->service_three_description  }}" required >
                            </div>
                          </div>
                        </div>
                        {{-- Service Four --}}
                        <div class="col-lg-7">
                          <div class="row form-group">
                              <label class="col-lg-12 text-dark" for="icon_four_service">Icon Four Service*</label>
                              <div class="col-lg-2"> 
                                <img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_four }}" width="75px" alt="Search & Choose">
                              </div>
                              <div class="col-lg-8 m-t-30" >
                                <input type="file" class="form-control" name="icon_four" id="icon_four" aria-describedby="fileHelp">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="col-lg-12 text-dark" for="service_four_title">Service Four Title*</label>
                          <div class="col-lg-12" >
                            <input type="text" class="form-control" id="service_four_title" name="service_four_title"  value="{{ $service->service_four_title  }}" required >
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="col-lg-12 text-dark" for="service_four_description">Service Four description*</label>
                          <div class="col-lg-12" >
                            <input type="text" class="form-control" id="service_four_description" name="service_four_description"  value="{{ $service->service_four_description  }}" required >
                          </div>
                        </div>
                      </div>
                            <div class="col-lg-12 mt-2"><button type="submit" class="btn btn-primary">Update data</button></div>                    
                          </div>
                        </form>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12 col-md-12">
            @include('flash::message')
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="card-title">Edit About</h3>
                        <h6 class="card-subtitle">Change information contained in the portal About</h6>
                    </div>
                    <form  action="{{ url('edit_about') }}"  method="post"  class="formentrada"  >
                        <div class="row form-material">
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                          <input type="hidden" name="id_about" value="{{ $about->id }}"> 
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="col-lg-12 text-dark" for="title">Title About*</label>
                                  <div class="col-lg-12" >
                                    <input type="text" class="form-control" id="about_title_one" name="about_title_one"  value="{{ $about->about_title_one }}"  required   >
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-12 text-dark" for="title">Title Two About*</label>
                                <div class="col-lg-12" >
                                  <input type="text" class="form-control" id="about_title_two" name="about_title_two"  value="{{ $about->about_title_two }}"  required   >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <label class="col-lg-12 text-dark" for="title">About Description*</label>
                              <div class="col-lg-12" >
                                <textarea class="form-control" rows="10" id="ckeditor" name="about_description">{{ $about->about_description }}</textarea>
                              </div>
                          </div>
                      </div>  
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-12 text-dark" for="title">Button About*</label>
                            <div class="col-lg-12" >
                              <input type="text" class="form-control" id="about_button" name="about_button"  value="{{ $about->about_button }}"  required   >
                            </div>
                        </div>
                    </div>
                          <div class="col-lg-12 mt-2"><button type="submit" class="btn btn-primary">Update data</button></div>                    
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

