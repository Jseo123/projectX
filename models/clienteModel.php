<?php

include_once "models/restaurant.php";
class clienteModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getRestaurantInfo($id)
    {
        $item = new Restaurant();
        $query = $this->db->connect()->prepare("SELECT*FROM restaurants WHERE id=:id");
        try {
            $query->execute(["id" => $id]);
            while ($row = $query->fetch()) {
                $item->id = $row["id"];
                $item->adress = $row["adress"];
                $item->card_number = $row["card_number"];
                $item->creation_date = $row["creation_date"];
                $item->cvc = $row["cvc"];
                $item->email = $row["email"];
                $item->expiration_date = $row["expiration_date"];
                $item->first_name = $row["first_name"];
                $item->last_name = $row["last_name"];
                $item->notes = $row["notes"];
                $item->phone = $row["phone"];
                $item->restaurant_name = $row["restaurant_name"];
                $item->user = $row["user"];


                
            }

            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }


}
