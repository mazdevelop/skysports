@extends('layouts.front')
@section('header')
    @include('partial.front.header',['postCovers',$postCovers])    
@endsection
@section('content')
<div class="hr-line"></div>
{{-- archive section --}}
<section id="archive">
    <div class="archive-wrapper">
        @foreach ($postLatest as $postLast)
        {{-- single card --}}
            <article class="card">
                <img src="{{$postLast->photo ? $postLast->photo->path : "http://placehold.it/400" }}" alt="">
                <div class="card-body">
                    <a href="{{ route('front.post.show', $postLast->slug) }}" class="sub-text">{{$postLast->meta_description}}</a>
                    <h2 class="title">
                        {{$postLast->title}}
                    </h2>
                    <h4 class="info">
                        <p class="text-xs">{{$postLast->meta_keywords}}</p>
                        <span class="date text-xs">{{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($postLast->created_at)->formatJalaliDate()) }}</span>
                    </h4>
                </div>
                <div class="card-footer">
                    <ul>
                        <li><i class='bx bxs-comment-detail' ></i></li>
                        <li><i class='bx bx-share-alt' ></i></li>
                        <li><i class='bx bx-heart' ></i></li>
                    </ul>
                </div>
            </article>
        {{-- end of single card --}}    
        @endforeach
    </div>
</section>
{{-- end of archive section --}}
<div class="hr-line"></div>
{{-- category section --}}
<section id="category">
    <div class="category-wrapper">
        <div class="category-main">
            {{-- category left --}}
            <div class="category-left">
                @foreach ($posts as $post)
                {{-- single card --}}
                <div class="card">
                    <div class="card-image">
                        <img src="{{$post->photo ? $post->photo->path : "http://placehold.it/400" }}" alt="">
                        <span class="sub-text sub-text-box">{{$post->category->title}}</span>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="info">
                                <span class="date text-xs">{{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($post->created_at)->formatJalaliDate()) }}</span>
                            </h4>
                            <a href="{{ route('front.post.show', $post->slug) }}" class="title">{{$post->meta_description}}</a>
                        </div>
                        <div class="card-footer">
                            <ul>
                                <li><i class='bx bxs-comment-detail' ></i></li>
                                <li><i class='bx bx-share-alt' ></i></li>
                                <li><i class='bx bx-heart' ></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- end of single card --}}
                @endforeach
                <button class="btn" type="button">
                    loading more
                    <i class='bx bx-chevron-right'></i>
                </button>
            </div>
            {{-- category right --}}
            <div class="category-right">
                <div class="search-box">
                    <h2 class="title">Search Here</h2>
                    <div class="hr-line-sm">
                        <div>{{-- bold line --}}</div>
                        <div>{{-- lighter line --}}</div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Search Keyword">
                        <span class="form-search-icon">
                            <i class='bx bx-search-alt-2' ></i>
                        </span>
                    </div>
                </div>
                <div class="feeds">
                    <h2 class="title">Popular Feeds...</h2>
                    <div class="hr-line-sm">
                        <div>{{-- bold line --}}</div>
                        <div>{{-- lighter line --}}</div>
                    </div> 
                </div>
                {{-- single card --}}
                @foreach ($categories as $category)
                {{-- single card --}}
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h2 class="title text-xs">{{$category->title}}</h2>
                        </div>
                    </div>
                </div>
                {{-- end of single card --}}
                @endforeach
            </div> 
            <div class="tags">
                <h2 class="title">Popular Tag...</h2>
                    <div class="hr-line-sm">
                        <div>{{-- bold line --}}</div>
                        <div>{{-- lighter line --}}</div>
                    </div> 
                    <ul class="tags-list">
                        <li><a href="#">nature</a></li>
                        <li><a href="#">art</a></li>
                        <li><a href="#">culture</a></li>
                        <li><a href="#">tech</a></li>
                        <li><a href="#">news</a></li>
                    </ul>
            </div>
        </div>
    </div>
</section>
{{-- end of category section --}}
@endsection