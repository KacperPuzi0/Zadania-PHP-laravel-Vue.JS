<?php
/*Interfejs użytkownika zawiera dwa rodzaje kontrolek wprowadzania danych: TextInput, który
akceptuje wszystkie teksty oraz NumericInput, który akceptuje tylko cyfry.
Zaimplementuj klasę TextInput, która zawiera:
Metodę publiczną add($text) - dodającą podany tekst do bieżącej wartości.
Metodę publiczną getValue() - zwracającą bieżącą wartość (string).
Zaimplementuj klasę NumericInput, która: Dziedziczy po TextInput. Przedefiniowuje metodę add tak,
aby każdy tekst nienumeryczny był ignorowany*/



class TextInput {
	public function add($text) {
		
	}
	public function getValue() {

	}
}

class NumericInput extends TextInput {

}


?>