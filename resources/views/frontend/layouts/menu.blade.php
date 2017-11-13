<div class="col-lg-12 col-sm-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><i class="fa fa-lg fa-question-circle-o"></i> เมนูช่วยเหลือ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home") }}"><i class="fa fa-lg fa-home" style="color:white;"></i> <b>Home</b> หน้าเเรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("book.index") }}" style="color: white;"><i class="fa fa-lg fa-book" style="color:black;"></i> เช่ายืมหนังสือ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #ffffff;"><i class="fa fa-lg fa-book" style="color: black;"></i> หนังสือของฉัน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("logout") }}"><i class="fa fa-lg fa-sign-out" style="color:white;"></i> <b>Logout</b> ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
</div>