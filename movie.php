<?php

class Movie{
  public $titolo;
  public $data_uscita;
  public $costi;
  public $scritto_da;
  public $diretto_da;
  public $calcolo_prezzo;
  private $elevazione = 0;
  public $premi = array();
  static $K = 0; // contatore di istanze

  public function __construct($_titolo,$_data_uscita,$_costi,$_scritto_da,$_diretto_da)
  {
    $this->titolo = $_titolo;
    $this->data_uscita = $_data_uscita;
    $this->costi = $_costi;
    $this->scritto_da = $_scritto_da;
    $this->diretto_da = $_diretto_da;
    $this->setPrezzo();
  }

  public function setPrezzo(){
    $this->elevazione  = strlen((string)$this->costi);
    $this->calcolo_prezzo = $this->costi / pow(10, $this->elevazione);
  }
}
