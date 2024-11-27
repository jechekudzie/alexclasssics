@extends('layouts.website')

@section('title', 'Home Page')


@push('styles')

@endpush

@section('content')
    <br/>
    <br/>
    <!-- MAIN SECTIONS START FROM HERE -->
    <!-- MAIN SECTIONS START FROM HERE -->
    <main class="main_wrapper">

        <!-- BREADCRUMBS SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="breadcrumbs-section">
                <div class="container">
                    <div class="breadcrumbs-title title text-lg-start text-center pb-3">Register</div>
                    <div class="breadcrumbs-block mx-lg-0 mx-auto">
                        <a href="{{url('/')}}" class="item">home</a>
                        <span class="item active">register</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SECTION END'S FROM HERE -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <!-- REGISTRATION SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="registration-section form-section wow fadeIn">
                <div class="container">
                    <div class="registration-wrapper">
                        <div class="row justify-content-lg-start justify-content-center">
                            <div class="col-lg-6 col-sm-10">
                                <div class="fill-up-form">
                                    <div class="title text-center">Register</div>
                                    <form class="form" action="{{ route('event-registration.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="first_name" class="user-input @error('first_name') is-invalid @enderror" placeholder="FIRST NAME" required>
                                                    @error('first_name')
                                                    <span class="invalid-feedback" style="color: red; font-size: 12px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" class="user-input @error('last_name') is-invalid @enderror" placeholder="LAST NAME" required>
                                                    @error('last_name')
                                                    <span class="invalid-feedback" style="color: red; font-size: 12px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="user-input @error('email') is-invalid @enderror" placeholder="E-MAIL">
                                                    @error('email')
                                                    <span class="invalid-feedback" style="color: red; font-size: 12px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="mobile_number" class="user-input @error('mobile_number') is-invalid @enderror" placeholder="PHONE NO.">
                                                    @error('mobile_number')
                                                    <span class="invalid-feedback" style="color: red; font-size: 12px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <select name="user_type" class="user-input @error('user_type') is-invalid @enderror" required>
                                                        <option value="" selected>SELECT YOUR ROLE</option>
                                                        <option value="sponsor">Sponsor</option>
                                                        <option value="athlete">Athlete</option>
                                                        <option value="attendee">Attendee</option>
                                                    </select>
                                                    @error('user_type')
                                                    <span class="invalid-feedback" style="color: red; font-size: 12px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn_wrapper w-100 justify-content-center">REGISTER</button>
                                    </form>


                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-10">
                                <div class="wow fadeInLeft">
                                    <img  style="margin-top: 20px;" loading="lazy" src="{{asset('assets/images/background/young-woman-pink-top-standing-with-coach.jpg')}}" alt="about-img"
                                         id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- REGISTRATION SECTION END'S FROM HERE -->
    </main>
    <!-- MAIN SECTIONS END'S FROM HERE -->

    <!-- MAIN SECTIONS END'S FROM HERE -->
@endsection

@push('scripts')
@endpush
