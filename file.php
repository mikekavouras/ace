<?php
namespace Acme\Cyclist;
use Acme\Swimmer\Swimmer;
class Cyclist extends Swimmer
{
    public function __construct(string $name, string $wetsuit, string $bicycle)
    {
        parent::__construct($name, $wetsuit);
        $this->bicycle($bicycle);
    }
    public function bicycle(string $bicycle = null): string
    {
        return is_null($bicycle) ? $this->bicycle : $this->bicycle = $bicycle;
    }
    public function ride(): string
    {
        return "{$this->name()} is riding on {$this->bicycle()}";
    }
}
?>
