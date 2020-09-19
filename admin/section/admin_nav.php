<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">PerfectCup Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                    </ul>
                    <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#portfolio"><i class="fa fa-fw fa-book"></i> portfolio <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="portfolio" class="collapse">
                            <li>
                                <a href="view_project.php">View portfolio</a>
                            </li>
                           
                            <li>
                                <a href="add_project.php">Add portfolio</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#competences"><i class="fa fa-fw fa-book"></i> competences <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="competences" class="collapse">
                            <li>
                                <a href="view_competence.php">View competences</a>
                            </li>
                           
                            <li>
                                <a href="add_competence.php">Add competences</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                   
                    <li>
                    <a href="view_about.php"><i class="fa fa-fw fa-bar-chart-o"></i> about</a>
                    </li>
 
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>