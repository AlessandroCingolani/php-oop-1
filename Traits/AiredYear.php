<?php

trait AiredYear
{
  public $year;


  public function getYear()
  {
    // error per anno di pubblicazione
    if ($this->year > 1800 && $this->year <= date("Y")) {
      return $this->year;
    } else {
      return throw new Exception('Inserire anno pubblicazione veritiero');
    }
  }
}
