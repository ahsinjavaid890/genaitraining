@extends('layouts.student-portal')
@section('title',__('Courses'))
@section('content')
    <div class=" row mb-2">
        <div class="col">
            <h5 class="  fw-bolder">
                {{__('Courses')}} /<span class="text-secondary">
                      {{__('My Course List')}}
                    </span>
            </h5>
            <p class="text-muted">{{__('All of my Enroled courses')}}</p>

        </div>
        <div class="col text-end">

            <a href="{{ url('course')}}" type="button" class="btn btn-success text-white btn-rounded"><i class="fas fa-plus"></i>&nbsp;{{__('Enrol for more')}}</a>

        </div>
    </div>

    @if($courses->count() > 0)
    <div class="row">
        @foreach($courses as $course)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain ">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            @if(empty($course->image))
                                <img src="{{ url('public') }}/img/placeholder.png"
                                     class="w-100 border-radius-lg shadow-sm">
                            @else
                                <img src="{{ url('public') }}/uploads/{{$course->image}}" class="w-100 border-radius-lg shadow-sm">
                            @endif
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <p class="text-purple mb-2 text-sm">
                            @if(!empty($categories[$course->category_id]))
                                <span class="badge bg-purple-light">
                                @if(isset($categories[$course->category_id]))
                                    {{$categories[$course->category_id]->name}}
                                @endif
                                </span>

                            @endif
                        </p>
                        <a href="{{ url('student/my-course-details')}}?id={{$course->id}}">
                            <h5>
                                <strong>{{$course->name}}</strong>
                            </h5>
                        </a>
                        <div class=" pt-0 pb-3">
                            <hr>
                            <div class="d-flex justify-content-between">

                                <span class="h5 fw-bolder mb-0">INR {{$course->price}} </span>

                                <span class="h6 fw-light mb-0">

<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                               @if(!empty($course))
                                        {!! getTotalLesson($course->id) !!}


                                    @endif{{__('Session')}}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
    @else

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center">
                      <h1>You are not Enroled in any course.</h1>
                    </div>
        </div>
    </div>
    @endif
@endsection
