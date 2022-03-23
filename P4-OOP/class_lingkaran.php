<?php 
class Lingkaran {
    private $r;
    const PHI = 3.14;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getLuas() {
        return self::PHI * $this->r * $this->r;
    }

    public function getKeliling() {
        return 2 * self::PHI * $this->r;
    }
}
?>