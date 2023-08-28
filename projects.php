<?php 
    session_start();
    include "checkSession.php";
    
?>



<?php

// <i class="bi bi-star"></i>
// <i class="bi bi-clipboard"></i>
// <i class="bi bi-gear"></i>
// <i class="bi bi-hammer"></i>
// <i class="bi bi-receipt"></i>
// <i class="bi bi-stack"></i>
// <i class="bi bi-wrench"></i>
// <i class="bi bi-rulers"></i>

    function generateTree($data, $parentId = null, $level = 0) {
        $output = '<ul class="level-' . $level . '">'; // Add class based on level
        
        foreach ($data as $item) {
            if ($item['parent_id'] === $parentId) {

                
                $output .= '<li>';
                $output .= '<input type="checkbox" id="' . $item['id'] . '">';

                if ($item['type'] == 'project' || $item['type'] == 'project') {
                    $output .= '<label class="labelCheckBoxProject" for="' . $item['id'] . '"><a href="projects.php?p=' . $item['id'];
                } else {
                    $output .= '<label class="" for="' . $item['id'] . '"><a href="projects.php?p=' . $item['id'];
                }

                

                if ($item['type'] == 'project') {
                    $output .= '" class="icon-blue bi bi-stack">';

                } elseif ($item['type'] == 'project-idea') {
                    $output .= '" class="icon-blue bi bi-stars">';

                } elseif ($item['type'] == 'sheet-roles') {
                    $output .= '" class="icon-red bi bi-people-fill">';

                } elseif ($item['type'] == 'sheet-besoin-etude-interne') {
                    $output .= '" class="icon-red bi bi-rulers">';

                } elseif ($item['type'] == 'sheet-besoin-etude-os') {
                    $output .= '" class="icon-red bi bi-rulers">';

                } elseif ($item['type'] == 'sheet-besoin-etude-externe') {
                    $output .= '" class="icon-red bi bi-rulers">';

                } elseif ($item['type'] == 'sheet-besoin-calcul-interne') {
                    $output .= '" class="icon-red bi bi-gear">';

                } elseif ($item['type'] == 'sheet-besoin-calcul-externe') {
                    $output .= '" class="icon-red bi bi-gear">';

                } elseif ($item['type'] == 'sheet-lot-atelier') {
                    $output .= '" class="icon-red bi bi-hammer">';

                } elseif ($item['type'] == 'sheet-lot-industrie') {
                    $output .= '" class="icon-red bi bi-hammer">';

                } elseif ($item['type'] == 'sheet-commande') {
                    $output .= '" class="icon-red bi bi-layout-text-sidebar-reverse">';

                } elseif ($item['type'] == 'sheet-fabrication') {
                    $output .= '" class="icon-red bi bi-hammer">';

                } elseif ($item['type'] == 'sheet-etude') {
                    $output .= '" class="icon-red bi bi-rulers">';

                } elseif ($item['type'] == 'sheet-calcul') {
                    $output .= '" class="icon-red bi bi-gear">';

                } elseif ($item['type'] == 'sheet-reception-fabrication') {
                    $output .= '" class="icon-red bi bi-journal-arrow-down">';

                } elseif ($item['type'] == 'sheet-reception-etude') {
                    $output .= '" class="icon-red bi bi-journal-arrow-down">';

                } elseif ($item['type'] == 'sheet-reception-calcul') {
                    $output .= '" class="icon-red bi bi-journal-arrow-down">';

                } elseif ($item['type'] == 'sheet-intervention') {
                    $output .= '" class="icon-red bi bi-person-badge">';

                } elseif ($item['type'] == 'sheet-derogation') {
                    $output .= '" class="icon-red bi bi-exclamation-octagon">';

                } else  {
                    $output .= '" class="icon-project">';
                }

                
                $output .= $item['text'] . '</a></label>'; // Add icon class
                $output .= generateTree($data, $item['id'], $level + 1); // Pass level to recursive call
                $output .= '</li>';
            }
        }
        
        $output .= '</ul>';
        
        return $output;
    }



     // Get last id of the dataProject array
     function getLastId($array) {
        $maxID = 0;
        foreach ($array as $item) {
            if (intval($item['id']) > $maxID) { $maxID = intval($item['id']);}
        }
        return $maxID;
    }


    function findParentIDs($data, $elementId) {
        $parentIDs = array();
        
        $currentItem = findItemByID($data, $elementId);
        while ($currentItem !== null) {
            $parentIDs[] = $currentItem['id'];
            $currentItem = findItemByID($data, $currentItem['parent_id']);
        }
        
        return array_reverse($parentIDs);
    }

    function findParentTexts($data, $elementId) {
        $parentTexts = array();
        
        $currentItem = findItemByID($data, $elementId);
        while ($currentItem !== null) {
            $parentTexts[] = $currentItem['text'];
            $currentItem = findItemByID($data, $currentItem['parent_id']);
        }
        
        return array_reverse($parentTexts);
    }

    function findItemByID($data, $elementId) {
        foreach ($data as $item) {
            if ($item['id'] === $elementId) {
                return $item;
            }
        }
        return null;
    }



    // Get the whole hierarchy of the selected element
    if (isset($_GET['p'])) {
        $elementId = intval($_GET['p']);
    } else {
        $elementId = 0;
    }


    $parentIDs = findParentIDs($_SESSION['dataProject'], $elementId);
    $parentTexts = findParentTexts($_SESSION['dataProject'], $elementId);









    if (isset($_GET['action']) && $_GET['action'] == 'createItem') {
            
        if (isset($_GET['itemToAddIndex'])) {
            //print_r($_GET);
            $newID = getLastId($_SESSION['dataProject']) + 1;


//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Définition Besoin Etudes Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-interne'));
//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Définition Besoin Etudes OS', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-os'));
//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Définition Besoin Etudes Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-externe'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Définition Besoin Calcul Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-calcul-interne'));
//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Définition Besoin Calcul Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-calcul-externe'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Lot Atelier', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-atelier'));
//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Lot Industrie', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-industrie'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-fabrication'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-etude'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-calcul'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Réception Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-fabrication'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Réception Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-etude'));
//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Réception Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-calcul'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Intervention sur site', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-intervention'));

//array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Dérogation / Non conformité', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-derogation'));



            if ($_GET['itemToAddIndex'] == 1) { // subproject
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'subproject', 'parent_id' => intval($_GET['p']), 'type' => 'project'));

            } elseif ($_GET['itemToAddIndex'] == 2  ) { // Fabrication Atelier
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Lot Atelier', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-atelier'));

            } elseif ($_GET['itemToAddIndex'] == 3  ) { // Fabrication Industrie
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Lot Industrie', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-industrie'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-fabrication'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Réception Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-fabrication'));

            } elseif ($_GET['itemToAddIndex'] == 4  ) { // Fabrication sur OS
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Lot Industrie', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-industrie'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-fabrication'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Réception Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-fabrication'));

            } elseif ($_GET['itemToAddIndex'] == 5  ) { // Achats (fournitures)
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));

            } elseif ($_GET['itemToAddIndex'] == 6  ) { // Etude et Réalisation
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));

            } elseif ($_GET['itemToAddIndex'] == 7  ) { // Etude Interne
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Etudes Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-interne'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-etude'));

            } elseif ($_GET['itemToAddIndex'] == 8  ) { // Etude sur OS
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Etudes OS', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-os'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-etude'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Réception Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-etude'));


            } elseif ($_GET['itemToAddIndex'] == 9  ) { // Extude Externe
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Etudes Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-externe'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-etude'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Réception Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-etude'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+5, 'text' => 'Réception Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-calcul'));


            } elseif ($_GET['itemToAddIndex'] == 10  ) { // Calcul Interne
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Calcul Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-calcul-interne'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-calcul'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Réception Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-calcul'));

            } elseif ($_GET['itemToAddIndex'] == 11  ) { // Calcul Externe
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Etudes Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-externe'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-calcul'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Réception Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-calcul'));

            } elseif ($_GET['itemToAddIndex'] == 98  ) { // All sheets
                array_push($_SESSION['dataProject'], array('id' => intval($newID), 'text' => 'Rôles', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-roles'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+1, 'text' => 'Définition Besoin Etudes Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-interne'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+2, 'text' => 'Définition Besoin Etudes OS', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-os'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+3, 'text' => 'Définition Besoin Etudes Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-etude-externe'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+4, 'text' => 'Définition Besoin Calcul Interne', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-calcul-interne'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+5, 'text' => 'Définition Besoin Calcul Externe', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-besoin-calcul-externe'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+6, 'text' => 'Lot Atelier', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-atelier'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+7, 'text' => 'Lot Industrie', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-lot-industrie'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+8, 'text' => 'Commande', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-commande'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+9, 'text' => 'Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-fabrication'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+10, 'text' => 'Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-etude'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+11, 'text' => 'Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-calcul'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+12, 'text' => 'Réception Fabrication', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-fabrication'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+13, 'text' => 'Réception Etude', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-etude'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+14, 'text' => 'Réception Calcul', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-reception-calcul'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+15, 'text' => 'Intervention sur site', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-intervention'));
                array_push($_SESSION['dataProject'], array('id' => intval($newID)+16, 'text' => 'Dérogation / Non conformité', 'parent_id' => intval($_GET['p']), 'type' => 'sheet-derogation'));


            } elseif ($_GET['itemToAddIndex'] == 99  ) { // reset project list
                include "tmpVariablesSQL.php";
            }

        }
    }



