<?php if(isset($_SESSION['is_logged_in'])){ 
                if($_SESSION['role']=='dokter'){ 
                    echo('<div class="space">
                <a href="index.php">Public</a>|
                <a href="doctor.php">Doctor</a></div>');
                }
                if($_SESSION['role']=='perawat'){
                    echo('<div class="space"> 
                        <a href="index.php">Public</a>
                        |
                        <a href="manager.php">Manage</a></div>');
                }}
                else{
                    echo(' <div class="space">
                <a href="index.php">Public</a> </div>');
                }
            ?>