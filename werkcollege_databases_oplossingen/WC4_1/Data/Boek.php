<?php
class Boek {
    public $boekId;
    public $titel;
    public $uitgavedatum;
    public $prijsExclBtw;
    public $emailUitgeverij;

    public function __construct($boekId, $titel, $uitgavedatum, $prijsExclBtw, $emailUitgeverij) {
        $this->boekId = $boekId;
        $this->titel = $titel;
        $this->uitgavedatum = $uitgavedatum;
        $this->prijsExclBtw = $prijsExclBtw;
        $this->emailUitgeverij = $emailUitgeverij;
    }

    //Extra functionaliteit kan je hier schrijven
}
