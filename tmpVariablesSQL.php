<?php

 // Variables to define without SQL database






    $_SESSION['dataProject'] = array(
        array('id' => 1, 'text' => 'WEST', 'parent_id' => null, 'type' => 'project'),
            array('id' => 11, 'text' => 'Diagnostics', 'parent_id' => 1, 'type' => 'project'),
                array('id' => 111, 'text' => 'IR/Visibles', 'parent_id' => 11, 'type' => 'project'),
                array('id' => 112, 'text' => 'Bolométrie', 'parent_id' => 11, 'type' => 'project'),
                array('id' => 113, 'text' => 'Calorimétrie', 'parent_id' => 11, 'type' => 'project'),
                array('id' => 114, 'text' => 'Langmuir', 'parent_id' => 11, 'type' => 'project'),
                array('id' => 115, 'text' => 'Wall Monitoring', 'parent_id' => 11, 'type' => 'project'),
                array('id' => 116, 'text' => 'W supports', 'parent_id' => 11, 'type' => 'project-idea'),
            array('id' => 12, 'text' => 'PFC', 'parent_id' => 1, 'type' => 'project'),
                array('id' => 121, 'text' => 'Lower Divertor Targets', 'parent_id' => 12, 'type' => 'project'),
                array('id' => 122, 'text' => 'Upper Divertor Targets', 'parent_id' => 12, 'type' => 'project'),
                array('id' => 123, 'text' => 'Baffle', 'parent_id' => 12, 'type' => 'project'),
                array('id' => 124, 'text' => 'Inner Bumpers', 'parent_id' => 12, 'type' => 'project'),
                array('id' => 125, 'text' => 'Ripple/VDE Protections', 'parent_id' => 12, 'type' => 'project'),
                array('id' => 126, 'text' => 'Antennas Protections', 'parent_id' => 12, 'type' => 'project'),
            array('id' => 13, 'text' => 'Heating', 'parent_id' => 1, 'type' => 'project'),
                array('id' => 131, 'text' => 'Ion Cyclotron', 'parent_id' => 13, 'type' => 'project'),
                array('id' => 132, 'text' => 'Lower Hybrid', 'parent_id' => 13, 'type' => 'project'),
                array('id' => 133, 'text' => 'Electron Cyclotron', 'parent_id' => 13, 'type' => 'project'),
                    array('id' => 1331, 'text' => 'Guides d\'ondes', 'parent_id' => 133, 'type' => 'project'),
                    array('id' => 1332, 'text' => 'Antenne', 'parent_id' => 133, 'type' => 'project'),
                    array('id' => 1333, 'text' => 'Chassis supports', 'parent_id' => 133, 'type' => 'project'),
            array('id' => 14, 'text' => 'Fuelling / Pumping', 'parent_id' => 1, 'type' => 'project'),
                array('id' => 141, 'text' => 'Gas Injection', 'parent_id' => 14, 'type' => 'project'),
                array('id' => 142, 'text' => 'Supersonic Molecular Beam Injection', 'parent_id' => 14, 'type' => 'project'),
                array('id' => 143, 'text' => 'Pellet Injection', 'parent_id' => 14, 'type' => 'project'),
                array('id' => 144, 'text' => 'Massive Gas Injection', 'parent_id' => 14, 'type' => 'project'),
                array('id' => 145, 'text' => 'Pumping System', 'parent_id' => 14, 'type' => 'project'),
            array('id' => 15, 'text' => 'Magnétiques', 'parent_id' => 1, 'type' => 'project'),
                array('id' => 151, 'text' => 'Toroidal', 'parent_id' => 15, 'type' => 'project'),
                array('id' => 152, 'text' => 'Poloidal', 'parent_id' => 15, 'type' => 'project'),
                array('id' => 153, 'text' => 'Divertor', 'parent_id' => 15, 'type' => 'project'),
                array('id' => 154, 'text' => 'Stabilizing Structures', 'parent_id' => 15, 'type' => 'project'),

        array('id' => 2, 'text' => 'ITER', 'parent_id' => null, 'type' => 'project'),
            array('id' => 21, 'text' => 'GRT1146', 'parent_id' => 2, 'type' => 'project'),
            array('id' => 22, 'text' => 'SSA-84', 'parent_id' => 2, 'type' => 'project'),
            array('id' => 23, 'text' => 'SSA-88', 'parent_id' => 2, 'type' => 'project'),
            array('id' => 24, 'text' => 'SSA-90', 'parent_id' => 2, 'type' => 'project'),

        array('id' => 3, 'text' => 'JT-60SA', 'parent_id' => null, 'type' => 'project'),

        array('id' => 4, 'text' => 'W7X', 'parent_id' => null, 'type' => 'project'),


    );













    $_SESSION['datatTasks'] = array(
        array('id' => 1, 'taskName' => 'Design UI for Website', 'creationDate' => '2023-08-01', 'issueDate' => '2023-08-05', 'priority' => 3, 'completionPercentage' => 75),
        array('id' => 2, 'taskName' => 'Write Blog Post', 'creationDate' => '2023-08-02', 'issueDate' => '2023-08-07', 'priority' => 2, 'completionPercentage' => 50),
        array('id' => 3, 'taskName' => 'Test Application Features', 'creationDate' => '2023-08-03', 'issueDate' => '2023-08-10', 'priority' => 1, 'completionPercentage' => 25),
        array('id' => 4, 'taskName' => 'Fix Database Connection Bug', 'creationDate' => '2023-08-05', 'issueDate' => '2023-08-08', 'priority' => 3, 'completionPercentage' => 90),
        array('id' => 5, 'taskName' => 'Create Marketing Strategy', 'creationDate' => '2023-08-06', 'issueDate' => '2023-08-12', 'priority' => 2, 'completionPercentage' => 60),
        array('id' => 6, 'taskName' => 'Optimize Website Performance', 'creationDate' => '2023-08-08', 'issueDate' => '2023-08-15', 'priority' => 2, 'completionPercentage' => 80),
        array('id' => 7, 'taskName' => 'Develop New Feature', 'creationDate' => '2023-08-10', 'issueDate' => '2023-08-18', 'priority' => 3, 'completionPercentage' => 70),
        array('id' => 8, 'taskName' => 'Prepare Presentation', 'creationDate' => '2023-08-12', 'issueDate' => '2023-08-20', 'priority' => 1, 'completionPercentage' => 40),
        array('id' => 9, 'taskName' => 'QA and Testing', 'creationDate' => '2023-08-15', 'issueDate' => '2023-08-25', 'priority' => 2, 'completionPercentage' => 65),
        array('id' => 10, 'taskName' => 'Resolve Customer Support Tickets', 'creationDate' => '2023-08-18', 'issueDate' => '2023-08-28', 'priority' => 1, 'completionPercentage' => 30),
        array('id' => 11, 'taskName' => 'Update User Documentation', 'creationDate' => '2023-08-20', 'issueDate' => '2023-08-30', 'priority' => 2, 'completionPercentage' => 55),
        array('id' => 12, 'taskName' => 'Code Review and Refactoring', 'creationDate' => '2023-08-23', 'issueDate' => '2023-09-02', 'priority' => 3, 'completionPercentage' => 85)
    );

?>