/*
                                <option value="2">Fabrication Atelier</option>
                                <option value="3">Fabrication Industrie</option>
                                <option value="4">Fabrication sur OS</option>
                                <option value="5">Achats (fournitures)</option>
                                <option value="6">Etude et Réalisation</option>
                                <option value="7">Etude Interne</option>
                                <option value="8">Etude sur OS</option>
                                <option value="9">Etude Externe</option>
                                <option value="10">Calcul Interne</option>
                                <option value="11">Calcul Externe</option>
*/









?>



<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "stylesheets.php"; ?>
        

        <title>Projets</title>
        
        <style>
            .icon-blue:before {margin-right: <?php echo $_SESSION['projectsIconMarginRight']; ?>px; color:blue}
            .icon-red:before {margin-right: <?php echo $_SESSION['projectsIconMarginRight']; ?>px; color:red}
            .icon-green:before {margin-right: <?php echo $_SESSION['projectsIconMarginRight']; ?>px; color:green}


            ul.level-0 {
                /*padding-top: 10px;*/
            }

            main ul {
                font-size: <?php echo $_SESSION['projectsListFontSize']; ?>px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: false;
                list-style-type: none;
                padding-left: 0px;
                
                
            }
            
            main li {
                position: relative;
                
            }
            
            
            main input[type="checkbox"] {
                display: none;
            }
            
            main label.labelCheckBoxProject {
                cursor: pointer;
                display: block;
                position: relative;
                padding-left: 10px;
            }
            
            main label.labelCheckBoxProject:before {
                content: "▶";
                position: absolute;
                left: -10px;
            }
            
            main input[type="checkbox"]:checked + label.labelCheckBoxProject:before {
                content: "▼";
            }
            
            main ul ul {
                display: none;
                padding-left: 20px;
            }
            
            main input[type="checkbox"]:checked ~ ul {
                display: block;
            }
            
            main a {
                text-decoration: none;
                color: #333;
            }

            .selected {
                background-color: red; /* You can adjust the background color */
            }

        </style>




