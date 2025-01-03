@extends('frontend.master')

@section('title')
    BizNews - Single Post Page
@endsection

@php
    $page = 'post'
@endphp

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{ asset('public/frontend/img/news-700x435-1.jpg') }}" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-body" href="">Jan 01, 2045</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Lorem ipsum dolor sit amet elit vitae porta diam...</h1>
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                            magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                            amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                            sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                            aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                            sit stet no diam kasd vero.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                            vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                            nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                            ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                            clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                            justo dolore sit invidunt.</p>
                        <h3 class="text-uppercase font-weight-bold mb-3">Lorem ipsum dolor sit amet elit</h3>
                        <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('public/frontend/img/news-800x500-1.jpg') }}">
                        <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                            invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                            lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                            rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                            sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                            lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                            sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                            dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                            sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                            duo tempor sea kasd clita ipsum et.</p>
                        <h5 class="text-uppercase font-weight-bold mb-3">Lorem ipsum dolor sit amet elit</h5>
                        <img class="img-fluid w-50 float-right mr-4 mb-2" src="{{ asset('public/frontend/img/news-800x500-2.jpg') }}">
                        <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                            invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                            lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                            rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                            sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                            lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                            sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                            dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                            sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                            duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat
                            aliquyam et ut.</p>
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="{{ asset('public/frontend/img/user.jpg') }}" width="25" height="25" alt="">
                            <span>John Doe</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                            <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->

                <!-- Comment List Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <div class="media mb-4">
                            <img src="{{ asset('public/frontend/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="{{ asset('public/frontend/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="{{ asset('public/frontend/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Comment Form End -->
            </div>

            <div class="col-lg-4">
                @include('frontend.partials.socials')

                @include('frontend.partials.ads')

                @include('frontend.partials.popularnews')

                @include('frontend.partials.newsletter')

                @include('frontend.partials.tags')
            </div>
        </div>
    </div>
</div>

@endsection