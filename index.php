<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adwaita UI</title>
        
        <link type="text/css" rel="stylesheet" href="assets/lib/adwaita-ui/adwaita-web-ui.css" />
        <script type="text/javascript" src="assets/lib/adwaita-ui/adwaita-web-ui.js"></script>
        
        <style type="text/css">
            body {
                margin: 0;
                padding: 0;
            }
            
            .group > * {
                margin-right: 1em;
            }
            
            .group {
                margin-bottom: 2em;
                margin-top: 2em;
            }
            
            /* Accordion */
            .aiom-adwaita-ui-accordion,
            .aiom-adwaita-ui-tabpane {
                max-width: 512px;
            }
            
            .aiom-adwaita-ui-accordion p,
            .aiom-adwaita-ui-tabpane p {
                text-align: justify;
                padding: 0.5em;
            }
            
            /* Tab */
            /* Tab Top */
            .aiom-adwaita-ui-tabpane {
                max-width: 800px;
            }
            
            /* Tab Bottom */
            .aiom-adwaita-ui-tab-contents-bottom,
            .aiom-adwaita-ui-tabs-bottom {
                max-width: 512px;
            }
            
            /* Table */
            .aiom-adwaita-ui-table thead,
            .aiom-adwaita-ui-table tbody,
            .aiom-adwaita-ui-table tr {
                display: block;
                position: relative;
            }
            
            .aiom-adwaita-ui-table th,
            .aiom-adwaita-ui-table td {
                width: 200px;
            }
            
            .aiom-adwaita-ui-table th {
                border-top: none;
            }
            
            .aiom-adwaita-ui-table th:first-child {
                border-left: none;
            }
            
            .aiom-adwaita-ui-table th:last-child {
                border-right: none;
            }
            
            .aiom-adwaita-ui-table tbody {
                height: 200px;
                overflow-x: auto;
                overflow-y: scroll;
            }
            
            /* Context Menu */
            .aiom-adwaita-ui-context-menu-parent {
                width: 256px;
                height: 256px;
                border: 1px solid #91918c;
            }
            
            /* Text Area */
            .aiom-adwaita-ui-textarea {
                width: 512px;
                height: 200px;
            }
            
            /* Tooltip */
            #tooltip-example {
                width: 256px;
                height: 256px;
                border: 1px solid #91918c;
                padding: 1em;
            }
            
            /* SplitPane */
            .aiom-adwaita-ui-splitpane-vertical {
                border: 1px solid #b6b6b3;
                height: 300px;
                overflow: hidden;
            }
            
            .aiom-adwaita-ui-splitpane-vertical > div {
                background: #ffffff;
                overflow-y: scroll;
                overflow-x: auto;
            }
            
            .aiom-adwaita-ui-splitpane-vertical > div * {
                margin: 0;
                padding: 1em;
            }
            
            .aiom-adwaita-ui-splitpane-horizontal {
                border: 1px solid #b6b6b3;
                height: 300px;
                overflow: hidden;
            }
            
            .aiom-adwaita-ui-splitpane-horizontal > div {
                background: #ffffff;
                overflow-x: scroll;
                overflow-y: auto;
            }
            
            .aiom-adwaita-ui-splitpane-horizontal > div * {
                margin: 0;
                padding: 1em;
            }
        </style>
    </head>
    <body>
        <main class="aiom-adwaita-ui-pane">
            <header>
                <h1>Adwaita Web UI</h1>
            </header>
            
            <h2>Button</h2>
            
            <!-- Button -->
            <div class="group">
                <a class="aiom-adwaita-ui-button" href="#">Button</a>
                <a class="aiom-adwaita-ui-button-primary" href="#">Primary Button</a>
                <a class="aiom-adwaita-ui-button-disabled" href="#">Disabled Button</a>
            </div>
            
            <h2>Toggle Button</h2>
            
            <!-- Toggle -->
            <div class="group">
                <a class="aiom-adwaita-ui-toggle-button" href="#" data-checked="true">Toggle</a>
                
                <span class="aiom-adwaita-ui-toggle-group">
                    <a class="aiom-adwaita-ui-toggle-button" href="#" data-checked="false">Toggle 1</a>
                    <a class="aiom-adwaita-ui-toggle-button" href="#" data-checked="true">Toggle 2</a>
                    <a class="aiom-adwaita-ui-toggle-button" href="#" data-checked="false">Toggle 3</a>
                </span>
            </div>
            
            <h2>Toggle Switch</h2>
            
            <!-- Toggle Switch -->
            <div class="group">
                <div class="aiom-adwaita-ui-toggle-switch">
                    <label>
                        <input type="checkbox">
                        <span class="aiom-adwaita-ui-toggle-switch-slider">
                            <span class="aiom-adwaita-ui-toggle-switch-label">On</span>
                            <span class="aiom-adwaita-ui-toggle-switch-label">Off</span>
                        </span>
                    </label>
                </div>
                
                <div class="aiom-adwaita-ui-toggle-switch">
                    <label>
                        <input type="checkbox" checked>
                        <span class="aiom-adwaita-ui-toggle-switch-slider">
                            <span class="aiom-adwaita-ui-toggle-switch-label">On</span>
                            <span class="aiom-adwaita-ui-toggle-switch-label">Off</span>
                        </span>
                    </label>
                </div>
            </div>
            
            <h2>Label</h2>
            
            <!-- Label -->
            <div class="group">
                <label class="aiom-adwaita-ui-label">Label</label>
                <label class="aiom-adwaita-ui-label-disabled">Label Disabled</label>
            </div>
            
            <h2>ToolBar</h2>
            
            <!-- Toolbar -->
            <div class="group">
                <div class="aiom-adwaita-ui-toolbar">
                    <label class="aiom-adwaita-ui-label">Toolbar</label>
                    <a class="aiom-adwaita-ui-button" href="#"><img class="aiom-adwaita-ui-button-icon" alt="icon" src="assets/images/document-open.png" /> Button 1</a>
                    <a class="aiom-adwaita-ui-button" href="#"><img class="aiom-adwaita-ui-button-icon" alt="icon" src="assets/images/document-save.png" /> Button 2</a>
                    <span class="aiom-adwaita-ui-toolbar-separator"></span>
                    <a class="aiom-adwaita-ui-button" href="#">Button 3</a>
                </div>
            </div>
            
            <h2>Spinner</h2>
            
            <!-- Spinner -->
            <div class="group">
                <span class=aiom-adwaita-ui-spinner>
                    <input type="text" value="1" />
                    <button class="aiom-adwaita-ui-spinner-step-down">−</button>
                    <button class="aiom-adwaita-ui-spinner-step-up">+</button>
                </span>
            </div>
            
            <h2>Accordion</h2>
            
            <!-- Accordion, Titled Pane -->
            <div class="group">
                <div class="aiom-adwaita-ui-accordion">
                    <div class="aiom-adwaita-ui-titled-pane" data-collapse="false">
                        <h2 class="aiom-adwaita-ui-titled-pane-title"><span>Titled Pane 1</span></h2>
                        
                        <div class="aiom-adwaita-ui-titled-pane-contents">
                            <div>
                                <p>Hello World 1</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-titled-pane" data-collapse="true">
                        <h2 class="aiom-adwaita-ui-titled-pane-title"><span>Titled Pane 2</span></h2>
                        
                        <div class="aiom-adwaita-ui-titled-pane-contents">
                            <div>
                                <p>Hello World 2</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-titled-pane" data-collapse="true">
                        <h2 class="aiom-adwaita-ui-titled-pane-title"><span>Titled Pane 3</span></h2>
                        
                        <div class="aiom-adwaita-ui-titled-pane-contents">
                            <div>
                                <p>Hello World 3</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-titled-pane" data-collapse="true">
                        <h2 class="aiom-adwaita-ui-titled-pane-title"><span>Titled Pane 4</span></h2>
                        
                        <div class="aiom-adwaita-ui-titled-pane-contents">
                            <div>
                                <p>Hello World 4</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-titled-pane" data-collapse="true">
                        <h2 class="aiom-adwaita-ui-titled-pane-title"><span>Titled Pane 5</span></h2>
                        
                        <div class="aiom-adwaita-ui-titled-pane-contents">
                            <div>
                                <p>Hello World 5</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h2>Tabs</h2>
            <!-- TabPane, Tab -->
            
            <h3>Tab: Top</h3>
            <!-- Tab: Top -->
            <div class="group">
                <div class="aiom-adwaita-ui-tabpane">
                    <ul class="aiom-adwaita-ui-tabs">
                        <li class="aiom-adwaita-ui-tab" data-selected="true"><a href="#tab1">Tab 1</a></li>
                        <li class="aiom-adwaita-ui-tab" data-selected="false"><a href="#tab2">Tab 2</a></li>
                        <li class="aiom-adwaita-ui-tab" data-selected="false"><a href="#tab3">Tab 3</a></li>
                        <li class="aiom-adwaita-ui-tab-add"><a href="#"><img alt="Add Icon" src="assets/images/list-add.png" /></a></li>
                    </ul>
                    
                    <div class="aiom-adwaita-ui-tab-contents">
                        <div id="tab1" class="aiom-adwaita-ui-tab-content">
                            <p>Tab content 1</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div id="tab2" class="aiom-adwaita-ui-tab-content">
                            <p>Tab content 2</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div id="tab3" class="aiom-adwaita-ui-tab-content">
                            <p>Tab content 3</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3>Tab: Bottom</h3>
                
            <!-- Tab: Bottom -->
            <div class="group">
                <div class="aiom-adwaita-ui-tabpane-bottom">
                    <div class="aiom-adwaita-ui-tab-contents-bottom">
                        <div id="tab4" class="aiom-adwaita-ui-tab-content-bottom">
                            <p>Tab content 1</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div id="tab5" class="aiom-adwaita-ui-tab-content-bottom">
                            <p>Tab content 2</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div id="tab6" class="aiom-adwaita-ui-tab-content-bottom">
                            <p>Tab content 3</p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>

                    <ul class="aiom-adwaita-ui-tabs-bottom">
                        <li class="aiom-adwaita-ui-tab-bottom" data-selected="true"><a href="#tab4">Tab 1</a></li>
                        <li class="aiom-adwaita-ui-tab-bottom" data-selected="false"><a href="#tab5">Tab 2</a></li>
                        <li class="aiom-adwaita-ui-tab-bottom" data-selected="false"><a href="#tab6">Tab 3</a></li>
                    </ul>
                </div>
            </div>
            
            <h2>Check Box</h2>
            
            <!-- Checkbox -->
            <div class="group">
                <label class="aiom-adwaita-ui-checkbox">Checkbox 1
                    <input type="checkbox" checked />
                    <span class="aiom-adwaita-ui-checkmark"></span>
                </label>

                <label class="aiom-adwaita-ui-checkbox">Checkbox 2
                    <input type="checkbox" />
                    <span class="aiom-adwaita-ui-checkmark"></span>
                </label>

                <label class="aiom-adwaita-ui-checkbox">Checkbox 3
                    <input type="checkbox" />
                    <span class="aiom-adwaita-ui-checkmark"></span>
                </label>
            </div>
            
            <h2>Radio Button</h2>
                
            <!-- Radio Button -->
            <div class="group">
                <label class="aiom-adwaita-ui-radio">Radio 1
                    <input type="radio" name="example-radio" checked />
                    <span class="aiom-adwaita-ui-radio-checkmark"></span>
                </label>

                <label class="aiom-adwaita-ui-radio">Radio 2
                    <input type="radio" name="example-radio" />
                    <span class="aiom-adwaita-ui-radio-checkmark"></span>
                </label>

                <label class="aiom-adwaita-ui-radio">Radio 3
                    <input type="radio" name="example-radio" />
                    <span class="aiom-adwaita-ui-radio-checkmark"></span>
                </label>
            </div>
            
            <h2>Slider</h2>
            
            <!-- Slider -->
            <div class="group">
                <div class="aiom-adwaita-ui-slider" title="50%">
                    <label>
                        <span class="aiom-adwaita-ui-slider-value-indicator"></span>
                        <input class="aiom-adwaita-ui-slider-value" type="hidden" value="50" />
                    </label>
                    
                    <span class="aiom-adwaita-ui-slider-thumb"></span>
                </div>
            </div>
            
            <h2>Progress Bar</h2>
            
            <!-- Progress -->
            <div class="group">
                <div class="aiom-adwaita-ui-progress" title="65%">
                    <label>
                        <span class="aiom-adwaita-ui-progress-value-indicator"></span>
                        <input class="aiom-adwaita-ui-progress-value" type="hidden" value="65" />
                    </label>
                </div>
            </div>
            
            <h2>Progress Spinner</h2>
            
            <!-- Progress Spinner -->
            <div class="group">
                <div class="aiom-adwaita-ui-progress-spinner">
                    <span></span>
                </div>
            </div>
            
            <h2>Bread Crumb</h2>
            
            <!-- Breadcrumb -->
            <div class="group">
                <div class="aiom-adwaita-ui-breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Vehicles</a></li>
                        <li><a href="#">Vans</a></li>
                        <li><a href="#">Camper Vans</a></li>
                        <li><a href="#">1989 VW Westfalia Vanagon</a></li>
                    </ul>
                </div>
            </div>
            
            <h2>Table</h2>
            
            <!-- Table -->
            <div class="group">
                <table class="aiom-adwaita-ui-table">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                            <td>Row 1 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                            <td>Row 2 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                            <td>Row 3 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 4 Column 1</td>
                            <td>Row 4 Column 2</td>
                            <td>Row 4 Column 3</td>
                            <td>Row 4 Column 4</td>
                            <td>Row 4 Column 5</td>
                        </tr>
                        
                        <tr class="aiom-adwaita-ui-table-row-selected">
                            <td>Row 5 Column 1</td>
                            <td>Row 5 Column 2</td>
                            <td>Row 5 Column 3</td>
                            <td>Row 5 Column 4</td>
                            <td>Row 5 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 6 Column 1</td>
                            <td>Row 6 Column 2</td>
                            <td>Row 6 Column 3</td>
                            <td>Row 6 Column 4</td>
                            <td>Row 6 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 7 Column 1</td>
                            <td>Row 7 Column 2</td>
                            <td>Row 7 Column 3</td>
                            <td>Row 7 Column 4</td>
                            <td>Row 7 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 8 Column 1</td>
                            <td>Row 8 Column 2</td>
                            <td>Row 8 Column 3</td>
                            <td>Row 8 Column 4</td>
                            <td>Row 8 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 9 Column 1</td>
                            <td>Row 9 Column 2</td>
                            <td>Row 9 Column 3</td>
                            <td>Row 9 Column 4</td>
                            <td>Row 9 Column 5</td>
                        </tr>
                        
                        <tr>
                            <td>Row 10 Column 1</td>
                            <td>Row 10 Column 2</td>
                            <td>Row 10 Column 3</td>
                            <td>Row 10 Column 4</td>
                            <td>Row 10 Column 5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h2>TreeView</h2>
            
            <!-- Treeview -->
            <div class="group">
                <ul class="aiom-adwaita-ui-treeview">
                    <li>
                        <a href="#" class="aiom-adwaita-ui-tree-root" data-isCollpased="true">Root 1</a>
                        <div class="aiom-adwaita-ui-tree-root-contents">
                            <p>
                                Hello World 1
                            </p>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="aiom-adwaita-ui-tree-root" data-isCollpased="true">Root 2</a>
                        <div class="aiom-adwaita-ui-tree-root-contents">
                            <ul class="aiom-adwaita-ui-treeview">
                                <li>
                                    <a href="#" class="aiom-adwaita-ui-tree-root" data-isCollpased="true">Root 3</a>
                                    <div class="aiom-adwaita-ui-tree-root-contents">
                                        <p>
                                            Hello World 2
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="aiom-adwaita-ui-tree-root" data-isCollpased="true">Root 3</a>
                        <div class="aiom-adwaita-ui-tree-root-contents">
                            <p>
                                Hello World 3
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <h2>Menu</h2>
            
            <!-- Menu -->
            <div class="group">
                <menu class="aiom-adwaita-ui-menubar">
                    <ul class="aiom-adwaita-ui-menubar-menuitems">
                        <li class="aiom-adwaita-ui-menubar-menuitem">
                            <span>File</span>
                            
                            <ul class="aiom-adwaita-ui-menubar-menu aiom-adwaita-ui-box-shadow">
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/document-new.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">New</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + N</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator">
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/document-open.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">Open</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + O</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator aiom-adwaita-ui-submenu">
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Open Recent</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut"></span>
                                    
                                    <ul class="aiom-adwaita-ui-submenu-parent aiom-adwaita-ui-box-shadow">
                                        <li class="aiom-adwaita-ui-menu-item-disabled">
                                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/text-x-preview.png" /></span>
                                            <span class="aiom-adwaita-ui-menu-item">File 1</span>
                                        </li>

                                        <li>
                                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/text-x-preview.png" /></span>
                                            <span class="aiom-adwaita-ui-menu-item">File 2</span>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/document-save.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">Save</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + S</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator">
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/document-save-as.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">Save As</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut"></span>
                                </li>
                                
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/geany-close-all.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">Exit</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Alt + F4</span>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="aiom-adwaita-ui-menubar-menuitem">
                            <span>Edit</span>
                            
                            <ul class="aiom-adwaita-ui-menubar-menu aiom-adwaita-ui-box-shadow">
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Undo</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + Z</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator aiom-adwaita-ui-menu-item-disabled">
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Redo</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + Y</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-menu-item-disabled">
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Cut</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + X</span>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator">
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Copy</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + C</span>
                                </li>
                                
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"></span>
                                    <span class="aiom-adwaita-ui-menu-item">Delete</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Del</span>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="aiom-adwaita-ui-menubar-menuitem">
                            <span>View</span>
                            
                            <ul class="aiom-adwaita-ui-menubar-menu aiom-adwaita-ui-box-shadow">
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-1">Toolbar
                                        <input id="example-checkbox-1" type="checkbox" />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-2">Menubar
                                        <input id="example-checkbox-2" type="checkbox" checked />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator">
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-3">Editor
                                        <input id="example-checkbox-3" type="checkbox" />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-1">Zoom 50%
                                        <input id="example-radio-1" type="radio" name="example-radio-group-1" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-2">Zoom 100%
                                        <input id="example-radio-2" type="radio" checked name="example-radio-group-1" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-3">Zoom 150%
                                        <input id="example-radio-3" type="radio" name="example-radio-group-1" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="aiom-adwaita-ui-menubar-menuitem">
                            <span>Tools</span>
                        </li>
                        
                        <li class="aiom-adwaita-ui-menubar-menuitem">
                            <span>Help</span>
                        </li>
                    </ul>
                </menu>
            </div>
            
            <h2>Context Menu</h2>
            
            <!-- Context Menu -->
            <div class="group">
                <p>
                    Right click here to see context menu
                </p>
                
                <div class="aiom-adwaita-ui-context-menu-parent">
                    <ul class="aiom-adwaita-ui-context-menu aiom-adwaita-ui-box-shadow">
                        <li id="cut-menu-item">
                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/edit-cut.png" /></span>
                            <span class="aiom-adwaita-ui-menu-item">Cut</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + X</span>
                        </li>
                        
                        <li class="aiom-adwaita-ui-menu-item-disabled">
                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/edit-paste-style.png" /></span>
                            <span class="aiom-adwaita-ui-menu-item">Paste</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + V</span>
                        </li>
                        
                        <li class="aiom-adwaita-ui-context-menu-seperator">
                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/edit-copy.png" /></span>
                            <span class="aiom-adwaita-ui-menu-item">Copy</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + C</span>
                        </li>
                        
                        <li class="aiom-adwaita-ui-context-menu-seperator">
                            <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/edit-delete.png" /></span>
                            <span class="aiom-adwaita-ui-menu-item">Delete</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut">Del</span>
                        </li>
                        
                        <li class="aiom-adwaita-ui-submenu">
                            <span class="aiom-adwaita-ui-menu-item-icon"></span>
                            <span class="aiom-adwaita-ui-menu-item">Submenu 1</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut"></span>
                            
                            <ul class="aiom-adwaita-ui-submenu-parent aiom-adwaita-ui-box-shadow">
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item">Submenu 1</span>
                                </li>
                                
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item">Submenu 2</span>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="aiom-adwaita-ui-submenu">
                            <span class="aiom-adwaita-ui-menu-item-icon"></span>
                            <span class="aiom-adwaita-ui-menu-item">Submenu 2</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut"></span>
                            
                            <ul class="aiom-adwaita-ui-submenu-parent aiom-adwaita-ui-box-shadow">
                                <li class="aiom-adwaita-ui-menu-item-disabled">
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/folder-new.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">New Item A</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + N</span>
                                </li>
                                
                                <li>
                                    <span class="aiom-adwaita-ui-menu-item-icon"><img alt="icon" src="assets/images/address-book-new.png" /></span>
                                    <span class="aiom-adwaita-ui-menu-item">New Item B</span>
                                    <span class="aiom-adwaita-ui-menu-item-shortcut">Ctrl + N</span>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="aiom-adwaita-ui-submenu">
                            <span class="aiom-adwaita-ui-menu-item-icon"></span>
                            <span class="aiom-adwaita-ui-menu-item">Submenu 3</span>
                            <span class="aiom-adwaita-ui-menu-item-shortcut"></span>
                            
                            <ul class="aiom-adwaita-ui-submenu-parent aiom-adwaita-ui-box-shadow">
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-a">Toolbar
                                        <input id="example-checkbox-a" type="checkbox" />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-b">Menubar
                                        <input id="example-checkbox-b" type="checkbox" checked />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li class="aiom-adwaita-ui-context-menu-seperator">
                                    <label class="aiom-adwaita-ui-menuitem-checkbox" for="example-checkbox-c">Editor
                                        <input id="example-checkbox-c" type="checkbox" />
                                        <span class="aiom-adwaita-ui-menuitem-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-a">Zoom 50%
                                        <input id="example-radio-a" type="radio" name="example-radio-group-a" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-b">Zoom 100%
                                        <input id="example-radio-b" type="radio" checked name="example-radio-group-a" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                                
                                <li>
                                    <label class="aiom-adwaita-ui-menuitem-radio" for="example-radio-c">Zoom 150%
                                        <input id="example-radio-c" type="radio" name="example-radio-group-a" />
                                        <span class="aiom-adwaita-ui-menuitem-radio-checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
            <h2>Control Group</h2>
            
            <!-- Control Group -->
            <div class="group">
                <div class="aiom-adwaita-ui-control-group">
                    <label class="aiom-adwaita-ui-label">Hello World</label>
                    
                    <div class="aiom-adwaita-ui-control-group-contents">
                        <p>
                            This is the contents
                        </p>
                    </div>
                </div>
            </div>
            
            <h2>ComboBox</h2>
            
            <!-- Combobox -->
            <div class="group">
                <div class="aiom-adwaita-ui-combobox">
                    <label class="aiom-adwaita-ui-combobox-value"></label>
                    
                    <ul class="aiom-adwaita-ui-combobox-list aiom-adwaita-ui-box-shadow">
                        <li data-selected="true">Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                        <li>Item 8</li>
                        <li>Item 9</li>
                        <li>Item 10</li>
                        <li>Item 11</li>
                        <li>Item 12</li>
                        <li>Item 13</li>
                        <li>Item 14</li>
                        <li>Item 15</li>
                        <li>Item 16</li>
                        <li>Item 17</li>
                        <li>Item 18</li>
                        <li>Item 19</li>
                        <li>Item 20</li>
                    </ul>
                </div>
                
                <div class="aiom-adwaita-ui-combobox">
                    <label class="aiom-adwaita-ui-combobox-value"></label>
                    
                    <ul class="aiom-adwaita-ui-combobox-list aiom-adwaita-ui-box-shadow">
                        <li>Item 1</li>
                        <li data-selected="true">Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                        <li>Item 8</li>
                        <li>Item 9</li>
                        <li>Item 10</li>
                        <li>Item 11</li>
                        <li>Item 12</li>
                        <li>Item 13</li>
                        <li>Item 14</li>
                        <li>Item 15</li>
                        <li>Item 16</li>
                        <li>Item 17</li>
                        <li>Item 18</li>
                        <li>Item 19</li>
                        <li>Item 20</li>
                    </ul>
                </div>
            </div>
            
            <h2>Text Area</h2>
            
            <!-- Text Area -->
            <div class="group">
                <textarea class="aiom-adwaita-ui-textarea">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </textarea>
            </div>
            
            <h2>Tooltip</h2>
            
            <!-- Tooltip -->
            <div class="group">
                <div id="tooltip-example" class="aiom-adwaita-ui-tooltip-parent">
                    <div class="aiom-adwaita-ui-tooltip aiom-adwaita-ui-box-shadow">
                        <span>This is a tooltip</span>
                    </div>
                    
                    <p>
                        Place your mouse here to see the tooltip
                    </p>
                </div>
            </div>
            
            <h2>SplitPane</h2>
            
            <!-- Split Pane (Vertical) -->
            <h3>SplitPane: Vertical</h3>
            
            <div class="group">
                <div id="vsplit" class="aiom-adwaita-ui-splitpane-vertical" data-parent="vsplit">
                    <div class="aiom-adwaita-ui-splitpane-vertical-top-content">
                        <h2>Content 1</h2>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    
                    <span class="aiom-adwaita-ui-splitpane-vertical-handle" data-split="0.5"></span>
                    
                    <div class="aiom-adwaita-ui-splitpane-vertical-bottom-content">
                        <h2>Content 2</h2>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            
            
            <h3>SplitPane: Horizontal</h3>
            
            <!-- Split Pane (Horizontal) -->
            <div class="group">
                <div id="hspit" class="aiom-adwaita-ui-splitpane-horizontal" data-parent="hspit">
                    <div class="aiom-adwaita-ui-splitpane-horizontal-left-content">
                        <h2>Content 1</h2>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    
                    <span class="aiom-adwaita-ui-splitpane-horizontal-handle" data-split="0.5"></span>
                    
                    <div class="aiom-adwaita-ui-splitpane-horizontal-right-content">
                        <h2>Content 2</h2>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            
            
            <h2>Dialog Message</h2>
            
            <!-- Dialog Message -->
            <div class="group">
                <button id="show-dialog">Click Here to Open Dialog Message</button>
                
                <div id="dialog-example" class="aiom-adwaita-ui-dialog aiom-adwaita-ui-box-shadow">
                    <div class="aiom-adwaita-ui-dialog-title-bar">
                
                        <div class="aiom-adwaita-ui-dialog-header">
                            Dialog Title
                        </div>
                        
                        <div class="aiom-adwaita-ui-dialog-close-container">
                            <a class='aiom-adwaita-ui-button aiom-adwaita-ui-dialog-close'>&#10005;</a>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-dialog-body clearfix">
                        <div class="aiom-adwaita-ui-dialog-icon">
                            <img alt="Dialog icon" src="assets/images/Gnome-Dialog-Question-48.png" />
                        </div>
                        
                        <div class="aiom-adwaita-ui-dialog-message">
                            <p>This is a dialog box message</p>
                            
                            <label class="aiom-adwaita-ui-checkbox">Do not show this message again
                                <input type="checkbox" />
                                <span class="aiom-adwaita-ui-checkmark"></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="aiom-adwaita-ui-dialog-buttons">
                        <a class="aiom-adwaita-ui-button" href="#">Save</a>
                        <a class="aiom-adwaita-ui-button" href="#">Yes</a>
                        <a id="example-dialog-cancel" class="aiom-adwaita-ui-button" href="#">Cancel</a>
                    </div>
                </div>
            </div>
            
            <!-- Color Chooser -->
            <h2>Color Chooser</h2>
            
            <div class="group">
                <div class="aiom-adwaita-ui-color-chooser" data-custom-colors="#FF0000;#00FF00;#0000FF">
                    <button class="aiom-adwaita-ui-button aiom-adwaita-ui-color-chooser-input">
                        <svg
                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:svg="http://www.w3.org/2000/svg"
                            xmlns="http://www.w3.org/2000/svg"
                            version="1.1"
                            height="20"
                            width="60">
                            <g>
                                <rect
                                   y="0"
                                   x="0"
                                   height="20"
                                   width="60"
                                   rx="5"
                                   ry="5"
                                   fill="#000000"
                                   style="fill-opacity:1;stroke:none;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
                            </g>
                        </svg>
                    </button>
                    
                    <input class="aiom-adwaita-ui-color-chooser-value" type="hidden" value="#6495ED" />
                    
                    <div class="aiom-adwaita-ui-dialog aiom-adwaita-ui-box-shadow">
                        <div class="aiom-adwaita-ui-dialog-title-bar">
                            <div class="aiom-adwaita-ui-dialog-header">
                                Pick a Color
                            </div>

                            <a class="aiom-adwaita-ui-button aiom-adwaita-ui-color-chooser-header-button" href="#"><span>Close</span></a>

                            <div class="aiom-adwaita-ui-dialog-close-container">
                                <a class='aiom-adwaita-ui-button aiom-adwaita-ui-dialog-close'>&#10005;</a>
                            </div>
                        </div>

                        <div class="aiom-adwaita-ui-dialog-body clearfix">
                            <div class="aiom-adwaita-ui-color-chooser-predefined-color-row">
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#ef2929"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#fcaf3e"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#fce94f"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#8ae234"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#729fcf"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#ad7fa8"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#e9b96e"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#888a85"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#eeeeec"></span>
                            </div>
                            
                            <div class="aiom-adwaita-ui-color-chooser-predefined-color-row">
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#cc0000"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#f57900"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#edd400"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#73d216"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#3465a4"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#75507b"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#c17d11"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#555753"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#d3d7cf"></span>
                            </div>
                            
                            <div class="aiom-adwaita-ui-color-chooser-predefined-color-row">
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#a40000"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#ce5c00"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#c4a000"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#4e9a06"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#204a87"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#5c3566"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#8f5902"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#2e3436"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#babdb6"></span>
                            </div>
                            
                            <div class="aiom-adwaita-ui-color-chooser-predefined-color-row">
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#000000"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#2e3436"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#555753"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#888a85"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#babdb6"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#d3d7cf"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#eeeeec"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#f3f3f3"></span>
                                <span class="aiom-adwaita-ui-color-chooser-predefined-color" data-selected="false" data-value="#ffffff"></span>
                            </div>
                        </div>

                        <label class="aiom-adwaita-ui-label">Custom</label>
                        
                        <div class="aiom-adwaita-ui-dialog-buttons">
                            <div class="aiom-adwaita-ui-color-chooser-custom-colors-pane"></div>
                            
                            <div>
                                <a class="aiom-adwaita-ui-button aiom-adwaita-ui-color-chooser-custom-color">
                                    <img class="aiom-adwaita-ui-button-icon" alt="icon" src="assets/images/list-add.png" />
                                    <input type="color" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <script type="text/javascript">
            let theme = new AdwaitaUI();
            theme.InitializeAdwaitaUI();
            
            document.querySelector("#cut-menu-item").addEventListener("click", event => {
                console.log("Cut menu item clicked");
            });
            
            document.querySelector("#show-dialog").addEventListener("click", event => {
                let dialog = document.querySelector("#dialog-example");
                theme.ShowDialog(dialog);
            });
            
            document.querySelector("#example-dialog-cancel").addEventListener("click", event => {
                let dialog = document.querySelector("#dialog-example");
                theme.CloseDialog(dialog);
                
                event.preventDefault();
            });
        </script>
    </body>
</html>
