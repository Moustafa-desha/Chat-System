<div>

    @forelse($conversations as $conversation)

    <li class=" {{ \Illuminate\Support\Str::contains(request()->path(),$conversation->uuid) ? 'active' : '' }} ">
        <div class="d-flex bd-highlight">
            <div class="img_cont">

                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">

                <span class="online_icon"></span>
            </div>

            <div class="user_info">
                    <a href="{{ route('conversation.show', $conversation) }}">
                        <span>{{$conversation->name != '' ? $conversation->name : $conversation->users->pluck('name')->join(', ')}}</span>
                    </a>

                <p style="float:right;font-weight: bold;color: #1a1e21 ;margin-top: 35px;margin-left: 50px">
                    {{ \Illuminate\Support\Carbon::parse(optional($conversation->messages->first())->created_at)->format('d M') }}
                </p>
                    <p style="font-weight: bold; color: #1a1e21;margin-top: 7px">
                        @if (!auth()->user()->hasRead($conversation))
                            <span class="{{ \Str::contains(request()->path(), $conversation->uuid) ? 'bg-white' : 'bg-primary' }} mr-2 rounded-circle" style="display: inline-table; width: 10px; height: 10px;"></span>
                        @endif


                        {{ str_limit(optional($conversation->messages->first())->body , $limit = 15) }}
                    </p>

                <p>Disha is online</p>

            </div>
        </div>
    </li>
    @empty
        <div class="text-muted"> No Conversations Found </div>
    @endforelse

</div>

{{--    <li>--}}
{{--        <div class="d-flex bd-highlight">--}}
{{--            <div class="img_cont">--}}
{{--                <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">--}}
{{--                <span class="online_icon offline"></span>--}}
{{--            </div>--}}
{{--            <div class="user_info">--}}
{{--                <span>Ramzey</span>--}}
{{--                <p>Ramzey left 7 mins ago</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}
