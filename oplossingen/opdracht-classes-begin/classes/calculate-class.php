<?php
	class Percent{
			public $relative;
			public $hundred;
			public $nominal;

			public function __construct($num, $unit){
				$this->relative = $num/$unit;
				$this->hundred = $this->relative * 100;

				$this->formatNumber($this->relative);
				$this->formatNumber($this->hundred);

				if($this->relative > 1){
					$this->nominal = 'positive';
				} elseif ($this->relative == 1){
					$this->nominal = 'equilibrium';
				} else {
					$this->nominal = 'negative';
				}
			}

			public function formatNumber($number){
				return floatval(number_format($number, 2, '.',''));
			}
	}