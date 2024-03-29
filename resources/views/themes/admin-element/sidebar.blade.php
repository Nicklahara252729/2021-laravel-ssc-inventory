<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
    <div class="logo"><a href="#" class="simple-text logo-mini">
            SSC
        </a>

        <a href="#" class="simple-text logo-normal">
            Inventory
        </a>
    </div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{asset('assets/img/faces/usr.jpg')}}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{$user->nama}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> CP </span>
                                <span class="sidebar-normal"> Change Password </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> L </span>
                                <span class="sidebar-normal"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item <?= ($active == 'dashboard') ? 'active' : ''; ?> ">
                <a class="nav-link" href="{{url('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item <?= ($active == 'user') ? 'active' : ''; ?>">
                <a class="nav-link" href="{{url('user')}}">
                    <i class="material-icons">person</i>
                    <p> User </p>
                </a>
            </li>

            <li class="nav-item <?php if($active == "gudang atk" || $active == "gudang kimia" || $active == "gudang dokumentasi"){ echo "active";} ?>">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">layers</i>
                    <p> Barang
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item <?= ($active == 'gudang atk') ? 'active' : ''; ?>">
                            <a class="nav-link" href="{{url('gudang-atk')}}">
                                <span class="sidebar-mini"> GA </span>
                                <span class="sidebar-normal"> Gudang ATK </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('gudang-kimia')}}">
                                <span class="sidebar-mini"> GK </span>
                                <span class="sidebar-normal"> Gudang Kimia </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('gudang-dokumen')}}">
                                <span class="sidebar-mini"> GD </span>
                                <span class="sidebar-normal"> Gudang Dokumen </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item <?= ($active == 'restock') ? 'active' : ''; ?>">
                <a class="nav-link" href="{{url('history-restock')}}">
                    <i class="material-icons">autorenew</i>
                    <p> History Restock </p>
                </a>
            </li>
            <li class="nav-item <?= ($active == 'history') ? 'active' : ''; ?>">
                <a class="nav-link" href="{{url('history')}}">
                    <i class="material-icons">history</i>
                    <p> History Take Out</p>
                </a>
            </li>

        </ul>
    </div>
</div>