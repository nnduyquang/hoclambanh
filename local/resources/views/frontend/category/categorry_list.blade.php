<div id="category_list" class="mt-4 mb-5">
    <div class="container-fluid">
        <div class="container">
            @if($data['type']==0)
                <div class="top-category-list">
                    <div class="col-md-12">
                        <h1 class="title">{{$data['category']->name}}</h1>
                    </div>

                    <div class="col-md-12 description">
                        {!! $data['category']->description !!}
                    </div>
                </div>
                <div class="bottom-category-list">
                    <div class="row">
                        @foreach($data['products'] as $key=>$item)
                            <div class="col-md-6 category_items d-flex align-items-center mt-3 mb-4">
                                <a href="{{URL::to('khoa-hoc/'.$item->path)}}" class="">
                                    {{ Html::image($item->image,'',array('class'=>'')) }}
                                </a>
                                <div class="pl-3">
                                    <p class="pb-3">{{$item->title}}</p>
                                    <span class="mb-4">{{$item->description}}</span>
                                    <br>
                                    <br>
                                    <a href="{{URL::to('khoa-hoc/'.$item->path)}}">XEM CHI TIẾT KHÓA HỌC</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @elseif($data['type']==1)
                <div class="col-md-12">
                    <p>{{$data['category']->name}}</p>
                </div>
                <div class="col-md-12">
                    <div class="description">
                        {!! $data['oneProduct']-> content!!}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>