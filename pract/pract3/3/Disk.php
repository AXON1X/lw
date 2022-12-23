<?php
require_once 'Interface.php';
class Disk implements computerObject
{
    public array $elements = [];
    protected string $diskName;
    public int $counter;

    public function __construct(string $enteredDiskName)
    {
        $this->diskName = $enteredDiskName;
    }
    public function render(): string
    {
        $this->counter = 0;
        $disk = $this->diskName . ":(";
        foreach ($this->elements as $element) {
            $disk .= $element->render();
            $this->counter++;
        }
        $disk .= ")";
        return $disk;
    }
    public function addElement(computerObject $element)
    {
        if (!($element instanceof Directory)) {

            $this->elements[] = $element;
        }
    }
    public function getCounter(): int
    {
        $counter = 0;
        foreach ($this->elements as $element) {
            $counter = $element->getCounter() + $counter;
        }
        return $counter;
    }
    public function getName()
    {
        return $this->diskName;
    }
}