@extends('frontend.layout')
@section('title','News')
@section('content')
<section class="">
    <div class="bg-dark-alt position-relative">
        <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto text-center mt-4">
                        <h2 class="text-white">
                            Read the articles of our News
                        </h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-8">
        <div class="container">
            <div class="row mb-4">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-3">
                        <hr class="vertical dark d-lg-block d-none">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative z-index-1">
                                <a href="javascript:;" class="d-block">
                                    @if(!empty($blog->cover_photo))
                                        <img src="{{ url('public') }}/uploads/{{$blog->cover_photo}}" class="img-fluid border-radius-md" alt="...">
                                    @endif
                                </a>
                            </div>

                            <div class="card-body pt-3">
                                <h4 class="mb-3">
                                    <a href="javascript:void(0)" class="text-darker font-weight-bolder">
                                        {{$blog->title}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
