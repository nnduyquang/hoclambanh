<div id="category_list" class="mt-4 mb-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @if($data['type']==0)
                    <div class="col-md-12">
                        <p>DANH SÁCH LỚP {{$data['category']->name}}</p>
                    </div>
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
</div>