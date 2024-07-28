@extends('layouts.app')
@section('title', 'News Feed')

@push('bodycontent')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('layouts.includes.sidebar')
                            <div class="col-lg-9">
                                @include('layouts.index');
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
