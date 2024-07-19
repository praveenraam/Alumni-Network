@extends('layouts.app')
@section('title', 'Create Alumni')

@push('bodycontent')<section>
    <style>
        .fade-out {
            transition: opacity 1s ease-in-out;
        }
    </style>
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('layouts.includes.sidebar')
                            <div class="col-lg-9">
                                <div class="loadMore">
                                    <div class="central-meta">
                                        <div class="editing-info">
                                          <h5 class="f-title"><i class="ti-info-alt"></i> Create Favourite Page</h5>
                                          <div class="form-group">
                                            @if ($errors->any())
                                                <div class="alert alert-danger fade-out" id="error-alert">
                                                    @foreach ($errors->all() as $error)
                                                        <p class="text-danger">{{ $error }}</p>
                                                    @endforeach
                                                </div>
                                            @endif
                                          </div>
                                          <form method="POST" action="/admin/alumni/store">   
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" required="required">
                                                <label class="control-label" for="name">Name</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="roll_no" id="roll_no" required="required">
                                                <label class="control-label" for="roll_no">Roll No</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" required="required">
                                                <label class="control-label" for="email">Email</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" required="required">
                                                <label class="control-label" for="password">Password</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" id="password_confirmation" required="required">
                                                <label class="control-label" for="password_confirmation">Confirm Password</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <select name="batch" id="batch" required="required">
                                                    <option value="" disabled selected>Select Batch</option>
                                                    <option value="2018-2022">2018-2022</option>
                                                    <option value="2019-2023">2019-2023</option>
                                                    <option value="2020-2024">2020-2024</option>
                                                    <option value="2021-2025">2021-2025</option>
                                                    <option value="2021-2025">2022-2026</option>
                                                </select>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <select name="degree" id="degree" required="required">
                                                    <option value="" disabled selected>Select Degree</option>
                                                    <option value="B.Tech">B.Tech</option>
                                                    <option value="M.Tech">M.Tech</option>
                                                    <option value="B.E">B.E</option>
                                                    <option value="M.E">M.E</option>
                                                    <option value="MBA">MBA</option>
                                                </select>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <select name="department" id="department" required="required">
                                                    <option value="" disabled selected>Select Department</option>
                                                    <option value="AIDS">AIDS</option>
                                                    <option value="AIML">AIML</option>
                                                    <option value="CSE">CSE</option>
                                                    <option value="IT">IT</option>
                                                    <option value="CSD">CSD</option>
                                                    <option value="CSBS">CSBS</option>
                                                    <option value="ISE">ISE</option>
                                                    <option value="ECE">ECE</option>
                                                    <option value="EEE">EEE</option>
                                                    <option value="EIE">EIE</option>
                                                    <option value="ME">ME</option>
                                                    <option value="MZ">MZ</option>
                                                    <option value="CE">CE</option>
                                                    <option value="TX">TX</option>
                                                    <option value="FD">FD</option>
                                                    <option value="FT">FT</option>
                                                    <option value="BT">BT</option>
                                                    <option value="BM">BM</option>
                                                    <option value="AG">AG</option>
                                                    <option value="MBA">MBA</option>
                                                </select>
                                                <i class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                              <button type="button" class="mtr-btn" onclick="window.history.back();"><span>Cancel</span></button>
                                              <button type="submit" class="mtr-btn"><span>Save</span></button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {

            setTimeout(function() {
                errorAlert.style.opacity = '0';
            }, 5000);

            setTimeout(function() {
                errorAlert.style.display = 'none';
            }, 5000); // 1 second after starting the fade out
        }
        });
    </script>
  
@endpush