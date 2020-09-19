<?php 
        
   
    
    $get_portfolio = "SELECT * FROM portfolio";
    $run_portfolio = mysqli_query($connection,$get_portfolio);
    $count_portfolio = mysqli_num_rows($run_portfolio);
    
    $get_competences = "SELECT * FROM competences";
    $run_competences = mysqli_query($connection,$get_competences);
    $count_competences = mysqli_num_rows($run_competences);
    
   

?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_competences; ?> </div>
                           
                        <div> competences </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="view_competence.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right"> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_portfolio; ?> </div>
                           
                        <div> portfolio </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="view_project.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span> 
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    
    
    
</div>


