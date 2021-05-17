<?php

class Passport {
	public static $day;
	public static $month;
	public static $year;
	public static $name;
	public static $surname;
	public static $serial1 = 'A';
	public static $serial2 = 'B';
	public static $serialNumber = 0;
	
	static public function issueID() {
			
		echo "Enter birth day: " . PHP_EOL;
		$day = (int) fgets(STDIN);
		echo "Enter birth month: " . PHP_EOL;
		$month = (int) fgets(STDIN);
		
		if (($month==4 || $month==6 || $month==9 || $month==12) && $day>30 ) {
			} else if (($month==1 || $month==3 || $month==5 || $month==7 || $month==8 || $month==10 || $month==12) && $day>31) {
				echo "Not valid date" . PHP_EOL;
				return;
			}
		
		
		echo "Enter birth year: " . PHP_EOL;
		$year = (int) fgets(STDIN);
		
		if (($month==2 && $day>29) || (($month==2 && $day>28) && ($year % 4 != 0))){	
				echo "Not valid date" . PHP_EOL;
				return;
			}
		printf("Date is: %2d,%02d,%0000d\n", $day,$month,$year) . PHP_EOL;
		
		
		echo "Enter name: ";
		$name = rtrim(fgets(STDIN));
		echo "Enter surname: ";
		$surname = rtrim(fgets(STDIN));
		
		echo "Would you like to issue new serials?: for No=push '1' and for Yes = push '2'" . PHP_EOL;
		$temp = (int) fgets(STDIN);
		
		switch ($temp) {
				case 1:
					if (self::$serialNumber < 999999) {
						self::$serialNumber += 1;
					} else if(ord($serial2) == ord('Z') && ord($serial1) != ord('Z')) {
						Passport::$serial1 += 1;
						Passport::$serial2 += ord('A');
						self::$serialNumber = 1;
					} else {
						echo "Serial numbers finished, enter new here: " . PHP_EOL;
					}
					break;
				case 2:
					echo "enter new serials here(symbol-> push enter-> symbol-> push enter): " . PHP_EOL;
					Passport::$serial1 = rtrim(fgets(STDIN));
					Passport::$serial2 = rtrim(fgets(STDIN));
					echo "enter new starting serial Number here:" . PHP_EOL;
					self::$serialNumber = rtrim(fgets(STDIN));
					break;
				default:
					echo "wrong choice, try over again" . PHP_EOL;
					return;
			}
			
		printf("Name: %s %s\n",$name,$surname) . PHP_EOL;
		printf("Birth Date: %02d,%02d,%04d\n", $day,$month,$year) . PHP_EOL;
		echo "Passport# : " . strval(Passport::$serial1) . strval(Passport::$serial2) . "-";
		printf("%06d", self::$serialNumber) . PHP_EOL;
		
	}
	
}
	
	$a = new Passport();
	$a->issueID();

?>
