
@extends('public/template')

@section('wrapper')
    <div id="main-wrapper">

        {{-- <div id="header" class="clearfix">
            <div class="left">
                <a class="go-back">返回</a>
            </div>
            <div class="center middle">
                <h1 id="page-title">
                    <table>
                        <tr>
                            <td><a href="{{URL::route('sources.list',['type'=>1])}}" class="title-link {{$type==1?'cur':''}}">图片</a></td>
                            <td><a href="{{URL::route('sources.list',['type'=>2])}}" class="title-link {{$type==2?'cur':''}}">文章</a></td>
                        </tr>
                    </table>
                </h1>
            </div>
            <div class="right middle">
               --}}{{--<a class="text-link" href="{{URL::route('enchashment.apply')}}">素材库</a>--}}{{--
            </div>
         </div>--}}
        <div id="sunn_main">
            <section class="header">
                <div class="htitle common">素材库</div>
                <a href="javascript:history.back(-1)" class="hleft"></a>

            </section><!-- 头部 -->
        </div>

        <div class="center middle">
            <h1 id="page-title">
                <table>
                    <tr>
                        <td><a href="{{URL::route('sources.list',['type'=>1])}}" class="title-link {{$type==1?'cur':''}}">图片</a></td>
                        <td><a href="{{URL::route('sources.list',['type'=>2])}}" class="title-link {{$type==2?'cur':''}}">文章</a></td>
                    </tr>
                </table>
            </h1>
        </div>

        <div id="main-content">
            <div class="sources">
                <ul class="{{$type==1?'image-list':'list-wrapper'}}  ">
                    @foreach($sources as $source)
                    <li>
                        <a href="{{$type==1? '#':URL::route('sources.share',['id'=>$source->id,'t'=>time()])}}">
                            <img src="{{AppHelper::imgSrc($source->image->url)}}" class="source-img" />
                            <div class="source-intro">
                                <h4>{{$source->title}}</h4>
                                <p>{{mb_substr($source->summary,0,45,'utf-8')}}.....</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
@stop