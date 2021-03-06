<style>
    .lnt{
        font-size:30px;
        text-align: center;
        padding: 0 10px;
        font-family: 'Eczar', serif;
        font-weight: 600;
        line-height: 1.5;
    }
    .lnt24{
        font-size:24px;
        font-family: 'Eczar', serif;
        font-weight: 600;
        line-height: 1.5;
    }
    .lnt18{
        font-size:14px;
        text-align: justify;
        padding: 0 10px;
        font-family: 'Eczar', serif;
        font-weight: 600;
        line-height: 1.5;
    }
    .ig8{
        height: 18rem;
    }
    a:hover {
        text-decoration: none;  
    }
    .card-footer{
        line-height: 1.4;
        text-align: justify;
        font-size:18px;
        font-family: 'Eczar', serif;
        padding: 20px 15px;
    }
    .nav-c{
        display: flex;
        justify-content: center;
    }
    .nav li{
        width: 33%;
        text-align: center;
    }
    .nav-c>li>a{
        font-family: 'Eczar', serif;
        line-height: 1.5;
        font-size: 18px;
        border-left:1px solid #f1f1f1;
        border-right:1px solid #f1f1f1;
    }
    .nav-c >li>a {
        border-bottom: 4px solid #666;
    }
    .nav-c >li .active{
        border-bottom: 4px solid red;
    }
    .mi4{
        height: 6rem;
        width: 5rem;
        background-size: cover !important;
        background-position: center !important ;
    }
    .mi2{
        margin: 10px;
        height: 40px;
        background-size: cover !important;
        background-position: center !important ;
        width:60px;
    }
    .c-d-t{
        font-size: 15px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-9 mt-4">
            <div class="row">
                <div class="col-md-6 pt-0 mb-3" style="padding:0 5px">    
                @if(count($news->posts)>0)
                    <div class="card border-0 l-n-h" style="background:#fafafa;">	
                        <a href ="{{url('news'.'/'.$news->posts[0]->id)}}" class="">
                            <div class="card-block">
                                <p class="lnt" >
                                    {{$news->posts[0]->title}}
                                </p>
                            </div>
                            <div style="background:url('{{$news->posts[0]->featured_photo}}')" class="ig8">
                            </div>
                            <div class="card-footer">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! \Str::limit(strip_tags($news->posts[0]->content), $limit = 250, $end = '....') !!}
                            </div>
                        </a>
                    </div>
                @endif
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-c mb-3" id="nav-tab" role="tablist">
                        <li class="">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                {{$tab1->name}}
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                {{$tab2->name}}
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                {{$tab3->name}}
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            @if(count($tab1->posts)>0)
                            @foreach($tab1->posts->slice(0,3) as $item)
                            <a href="{{url('/news/'.$item->id)}}">
                            <div class="pl-1 text-justify">
                                <div class="c_title lnt24">
                                    {{$item->title}}
                                </div>
                                <div class="media">
                                    <div class="mi4 mt-2" style="background:url('{{$item->featured_photo}}');" ></div>
                                    <div class="media-body pl-2 mt-2">
                                        <span class="text-muted c-d-t"><i class="fa fa-calendar c-d-t text-muted pr-2"></i> {{$item->created_at->diffForHumans()}}</span>
                                        <p>{!! \Str::limit(strip_tags($item->content), $limit = 90, $end = '....') !!}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            @endforeach
                            @endif
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            @if(count($tab2->posts)>0)
                            @foreach($tab2->posts->slice(0,6) as $key=> $item)
                            <a href="{{url('/news/'.$item->id)}}">
                            <div class="">
                                <div class="media">
                                    <div style="padding:10px;">
                                        {{ $key+1}} .    
                                    </div>
                                    <div class="mi2" style="background:url('{{$item->featured_photo}}');" ></div>
                                    <div class="media-body m-1 lnt18">
                                        {{$item->title}}
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            @endforeach
                            @endif
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            @if(count($tab3->posts)>0)
                            @foreach($tab3->posts->slice(0,6) as $key=> $item)
                            <a href="{{url('/news/'.$item->id)}}">
                            <div class="">
                                <div class="media">
                                    <div style="padding:10px;">
                                        {{ $key+1}} .    
                                    </div>
                                    <div class="mi2" style="background:url('{{$item->featured_photo}}');" ></div>
                                    <div class="media-body m-1 lnt18">
                                        {{$item->title}}
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($news->posts)>0)
                    <div class="row card-group">
                        @foreach($news->posts->slice(1, 6) as $key=> $item)
                        <div class="col-md-4 pt-0 mb-3" style="padding:0 5px">
                            <div class="card h-100  border-0" style="background:#fafafa;">	
                                <a href ="{{url('news'.'/'.$item->id)}}" class="">
                                    <div class="card-block">
                                        <p class="content pt-4" >
                                        <span class="c_title">{{$item->title}}</span>
                                            <br>
                                            <small class="text-muted"><i class="fa fa-clock-o text-muted"></i>&nbsp;{{
                                                $item->created_at->diffForHumans()}}
                                            </small>
                                        </p>
                                    </div>
                                    @if($key<4)
                                    <div style="background:url('{{$item->featured_photo}}')" class="ig4">
                                    </div>
                                    @endif
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            @foreach($advertisement->slice(1,6) as $item)
            <div class="mb-1">
                <img src="{{$item->cover}}" class="w-100">	
            </div>	
            @endforeach
        </div>
    </div>  
</div>
