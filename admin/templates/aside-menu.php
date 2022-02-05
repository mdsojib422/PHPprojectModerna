<div id="inner-container">
    <aside
        id="page-sidebar"
        class="collapse navbar-collapse navbar-main-collapse">
        <form id="sidebar-search" method="post">
        <div class="input-group">
            <input
            type="text"
            id="sidebar-search-term"
            name="sidebar-search-term"
            placeholder="Search.."
            />
            <button><i class="fa fa-search"></i></button>
        </div>
        </form>
        <nav id="primary-nav">
        <ul>
            <li>
            <a href="index.php.html" class="active">
                <i class="fa fa-fire"></i>
                Dashboard
                </a>
            </li> 
            <li>
                <a href="#">
                    <i class="fa fa-file-o"></i>Pages
                </a>
                <ul>
                    <li class="open_menu">
                        <a href="#">Home</a>
                    <ul class="inner_items">
                        <li>
                <a href="pages.php?page=modernahero">Hero section</a>
                        </li>
                        <li>
                <a href="pages.php?page=services">Services</a>
                        </li>
                    </ul>
                    </li>
                </ul>      
            </li>
            <li>
                <a href="page_form_validation.php.html">
                    <i class="fa fa-th-list"></i>
                    Forms
                </a>            
            </li>
            <li>
                <a href="page_tables.php.html">
                    <i class="fa fa-table"></i>Tables
                </a>
            </li>

        </ul>
        </nav>
        <div id="theme-options" class="text-left visible-md visible-lg">
        <a href="javascript:void(0)" class="btn btn-theme-options"
            ><i class="fa fa-cog"></i> Theme Options</a
        >
        <div id="theme-options-content">
            <h5>Color Themes</h5>
            <ul class="theme-colors clearfix">
            <li class="active">
                <a
                href="javascript:void(0)"
                class="themed-background-default themed-border-default"
                data-theme="default"
                data-toggle="tooltip"
                title="Default"
                ></a>
            </li>
            <li>
                <a
                href="javascript:void(0)"
                class="themed-background-deepblue themed-border-deepblue"
                data-theme="css/themes/deepblue-2.1.css"
                data-toggle="tooltip"
                title="DeepBlue"
                ></a>
            </li>
            <li>
                <a
                href="javascript:void(0)"
                class="themed-background-deepwood themed-border-deepwood"
                data-theme="css/themes/deepwood-2.1.css"
                data-toggle="tooltip"
                title="DeepWood"
                ></a>
            </li>
            <li>
                <a
                href="javascript:void(0)"
                class="themed-background-deeppurple themed-border-deeppurple"
                data-theme="css/themes/deeppurple-2.1.css"
                data-toggle="tooltip"
                title="DeepPurple"
                ></a>
            </li>
            <li>
                <a
                href="javascript:void(0)"
                class="themed-background-deepgreen themed-border-deepgreen"
                data-theme="css/themes/deepgreen-2.1.css"
                data-toggle="tooltip"
                title="DeepGreen"
                ></a>
            </li>
            </ul>
            <h5>Header</h5>
            <label
            id="topt-fixed-header-top"
            class="switch switch-success"
            data-toggle="tooltip"
            title="Top fixed header"
            ><input type="checkbox" /><span></span
            ></label>
            <label
            id="topt-fixed-header-bottom"
            class="switch switch-success"
            data-toggle="tooltip"
            title="Bottom fixed header"
            ><input type="checkbox" /><span></span
            ></label>
            <label
            id="topt-fixed-layout"
            class="switch switch-success"
            data-toggle="tooltip"
            title="Fixed layout (for large resolutions)"
            ><input type="checkbox" /><span></span
            ></label>
        </div>
        </div>
</aside>