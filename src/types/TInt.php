<?php

	namespace Traineratwot\PhpCli\types;

	use Traineratwot\PhpCli\Type;

	class TInt extends Type
	{
		public static $shotName = 'int';

		public function validate($value)
		{
			return is_numeric($value) && is_int(+$value) ? TRUE : 'Invalid integer "' . $value . '"';
		}

		public function get()
		{
			return (int)parent::get(); // TODO: Change the autogenerated stub
		}
	}