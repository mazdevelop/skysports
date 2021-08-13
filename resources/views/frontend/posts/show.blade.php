@extends('layouts.front')
@section('meta')
<meta name="description" content="{{$post->meta_description}}">
<meta name="keywords" content="{{$post->meta_keywords}}">
@endsection
@section('content')
<section id="archive">
    <div class="archive-post">
        <article class="card">
            <img class="rounded-md" src="{{$post->photo ? $post->photo->path : "http://placehold.it/400" }}" alt="">
            <div class="card-body text-right">
                    <h1 class="sub-text">{{$post->meta_description}}</h1>
                    <h2 class="title">
                        {{$post->title}}
                    </h2>
                    <p class=" text-sm">
                        {{$post->description}}
                    </h2>
                    <h4 class="info">
                        <p class="text-xs">{{$post->meta_keywords}}</p>
                        <span class="date text-xs">{{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($post->created_at)->formatJalaliDate()) }}</span>
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
    </div>
</section>
@endsection