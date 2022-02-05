<?php require_once "header.php"; ?>
<div id="page-content">
  <ul id="nav-info" class="clearfix">
    <li>
      <a href="index.php.html"><i class="fa fa-home"></i></a>
    </li>
    <li class="active"><a href="">Dashboard</a></li>
  </ul>
  <ul class="nav-dash">
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Users"
        class="animation-fadeIn"
      >
        <i class="fa fa-user"></i>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Comments"
        class="animation-fadeIn"
      >
        <i class="fa fa-comments"></i>
        <span class="badge badge-success">3</span>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Calendar"
        class="animation-fadeIn"
      >
        <i class="fa fa-calendar"></i>
        <span class="badge badge-inverse">5</span>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Photos"
        class="animation-fadeIn"
      >
        <i class="fa fa-camera-retro"></i>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Projects"
        class="animation-fadeIn"
      >
        <i class="fa fa-paperclip"></i>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Tasks"
        class="animation-fadeIn"
      >
        <i class="fa fa-tasks"></i>
        <span class="badge badge-warning">1</span>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Reader"
        class="animation-fadeIn"
      >
        <i class="fa fa-book"></i>
      </a>
    </li>
    <li>
      <a
        href="javascript:void(0)"
        data-toggle="tooltip"
        title="Settings"
        class="animation-fadeIn"
      >
        <i class="fa fa-cogs"></i>
      </a>
    </li>
  </ul>
  <div class="dash-tiles row">
    <div class="col-sm-3">
      <div
        class="dash-tile dash-tile-ocean clearfix animation-pullDown"
      >
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <div class="btn-group">
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="Manage Users"
                ><i class="fa fa-cog"></i
              ></a>
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="Statistics"
                ><i class="fa fa-bar-chart-o"></i
              ></a>
            </div>
          </div>
          Total Users
        </div>
        <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
        <div class="dash-tile-text">265k</div>
      </div>
      <div class="dash-tile dash-tile-leaf clearfix animation-pullDown">
        <div class="dash-tile-header">
          <span class="dash-tile-options">
            <a
              href="javascript:void(0)"
              class="btn btn-default"
              data-toggle="popover"
              data-placement="top"
              data-content="$500 (230 Sales)"
              title="Today's profit"
              ><i class="fa fa-credit-card"></i
            ></a>
          </span>
          Total Profit
        </div>
        <div class="dash-tile-icon"><i class="fa fa-money"></i></div>
        <div class="dash-tile-text">$5M</div>
      </div>
    </div>
    <div class="col-sm-3">
      <div
        class="dash-tile dash-tile-flower clearfix animation-pullDown"
      >
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <div class="btn-group">
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="View new orders"
                ><i class="fa fa-shopping-cart"></i
              ></a>
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="Statistics"
                ><i class="fa fa-bar-chart-o"></i
              ></a>
            </div>
          </div>
          Total Sales
        </div>
        <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
        <div class="dash-tile-text">300k</div>
      </div>
      <div
        class="dash-tile dash-tile-fruit clearfix animation-pullDown"
      >
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <a
              href="javascript:void(0)"
              class="btn btn-default"
              data-toggle="tooltip"
              title="View popular downloads"
              ><i class="fa fa-asterisk"></i
            ></a>
          </div>
          Total Downloads
        </div>
        <div class="dash-tile-icon">
          <i class="fa fa-cloud-download"></i>
        </div>
        <div class="dash-tile-text">360k</div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="dash-tile dash-tile-oil clearfix animation-pullDown">
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <div class="btn-group">
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="What's changed?"
                ><i class="fa fa-fire"></i
              ></a>
              <a
                href="javascript:void(0)"
                class="btn btn-default"
                data-toggle="tooltip"
                title="Share"
                ><i class="fa fa-share-square-o"></i
              ></a>
            </div>
          </div>
          Popularity
        </div>
        <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
        <div class="dash-tile-text">+90%</div>
      </div>
      <div class="dash-tile dash-tile-dark clearfix animation-pullDown">
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <a
              href="javascript:void(0)"
              class="btn btn-default"
              data-toggle="tooltip"
              title="Monthly report"
              ><i class="fa fa-bar-chart-o"></i
            ></a>
          </div>
          Server Downtime
        </div>
        <div class="dash-tile-icon"><i class="fa fa-hdd-o"></i></div>
        <div class="dash-tile-text">0.1%</div>
      </div>
    </div>
    <div class="col-sm-3">
      <div
        class="dash-tile dash-tile-balloon clearfix animation-pullDown"
      >
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <a
              href="javascript:void(0)"
              class="btn btn-default"
              data-toggle="tooltip"
              title="Manage subscribers"
              ><i class="fa fa-cog"></i
            ></a>
          </div>
          RSS Subscribers
        </div>
        <div class="dash-tile-icon"><i class="fa fa-rss"></i></div>
        <div class="dash-tile-text">160k</div>
      </div>
      <div class="dash-tile dash-tile-doll clearfix animation-pullDown">
        <div class="dash-tile-header">
          <div class="dash-tile-options">
            <a
              href="javascript:void(0)"
              class="btn btn-default"
              data-toggle="tooltip"
              title="Open tickets"
              ><i class="fa fa-file-o"></i
            ></a>
          </div>
          Total Tickets
        </div>
        <div class="dash-tile-icon"><i class="fa fa-wrench"></i></div>
        <div class="dash-tile-text">1.5k</div>
      </div>
    </div>
  </div>

</div>
<?php require_once "footer.php";?>