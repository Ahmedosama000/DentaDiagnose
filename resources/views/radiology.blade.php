@extends('layouts.header')

@section('title','Home')

@section('content')


<div class="services__page">
    <div class="sidebar">
        <div class="list">
            <div class="icon active" data-target="enter__xray">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M29.3,48.4c0-17,13.8-30.8,30.8-30.8h391.7c17,0,30.8,13.8,30.8,30.8s-13.8,30.8-30.8,30.8v353.5c17,0,30.8,13.8,30.8,30.8
              s-13.8,30.8-30.8,30.8H60.1c-17,0-30.8-13.8-30.8-30.8s13.8-30.8,30.8-30.8V79.2C43.1,79.2,29.3,65.5,29.3,48.4z M256,84.9
              c-8.5,0-15.4,6.9-15.4,15.4v53.5h-77c-8.5,0-15.4,6.9-15.4,15.4s6.9,15.4,15.4,15.4h77v51.9H132.8c-8.5,0-15.4,6.9-15.4,15.4
              s6.9,15.4,15.4,15.4h107.8V341l-49-18.9c-5-1.9-10.2-2.9-15.6-2.9h-2c-22.7,0-41.2,18.5-41.2,41.2c0,9.2,3.1,18.2,8.8,25.4
              l17.5,22.3c9.3,11.9,23.7,18.9,38.8,18.9h116.3c15.1,0,29.5-6.9,38.8-18.9l17.5-22.3c5.7-7.2,8.8-16.2,8.8-25.4
              c0-22.7-18.5-41.2-41.2-41.2H336c-5.3,0-10.6,1-15.6,2.9l-49,18.9v-73.6h107.8c8.5,0,15.4-6.9,15.4-15.4s-6.9-15.4-15.4-15.4H271.4
              v-51.9h77c8.5,0,15.4-6.9,15.4-15.4s-6.9-15.4-15.4-15.4h-77v-53.5C271.4,91.9,264.5,84.9,256,84.9z M209.8,365.4
              c8.5,0,15.4,6.9,15.4,15.4s-6.9,15.4-15.4,15.4s-15.4-6.9-15.4-15.4S201.3,365.4,209.8,365.4z M286.8,380.9
              c0-8.5,6.9-15.4,15.4-15.4s15.4,6.9,15.4,15.4s-6.9,15.4-15.4,15.4S286.8,389.4,286.8,380.9z" />
                </svg>

            </div>
            <div class="icon" data-target="message__reports">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <g>
                        <circle cx="444.1" cy="70.4" r="66.1" />
                        <path d="M474,174.4c-15.4,4.5-32.2,5.7-49.7,2.4c-44.3-8.2-79.7-44.1-86.9-88.6c-2.9-17.4-1.4-34.1,3.2-49.4
		c2.8-8.9-3.5-18.1-12.9-18.1H124C57.1,20.8,2.8,75,2.8,142v172.4c0,66.9,54.3,121.2,121.2,121.2h39.1c4.7,0,9.1,1.9,12.4,5.2
		l59.3,61.6c6.8,7,18,7,24.7,0l59-61.5c3.2-3.4,7.7-5.3,12.4-5.3h39.4c66.9,0,121.2-54.3,121.2-121.2V187.5
		C491.5,178.3,482.7,171.8,474,174.4z M144.7,271.9c-16.3,0-29.5-13.2-29.5-29.5c0-16.3,13.2-29.5,29.5-29.5s29.5,13.2,29.5,29.5
		C174.2,258.7,161,271.9,144.7,271.9z M247.2,271.9c-16.3,0-29.5-13.2-29.5-29.5c0-16.3,13.2-29.5,29.5-29.5s29.5,13.2,29.5,29.5
		C276.7,258.7,263.5,271.9,247.2,271.9z M349.6,271.9c-16.3,0-29.5-13.2-29.5-29.5c0-16.3,13.2-29.5,29.5-29.5
		c16.3,0,29.5,13.2,29.5,29.5C379.2,258.7,365.9,271.9,349.6,271.9z" />
                    </g>
                </svg>
            </div>
            <div class="icon" data-target="radiology__center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <path d="M474,6.9H38C17.6,6.9,1.2,23.4,1.2,43.7v35.4c0,20.3,16.5,36.8,36.8,36.8H474c20.3,0,36.8-16.5,36.8-36.8V43.7
		C510.8,23.4,494.4,6.9,474,6.9z" />
                        <path d="M1.2,189v147c0,93.4,75.7,169.1,169.1,169.1h170.4c93.4,0,169.1-75.7,169.1-169.1V189c0-20.3-16.5-36.8-36.8-36.8H38
		C17.6,152.2,1.2,168.7,1.2,189z M364.4,243c0,17.7-14.3,32-32,32h-154c-17.7,0-32-14.3-32-32v0c0-17.7,14.3-32,32-32h154
		C350.1,211,364.4,225.4,364.4,243L364.4,243z" />
                    </g>
                </svg>

            </div>
            <div class="icon" data-target="calender">

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path
                            d="M356.5,130.2h91.7c4.1,0,6.1-4.9,3.3-7.8L342,10.7c-2.9-2.9-7.8-0.9-7.8,3.2v94C334.2,120.2,344.2,130.2,356.5,130.2z" />
                        <path
                            d="M445.6,182.7h-97.5c-36.7,0-66.4-29.7-66.4-66.4V16.2c0-7.5-6-13.5-13.5-13.5l-96.9-0.4c-64.9,0-117.6,52.6-117.6,117.6
		v272.5c0,64.9,52.6,117.6,117.6,117.6h170.2c64.9,0,117.6-52.6,117.6-117.6v-196C459.2,188.7,453.1,182.7,445.6,182.7z
		 M253.1,390.7h-76.7c-16.9,0-30.5-13.7-30.5-30.5s13.7-30.5,30.5-30.5h76.7c16.9,0,30.5,13.7,30.5,30.5S270,390.7,253.1,390.7z
		 M324.5,286.5H176.4c-16.9,0-30.5-13.7-30.5-30.5s13.7-30.5,30.5-30.5h148.1c16.9,0,30.5,13.7,30.5,30.5S341.4,286.5,324.5,286.5z" />
                    </g>
                </svg>
            </div>
            <div class="icon" data-target="settings">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <path d="M495.9,166.6c3.2,8.7,0.5,18.4-6.4,24.6l-43.3,39.4c1.1,8.3,1.7,16.8,1.7,25.4c0,8.6-0.6,17.1-1.7,25.4l43.3,39.4
                    c6.9,6.2,9.6,15.9,6.4,24.6c-4.4,11.9-9.7,23.3-15.8,34.3l-4.7,8.1c-6.6,11-14,21.4-22.1,31.2c-5.9,7.2-15.7,9.6-24.5,6.8
                    l-55.7-17.7c-13.4,10.3-28.2,18.9-44,25.4l-12.5,57.1c-2,9.1-9,16.3-18.2,17.8c-13.8,2.3-28,3.5-42.5,3.5s-28.7-1.2-42.5-3.5
                    c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4l-55.6,17.8c-8.8,2.8-18.6,0.3-24.5-6.8
                    c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-0.5-18.4,6.4-24.6l43.3-39.4
                    c-1.1-8.4-1.7-16.9-1.7-25.5s0.6-17.1,1.7-25.4l-43.3-39.4c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9,9.7-23.3,15.8-34.3l4.7-8.1
                    c6.6-11,14-21.4,22.1-31.2c5.9-7.2,15.7-9.6,24.5-6.8l55.7,17.7c13.4-10.3,28.2-18.9,44-25.4l12.5-57.1c2-9.1,9-16.3,18.2-17.8
                    C227.3,1.2,241.5,0,256,0s28.7,1.2,42.5,3.5c9.2,1.5,16.2,8.7,18.2,17.8l12.5,57.1c15.8,6.5,30.6,15.1,44,25.4l55.7-17.7
                    c8.8-2.8,18.6-0.3,24.5,6.8c8.1,9.8,15.5,20.2,22.1,31.2l4.7,8.1c6.1,11,11.4,22.4,15.8,34.3L495.9,166.6z M256,336
                    c44.2,0,80-35.8,80-80s-35.8-80-80-80s-80,35.8-80,80S211.8,336,256,336z" />
                </svg>
            </div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                <div class="icon" data-target="logout">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M350.2,327.5c-13.8-1.4-25.5,9.5-25.5,23V375c0,12.7-10.4,23.1-23.1,23.1l-65.3-4.2V95.2c0-19.8-12.6-37.4-31.3-43.9
                    l-7.1-2.4H292c12.7,0,23.1,10.4,23.1,23.1v21.8c0,12.1,8.7,23.1,20.7,24.4c13.8,1.4,25.5-9.5,25.5-23V72.1
                    c0-38.3-31.1-69.4-82.7-69.4H126.9C66.8,2.6,18,51.4,18,111.5c0,0,0,290.9,0,291.2c0,29.2,12.8,58.9,33.3,79.6
                    c35.1,35.4,94.6,25.9,139.9,27.3c25.2-0.6,45-21.9,45-47l0-22.4l65.3,4.2c38.3,0,69.4-31.1,69.4-69.4v-23.1
                    C370.9,339.8,362.2,328.7,350.2,327.5z" />
                            <path d="M489.3,211.2L414.1,136c-5.4-5.4-13.5-7-20.5-4.1c-7,2.9-11.6,9.8-11.6,17.4v56.4h-75.2c-10.4,0-18.8,8.4-18.8,18.8
                    c0,10.4,8.4,18.8,18.8,18.8H382v56.4c0,7.6,4.6,14.4,11.6,17.4c7,2.9,15.1,1.3,20.5-4.1l75.2-75.2
                    C496.6,230.4,496.6,218.5,489.3,211.2z" />
                        </g>
                    </svg>
                </div>
            </a>

        </div>
    </div>
    <div class="page__content">
        <div class="content enter__xray active">
            <div class="scan_xray">
                <div class="box">
                    @if (session('success'))
                    <div class="success-msg" style="color: rgb(30, 175, 59);
                                  background-color: #DFF2BF;
                                  margin: 5px 0 ;
                                  padding: 20px;
                                  border-radius: 3px 3px 3px 3px;">

                        <i class="fa fa-check"></i>
                        {{session('success')}}
                    </div>

                    @endif
                    <div class="drag-area">
                        <div class="icon">
                            <i class="fas fa-images"></i>
                        </div>
                        <div>
                            <p class="drag__drop">Drag & Drop or</p>
                            <p class="button">Browse File</p>
                            <input type="file" hidden />
                            <span class="support">Supports: JPEG, JPG, PNG</span>
                        </div>
                    </div>
                </div>
                <div class="upload__button">
                    <button class="btn" id="nextScan">
                        <span>
                            <svg viewBox="0 0 53 53" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Scan" fill="red">
                                        <polygon id="Shape"
                                            points="4.4 14.2 1.4 14.2 1.4 0.6 15.8 0.6 15.8 3.6 4.4 3.6"></polygon>
                                        <polygon id="Shape"
                                            points="52.4 14.2 49.4 14.2 49.4 3.6 39.1 3.6 39.1 0.6 52.4 0.6">
                                        </polygon>
                                        <polygon id="Shape"
                                            points="15.8 52.2 1.4 52.2 1.4 38.6 4.4 38.6 4.4 49.2 15.8 49.2">
                                        </polygon>
                                        <polygon id="Shape"
                                            points="52.4 52.2 39.1 52.2 39.1 49.2 49.4 49.2 49.4 38.6 52.4 38.6">
                                        </polygon>
                                        <rect id="Rectangle-path" x="0.9" y="24.9" width="52" height="3"></rect>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span>Scan</span>
                    </button>
                </div>
            </div>
            <div class="next__xray hide">
                <div class="box">
                    <img src="{{ asset("/images/x-ray.png") }}" alt="x-ray" />
                    <div class="title">DIAGNOSE X-RAY</div>
                </div>
                <div class="upload__button">
                    <button class="btn" id="backBtn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
                            </svg>
                        </span>
                        <span>Back</span>
                    </button>
                    <button class="btn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 800 800"
                                style="enable-background:new 0 0 800 800;" xml:space="preserve">

                                <path class="st0" d="M738.4,120c-0.8-15.8-7.6-30.6-19-41.5c-11.4-10.9-26.6-17-42.4-17h-82.2C582,25.7,547.8,0,507.7,0H292.3
                        c-40.1,0-74.3,25.7-87,61.5h-82.2l-3.1,0.1c-15.8,0.8-30.6,7.6-41.5,19c-10.9,11.4-17,26.6-17,42.4v615.4l0.1,3.1
                        c0.8,15.8,7.6,30.6,19,41.5c11.4,10.9,26.6,16.9,42.4,16.9h553.8l3.1-0.1c15.8-0.8,30.6-7.6,41.5-19c10.9-11.4,17-26.6,17-42.4
                        V123.1L738.4,120z M261.6,90.3c1.1-15.9,14.5-28.7,30.7-28.7h215.4c16.8,0,30.8,13.9,30.8,30.8c0,16.8-13.9,30.8-30.8,30.8H292.3
                        c-16.2,0-29.6-12.8-30.7-28.7c0.1-1.1,0.1-2.1,0-3.2C261.6,90.9,261.6,90.6,261.6,90.3z M569.2,382L391,560.2
                        c-5.8,5.8-13.6,9-21.8,9s-16-3.2-21.8-9L246.2,458.9c-12-12-12-31.5,0-43.5c12-12,31.5-12,43.5,0l79.6,79.5l156.5-156.5
                        c12-12,31.5-12,43.5,0C581.2,350.5,581.2,370,569.2,382z" />
                            </svg>
                        </span>
                        <span>Report</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="content message__reports inactive">
            <div class="row">
                <div class="reports">
                    <div class="row">
                        <h3 class="reqBtn active">Requests</h3>
                        <h3 class="arcBtn">Archive</h3>
                    </div>
                    <div class="search__container">
                        <input type="text" name="search" placeholder="Search" />
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="req">
                        @forelse ( $requests as $request )

                        <div class="message__row message">
                            <div class="img__name">
                                <div class="img">
                                    <img src="{{ asset("/images/d1.jpg") }}" alt="Photo" />
                                </div>
                                <div class="name__message">
                                    <h6>{{$request->user->firstname . " ".$request->user->secondname}}
                                        ({{$request->user->email}})</h6>
                                    <p>{{'Patient : ' . $request->patient_email}}</p>
                                    <br>
                                    <form action="{{route('center.resend' , ['id' => $request->id])}}" method="post">
                                        @csrf
                                        <button class="btn">Send</button>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="date__unread">
                                <p class="date">{{$request->created_at}}</p>
                                <p class="unread"></p>
                            </div> --}}
                        </div>

                        @empty

                        @endforelse

                    </div>
                    <div class="archive">
                        @forelse ( $archieves as $archieve )

                        <div class="message__row message">
                            <div class="img__name">
                                <div class="img">
                                    <img src="{{ asset("/images/d1.jpg") }}" alt="Photo" />
                                </div>
                                <div class="name__message">
                                    <h6>{{$archieve->user->firstname . " ".$archieve->user->secondname}}
                                        ({{$archieve->user->email}})</h6>
                                    <p>{{'Patient : '. $archieve->patient_email}}</p>
                                </div>
                            </div>
                            {{-- <div class="date__unread">
                                <p class="date">{{$request->created_at}}</p>
                                <p class="unread"></p>
                            </div> --}}
                        </div>

                        @empty

                        @endforelse

                    </div>
                </div>
                <div class="details">
                    <div>
                        <h3>REQUEST</h3>
                    </div>
                    <div class="logo doctor">
                        <img src="{{ asset("/images/d8.png") }}" alt="logo" class="person" />
                    </div>
                    <div>
                        {{-- <h4 class="custom__heading">{{Auth()->user()->firstname . " " .Auth()->user()->secondname}}
                        </h4> --}}
                        <p class="custom__heading">Re-Send The Patients X-ray</p>
                    </div>
                    {{-- <div>
                        <form method="post">
                            <div>
                                <input type="text" name="email" placeholder="Full Name or Email" />
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Phone Number" />
                            </div>
                            <div class="row">
                                <input type="text" name="age" id="age" placeholder="Age" />
                                <input type="date" name="date" id="date" />
                            </div>
                            <div>
                                <input type="file" value="Browse" />
                            </div>
                            <div>
                                <input type="submit" value="Send" class="btn" />
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="content radiology__center inactive">
            <div class="row">
                <div class="reports">
                    <div>
                        <h3>Reports</h3>
                    </div>
                    <div class="search__container">
                        <input type="text" name="search" placeholder="Search" />
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div>

                        @forelse ( $reports as $report )
                        <div class="message__row message">
                            <div class="img__name">
                                <div class="img">
                                    <img src="{{ asset("/images/d1.jpg") }}" alt="Photo" />
                                </div>
                                <div class="name__message">
                                    <h6>{{$report->full_name}}</h6>
                                    <p>{{$report->email}}</p>
                                    <p class="date">{{$report->created_at}}</p>
                                </div>
                            </div>
                            <a style="text-decoration: none ; display:inline" href="{{'/radiology/info/' . $report->id }}"
                                class="btn">Show</a>

                                <form action="{{route('report.resend' , ['id' => $report->id])}}" method="post">
                                    @csrf
                                    <button style="display: inline" class="btn">Send</button>
                                </form>

                            {{-- <div class="date__unread">
                                <p class="unread"></p>
                            </div> --}}
                        </div>
                        @empty

                        @endforelse

                    </div>
                </div>
                <div class="details">
                    <div class="logo">
                        <img src="{{ asset("/images/logo.svg") }}" alt="logo" />
                    </div>
                    <div>
                        @isset($info)
                        <form>
                            <div>
                                <input value="{{$info->email}}" type="text" name="email"
                                    placeholder="Full Name or Email" />
                            </div>
                            <div>
                                <input value="{{$info->phone}}" type="text" name="phone" placeholder="Phone Number" />
                            </div>
                            <div class="row">
                                <input value="{{$info->age}}" type="text" name="age" id="age" placeholder="Age" />
                                {{-- <input value="{{$info->date}}" type="date" name="date" id="date" /> --}}
                            </div>
                            <div>
                                <input value="{{$doctor_mail->email}}" type="text" name="dname" id="dname"
                                    placeholder="Doctor Name or Email" />
                            </div>
                        </form>
                        <div class="x_ray">
                            <div class="box">
                                <img src="{{ asset("/images/x-ray.png") }}" alt="xray" />
                            </div>
                            <div class="box">
                                <img src="{{ asset("/images/x-ray.png") }}" alt="xray" />
                            </div>
                        </div>
                        @endisset
                        @empty($info)

                        @endempty
                    </div>
                    <div class="radiologyBtn">
                        {{-- <button class="btn">Send</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="content calender inactive">
            <div class="row">
                <div class="left">
                    <div class="leftOne">
                        <div class="reports patients upload">
                            <div class="row">
                                <div class="upload_xray">
                                    <div class="all">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 15C3 17.8284 3 19.2426 3.87868 20.1213C4.75736 21 6.17157 21 9 21H15C17.8284 21 19.2426 21 20.1213 20.1213C21 19.2426 21 17.8284 21 15"
                                                stroke="#265073" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12 16V3M12 3L16 7.375M12 3L8 7.375" stroke="#265073"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p>Enter your X-Rays</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="addBtn">
                            <button class="btn">
                                <span>Add</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="leftTwo">
                        <div class="reports patients upload">
                            <div class="row">
                                <div class="upload_xray">
                                    <div class="all">
                                        <img src="{{ asset("/images/x-ray.png") }}" alt="x-ray">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="upload_xray">
                                    <div class="all">
                                        <img src="{{ asset("/images/x-ray.png") }}" alt="x-ray">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="backBtn">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
                                </svg>
                                <span>Back</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="details information report__information">
                        <div>
                            <h3>Report Information</h3>
                        </div>
                        <div class="informationLogo">
                            <img src="{{ asset("/images/logo.svg") }}" alt="">
                        </div>
                        <div>
                            <form method="post" action="{{route('report.send')}}">
                                @csrf
                                <div>
                                    <input type="text" name="name" placeholder="Patient Name" />
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Patient Email" />
                                </div>
                                <div>
                                    <input type="number" name="phone" placeholder="Phone Number" />
                                </div>
                                <div class="row">
                                    <input type="number" name="age" id="age" placeholder="Age" />
                                    {{-- <input type="date" name="date" id="date" /> --}}
                                </div>
                                <div>
                                    <input type="email" name="dremail" id="dname" placeholder="Doctor Email" />
                                </div>
                        </div>
                    </div>
                    <div class="sendBtn">
                        <button class="btn">
                            <span>Send</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                            </svg>
                        </button>
                    </div>
                </form>
                    <div class="reportBtn">
                        <button class="btn">
                            <span>Report</span>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 800 800"
                                style="enable-background:new 0 0 800 800;" xml:space="preserve">

                                <path class="st0" d="M738.4,120c-0.8-15.8-7.6-30.6-19-41.5c-11.4-10.9-26.6-17-42.4-17h-82.2C582,25.7,547.8,0,507.7,0H292.3
                        c-40.1,0-74.3,25.7-87,61.5h-82.2l-3.1,0.1c-15.8,0.8-30.6,7.6-41.5,19c-10.9,11.4-17,26.6-17,42.4v615.4l0.1,3.1
                        c0.8,15.8,7.6,30.6,19,41.5c11.4,10.9,26.6,16.9,42.4,16.9h553.8l3.1-0.1c15.8-0.8,30.6-7.6,41.5-19c10.9-11.4,17-26.6,17-42.4
                        V123.1L738.4,120z M261.6,90.3c1.1-15.9,14.5-28.7,30.7-28.7h215.4c16.8,0,30.8,13.9,30.8,30.8c0,16.8-13.9,30.8-30.8,30.8H292.3
                        c-16.2,0-29.6-12.8-30.7-28.7c0.1-1.1,0.1-2.1,0-3.2C261.6,90.9,261.6,90.6,261.6,90.3z M569.2,382L391,560.2
                        c-5.8,5.8-13.6,9-21.8,9s-16-3.2-21.8-9L246.2,458.9c-12-12-12-31.5,0-43.5c12-12,31.5-12,43.5,0l79.6,79.5l156.5-156.5
                        c12-12,31.5-12,43.5,0C581.2,350.5,581.2,370,569.2,382z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content settings inactive">
            <div class="row">
                <div class="reports patients">
                    <div>
                        <h3>Settings</h3>
                    </div>
                    <div class="search__container">
                        <input type="text" name="search" placeholder="Search" />
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="list menu">
                        <div class="profile list__items" data-target="profile">
                            <i class="fa-solid fa-user"></i><span>Profile</span>
                        </div>
                        <div class="security list__items" data-target="security">
                            <i class="fa-solid fa-shield-halved"></i><span>Security</span>
                        </div>
                        <div class="subscription list__items" data-target="subscription">
                            <i class="fa-solid fa-money-check-dollar"></i><span>Subscription</span>
                        </div>
                        <div class="delete__account list__items" data-target="delete__account">
                            <i class="fa-solid fa-user-xmark"></i><span>Delete Account</span>
                        </div>
                    </div>
                </div>
                <div class="details information">
                    <div>
                        <div class="cont profile active">
                            <div>
                                <h3>Information</h3>
                            </div>
                            <div class="logo doctor">
                                <div>
                                    <img src="{{ asset("/images/d6.png") }}" alt="logo" class="person" />
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                            </div>
                            <div>
                                <form method="post" action="{{route('center.change')}}">
                                    @csrf
                                    <h4>Personal Information</h4>
                                    <div>
                                        <label for="firstname">First Name</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="firstname" value="{{Auth()->user()->firstname}}"
                                                id="name" />
                                        </p>
                                    </div>
                                    <div>
                                        <label for="name">Second Name</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="secondname" value={{Auth()->user()->secondname}}
                                            id="name" />
                                        </p>
                                    </div>
                                    <div>
                                        <label for="email">Email</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="email" value="{{Auth()->user()->email}}"
                                                id="email" />
                                        </p>
                                    </div>
                                    <div>
                                        <label for="phone">Phone</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="phone" value="{{Auth()->user()->phonenumber}}"
                                                id="phone" />
                                        </p>
                                    </div>
                                    <h4>Address</h4>
                                    <div>
                                        <label for="governorate">Governorate</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="governorate" value="{{Auth()->user()->governate}}"
                                                id="governorate" />
                                        </p>
                                    </div>
                                    <div>
                                        <label for="region">Region</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="region" value="{{Auth()->user()->region}}"
                                                id="region" />
                                        </p>
                                    </div>
                                    <div>
                                        <label for="street">Street</label>
                                        <p>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input type="text" name="street" value="{{Auth()->user()->youraddress}}"
                                                id="street" />
                                        </p>
                                    </div>

                                    <div>
                                        <input type="submit" value="Save" class="btn my-2 btn-primary" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="cont security inactive">
                            <div>
                                <h3>Security</h3>
                            </div>
                            <div class="list change__contact">
                                <div class="goToChangePass">
                                    <i class="fa-solid fa-unlock-keyhole"></i>Change Password
                                </div>
                                <div class="goToContactInformation">
                                    <i class="fa-solid fa-address-book"></i>Contact
                                    Information
                                </div>
                            </div>
                            <div class="changePass">
                                <div class="changePassHeading">
                                    <div class="titleRow">
                                        <div class="backIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"
                                                style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M17,2H7C4.2,2,2,4.2,2,7v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V7C22,4.2,19.8,2,17,2z M15,13h-3.6l1.3,1.3
                            c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0l-3-3c-0.4-0.4-0.4-1,0-1.4l3-3c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L11.4,11H15
                            c0.5,0,1,0.5,1,1S15.5,13,15,13z" />
                                            </svg>
                                        </div>
                                        <h4>Change Password</h4>
                                    </div>
                                </div>
                                <div>
                                    <form method="post" action="{{route('center.change-password')}}">

                                        @csrf
                                        <div>
                                            <label for="currentPassword">Current Password</label>
                                            <input name="password" type="password" placeholder="Enter Current Password"
                                                id="currentPassword" />
                                        </div>
                                        <div>
                                            <label for="newPassword">New Password</label>
                                            <input name="newpassword" type="password" placeholder="Enter New Password"
                                                id="newPassword" />
                                        </div>
                                        <div>
                                            <label for="renterNewPassword">Confirm New Password</label>
                                            <input name="newpassword_confirmation" type="password"
                                                placeholder="Confirm New Password" id="renterNewPassword" />
                                        </div>
                                        <div>
                                            <input type="submit" value="Update Password" class="btn" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="contactInformation">
                                <div class="changePassHeading">
                                    <div class="titleRow">
                                        <div class="backIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"
                                                style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M17,2H7C4.2,2,2,4.2,2,7v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V7C22,4.2,19.8,2,17,2z M15,13h-3.6l1.3,1.3
                            c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0l-3-3c-0.4-0.4-0.4-1,0-1.4l3-3c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L11.4,11H15
                            c0.5,0,1,0.5,1,1S15.5,13,15,13z" />
                                            </svg>
                                        </div>
                                        <h4>Contact Information</h4>
                                    </div>
                                </div>
                                <div class="contact__content">
                                    <div class="contactOne">
                                        <div>
                                            <i class="fa-solid fa-envelope"></i>
                                            <span>{{Auth()->user()->email}}</span>
                                        </div>

                                        {{-- <div>
                                            <i class="fa-solid fa-ellipsis-vertical options" id="optionOne"></i>
                                        </div>
                                        <div class="dropDown">
                                            <button class="btn dropDownBtn dropDownOne">
                                                Delete
                                            </button>
                                        </div> --}}

                                    </div>
                                    <div class="contactOne contactTwo">
                                        <div>
                                            <i class="fa-solid fa-phone"></i>
                                            <span>{{Auth()->user()->phonenumber}}</span>
                                        </div>

                                        {{-- <div>
                                            <i class="fa-solid fa-ellipsis-vertical options" id="optionTwo"></i>
                                        </div>
                                        <div class="dropDown">
                                            <button class="btn dropDownBtn dropDownTwo">
                                                Delete
                                            </button>
                                        </div> --}}

                                    </div>
                                    {{-- <div class="contactOne contactThree">
                                        <div>
                                            <i class="fa-solid fa-ellipsis-vertical options" id="optionThree"></i>
                                        </div>
                                        <div class="dropDown">
                                            <button class="btn dropDownBtn dropDownThree">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class="contactOne contactFour">
                                        <div id="addContact">
                                            <i class="fa-solid fa-square-plus"></i>
                                            <span>Add New Contact</span>
                                        </div>
                                        <div class="newEmailAndNumber">
                                            <p id="openAddNumber">Add New Phone Number</p>
                                            <p id="openAddEmail">Add New Email Address</p>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="cont subscription inactive">
                            <div>
                                <h3>Subscription</h3>
                            </div>
                            <div class="row">
                                <div class="premium">
                                    <h6>Premium</h6>
                                    <p class="dis">20% save</p>
                                    <div>
                                        50$
                                        <span>Per 3 Months</span>
                                    </div>
                                    <button class="btn">Subscribe</button>
                                </div>
                                <div class="basic">
                                    <h6>Basic</h6>
                                    <p class="dis">0% save</p>
                                    <div>
                                        10$
                                        <span>Per Month</span>
                                    </div>
                                    <button class="btn">Subscribe</button>
                                </div>
                                <div class="enterprise">
                                    <h6>Enterprise</h6>
                                    <p class="dis">50% save</p>
                                    <div>
                                        100$
                                        <span>Per Year</span>
                                    </div>
                                    <button class="btn">Renew</button>
                                </div>
                            </div>
                            <div class="saved__payment">
                                <div class="row">
                                    <div class="payment">
                                        <h4 class="text-center">Saved Payment Methods</h4>
                                        <div class="col">
                                            <div class="radio form-group">
                                                <div class="check">
                                                    <input id="CC-0" type="radio" name="availPayment" value="4582"
                                                        checked />
                                                    <img src="{{ asset("/images/visa.svg") }}" alt="" />
                                                </div>
                                                <label for="CC-0">
                                                    <p>**** **** **** 4582</p>
                                                    <p>Visa</p>
                                                </label>
                                            </div>
                                            <div class="radio form-group">
                                                <div class="check">
                                                    <input id="CC-0" type="radio" name="availPayment" value="4582"
                                                        checked />
                                                    <img src="{{ asset("/images/paypal.svg") }}" alt="" />
                                                </div>
                                                <label for="CC-0">
                                                    <p>**** **** **** 4582</p>
                                                    <p>Visa</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="radio form-group">
                                                <div class="check">
                                                    <input id="CC-0" type="radio" name="availPayment" value="4582"
                                                        checked />
                                                    <img src="{{ asset("/images/mastercard.svg") }}" alt="" />
                                                </div>
                                                <label for="CC-0">
                                                    <p>**** **** **** 4582</p>
                                                    <p>Visa</p>
                                                </label>
                                            </div>
                                            <div class="radio form-group">
                                                <div class="check">
                                                    <input id="CC-0" type="radio" name="availPayment" value="4582"
                                                        checked />
                                                    <img src="{{ asset("/images/google-pay.svg") }}" alt="" />
                                                </div>
                                                <label for="CC-0">
                                                    <p>**** **** **** 4582</p>
                                                    <p>Visa</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <div class="col-sm-12 field" id="update-pledge-validate">
                                                <input type="button" class="btn btn-block btn-primary"
                                                    id="submitUpdatePledge" value="New Payment Method" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cont delete__account inactive">
                            <div>
                                <h3>Delete Account</h3>
                            </div>
                            <div class="email">
                                <h6>This Will Delete Your Account Permanentiy</h6>
                                <p>Stephany_Daniel@gmail.com</p>
                            </div>
                            <div class="bullets">
                                <h6>This Following Items Can’t Be Restored :</h6>
                                <p>Optio dolore et tempore temporibus repudiandae voluptas.</p>
                                <p>Optio dolore et tempore temporibus repudiandae voluptas.</p>
                                <p>Optio dolore et tempore temporibus repudiandae voluptas.</p>
                            </div>
                            <div class="reason">
                                <h6>Please Tell us Why You’re Deleting Your Account <span>Requried</span></h6>
                                <div class="inputRadio">
                                    <div>
                                        <input type="radio" id="reason1" name="reasons" checked />
                                        <label for="reason1">Ipsam itaque qui doloremque odio ut similique quia
                                            sed.</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="reason2" name="reasons" />
                                        <label for="reason2">Ipsam itaque qui doloremque odio ut similique quia
                                            sed.</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="reason3" name="reasons" />
                                        <label for="reason3">Ipsam itaque qui doloremque odio ut similique quia
                                            sed.</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="reason4" name="reasons" />
                                        <label for="reason4">Ipsam itaque qui doloremque odio ut similique quia
                                            sed.</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="reason5" name="reasons" />
                                        <label for="reason5">Ipsam itaque qui doloremque odio ut similique quia
                                            sed.</label>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <form>
                                    <div>
                                        <label for="password">To Confirm This Type " Password "</label>
                                    </div>
                                    <div>
                                        <input type="password" id="password" />
                                    </div>
                                    <div class="signInSubmit">
                                        <input type="submit" value="Delete Account" id="signUpSubmit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content logout inactive">
            <div class="logout_content">
                <h2>You have been logged out</h2>

                {{-- <div class="icon" id="logoutButton">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M350.2,327.5c-13.8-1.4-25.5,9.5-25.5,23V375c0,12.7-10.4,23.1-23.1,23.1l-65.3-4.2V95.2c0-19.8-12.6-37.4-31.3-43.9
                    l-7.1-2.4H292c12.7,0,23.1,10.4,23.1,23.1v21.8c0,12.1,8.7,23.1,20.7,24.4c13.8,1.4,25.5-9.5,25.5-23V72.1
                    c0-38.3-31.1-69.4-82.7-69.4H126.9C66.8,2.6,18,51.4,18,111.5c0,0,0,290.9,0,291.2c0,29.2,12.8,58.9,33.3,79.6
                    c35.1,35.4,94.6,25.9,139.9,27.3c25.2-0.6,45-21.9,45-47l0-22.4l65.3,4.2c38.3,0,69.4-31.1,69.4-69.4v-23.1
                    C370.9,339.8,362.2,328.7,350.2,327.5z" />
                            <path d="M489.3,211.2L414.1,136c-5.4-5.4-13.5-7-20.5-4.1c-7,2.9-11.6,9.8-11.6,17.4v56.4h-75.2c-10.4,0-18.8,8.4-18.8,18.8
                    c0,10.4,8.4,18.8,18.8,18.8H382v56.4c0,7.6,4.6,14.4,11.6,17.4c7,2.9,15.1,1.3,20.5-4.1l75.2-75.2
                    C496.6,230.4,496.6,218.5,489.3,211.2z" />
                        </g>
                    </svg>
                </div> --}}

            </div>
        </div>
    </div>
</div>

<!--___________________________________ Modals ___________________________________-->
<!-- Add Phone Number -->
<div class="addPhoneNumber" id="modal">
    <div id="overlay" class="modal-overlay"></div>
    <div class="modal">
        <div class="modalHeader">
            <div class="modal-close" id="close-modal-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                        fill="black" />
                </svg>
            </div>
            <div class="modal-title">
                <h1>New Phone Number</h1>
            </div>
        </div>
        <div class="modal-content">
            <img src="{{ asset("/images/phone.png") }}" alt="Phone Image">
            <p>A 6-digit code was sent to +201 ********* </p>
            <p>Enter it within 2 minutes</p>
            <input type="text" id="phone" placeholder="Enter your phone number">
            <input type="submit" value="Submit" class="btn" id="submit-btn">
        </div>
    </div>
</div>

<!-- Add Email -->
<div class="addEmail" id="modalEmail">
    <div id="overlayEmail" class="modal-overlay"></div>
    <div class="modal">
        <div class="modalHeader">
            <div class="modal-close" id="close-modal-email-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                        fill="black" />
                </svg>
            </div>
            <div class="modal-title">
                <h1>New Email Address</h1>
            </div>
        </div>
        <div class="modal-content">
            <img src="{{ asset("/images/email.png") }}" alt="Email Image">
            <p>Please enter your new email address</p>
            <input type="email" id="email" placeholder="Enter your Email Address">
            <input type="submit" value="Submit" class="btn" id="submit-email-btn">
        </div>
    </div>
</div>

<!-- Send Modal -->
{{-- <div class="sendModal" id="modalSend">
    <div id="overlaySend" class="modal-overlay"></div>
    <div class="modal">
        <div class="modalHeader">
            <div class="modal-close" id="close-modal-send-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                        fill="black" />
                </svg>
            </div>

            <div class="modal-title">
                <h1>Send Report</h1>
            </div>
        </div>
        <div class="modal-content">
            <div class="send__search">
                <input type="search" name="sendSearch" id="sendSearch" placeholder="search">
            </div>
            <div class="recent__modal">
                <h3>Recent</h3>
            </div>
            <div class="recommended__modal recent__modal">
            </div>
        </div>
    </div>
</div> --}}

<script src="{{ asset("/js/jquery.min.js") }}"></script>

<!-- <script defer src="js/googleapis.js"></script> -->
@section('footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
            // Phone Number Modal
            const openPhoneNumberBtn = document.getElementById('openAddNumber');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const modal = document.getElementById('modal');
            const overlay = document.getElementById('overlay');

            openPhoneNumberBtn.addEventListener('click', function () {
                modal.style.display = 'block';
                overlay.style.display = 'block';
            });

            closeModalBtn.addEventListener('click', function () {
                modal.style.display = 'none';
                overlay.style.display = 'none';
            });

            overlay.addEventListener('click', function () {
                modal.style.display = 'none';
                overlay.style.display = 'none';
            });

            document.getElementById('submit-btn').addEventListener('click', function () {
                modal.style.display = 'none';
                overlay.style.display = 'none';
            });

            // Email Modal
            const openAddEmailBtn = document.getElementById('openAddEmail');
            const closeModalEmailBtn = document.getElementById('close-modal-email-btn');
            const modalEmail = document.getElementById('modalEmail');
            const overlayEmail = document.getElementById('overlayEmail');

            openAddEmailBtn.addEventListener('click', function () {
                modalEmail.style.display = 'block';
                overlayEmail.style.display = 'block';
            });

            closeModalEmailBtn.addEventListener('click', function () {
                modalEmail.style.display = 'none';
                overlayEmail.style.display = 'none';
            });

            overlayEmail.addEventListener('click', function () {
                modalEmail.style.display = 'none';
                overlayEmail.style.display = 'none';
            });

            document.getElementById('submit-email-btn').addEventListener('click', function () {
                modalEmail.style.display = 'none';
                overlayEmail.style.display = 'none';
            });
        });


        document.addEventListener('DOMContentLoaded', function () {

            const addButton = document.querySelector('.addBtn button.btn');
            const reportsDiv = document.querySelector('.reports.patients.upload');
            const maxRows = 4;

            // Add click event listener
            addButton.addEventListener('click', function () {
                if (reportsDiv.querySelectorAll('.row').length >= maxRows) {
                    addButton.disabled = true;
                    return;
                }

                const newRow = document.createElement('div');
                newRow.className = 'row';

                newRow.innerHTML = `
                <div class="upload_xray">
                    <div class="all">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15C3 17.8284 3 19.2426 3.87868 20.1213C4.75736 21 6.17157 21 9 21H15C17.8284 21 19.2426 21 20.1213 20.1213C21 19.2426 21 17.8284 21 15" stroke="#265073" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 16V3M12 3L16 7.375M12 3L8 7.375" stroke="#265073" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Enter your X-Rays</p>
                    </div>
                </div>
            `;

                reportsDiv.appendChild(newRow);

                if (reportsDiv.querySelectorAll('.row').length >= maxRows) {
                    addButton.disabled = true;
                }
            });
        });



        var reqBtn = document.querySelector('.reqBtn');
        var arcBtn = document.querySelector('.arcBtn');

        var reqContainer = document.querySelector('.req');
        var arcContainer = document.querySelector('.archive');

        reqBtn.addEventListener('click', function () {
            reqContainer.style.display = 'block';
            arcContainer.style.display = 'none';

            reqBtn.classList.add('active');
            arcBtn.classList.remove('active');
        });

        arcBtn.addEventListener('click', function () {
            reqContainer.style.display = 'none';
            arcContainer.style.display = 'block';

            reqBtn.classList.remove('active');
            arcBtn.classList.add('active');
        });


        const reportBtn = document.querySelector('.reportBtn button');
        const backBtn = document.querySelector('.backBtn button');
        const leftOne = document.querySelector('.leftOne');
        const leftTwo = document.querySelector('.leftTwo');
        const sendBtn = document.querySelector('.sendBtn button');

        function showLeftTwo() {
            leftOne.style.display = 'none';
            leftTwo.style.display = 'block';
        }

        function showLeftOne() {
            leftTwo.style.display = 'none';
            leftOne.style.display = 'block';

            // Show the report button and hide the send button
            reportBtn.parentNode.style.display = 'block';
            sendBtn.parentNode.style.display = 'none';
        }

        reportBtn.addEventListener('click', function () {
            showLeftTwo();
            // Hide the report button and show the send button
            reportBtn.parentNode.style.display = 'none';
            sendBtn.parentNode.style.display = 'block';
        });

        backBtn.addEventListener('click', function () {
            showLeftOne();
        });




        const sendModal = document.getElementById('modalSend');
        const overlaySend = document.getElementById('overlaySend');
        const closeModalBtn = document.getElementById('close-modal-send-btn');

        function showModal() {
            sendModal.style.display = 'block';
            overlaySend.style.display = 'block';
        }

        function hideModal() {
            sendModal.style.display = 'none';
            overlaySend.style.display = 'none';
        }

        sendBtn.addEventListener('click', function () {
            showModal();
        });

        reportBtn.addEventListener('click', function () {
            hideModal();
        });

        closeModalBtn.addEventListener('click', function () {
            hideModal();
        });

        window.addEventListener('click', function (event) {
            if (event.target === overlaySend) {
                hideModal();
            }
        });

</script>

@endsection

@endsection