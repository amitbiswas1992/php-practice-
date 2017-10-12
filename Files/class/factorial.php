<?php

function factorial($fact){
if($fact==1){
return 1;

}
else{
return $fact*factorial($fact-1);

}

}
echo factorial(5);
