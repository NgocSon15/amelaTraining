<?php 
class StopWatch {
	private $startTime;
	private $endTime;

	public function getStartTime() {
		return $this->startTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setStartTime() {
		$this->startTime = microtime(true);
	}

	public function start() {
		$this->startTime = microtime(true);
	}

	public function stop() {
		$this->endTime = microtime(true);
	}

	public function getElapsedTime() {
		$elapsedTime = $this->getEndTime() - $this->getStartTime();
		return $elapsedTime;
	}
}
?>