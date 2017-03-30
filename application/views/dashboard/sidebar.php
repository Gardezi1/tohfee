<div class="site-menubar">
    <ul class="site-menu">
      <!-- <li class="site-menu-item active">
        <a class="animsition-link" href="index.html">
          <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
          <span class="site-menu-title">Dashboard</span>
        </a>
      </li> -->
      <li class="site-menu-item has-sub">
        <a href="javascript:void(0)">
          <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
          <span class="site-menu-title">Layouts</span>
          <span class="site-menu-arrow"></span>
        </a>
        <ul class="site-menu-sub">
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/menu-collapsed.html">
              <span class="site-menu-title">Menu Collapsed</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/menu-expended.html">
              <span class="site-menu-title">Menu Expended</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/grids.html">
              <span class="site-menu-title">Grid Scaffolding</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/layout-grid.html">
              <span class="site-menu-title">Layout Grid</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/headers.html">
              <span class="site-menu-title">Different Headers</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/panel-transition.html">
              <span class="site-menu-title">Panel Transition</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/boxed.html">
              <span class="site-menu-title">Boxed Layout</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/two-columns.html">
              <span class="site-menu-title">Two Columns</span>
            </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="layouts/page-aside-fixed.html">
              <span class="site-menu-title">Page Aside Fixed</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="row">
    
      <?php $this->load->view($content);?>

  </div>