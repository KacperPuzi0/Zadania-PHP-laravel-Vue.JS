<?php
class TextInput
{
	protected $value = '';

	public function add($text)
	{
		$this->value .= $text;
	}

	public function getValue()
	{
		return $this->value;
	}
}
class NumericInput extends TextInput
{
	public function add($text)
	{
		if (is_numeric($text)) {
			$this->value .= $text;
		}
	}
}
$input = new TextInput();
$input->add("Dzień Dobry PHP");
echo $input->getValue();

$input2 = new NumericInput();
$input2->add('12345');
echo $input2->getValue();
?>