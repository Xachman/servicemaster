<?php
namespace App;

class Settings implements ISettings {
    private $json;
    public function __construct($jsonString) {
        $this->json = json_decode($jsonString);
    }
    public function businessName(): string {
        return $this->json->business->name;
    }
    public function businessAddress(): string {
        return $this->json->business->address;
    }
    public function businessCity(): string {
        return $this->json->business->city;
    }
    public function businessState(): string {
        return $this->json->business->state;
    }
}
