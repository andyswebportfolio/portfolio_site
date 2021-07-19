    
        <div class="nav_container">
            <ul class="nav" id="nav_1">
                <?php echo $link_stack;?>
            </ul>

            <ul class="nav" id="nav_button_container">
                 
                <div onclick="toggleNav()" class="dropbtn" id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
            </ul>
            
            <div id="mySidenav" class="sidenav">
            <?php echo $link_stack. $social_link_stack;?>
        </div>
            
        </div>