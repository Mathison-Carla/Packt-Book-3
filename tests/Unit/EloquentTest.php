<?php


function flights() 

{ 
return $this->hasManyThrough(Flights::class, Time::class, Price::class, Location::class); 

};

?>

