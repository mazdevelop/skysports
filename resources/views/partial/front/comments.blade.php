@foreach ($comments as $comment)
        <details open class="comment" id="comment-1">
            <a href="#comment-1" class="comment-border-link">
                <span class="sr-only">Jump to comment-1</span>
            </a>
            <summary>
                <div class="comment-heading">
                    <div class="comment-voting">
                        <button type="button">
                            <span aria-hidden="true">&#9650;</span>
                            <span class="sr-only">Vote up</span>
                        </button>
                        <button type="button">
                            <span aria-hidden="true">&#9660;</span>
                            <span class="sr-only">Vote down</span>
                        </button>
                    </div>
                    <div class="comment-info">
                        <a href="#" class="comment-author">مهمان</a>
                        <p class="m-0 direction-rtl">
                            {{ StrHelp::enToFa( \Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')))}} 
                        </p>
                    </div>
                </div>
            </summary>

            <div class="comment-body">
                <p class="text-right">
                    {{ $comment->description }}
                </p>
                <button type="button" data-toggle="reply-form" data-target="comment-{{$comment->id}}-reply-form">پاسخ</button>

                <!-- Reply form start -->
                <form method="POST" action="{{ route('front.comment.reply', $comment->id) }}" class="reply-form d-none" id="comment-{{$comment->id}}-reply-form">
                    @csrf   
                    <textarea dir="auto" name="description" rows="4"></textarea>
                    <input type="hidden" name="parent_id" value="{{$comment->id}}">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <button type="submit">ثبت</button>
                    <button type="button" data-toggle="reply-form" data-target="comment-{{$comment->id}}-reply-form">لغو</button>
                </form>
                <!-- Reply form end -->
            </div>
            @if ($comment->status == '1')
                <div class="replies">
                    @include('partial.front.comments',['comments' => $comment->replies ])
                </div>
            @endif
        </details>
    @endforeach