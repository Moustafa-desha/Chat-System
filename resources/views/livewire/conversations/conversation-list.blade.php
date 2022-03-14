<div>

    @forelse($conversations as $conv)
    <li class="active">
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                <span class="online_icon"></span>
            </div>
            <div class="user_info">
{{--                <span>{{$conv->name != '' ? $conv->name : $conv->users->pluck('name')->join(', ')}}</span>--}}
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
