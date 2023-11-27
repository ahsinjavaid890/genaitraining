@extends('layouts.student-portal')
@section('title',$lesson->title)

@section('content')


    <div class="row">
        <div class="col-md-8">
            <section class="bg-dark-alt border-radius-sm py-0 py-sm-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8">
                            <!-- Badge -->
                            <!-- Title -->
                            <h2 class="text-white">
                                @if(!empty($lesson->title))
                                    {{$lesson->title}}
                                @endif
                            </h2>

                        <!-- Content -->
                            <ul class="list-inline mb-0 ">

                                <li class="list-inline-item text-sm  mb-1 mb-sm-0 text-white"><i class="bi bi-patch-exclamation-fill text-danger"></i>{{__('Updated')}}@if(!empty($lesson->title))
                                        {{ \Carbon\Carbon::parse($lesson->updated_at)->diffForHumans() }}

                                    @endif
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class=" mt-4">
                <div class="position-relative mb-3">

                    @if(!empty($lesson->video))
                        <iframe controlsList="nodownload" class="embed-responsive-item w-100 height-400  border-radius-lg shadow-lg mt-3" src="{{ url('public') }}/uploads/{{$lesson->video}}" type="video/mp4">
                        </iframe>

                    @elseif(!empty($lesson->youtube_video))

                        <iframe class="embed-responsive-item w-100 height-400 border-radius-lg shadow-lg mt-3" src="https://www.youtube.com/embed/{{$lesson->youtube_video}}?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                    @else
                        <img src="{{ url('public') }}/img/placeholder.jpeg" class="w-100 border-radius-lg shadow-lg mt-3">

                    @endif
                </div>

                <div class="card shadow rounded-2 p-0 mb-5">
                    <!-- Tabs START -->

                    <div class="card-header border-bottom px-4 py-3">

                        <h5 class="">{{__('Session Description')}}</h5>
                    </div>
                    <!-- Tabs END -->

                    <!-- Tab contents START -->
                    <div class="card-body p-4">
                        <div class="tab-content pt-2" id="course-pills-tabContent">
                            <!-- Content START -->
                            <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                <!-- Course detail START -->


                            @if(!empty($lesson->description))
                                {!! $lesson->description !!}

                            @endif
                            <!-- Course detail END -->
                            </div>

                        </div>
                    </div>
                    <!-- Tab contents END -->
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="">
                <div class="row mb-5 mb-lg-0">
                    <div class="col-md-6 col-lg-12">
                        <!-- Recently Viewed START -->
                        @if(!empty($lesson->file))
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Buttons -->
                                        <a href="{{ url('public') }}/uploads/{{$lesson->file}}" class="btn btn-success mb-sm-0 me-00 ">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                            {{__('Download file')}}</a>

                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="card card-body shadow  mb-4">
                            @if(!empty($course->id))
                                <a class="btn btn-success text-white mb-3 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2 "
                                   href="{{ url('student/my-course-details')}}?id={{$course->id}}" >
                                    {{__('Go to Course Page')}}
                                </a>
                        @endif
                            <!-- Title -->
                            <h6 class="mb-3">{{__('All Sessions of the course')}}</h6>
                            <!-- Course item START -->
                            <div class="row gx-3 mb-3">
                                <div class="card-body">
                                    <div class="row g-5">
                                        <!-- Lecture item START -->
                                        <div class="col-12">
                                            <!-- Curriculum item -->
                                            @foreach($lessons as $less)

                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <div
                                                                class="avatar avatar-md bg-info-light  border-radius-md p-2 ">
                                                            <i class="fas fa-play text-info"></i>
                                                        </div>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <a href="{{ url('view-lesson')}}?id={{$less->id}}"> <h6 class="mb-0">{{$loop->iteration}}. {{$less->title}}</h6></a>
                                                            <p class="mb-2 mb-sm-0 small">{{$less->duration}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- Button -->

                                                    <div class="dropstart">
                                                        <a href="javascript:" class="text-secondary" id="dropdownMarketingCard"
                                                           data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                                            aria-labelledby="dropdownMarketingCard">

                                                            <li>
                                                                <a class="dropdown-item border-radius-sm"
                                                                   href="{{ url('student/view-mylesson')}}?id={{$less->id}}">{{__('See Details')}}</a>
                                                            </li>


                                                        </ul>
                                                    </div>


                                                </div>

                                                <!-- Divider -->
                                                <hr>

                                        @endforeach

                                        <!-- Curriculum item -->

                                        </div>

                                    </div>
                                </div>
                                <!-- Image -->

                            </div>


                            <!-- Course item END -->
                        </div>


                        <!-- Tags END -->
                    </div>
                </div><!-- Row End -->
            </div>

        </div>
    </div>

@endsection