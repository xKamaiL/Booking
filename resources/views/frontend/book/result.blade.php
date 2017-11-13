@if(count($data) == 0)
    <br><br>
    <h3><i class="fa fa-lg fa-times" style="color: red;"></i> ไม่พบหนังสือที่ต้องการ</h3>
    <button class="btn btn-outline-danger btn-sm" onclick="return getAllBook()"><i class="fa fa-lg fa-backward"></i> ย้อนกลับ</button>
    <br>
@else
    <div class="row" style="margin-left: -25px;">
        @foreach($data as $item)
            <div class="col-sm-3" style="width: 50%;">
                <div class="card">
                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" height="120" width="100%">
                    <div class="card-body" style="text-align: left">
                        <h5>{{ $item["name"] }}</h5>
                        <div class="text-scroll">{{ $item["detail"] }}</div>
                        <button type="button" class="btn btn-success btn-raised btn-block btn-rent"><i class="fa fa-lg fa-thumbs-o-up"></i> ยืมเลย!</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif