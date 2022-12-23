<?php
interface computerObject
{
    public function render(): string;
    public function getCounter(): int;
}