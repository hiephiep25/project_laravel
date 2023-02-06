@extends('front.layout.master')
@section('title','Blog-detail')
@section('body')
<!-- Blog Details -->
<div class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>Happy</h2>
                        <p>Travel <span>- May 19, 2022</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="front/img/blog/blog-detail.jpg" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>Something special</p>
                    </div>
                    <div class="blog-quote">
                        <p>Good and smart <span>- Steven</span></p>
                    </div>
                    <div class="blog-more">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="front/img/blog/blog-detail-1.jpg" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="front/img/blog/blog-detail-2.jpg" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="front/img/blog/blog-detail-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tag-share">
                        <div class="details-tag">
                            <li><i class="fa fa-tags"></i></li>
                            <li>Travel</li>
                            <li>Beauty</li>
                            <li>codeleanon</li>
                        </div>
                        <div class="blog-share">
                            <span>Share:</span>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <a href="#" class="prev-blog">
                                    <div class="pb-pic">
                                        <i class="ti-arrow-left"></i>
                                        <img src="front/img/blog/prev-blog.png" alt="">
                                    </div>
                                    <div class="pb-text">
                                        <span>Previous Post:</span>
                                        <h5>UwU</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-6 offset-lg-2">
                                <a href="#" class="next-blog">
                                    <div class="nb-pic">
                                        <i class="ti-arrow-right"></i>
                                        <img src="front/img/blog/next-blog.png" alt="">
                                    </div>
                                    <div class="nb-text">
                                        <span>Next Post:</span>
                                        <h5>Yeah</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="posted-by">
                        <div class="pb-pic">
                            <img src="front/img/blog/post-by.png" alt=""></div>
                        <div class="pb-text">
                            <a href="#">
                                <h5>Shane</h5>
                            </a>
                            <p>Something</p>
                        </div>
                    </div>
                    <div class="leave-comment">
                        <h4>Leave A Comment</h4>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection