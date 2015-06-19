
@extends('public/template')
{{--微信分享开始--}}
@section('weixin_scripts')
{{HTML::script('libraries/jquery.sha1.js')}}
{{HTML::script('http://res.wx.qq.com/open/js/jweixin-1.0.0.js')}}
{{HTML::script('libraries/jquery.wechat.share.js')}}
<script>
    $(function(){
        var shareData = {
            title: '{{$source->title}}',
            desc: '{{$source->summary}}',
            link: location.href,
            imgUrl: '{{$source->image?AppHelper::imgSrc($source->image->url):AppHelper::imgSrc('/assets/images/prod_thumb.png')}}'
        };
        var config = {{AppHelper::getWechatSignature()}};
        $.wechatShare(shareData,config);
    })
</script>
@stop
{{--微信分享结束--}}
@section('wrapper')
    <div id="main-wrapper">
        <div id="main-content">
            <div class="source-share">
                <h4 class="title">{{$source->title}}</h4>
                <div class="share_time">
                    <span class="date">{{$time}}</span>
                    @if($source->author)
                    <span class="author">
                        <a href="weixin://profile/{{$source->author}}">{{$source->author}}</a>
                    </span>
                    @endif
                    {{--<span class="author">--}}
                        {{--<a href="javascript:location.reload()">刷新页面</a>--}}
                    {{--</span>--}}
                </div>
                <div class="content">
                    {{$source->content}}
                </div>
            </div>
        </div>
    </div>
@stop