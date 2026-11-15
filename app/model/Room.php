<?php
    class Room{
        private $room_id;
        private $room_name;
        private $price_per_night;
        private $room_type;
        private $capacity;
        private $description;
        private $status;
        private $picture_support;


        // Constructor
        function __construct(){

        }

        // Getter
        function get_room_id(){
            return $room_id;
        }

        function get_room_name(){
            return $room_name;
        }

        function get_price_per_night(){
            return $price_per_night;
        }

        function get_room_type(){
            return $room_type;
        }

        function get_capacity(){
            return $capacity;
        }

        function get_description(){
            return $description;
        }

        function get_status(){
            return $status;
        }

        function get_picture_support(){
            return $picture_support;
        }


        // Setter
        function set_room_id($room_id){
            $this->room_id = $room_id;
        }

        function set_room_name($room_name){
            $this->room_name = $room_name;
        }

        function set_price_per_night($price_per_night){
            $this->price_per_night = $price_per_night;
        }

        function set_room_type($room_type){
            $this->room_type = $room_type;
        }

        function set_capacity($capacity){
            $this->capacity = $capacity;
        }

        function set_description($description){
            $this->description = $description;
        }

        function set_status($status){
            $this->status = $status;
        }

        function set_picture_support($picture_support){
            $this->picture_support = $picture_support;
        }
   }
?>