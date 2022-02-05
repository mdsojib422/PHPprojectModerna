<?php 
require_once "functions.php";
require_once "components/Mnfields.php";
$fields = new Mnfields();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Moderna Admin Panel</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" href="<?= admin_assets_url('assets/img/favicon.ico'); ?>" />
    <link rel="stylesheet" href="<?= admin_assets_url('assets/css/bootstrap-2.1.css'); ?>" />
    <link rel="stylesheet" href="<?= admin_assets_url('assets/css/plugins-2.1.css'); ?>" />
    <link rel="stylesheet" href="<?= admin_assets_url('assets/css/main-2.1.css'); ?>" />
    <link rel="stylesheet" href="<?= admin_assets_url('assets/css/themes-2.0.css'); ?>" />
  </head>
  <body>
    <div id="page-container">
      <header class="navbar navbar-inverse">
        <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
          <li class="divider-vertical"></li>
          <li>
            <a
              href="javascript:void(0)"
              data-toggle="collapse"
              data-target=".navbar-main-collapse"
            >
              <i class="fa fa-bars"></i>
            </a>
          </li>
        </ul>
        <a href="index.php.html" class="navbar-brand"
          ><img src="<?= admin_assets_url('assets/img/template/logo.png'); ?>" alt="logo"
        /></a>
        <div id="loading" class="pull-left">
          <i class="fa fa-certificate fa-spin"></i>
        </div>
      <ul id="widgets" class="navbar-nav-custom pull-right">
          

          <li class="divider-vertical"></li>
          <li id="twitter-widget" class="dropdown dropdown-left-responsive">
            <a
              href="javascript:void(0)"
              class="dropdown-toggle"
              data-toggle="dropdown"
            >
              <i class="fa fa-twitter"></i>
              <span class="badge badge-info display-none"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right widget">
              <li class="widget-heading">
                <i class="fa fa-comments-o pull-right"></i>Latest Tweets
              </li>
              <li class="li-hover">
                <div class="media">
                  <a class="pull-left" href="javascript:void(0)">
                    <img
                      src="<?= admin_assets_url('assets/img/placeholders/image_dark_64x64.png'); ?>"
                      alt="fakeimg"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="media-heading">
                      <a href="javascript:void(0)">Michael</a
                      ><span class="label label-info">just now</span>
                    </h6>
                    <div class="media">Web design all the way!</div>
                  </div>
                </div>
              </li>
              <li class="divider"></li>
            </ul>
          </li>
          <li class="divider-vertical"></li>
        <li id="messages-widget" class="dropdown dropdown-left-responsive">
            <a
              href="javascript:void(0)"
              class="dropdown-toggle"
              data-toggle="dropdown"
            >
              <i class="fa fa-envelope"></i>
              <span class="badge badge-success">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right widget">
              <li class="widget-heading">
                <i class="fa fa-comment pull-right"></i>Latest Messages
              </li>
              <li class="new-on">
                <div class="media">
                  <a class="pull-left" href="javascript:void(0)">
                    <img
                      src="img/placeholders/image_light_64x64.png"
                      alt="fakeimg"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="media-heading">
                      <a href="javascript:void(0)">George</a
                      ><span class="label label-success">2 min ago</span>
                    </h6>
                    <div class="media">
                      Thanks for your help! The tutorial really helped me a lot!
                    </div>
                  </div>
                </div>
              </li>  
               <li class="divider"></li>
              <li class="text-center">
                <a href="page_inbox.php.html">View All Messages</a>
              </li>
            </ul>
          </li>
          <li class="divider-vertical"></li>
          <li
            id="notifications-widget"
            class="dropdown dropdown-center-responsive"
          >
            <a
              href="javascript:void(0)"
              class="dropdown-toggle"
              data-toggle="dropdown"
            >
              <i class="fa fa-flag"></i>
              <span class="badge badge-danger">1</span>
           
            </a>
            <ul class="dropdown-menu dropdown-menu-right widget">
              <li class="widget-heading">
                <a href="javascript:void(0)" class="pull-right widget-link"
                  ><i class="fa fa-cog"></i></a
                ><a href="javascript:void(0)" class="widget-link">System</a>
              </li>
              <li>
                <ul>
                  <li class="label label-danger">20 min ago</li>
                  <li class="text-danger">
                    Support system is down for maintenance!
                  </li>
                </ul>
              </li>

              <li class="divider"></li>
              <li class="text-center">
                <a href="javascript:void(0)">View All Notifications</a>
              </li>
            </ul>
          </li>
          <li class="divider-vertical"></li>
          <li class="dropdown pull-right dropdown-user">
            <a
              href="javascript:void(0)"
              class="dropdown-toggle"
              data-toggle="dropdown"
              ><img src="<?= admin_assets_url('assets/img/template/avatar.png'); ?>" alt="avatar" />
              <b class="caret"></b
            ></a>
            <ul class="dropdown-menu">
              <li>
                <a href="javascript:void(0)" class="loading-on"
                  ><i class="fa fa-refresh"></i> Refresh</a
                >
              </li>
              <li class="divider"></li>
              <li>
                <a href="#modal-user-settings" role="button" data-toggle="modal"
                  ><i class="fa fa-user"></i> User Profile</a
                >
              </li>
              <li>
                <a href="javascript:void(0)"
                  ><i class="fa fa-wrench"></i> App Settings</a
                >
              </li>
              <li class="divider"></li>
              <li>
                <a href="page_login.php.html"
                  ><i class="fa fa-lock"></i> Log out</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </header>
 
<?php require_once "templates/aside-menu.php" ;?>