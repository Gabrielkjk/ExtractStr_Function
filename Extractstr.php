<?php

/*****************************************/
/*       @Author Gabriel Kjk             */
/* Contact: contato.gabrielkjk@gmail.com */
/*           ExtractStr                  */
/*****************************************/

Function ExtractStr($string, $start, $end)
{

$str = explode($start, $string);
$str = explode($end, $str[1]);

return $str[0];

}
  #Call Curl , Chamada Do Curl 

  $ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'Url of Website'); // Url do Site

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Headers')); //Add Headers in Array, Adicione os Headers no Array

	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

	$Output = curl_exec($ch);

  // Calling the Function, Chamando a Função

  $Output_2 = ExtractStr($Output, '<input name="utf8" type="hidden" value="','">');
  
  // Como Utiliza-la

  // Dentro das Aspas Duplas ( " " ) do Value , Você Coloca as Aspas Simples ( ' ' ), e Dentro Das Aspas Simples você Coloca uma Vírgula.

  echo $Output_2; // Return the value of this input -> <input name="utf8" type="hidden" value="jaoao">/ Irá Retornar  ( jaoao ), que no caso é o Valor contido no Input.

  // How Use //

  // This is the Input -> <input name="utf8" type="hidden" value="jaoao">

  // In value of input, we added ( ',' ) the comma is the value of the input ..

  // The return of $Output_2 , will be 'jaoao';

  ?>