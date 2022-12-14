<?php
$dirUser='../data/users.json';
$repo=array();
$find='pro';
$dirAd='../data/activeDirectory.json';
if(file_exists($dirAd))
{
  $data=json_decode(file_get_contents($dirAd),true);
  if(array_key_exists('01969897555',$data))
  {
    echo 'exist';
   $d=  $data['01969897555'];
   echo $d['username'];
  }
  else{
    echo 'nt exist';
  }
}
// if(file_exists($dirUser)){
   
//     $data=json_decode(file_get_contents('../data/users.json'));
//     // $repo['ukl']=array(
//     //     'nak'=>'als'
//     // );
//    // $data.array_push($repo);
//  if( array_key_exists('pro',$data)){
    
//      $sg=(array)$data;
//     // $rep=array(
//     //     'nm'=>'yo'
//     // );
//     // $sg['ash']=$rep;
//   //  print_r($sg);
//    // $js=json_encode($sg,JSON_PRETTY_PRINT);
//   // file_put_contents('../data/users.json',$js);
//    if( array_key_exists('ash',$sg))
//    {
//      echo  $sg['ash']->nm;
//    }
   

//  }
//  else{
//     echo 'nt exist';
//     $repo['n']=array(
//         'hk'=>'hjbhj'
//     );
//   //  file_put_contents('../data/users.json',$repo);
//  }


// foreach($data as $ds=>$d)
// {
//    // echo $ds;
// //     if($ds[$find]!=null)
// // {
// //     echo 'data exist';
// // }
// // else{
// //     echo 'data doesnt exist';
// // }
// }
// }
// else{
//     $repo[$find]=array(
//         'nm'=>'yo'
//     );
//     if(file_put_contents($dirUser,json_encode($repo,JSON_PRETTY_PRINT)))
//     {
//         echo 'saved';
//     }


// }


?>