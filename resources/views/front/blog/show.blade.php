@extends('front.layout.master')
@section('title','Blog')
@section('body')
<!-- Breadcrumb -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i class="fa fa-home"></i></a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="blog-sidebar">
                    <div class="search-form">
                        <h4>Search</h4>
                        <form action="./blog">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="blog-catagory">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="./blog">Codelearn</a></li>
                            <li><a href="./blog">Travel</a></li>
                            <li><a href="./blog">Picnic</a></li>
                            <li><a href="./blog">Model</a></li>
                        </ul>
                    </div>
                    <div class="recent-post">
                        <h4>Recent Post</h4>
                        <div class="recent-blog">
                            <a href="./blog-detail" class="rb-item">
                                <div class="rb-pic">
                                    <img src="front/img/blog/recent-1.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>codeleanon <span>- May 19, 2022</span></p>
                                </div>
                            </a>
                            <a href="./blog-detail" class="rb-item">
                                <div class="rb-pic">
                                    <img src="front/img/blog/recent-2.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>codeleanon <span>- May 19, 2022</span></p>
                                </div>
                            </a>
                            <a href="./blog-detail" class="rb-item">
                                <div class="rb-pic">
                                    <img src="front/img/blog/recent-3.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>codeleanon <span>- May 19, 2022</span></p>
                                </div>
                            </a>
                            <a href="./blog-detail" class="rb-item">
                                <div class="rb-pic">
                                    <img src="front/img/blog/recent-4.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>codeleanon <span>- May 19, 2022</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog-tags">
                        <h4>Product Tags</h4>
                        <div class="tag-item">
                            <a href="./blog">Towel</a>
                            <a href="./blog">Shoes</a>
                            <a href="./blog">Coat</a>
                            <a href="./blog">Dresses</a>
                            <a href="./blog">Trousers</a>
                            <a href="./blog">Men's hats</a>
                            <a href="./blog">Backpack</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="front/img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-detail">
                                    <h4>Happy</h4>
                                </a>
                                <p>travel <span>- May 19, 2022</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="front/img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-detail">
                                    <h4>Happy</h4>
                                </a>
                                <p>travel <span>- May 19, 2022</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="loading-more">
                            <i class="icon_loading"></i>
                            <a href="#">Loading more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection