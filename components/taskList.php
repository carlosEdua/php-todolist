<?php 
    $tasks = $db->query("SELECT * FROM task");
?>

<h3 class="tasks mt-5 mb-4">Your task</h3>
<main class="row tasks-container">
    <?php 
        if ($tasks->num_rows > 0): 
        // output data of each row
            while($row = $tasks->fetch_assoc()):
                $completada = $row["completed"]
    ?>
                <div class='col-xm-12 col-6 px-2 my-1'>
                    <div class="task mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="task-title text-left">
                                    <?php echo($row["title"]);?>
                                </h6>
                                <p class="task-description m-0 mt-3">
                                    <?php echo($row["description"]);?>
                                </p>
                            </div>
                            <!-- <div class="col-6 pr-0">
                                <img src="public/task.svg" alt="An task" class="task-item">
                            </div> -->
                        </div>
                        <div class="task-details">
                            <small class="task-detail task-<?php echo $completada ? "complete" : "incomplete" ?>">
                                <i class="fa fa-<?php echo $completada ? "check" : "times" ?> mr-2"></i>
                                <?php echo $completada ? "Completada" : "Incompleta" ?>
                            </small>
                            <small class="task-detail">
                                <i class="fa fa-clock mr-2"></i>
                                <?php echo($row["fecha"]);?>
                            </small>
                        </div>
                        
                    </div>
                </div>
                
        <?php
            endwhile;
        else:
        ?>
            0 tasks
        <?php endif;?>
</main>


