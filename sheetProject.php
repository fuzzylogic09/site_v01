


<!-- Add this script within the <head> tag of your HTML document -->
<script>
    var sortOrders = [0, 0, 0, 0, 0, 0]; // Initialize sorting orders for each column
    
    function sortTable(column) {
        var table, rows, switching, i, x, y, shouldSwitch, sortOrder;
        table = document.getElementById("taskTable");
        switching = true;
        sortOrder = sortOrders[column];
        
        while (switching) {
            switching = false;
            rows = table.getElementsByTagName("tr");
            
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                
                x = rows[i].getElementsByTagName("td")[column].innerHTML;
                y = rows[i + 1].getElementsByTagName("td")[column].innerHTML;
                
                if (isNaN(x)) {
                    if ((sortOrder === 0 && x.toLowerCase() > y.toLowerCase()) ||
                        (sortOrder === 1 && x.toLowerCase() < y.toLowerCase())) {
                        shouldSwitch = true;
                        break;
                    }
                } else {
                    if ((sortOrder === 0 && Number(x) > Number(y)) ||
                        (sortOrder === 1 && Number(x) < Number(y))) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        
        // Toggle sorting order
        sortOrders[column] = 1 - sortOrder;
    }
</script>








<?php

    function createTable($data) {
        $html = '<table class="table align-middle table-hover mt-3" id="taskTable">
                    <thead>
                    <tr>
                        <th onclick="sortTable(0)" class="text-center">ID</th>
                        <th onclick="sortTable(1)" class="text-center">Task Name</th>
                        <th onclick="sortTable(2)" class="text-center">Creation Date</th>
                        <th onclick="sortTable(3)" class="text-center">Issue Date</th>
                        <th onclick="sortTable(4)" class="text-center">Priority</th>
                        <th onclick="sortTable(5)" class="text-center">%</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">';

        foreach ($data as $row) {
            $html .= '<tr>';
            $html .= '<td class="text-center">' . $row['id'] . '</td>';
            $html .= '<td>' . $row['taskName'] . '</td>';
            $html .= '<td class="text-center">' . $row['creationDate'] . '</td>';
            $html .= '<td class="text-center">' . $row['issueDate'] . '</td>';
            

            //<span class="badge rounded-pill text-bg-danger">1</span>

            // Map priority values to textual representation
            $priorityText = '';
            switch ($row['priority']) {
                case 1:
                    $priorityText = 'Low';
                    //$html .= '<td class="badge bg-danger">' . $priorityText . '</td>';*
                    $html .= '<td class="text-center"> <span class="badge bg-light text-dark">' . $priorityText . '</span></td>';
                    break;
                case 2:
                    $priorityText = 'Medium';
                    $html .= '<td class="text-center"> <span class="badge bg-warning text-dark">' . $priorityText . '</span></td>';
                    break;
                case 3:
                    $priorityText = 'High';
                    $html .= '<td class="text-center"> <span class="badge bg-danger">' . $priorityText . '</span></td>';
                    break;
                default:
                    $priorityText = 'Unknown';
                    $html .= '<td class="text-center"> <span class="badge bg-light text-dark">' . $priorityText . '</span></td>';
            }
            
            





            $html .= '<td class="text-center">' . $row['completionPercentage'] . '%</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody></table>';

        return $html;
    }

?>







<?php
    echo implode(' > ', $parentTexts);

    echo '<h5 class="mt-0 text-center">';
    echo $titleOfDocument;
    echo '</h5>';
?>



<div class="d-flex bd-highlight">
    <div class="ms-auto bd-highlight">Priority:
        <span class="badge rounded-pill text-bg-danger">1</span>
    </div>
</div>

<!--
<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Deadline</div>
    <div class="col-md-8 bd-highlight">20/03/2023</div>
</div>
-->

<!--
<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Version</div>
    <div class="col-md-8 bd-highlight">3</div>
</div>
-->


<!--
<div class="d-flex bd-highlight mt-3">
    <div class="col-md-12 bd-highlight">
        <label for="exampleFormControlTextarea1" class="form-label">Task description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">Description of the task. Any modification will create a new version !</textarea>
    </div>
</div>

-->



<?php

    echo createTable($_SESSION['datatTasks']);

?>




<div class="d-flex bd-highlight">
    <div class="col-md-2 bd-highlight">Last update</div>
    <div class="col-md-8 bd-highlight">18/03/2023 (Author of modification)</div>
</div>




<!--

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

-->


