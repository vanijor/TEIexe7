-tabs.control-sidebar-tabs > li:first-of-type > a:focus {
  border-left-width: 0;
}
.nav-tabs.control-sidebar-tabs > li > a {
  border-radius: 0;
}
.nav-tabs.control-sidebar-tabs > li > a,
.nav-tabs.control-sidebar-tabs > li > a:hover {
  border-top: none;
  border-right: none;
  border-left: 1px solid transparent;
  border-bottom: 1px solid transparent;
}
.nav-tabs.control-sidebar-tabs > li > a .icon {
  font-size: 16px;
}
.nav-tabs.control-sidebar-tabs > li.active > a,
.nav-tabs.control-sidebar-tabs > li.active > a:hover,
.nav-tabs.control-sidebar-tabs > li.active > a:focus,
.nav-tabs.control-sidebar-tabs > li.active > a:active {
  border-top: none;
  border-right: none;
  border-bottom: none;
}
@media (max-width: 768px) {
  .nav-tabs.control-sidebar-tabs {
    display: table;
  }
  .nav-tabs.control-sidebar-tabs > li {
    display: table-cell;
  }
}
.control-sidebar-heading {
  font-weight: 400;
  font-size: 16px;
  padding: 10px 0;
  margin-bottom: 10px;
}
.control-sidebar-subheading {
  display: block;
  font-weight: 400;
  font-size: 14px;
}
.control-sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0 -15px;
}
.control-sidebar-menu > li > a {
  display: block;
  padding: 10px 15px;
}
.control-sidebar-menu > li > a:before,
.control-sidebar-menu > li > a:after {
  content: " ";
  display: table;
}
.control-sidebar-menu > li > a:after {
  clear: both;
}
.control-sidebar-menu > li > a > .control-sidebar-subheading {
  margin-top: 0;
}
.control-sidebar-menu .menu-icon {
  float: left;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  text-align: center;
  line-height: 35px;
}
.control-sidebar-menu .menu-info {
  margin-left: 45px;
  margin-top: 3px;
}
.control-sidebar-menu .menu-info > .control-sidebar-subheading {
  margin: 0;
}
.control-sidebar-menu .menu-info > p {
  margin: 0;
  font-size: 11px;
}
.control-sidebar-menu .progress {
  margin: 0;
}
.control-sidebar-dark {
  color: #b8c7ce;
}
.control-sidebar-dark,
.control-sidebar-dark + .control-sidebar-bg {
  background: #222d32;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs {
  border-bottom: #1c2529;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a {
  background: #181f23;
  color: #b8c7ce;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:hover,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:focus {
  border-left-color: #141a1d;
  border-bottom-color: #141a1d;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:hover,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:focus,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:active {
  background: #1c2529;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li > a:hover {
  color: #fff;
}
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:hover,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:focus,
.control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:active {
  background: #222d32;
  color: #fff;
}
.control-sidebar-dark .control-sidebar-heading,
.control-sidebar-dark .control-sidebar-subheading {
  color: #fff;
}
.control-sidebar-dark .control-sidebar-menu > li > a:hover {
  background: #1e282c;
}
.control-sidebar-dark .control-sidebar-menu > li > a .menu-info > p {
  color: #b8c7ce;
}
.control-sidebar-light {
  color: #5e5e5e;
}
.control-sidebar-light,
.control-sidebar-light + .control-sidebar-bg {
  background: #f9fafc;
  border-left: 1px soli