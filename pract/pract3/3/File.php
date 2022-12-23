<?php
require_once 'Interface.php';
class File implements computerObject
{
    protected string $fileName;

    public function __construct(string $enteredFileName)
    {
        $this->fileName = $enteredFileName;
    }
    public function render(): string
    {
        return "$this->fileName ";
    }
    public function getCounter(): int
    {
        return 1;
    }
}