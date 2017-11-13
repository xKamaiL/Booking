@extends("frontend.layouts.app")
@section("content")
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header border-primary">
                <div class="row">
                    <div class="col-sm-12">
                        <div style="text-align: center">
                            <span style="font-size: 24px;"><i class="fa fa-lg fa-book"></i> ยืมหนังสือ</span>
                            <div class="input-group">
                                <input type="text" class="form-control input-sm border-danger search-value" placeholder="ชื่อหนังสือที่ต้องการ">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-raised btn-group-lg xkamail"><span class="fa fa-lg fa-search-plus"></span> ค้นหา</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body text-dark">
                <div class="row">
                    <div class="book-cat-list center">
                        @foreach($cat as $item)
                            <a href="#" class="btn btn-outline-info btn-sm btn-select-cat" style="color: black;" data-id="{{ $item["id"] }}"><i class="fa fa-lg fa-book"></i> {{ $item["name"] }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="book-list">

                </div>
            </div>
        </div>
    </div>
@endsection
@push("css")
    <style>
        .text-scroll{
            height:50px;
            overflow:auto;
            margin-bottom: 20px;
        }
        .btn-rent{
            position: absolute;
            left: 0;
            bottom: -5;
        }
        .center{
            text-align: center;
        }
        .book-cat-list{
            border-bottom: 1px solid lightgray;
            width:100%;
        }
        .book-list{
            margin-top:10px;
            text-align: center;
        }
    </style>
@endpush
@push("js")
    <script>
        getAllBook();
    </script>
    @endpush