<script>
    
    
    const urlParams = new URLSearchParams(window.location.search);
    const pParam = urlParams.get('p');

    console.log(pParam);


    function toggleTree() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = !checkbox.checked;
        });
    }
  
  function expandElement(elementClass) {
    const element = document.querySelector('.' + elementClass);
    if (element) {
      const checkboxes = element.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(checkbox => {
        checkbox.checked = true;
      });
    }
  }
  
  function collapseElement(elementClass) {
    const element = document.querySelector('.' + elementClass);
    if (element) {
      const checkboxes = element.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
    }
  }
  
  function expandUpToElement(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        const parents = [];
        let current = element.closest('li');
        
        while (current) {
            const checkbox = current.querySelector('input[type="checkbox"]');
            if (checkbox) {
                checkbox.checked = true;
            }
            current = current.closest('ul').parentNode.closest('li');
        }

        // Add a class to highlight the selected element
        element.classList.add('selected');
    }
}


  
  function collapseUpToElement(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
      const parents = [];
      let current = element.closest('li');
      
      while (current) {
        const checkbox = current.querySelector('input[type="checkbox"]');
        if (checkbox) {
          checkbox.checked = false;
        }
        current = current.closest('ul').parentNode.closest('li');
      }
    }
  }













</script>



    </head>


    <body>



    <?php
        include "navbar.php";
    ?>









    <main id="main-content">

        <div class="container-fluid  <?php echo $_SESSION['globalPaddingTopAfterNav']; ?>">
            <div class="row align-items-start">

                <div class="d-inline-block col-lg-4 border overflow-auto">
                    
                <!-- <button class="toggle-button" onclick="toggleTree()">Toggle Collapse/Expand</button> -->
                
                    <?php
                        echo generateTree($_SESSION['dataProject']);
                    ?>
                    
                    <form action="projects.php" method="get">
                        <div class="input-group mb-3 ">
                            <select name="itemToAddIndex" class="form-select " id="inputGroupSelect01">
                                <option value="" selected disabled hidden>Choose here</option>

                                <option value="1">Sous-project</option>
                                <option value="0">---------------------</option>

                                <option value="2">Fabrication Atelier</option>
                                <option value="3">Fabrication Industrie</option>
                                <option value="4">Fabrication sur OS</option>
                                <option value="5">Achats (fournitures)</option>
                                <option value="6">Etude et Réalisation</option>
                                <option value="7">Etude Interne</option>
                                <option value="8">Etude sur OS</option>
                                <option value="9">Etude Externe</option>
                                <option value="10">Calcul Interne</option>
                                <option value="11">Calcul Externe</option>
                                
                                <option value="0">---------------------</option>

                                <option value="98">All Sheets</option>

                                <option value="0">---------------------</option>

                                <option value="99">----- Reset Project List -----</option>
                            </select>
                            
                            <div class="input-group-prepend">
                                <button name="action" value="createItem" class="btn btn-outline-secondary" type="submit">Create</button>
                            </div>
                        
                            <input id="txtParameterP" type="text" name="p" value="<?php if (isset($_GET['p'])) {echo $_GET['p'];} else {echo '0';}; ?>" hidden>
                        </div>
                    </form>



                </div>



                <?php
                    $typeOfDocument = '';

                    if (isset($_GET['p'])) {

                        foreach ($_SESSION['dataProject'] as $row) {
                            if ($row['id'] == $_GET['p']) {
                                $typeOfDocument = $row['type'];
                                $idOfDocument = $row['id'];
                                $titleOfDocument = $row['text'];
                                break;
                            }
                        }
                    } else {
                        //echo ($data[1 - 1]['type']);
                    }

                    //echo $typeOfDocument;

                ?>



                <div class="col border overflow-auto">
                    <?php

                        if(strpos($typeOfDocument, "sheet") !== false){
                            //echo "Found! " . $typeOfDocument;
                            include "sheetHeaders.php";
                        } else {
                            include "sheetProject.php";
                        }
                        
                        /*
                        if ($typeOfDocument == 'sheet-studies') {
                            include "sheetStudies.php";
                        } elseif ($typeOfDocument == 'sheet-analysis') {
                            include "sheetAnalysis.php";
                        } elseif ($typeOfDocument == 'sheet-manufacturing') {
                            include "sheetManufacturing.php";
                        } elseif ($typeOfDocument == 'project' || $typeOfDocument == 'project-idea') {
                            
                        } else {
                            echo '<h5 class="mt-0">New Document</h5>';
                        }
                        */
                    ?>

                </div>

            </div>
        </div>

            
   

    </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <script>

            // Use the 'p' parameter value to expand the specified element
            if (pParam) {
                expandUpToElement(pParam);
            }

        </script>


    </body>

</html>