@extends('layouts.front')
@section('content')
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/blogs/'.$blog->photo) }});">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">{{ $blog->title }}</h1>
                    <div class="entry-meta">
                           <span class="byline">
                              <a href="#">   {{ $lang->lang65 }} : {{ $blog->source }}</a>
                           </span>
                        <span class="posted-on">
                              <a href="#">{{ date('d M, Y',strtotime($blog->created_at)) }}</a>
                           </span>
                        <span class="comments-link">
                              <a href="#">    {{ $blog->views }} {{ $lang->lang64 }}</a>
                           </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>

    <div class="single-post-section">
        <div class="single-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 primary right-sidebar">
                        <!-- single blog post html start -->
                        <figure class="feature-image">
                            <img src="assets/images/img30.jpg" alt="">
                        </figure>
                        <article class="single-content-wrap">
                            <h3>Cupiditate hic provident, repudiandae delectus debitis hac alias curabitur, sequi minim sapien scelerisque dolorem id.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius ligula non tellus euismod fermentum. Nulla quis enim ut est dapibus luctus quis quis enim. Ut bibendum ultricies nisl ut aliquam. Ut in arcu id nunc elementum ultricies eu eget lacus nam at neque lorem.</p>
                            <blockquote>
                                <p>Sagittis perferendis? Leo nobis irure egestas excepturi ipsam nascetur elementum, montes. Torquent, soluta, ac nihil.</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius ligula non tellus euismod fermentum. Nulla quis enim ut est dapibus luctus quis quis enim. Ut bibendum ultricies nisl ut aliquam. Ut in arcu id nunc elementum ultricies eu eget lacus nam at neque lorem.</p>
                        </article>
                        <div class="meta-wrap">
                            <div class="tag-links">
                                <a href="#">Destination</a>,
                                <a href="#">hiking</a>,
                                <a href="#">Travel Dairies</a>,
                                <a href="#">Travelling</a>,
                                <a href="#">Trekking</a>
                            </div>
                        </div>
                        <div class="post-socail-wrap">
                            <div class="social-icon-wrap">
                                <div class="social-icon social-facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                </div>
                                <div class="social-icon social-google">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <span>Google</span>
                                    </a>
                                </div>
                                <div class="social-icon social-pinterest">
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                        <span>Pinterest</span>
                                    </a>
                                </div>
                                <div class="social-icon social-linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                        <span>Linkedin</span>
                                    </a>
                                </div>
                                <div class="social-icon social-twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrap">
                            <div class="author-thumb">
                                <img src="assets/images/user-img.png" alt="">
                            </div>
                            <div class="author-content">
                                <h3 class="author-name">Demoteam</h3>
                                <p>Anim eligendi error magnis. Pretium fugiat cubilia ullamcorper adipisci, lobortis repellendus sit culpa maiores!</p>
                                <a href="#" class="button-text">VIEW ALL POSTS > </a>
                            </div>
                        </div>
                        <!-- post comment html -->
                        <div class="comment-area">
                            <h2 class="comment-title">3 Comments</h2>
                            <div class="comment-area-inner">
                                <ol>
                                    <li>
                                        <figure class="comment-thumb">
                                            <img src="assets/images/img20.jpg" alt="">
                                        </figure>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <h5 class="author-name">Tom Sawyer</h5>
                                                <span class="post-on">Jana 10 2020</span>
                                            </div>
                                            <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <ol>
                                            <li>
                                                <figure class="comment-thumb">
                                                    <img src="assets/images/img21.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                    <div class="comment-header">
                                                        <h5 class="author-name">John Doe</h5>
                                                        <span class="post-on">Jana 10 2020</span>
                                                    </div>
                                                    <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                    <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                                <ol>
                                    <li>
                                        <figure class="comment-thumb">
                                            <img src="assets/images/img22.jpg" alt="">
                                        </figure>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <h5 class="author-name">Jaan Smith</h5>
                                                <span class="post-on">Jana 10 2020</span>
                                            </div>
                                            <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="comment-form-wrap">
                                <h2 class="comment-title">Leave a Reply</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form class="comment-form">
                                    <p class="full-width">
                                        <label>Comment</label>
                                        <textarea rows="9"></textarea>
                                    </p>
                                    <p>
                                        <label>Name *</label>
                                        <input type="text" name="name">
                                    </p>
                                    <p>
                                        <label>Email *</label>
                                        <input type="email" name="email">
                                    </p>
                                    <p>
                                        <label>Website</label>
                                        <input type="text" name="web">
                                    </p>
                                    <p class="full-width">
                                        <input type="submit" name="submit" value="Post comment">
                                    </p>
                                </form>
                            </div>
                            <!-- post navigation html -->
                            <div class="post-navigation">
                                <div class="nav-prev">
                                    <a href="#">
                                        <span class="nav-label">Previous Reading</span>
                                        <span class="nav-title">Deleniti illum culpa sodales cubilia.</span>
                                    </a>
                                </div>
                                <div class="nav-next">
                                    <a href="#">
                                        <span class="nav-label">Next Reading</span>
                                        <span class="nav-title">Deleniti illum culpa sodales cubilia.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- blog post item html end -->
                    </div>
                    <div class="col-lg-4 secondary">
                        <div class="sidebar">
                            <aside class="widget author_widget">
                                <h3 class="widget-title">ABOUT AUTHOR</h3>
                                <div class="widget-content text-center">
                                    <div class="profile">
                                        <figure class="avatar">
                                            <a href="#">
                                                <img src="assets/images/img21.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="text-content">
                                            <div class="name-title">
                                                <h3>
                                                    <a href="https://demo.bosathemes.com/bosa/photography/james-watson/">James Watson</a>
                                                </h3>
                                            </div>
                                            <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                                        </div>
                                        <div class="socialgroup">
                                            <ul>
                                                <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li>
                                                <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li>
                                                <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                                <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                                                <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget widget_latest_post widget-post-thumb">
                                <h3 class="widget-title">Recent Post</h3>
                                <ul>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="#"><img src="assets/images/img17.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="#">Someday I’m going to be free and travel</a>
                                            </h5>
                                            <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                                <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="#"><img src="assets/images/img18.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="#">Enjoying the beauty of the great nature</a>
                                            </h5>
                                            <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                                <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="#"><img src="assets/images/img19.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="#">Let’s start adventure with best tripo guides</a>
                                            </h5>
                                            <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                                <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="#"><img src="assets/images/img34.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="#">Journeys are best measured in new friends</a>
                                            </h5>
                                            <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                                <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="#"><img src="assets/images/img35.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="#">Take only memories, leave only footprints</a>
                                            </h5>
                                            <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                                <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="widget widget_social">
                                <h3 class="widget-title">Social share</h3>
                                <div class="social-icon-wrap">
                                    <div class="social-icon social-facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </div>
                                    <div class="social-icon social-pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                            <span>Pinterest</span>
                                        </a>
                                    </div>
                                    <div class="social-icon social-whatsapp">
                                        <a href="#">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>WhatsApp</span>
                                        </a>
                                    </div>
                                    <div class="social-icon social-linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                            <span>Linkedin</span>
                                        </a>
                                    </div>
                                    <div class="social-icon social-twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                    </div>
                                    <div class="social-icon social-google">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                            <span>Google</span>
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Breadcrumb Area Start -->
  <div class="my-breadcrumb" style="background: url({{ asset('assets/images/'.$gs->bgimg) }})" >
      <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="heading">
            {{ $lang->lang3 }}
          </h1>
          <div class="links">
              <i class="icofont-home home"></i>
            <ul>

              <li>
                <a href="{{ route('front.index') }}">
                  {{ $lang->lang1 }}
                </a>
              </li>
              <li>
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
              <li>
                <a href="{{ route('front.blogshow',$blog->id) }}">
                  {{$lang->lang56}}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Area End -->

  <!-- Blog Details Area Start -->
  <section class="blog-details" id="blog-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-content">
            <div class="feature-image">
              <img class="img-fluid" src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">
            </div>
            <div class="content">
                <h3 class="title">
                    {{ $blog->title }}
                  </h3>
                  <ul class="post-meta">
                    <li>
                      <a href="javascript:;">
                        <i class="icofont-calendar"></i>
                        {{ date('d M, Y',strtotime($blog->created_at)) }}
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                          <i class="icofont-eye"></i>
                        {{ $blog->views }} {{ $lang->lang64 }}
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        {{ $lang->lang65 }} : {{ $blog->source }}
                      </a>
                    </li>

                  </ul>
                  {!! $blog->details !!}


                  <div class="tag-social-link">
                    <div class="tag">
                      <h6 class="title">{{ $lang->lang63 }} : </h6>
                      @foreach(explode(',', $blog->tags) as $key => $tag)
                        <a href="{{ route('front.blogtags',$tag) }}">
                        {{ $tag }}{{ $key != count(explode(',', $blog->tags)) - 1  ? ',':''}}
                        </a>
                      @endforeach
                    </div>

                    <div class="social-sharing a2a_kit a2a_kit_size_32">
                    <ul class="social-links">
                      <li>
                        <a class="facebook a2a_button_facebook" href="">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                        <li>
                            <a class="twitter a2a_button_twitter" href="">
                              <i class="fab fa-twitter"></i>
                            </a>

                        </li>
                        <li>
                            <a class="linkedin a2a_button_linkedin" href="">
                              <i class="fab fa-linkedin-in"></i>
                            </a>

                        </li>
                        <li>

                        <a class="a2a_dd plus" href="https://www.addtoany.com/share">
                            <i class="fas fa-plus"></i>
                          </a>
                        </li>

                    </ul>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                  </div>
            </div>
          </div>

    {{-- DISQUS START --}}
    @if($gs->is_disqus == 1)
      <div class="comments">
           {!! $gs->disqus !!}
      </div>
    @endif
    {{-- DISQUS ENDS --}}



        </div>
        <div class="col-lg-4">
          <div class="blog-aside">
            <div class="serch-form">
              <form action="{{ route('front.blogsearch') }}">
                <input type="text" name="search" placeholder="{{ $lang->lang57 }}" required="">
                <button type="submit"><i class="icofont-search"></i></button>
              </form>
            </div>
            <div class="categori">
              <h4 class="title">{{ $lang->lang58 }}</h4>
              <span class="separator"></span>
              <ul class="categori-list">
                @foreach($bcats as $cat)
                <li>
                  <a href="{{ route('front.blogcategory',$cat->slug) }}"  {!! $cat->id == $blog->category_id ? 'class="active"':'' !!}>
                    <span>{{ $cat->name }}</span>
                    <span>({{ $cat->blogs()->count() }})</span>
                  </a>
                </li>
                @endforeach

              </ul>
            </div>
            <div class="recent-post-widget">
              <h4 class="title">{{ $lang->lang59 }}</h4>
              <span class="separator"></span>
              <ul class="post-list">

                @foreach ($lblogs as $blog)
                <li>
                  <div class="post">
                    <div class="post-img">
                      <img style="width: 73px; height: 59px;" src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">
                    </div>
                    <div class="post-details">
                      <a href="{{ route('front.blogshow',$blog->id) }}">
                          <h4 class="post-title">
                              {{strlen($blog->title) > 45 ? substr($blog->title,0,45)." .." : $blog->title}}
                          </h4>
                      </a>
                      <p class="date">
                          {{ date('M d - Y',(strtotime($blog->created_at))) }}
                      </p>
                    </div>
                  </div>
                </li>
                @endforeach


              </ul>
            </div>
            <div class="archives">
              <h4 class="title">{{ $lang->lang60 }}</h4>
              <span class="separator"></span>
              <ul class="archives-list">
                @foreach($archives as $key => $archive)
                <li>
                  <a href="{{ route('front.blogarchive',$key) }}">
                    <span>{{ $key }}</span>
                    <span>({{ count($archive) }})</span>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="tags">
              <h4 class="title">{{ $lang->lang62 }}</h4>
              <span class="separator"></span>
              <ul class="tags-list">
                @foreach($tags as $tag)
                  @if(!empty($tag))
                  <li>
                    <a href="{{ route('front.blogtags',$tag) }}">{{ $tag }} </a>
                  </li>
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Area End-->

@endsection
