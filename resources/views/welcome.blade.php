<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Josephine Hipolito Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
    <Style>
        img {
            width: 60%;
        }

        h4 {
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 2px;
            margin: 0;
            padding: 10px 0;
            font-family: 'Times New Roman', Times, serif;
        }

        h5 {
            padding: 10px 0;
            font-family: 'Times New Roman', Times, serif;
        }

        p {
            margin-bottom: 5px;
            font-family: 'Times New Roman', Times, serif;
        }

        .personal-container {
            border-right: solid thin rgba(0, 0, 0, .2);

        }

        .skills-container {
            display: flex;
            align-items: center;
        }

        .skills-container h4 {
            margin-left: 10px;
        }

        .information-container {
            height: 100vh;
            overflow-y: auto;
        }

        .information-container::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .information-container::-webkit-scrollbar-thumb {
            background-color: #023479;
            border-radius: 10px;
        }

        .information-container::-webkit-scrollbar-track {
            background-color: #f0f0f0;
            border-radius: 10px;
        }

        .horizontal-line {
            width: 95%;
        }
    </Style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 personal-container">
                <div class="container ">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <img src="{{asset('JosephineImage.jpg')}}" alt="Josephine Image">
                        </div>
                        <div class="col-12">
                            <h5 class="h5">{{$details->name}}</h5>
                        </div>
                        <hr class="mx-auto horizontal-line">
                        <div class="col-12">
                            <p><i class="fa-solid fa-house"></i> : {{$details->name}}</p>
                            <p><i class="fa-solid fa-phone"></i> : {{$details->name}}</p>
                            <p><i class="fa-solid fa-envelope"></i> : {{$details->name}}</p>
                        </div>
                        <hr class="mx-auto horizontal-line">
                        <div class="col-12">
                            <div class="row">
                                <h4 class="h4">Personal Information</h4>
                                <div class="col-5">
                                    <p class="text-center"><strong>Date of Birth</strong></p>
                                    <p class="text-center"><strong>Place of Birth</strong></p>
                                    <p class="text-center"><strong>Age</strong></p>
                                    <p class="text-center"><strong>Sex</strong></p>
                                    <p class="text-center"><strong>Nationality</strong></p>
                                    <p class="text-center"><strong>Civil Status</strong></p>
                                    <p class="text-center"><strong>Height</strong></p>
                                    <p class="text-center"><strong>Weight</strong></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="text-center">{{$personal->birthDate}}</p>
                                    <p class="text-center">{{$personal->birthPlace}}</p>
                                    <p class="text-center">{{$personal->age}}</p>
                                    <p class="text-center">{{$personal->gender}}</p>
                                    <p class="text-center">{{$personal->nationality}}</p>
                                    <p class="text-center">{{$personal->civilStatus}}</p>
                                    <p class="text-center">{{$personal->height}}</p>
                                    <p class="text-center">{{$personal->weight}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 information-container">
                <div class="row">
                    <div class="col-12 ">
                        <div class="container ">
                            <div class="row">
                                <span class="skills-container">
                                    <i class="fa-solid fa-circle" style="color: #023479;"></i>
                                    <h4 class="h4">OBJECTIVES</h4>
                                </span>
                                <div class="offset-1 col-10">
                                    <p>&emsp;&emsp;&emsp;{{$objective->objective}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mx-auto horizontal-line">
                    <div class="col-12 ">
                        <div class="container ">
                            <div class="row">
                                <span class="skills-container">
                                    <i class="fa-solid fa-circle" style="color: #023479;"></i>
                                    <h4>SKILLS</h4>
                                </span>
                                <div class="offset-1 col-11">
                                    <ul>
                                        @foreach ($skills as $skill)
                                        <li>
                                            <p>{{ $skill->skills }}</p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="mx-auto horizontal-line">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <span class="skills-container">
                                        <i class="fa-solid fa-circle" style="color: #023479;"></i>
                                        <h4 class="h4" style="margin: 20px 10px;">EDUCATIONAL BACKGROUND</h4>
                                    </span>
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach($education as $education)
                                            @if($education->schoolLevel === 'College')
                                            <div class="offset-1 col-3">
                                                <p class="text-center"><strong>College</strong></p>
                                            </div>
                                            <div class="col-1">
                                                <p class="text-center"><strong>:</strong></p>
                                            </div>
                                            <div class="offset-1 col-6">
                                                <p><strong>{{ $education->schoolName }}</strong></p>
                                                <p>{{ $education->schoolCourse }}</p>
                                                <p>{{ $education->schoolAddress }}</p>
                                                <p>{{ $education->schoolYear }}</p>
                                            </div>
                                            @elseif($education->schoolLevel === 'Secondary')
                                            <div class="offset-1 col-3">
                                                <p class="text-center"><strong>Secondary</strong></p>
                                            </div>
                                            <div class="col-1">
                                                <p class="text-center"><strong>:</strong></p>
                                            </div>
                                            <div class="offset-1 col-6">
                                                <p><strong>{{ $education->schoolName }}</strong></p>
                                                <p>{{ $education->schoolCourse }}</p>
                                                <p>{{ $education->schoolAddress }}</p>
                                                <p>{{ $education->schoolYear }}</p>
                                            </div>
                                            @elseif($education->schoolLevel === 'Primary')
                                            <div class="offset-1 col-3">
                                                <p class="text-center"><strong>Primary</strong></p>
                                            </div>
                                            <div class="col-1">
                                                <p class="text-center"><strong>:</strong></p>
                                            </div>
                                            <div class="offset-1 col-6">
                                                <p><strong>{{ $education->schoolName }}</strong></p>
                                                <p>{{ $education->schoolCourse }}</p>
                                                <p>{{ $education->schoolAddress }}</p>
                                                <p>{{ $education->schoolYear }}</p>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>