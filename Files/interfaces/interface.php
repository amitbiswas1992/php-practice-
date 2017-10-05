<?php 
interface TableInterface{

	public function save(array $data);

}

interface logInterface{

	public function log($messege);
}

class Table implements TableInterface, logInterface{

  public  function save(array $data){

    return 'foo';
   }

public function log($messege){

	return $messege . "\n";
}


}

echo (new Table())->save([]);
echo (new Table())->log("Interfaces are awesome ");