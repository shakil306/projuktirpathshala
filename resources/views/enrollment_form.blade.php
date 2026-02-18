@php
Use App\Models\Title;
$title=Title::where('p_mark',"Contact")->first();
@endphp
@section('title')
Google Enrollment Form
@endsection
@section('description') "Enrollment Form" for Friday Special Corporate Batch @endsection
@section('keyword')google,enrollment,Friday Special Corporate Batch,@endsection
@extends('master.master')
@section('content')
    <section id="first_section"><br>
        <div class="text-center">
            <h4 class="mt-4">Enrollment Form</h4>
            <h1>Friday Special Corporate Batch</h1>
        </div>
    </section>
    <section id="contact-map">
        <div class="container">
            <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSc_1y1QbBPUTUS4OFPHre5rPSNTHALnyMK9MNKqEDqUZL3OOw/formResponse" method="post">
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <label for="">Full name</label>
                        <input type="text" name="entry.161858104" placeholder="Full name" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Email address</label>
                        <input type="email" name="entry.114504960" placeholder="Email" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Phone number</label>
                        <input type="tel" name="entry.549343026" placeholder="Phone" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="">Address/Location</label>
                        <input type="tel" name="entry.1680784219" placeholder="Address or Location" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="">Your Education</label>
                        <input type="text" name="entry.1193059155" placeholder="Education" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Your Profession</label>
                        <input type="text" name="entry.2098458210" placeholder="Profession" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Do you have Computer basic</label>
                        <select name="entry.1914037775" data="" type="" class="form-control form-select-lg" required>
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Do you have Computer/Loptop ?</label>
                        <select name="entry.1173689593" data="" type="" class="form-control form-select-lg" required>
                            <option value="">Select Option</option>
                            <option value="Computer (Desktop)">Computer (Desktop)</option>
                            <option value="Laptop">Laptop</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="">Do you have any other skills</label>
                        <input type="text" name="entry.1867239430" placeholder="Add your skill" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="">Why are you interested ?</label>
                        <textarea name="entry.1432235116" rows="4" class="form-control form-control-lg" placeholder="Write your interest Here . . ." id="" required></textarea>
                    </div>
                </div><br>
               <center>
                    <button type="submit" class="btn btn-two">Application Submit</button>
                </center><br>
            </form>
        </div>
    </section>

@endsection
