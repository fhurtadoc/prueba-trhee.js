<?php
  include_once("../model/server.php");

$newService=new Services();
if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        
        case "categorys":            
                $query="SELECT * FROM category";
                $listCategory=$newService->select($isql);
                echo json_encode($listService); 
                break;         
        case "teams_category":
                $category=$_POST['id_category'];
                $query_id_category=
                "SELECT t.name, t.logo, c.name as CategoryName,  c.description  FROM categoty_teams ct
                INNER JOIN teams t on ct.id=t.id
                INNER JOIN category c on ct.id=t.id
                WHERE ct.id=$category                ";
                $listcatefory_teams=$newService->select($isql);
                echo json_encode($listService); 
                break;

        case "games_teams":
            
            break;

        case "tables":
            
            break;
    }
}