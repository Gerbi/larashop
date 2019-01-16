<div class="card">
    <div class="card-header" style="border-bottom-width: 0px;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="ti-panel" style="padding-right: 10px;"></i>
                    Admin
                </a>
            </li>
        </ul>
    </div>

    <div class="card-body" style="font-size: 16px">

        <ul class="nav flex-column" style="padding-left: 30px; ">
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="ti-panel" style="padding-right: 10px;"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/products/create')}}">
                    <i class="ti-archive" style="padding-right: 10px;"></i>
                    Add Product
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/products')}}">
                    <i class="ti-view-list-alt" style="padding-right: 10px;"></i>
                    View Products
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{url('admin/orders')}}">
                    <i class="ti-calendar" style="padding-right: 10px;"></i>
                    Orders
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{url('admin/users')}}">
                    <i class="fa fa-users" style="padding-right: 10px;"></i>
                    Users
                </a>
            </li>
        </ul>
    </div>
</div>
