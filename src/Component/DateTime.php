<?php

namespace App\Component;

class DateTime {

    public function display(string $chain) {

        $date = new \DateTime($chain);
        return $date;

    }

}