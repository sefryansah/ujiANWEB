<?php

class arrayCustomer {
   
public $array = [
[
'id' => 1,
'nama' => 'Maria',
'Alamat' => 'Berlin',
'Negara' => 'Jerman'
],
[
'id' => 2,
'nama' => 'Ana',
'Alamat' => 'Mexico',
'Negara' => 'Mexico'
],
[
'id' => 3,
'nama' => 'Antonio',
'Alamat' => 'Mexico',
'Negara' => 'Mexico'
],
[
'id' => 4,
'nama' => 'Thomas',
'Alamat' => 'London',
'Negara' => 'UK'
]
];

public function display(){
foreach ($this->array as $key => $value) {
echo 'ID: ' . $value['id'] . '<br>';
echo 'Nama: ' . $value['nama'] . '<br>';
echo 'Alamat: ' . $value['Alamat'] . '<br>';
echo 'Negara: ' . $value['Negara'];
echo '<hr>';
}
}
}
$arrayCustomer = new arrayCustomer();
echo $arrayCustomer->display();

