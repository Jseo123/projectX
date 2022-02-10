<?php

class adminNewRestaurantModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function addRestaurant($data){
        try {
            $query = $this->db->connect()->prepare(
                "INSERT INTO restaurants (first_name, last_name, restaurant_name, adress, phone, card_number, cvc, expiration_date, email, user, password, notes) VALUES (:first_name, :last_name, :restaurant_name, :adress, :phone, :card_number, :cvc, :expiration_date, :email, :user, :password, :notes)"
            );
            $query->execute(["first_name" => $data["first_name"], "last_name" => $data["last_name"], "restaurant_name" => $data["restaurant_name"], "adress" => $data["adress"], "phone" => $data["phone"], "card_number" => $data["card_number"], "cvc" => $data["cvc"], "expiration_date" => $data["expiration_date"], "email" => $data["email"] , "user" => $data["user"] , "password" => $data["password"] , "notes" => $data["notes"]]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
}
}