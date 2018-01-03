@extends("frontend.layouts.app")
@section("content")
<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-header border-success"><i class="fa fa-lg fa-sign-in"></i> Login เข้าใช้งาน</div>
        <div class="card-body text-dark">
            <form action="{{ route("login.post") }}" class="ajax">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label"><i class="fa fa-lg fa-lock"></i> กรุณากรอกรหัสนักเรียน</label>
                    <input type="text" class="form-control" placeholder="Student ID รหัสนักเรียน" required name="student" maxlength="5" onkeypress="return isNumber(event)">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-raised btn-success btn-block"><i class="fa fa-lg fa-sign-in"></i> เข้าใช้งาน</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection