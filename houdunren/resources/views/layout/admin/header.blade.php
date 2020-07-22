<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
            <i class="fa fa-address-book mr-1" aria-hidden="true"></i> 站点管理 </a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
        <i class="fa fa-database mr-1" aria-hidden="true"></i> 模块管理</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
        <i class="fa fa-thumbs-o-up mr-1" aria-hidden="true"></i>服务套餐</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
        <i class="fa fa-gear mr-1" aria-hidden="true"></i>系统设置</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
        <i class="fa fa-users mr-1" aria-hidden="true"></i>会员组</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
        <i class="fa fa-hourglass mr-1" aria-hidden="true"></i>更新缓存</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
    <div class="dropdown">
  <div class="text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{user_info('name')}}
  </div>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    </form>
  </div>
</nav>
