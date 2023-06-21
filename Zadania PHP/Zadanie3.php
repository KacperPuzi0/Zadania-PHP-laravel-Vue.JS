<?php
class RankingTable
{

	private $players = array();

	public function __construct($playerNames)
	{
		foreach ($playerNames as $name) {
			$this->players[$name] = array('score' => 0, 'gamesPlayed' => 0);
		}
	}
	public function recordResult($playerName, $score)
	{
		$this->players[$playerName]['score'] += $score;
		$this->players[$playerName]['gamesPlayed']++;
	}
	public function playerRank($rank)
	{
		$sortedPlayers = $this->players;
		arsort($sortedPlayers);

		$rankedPlayers = array_keys($sortedPlayers);
		return $rankedPlayers[$rank - 1];
	}

}

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(2)
?>