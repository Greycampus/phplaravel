<?php

echo "Enter percentage of the student:";
$per=trim(fgets(STDIN, 1024));
if($per>85)
	echo "Grade is A\n";
elseif($per<=85 && $per>80)
	echo "Grade is A-\n";
elseif($per<=80 && $per>70)
	echo "Grade is B\n";
elseif($per<=70 && $per>60)
	echo "Grade is C\n";
elseif($per<=60 && $per>40)
	echo "Grade is D\n";
elseif($per<=40 && $per>35)
	echo "Grade is E\n";
else
	echo "Student failed\n";

?>