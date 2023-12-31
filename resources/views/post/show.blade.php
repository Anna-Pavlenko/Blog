@extends('layouts.main')
@section('content')
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
    <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">•{{$post->created_at}}  • 4 Comments</p> 
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('assets/images/blog-post-featured-img.png')}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    {!!$post->content!!}
                </div>
            </div>
     
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                    <div class="row">
                
                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{asset('storage/' . $post->main_image)}}" alt="related post" class="post-thumbnail">
                            <p class="post-category">{{$post->category->title}}</p>
                           <h5 class="post-title">{{$post->title}}</h5>
                        </div>
                 
                    </div>
                </section>

                <section class="comment-list">
                    @foreach($post->comments as $comment)
                <div class="comment-text">
                    <span class="username">
                        <div>
                     {{$comment->user->name}}
                    </div>
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    
                  </div>
                  @endforeach
                </section>
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Send Comment</h2>
                    <form action="{{route('post.comment.store', $post->id)}}" method="post">
                        @csrf
                    
                         <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="message" id="comment" class="form-control" placeholder="Comment" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Send Message" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection