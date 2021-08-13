{{-- header --}}
<header class="header" id="recent-posts">
    <div class="header-wrapper">
        <?php $i = 0; ?>
        @foreach ($postCovers as $postCover)
            <div class="{{ $i==0 ? 'right-head-container' : 'left-head-container' }}" style="background-image: url('{{ asset( $postCover->photo->path)}}')">
                {{-- image here --}}
                <div class="{{ $i==0 ? 'right-head-content' : 'left-head-content' }}">
                    <span class="sub-text">{{$postCover->category->title}}</span>
                    <h2 class="title " style="direction: rtl">
                        {{$postCover->title}}
                    </h2>
                    <h4 class="info">
                        <p>
                            {{ $postCover->meta_description }}
                        </p>
                        <span class="date text-xs">{{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($postCover->created_at)->formatJalaliDate()) }}</span>
                    </h4>
                </div>
            </div>
            <?php $i++;?>
        @endforeach        
    </div>
</header>
{{-- end of header --}}