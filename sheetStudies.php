
<?php
    echo '<h5 class="mt-0">';
    echo $titleOfDocument;
    echo 'test';
    echo '</h5>';

    echo '<i class="bi bi-receipt"></i>';
?>



<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Task Name</div>
    <div class="col-md-8 bd-highlight"><?php echo $typeOfDocument; ?></div>
    <div class="ms-auto bd-highlight">Priority:
        <span class="badge rounded-pill text-bg-danger">1</span>
    </div>
</div>

<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Deadline</div>
    <div class="col-md-8 bd-highlight">20/03/2023</div>
</div>

<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Version</div>
    <div class="col-md-8 bd-highlight">3</div>
</div>

<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Last update</div>
    <div class="col-md-8 bd-highlight">18/03/2023</div>
</div>

<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Last update by</div>
    <div class="col-md-8 bd-highlight">Me</div>
</div>

<div class="d-flex bd-highlight mt-3">
    <div class="col-md-12 bd-highlight">
        <label for="exampleFormControlTextarea1" class="form-label">Task description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">Description of the task. Any modification will create a new version !</textarea>
    </div>
</div>




<div class="d-flex bd-highlight mt-3 align-items-center me-auto">
    <div class="col-md-2 bd-highlight">Task history</div>
    <div class="col-md-10 bd-highlight">

        <select class="form-select form-select-sm" aria-label="">
            
            <option value=687>Version 3 (20/05/2018)</option>
            <option value=657>Version 2 (18/05/2018)</option>
            <option value=351>Version 1 (15/05/2018)</option>
        </select>

    </div>
</div>