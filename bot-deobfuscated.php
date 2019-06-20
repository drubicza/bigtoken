<?php
date_default_timezone_set('Asia/Jakarta');
system("clear");

$t="\n";
$r="\t";
//warna
$br="\033[1;34m";
$tr="\033[1;36m";
$ijo="\033[92m";
$pth="\033[1;37m";
$pnk="\033[1;35m";
$red="\033[1;31m";
$kn="\033[1;33m";
$info="bigtoken";

#projek new
function defaul ($path,$post) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="accept: application/json";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: okhttp/3.14.0";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_VERBOSE => false,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function token ($url) {
  $h[]="upgrade-insecure-requests: 1";
  $h[]="user-agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0";
  $h[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HEADER => true,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_PROXYUSERPWD => $proxyauth,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function gets ($path,$token) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="x-srax-big-api-version: 2";
  $h[]="accept: application/json";
  $h[]="authorization: Bearer $token";
  $h[]="user-agent: okhttp/3.14.0";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_PROXYUSERPWD => $proxyauth,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function post ($path,$post,$token) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="x-srax-big-api-version: 2";
  $h[]="accept: application/json";
  $h[]="authorization: Bearer $token";
  $h[]="content-type: application/json; charset=utf-8";
  $h[]="user-agent: okhttp/3.14.0";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_PROXYUSERPWD => $proxyauth,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function poto ($path,$post,$token) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="x-srax-big-api-version: 2";
  $h[]="accept: application/json";
  $h[]="authorization: Bearer $token";
  $h[]="user-agent: okhttp/3.14.0";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_PROXYUSERPWD => $proxyauth,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function verif ($path,$post,$refer) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="accept: application/json";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: okhttp/3.14.0";
  #$h[]="referer: $refer";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_VERBOSE => true,
      CURLOPT_SSL_VERIFYPEER => true,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function path ($path,$token,$post) {
  $url="https://api.bigtoken.com/$path";
  $h[]="Host: api.bigtoken.com";
  $h[]="accept: application/json";
  $h[]="authorization: Bearer $token";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: okhttp/3.14.0";
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $url,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_CUSTOMREQUEST => "PATCH",
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => $h,
      CURLOPT_PROXY => $proxy,
      CURLOPT_PROXYUSERPWD => $proxyauth,
      CURLOPT_SSL_VERIFYPEER => 0,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function clr($clr){
  system("clear");
  echo $clr;
  sleep(3);
}

function cr(){
  @system("rm -rf user");
}

$cfg="config.json";
/* parameter*/
$facc=false;
$verif=false;

@system("rm -rf user");
@system("git clone https://github.com/hidensystem/user");
@system('clear');

error_reporting(0);
require __DIR__ ."/user/setting.php";

$clr=$big.$t.$ads.$t.$warn.$t.$msg_big.$t;

clr($clr);

while(true):
  $login=false;
  $input=false;

  if(file_exists($cfg)){
    echo $ijo."[•]=[ config detected".$t;
    $js=json_decode(file_get_contents($cfg),true);

    foreach($js as $key => $val){
      echo $br."[$key]=[ ".$pth.$val.$t;}
      $email=$js["email"];$pass=$js["password"];
      echo $ijo."[1]=[ edit config ] |=|".$tr." [enter]=[ skip ]".$t.$pth;
      $n=readline("[input]=[ ");

      if($n==1){
        $input=true;clr($clr);
      }else{
        $login=true;
      }
  }else{
    $input=true;
  }

  if($login){
    clr($clr);
    echo $pth."[•]=[$ijo login...".$t;
    sleep(1);
    $path="login";
    $post="email=$email&password=$pass";
    $aksi=defaul($path,$post);
    $js=json_decode($aksi,true);
    $token=$js["token"]["access_token"];
    $rtoken=$js["token"]["refresh_token"];
    $err=$js["error"]["message"];

    if($token!=null){
      echo $pth."[•]=[".$tr."login".$pth."]=[".$ijo."success".$pth."]".$t;

      //userme
      $path="users/me";
      $aksi=gets($path,$token);
      $js=json_decode($aksi,true);
      $user=$js["data"]["user"];

      if($user!=null){
        $id=$user["id"];
        $email=$user["email"];
        $first=$user["first_name"];
        $bigid=$user["big_id"];
        $last=$user["last_name"];
        $nik=$first." ".$last;
        $poin=$js["data"]["available_big_points"];
        $b=explode(".",($poin/100));
        $bal=$b[0];
        #$bal=substr(($poin/100),0,4);

        if($first!=null){
          $usr=$nik;
        }else{
          $usr=$email;
        }

        echo $pth."[•]=[".$tr.$usr.$pth."]=[$br poin : ".$ijo.$poin.$pth." ]=[ $".$ijo.$bal.$t;
        break;
      }else{
        $login=true;
        echo "[•]=[ ".$js["error"]["message"].$t;
      }
    }else{
      echo $kn."[error]=[ ".$err.$t;
      cr();
      exit;
    }
  }elseif($input){
    echo $kn."[*+*]=[ setting config ]=[*+*]".$pth.$t;
    $email=readline("[email]=[ ");
    $pass=readline("[password]=[ ");
    $wrt=json_encode(["email"=>$email,"password"=>$pass]);
    file_put_contents($cfg,$wrt);
    clr($clr);
  }
endwhile;

sleep(3);

//validasi
$file="user/bigtoken.txt";
$mem=file($file);
$memb=str_replace($t,"",$mem);
$path="users/profile";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$big_ref=$js["data"]["referral_id"];
$big_id=$js["data"]["bigid"];
echo $tr."[•]=[".$br."validasi".$tr."]=[ ".$ijo.$big_id;
sleep(3);

if($big_ref=="CIDON1N3D"){
  $unlock=true;
}else{
  foreach($memb as $membr){
    if($big_id==$membr){
      $unlock=true;
      break;
    }else{
      $unlock=false;
    }
  }
}

if($unlock){
  echo $tr." ]=[".$ijo." unlocked ]".$t;
  cr();
}else{
  echo $tr." ]=[ ".$red."permission denied ]".$t;
  $error=true;
  cr();
}

if($error){
  echo $tr."[1]=[ indo ]   ".$ijo."[2]=[ english ]".$t;
  $p=readline("[input]=[ ");
  echo $kn."[•]=[error msg]".$t;

  if($p==2){
    echo $pth."[•]=[ this script requires you to use the ".$ijo."CIDON1N3D".$pth." referral code".$t;
    cr();
    exit;
  }elseif($p==1){
    echo $pth."[•]=[ skrip ini mengharuskan Anda untuk menggunakan kode referensi".$ijo." CIDON1N3D".$t;
    cr();
    exit;
  }else{
    cr();
    exit;
  }
}

if($stat_big){
  $x=0;
  //action

  while(true):
    $x++;

    for($i=0;$i<12;$i++){
      echo $pth."- - ";
    }
    echo $t;
    sleep(1);
    echo $t.$pth."[•]=[ ".$tr."starting bot sesion".$ijo." [$x]".$t;
    sleep(1);
    $survey=0;
    $ques=0;

    $path="actions/dashboard";
    $aksi=gets($path,$token);
    $js=json_decode($aksi,true);
    $tp=$js["data"]["typical"];
    $dm=$js["data"]["dynamic"];
    $dmact=$js["data"]["dynamic_actions"];

    foreach($tp as $key => $val ){
      $me[]=$val["mechanic"];}

      if($me>0){
        $num=count($me);

        for($n=0;$n<$num;$n++){
          if($me[$n]=="survey"){
            $survey++;
          }

          if($me[$n]=="question"){
            $ques++;
          }
        }
      }

      echo $pth."[•]=[ ".$br."survey: ".$ijo.$survey.$pth." ]=[ ".$br."ques: ".$ijo.$ques.$pth." ]=[ ".$br."dynamic: ".$pth.$dmact." ]".$t;

      for($i=0;$i<12;$i++){
        echo $pth."- - ";
      }

      echo $t;
      sleep(1);

      if($tp!=null){
        $co=count($tp);

        for($i=0;$i<$co;$i++){
          $mc=$tp[$i]["mechanic"];
          $uuid=$tp[$i]["option_uuid"];
          $rwd=$tp[$i]["reward"];
          echo $br."[$i]=[".$pth."tipe".$br."]=[ ".$tr.$mc.$br." ]=[".$pth."reward: ".$ijo.$rwd." ]".$t;

          if($mc=="question"){
            $keys=$tp[$i]["content"]["data_point_key"];
            $ans=$tp[$i]["content"]["answers"];

            foreach($ans as $key => $val){
              $vals[]=$val["data_point_value"];
            }
            $rnd=array_rand($vals);
            $value=$vals[$rnd];
            $data=["data_point_values"=> [[
                  "values"=> [$value],
                  "data_point_key"=> $keys]],
                  "option_uuid"=> $uuid];

            $path="actions/submit";
            $post=json_encode($data);
            $aksi=post($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }else{
              echo $pth."[•]=[ ".$kn.$msg.$t;
            }

          }elseif($mc=="survey"){
            $path="actions?option_uuid=".$uuid;
            $aksi=gets($path,$token);
            $js=json_decode($aksi,true);
            #print_r($js);exit;
            $conten=$js["data"]["content"]["questions"];
            $con=count($conten);
            $merge=[];

            for($i=0;$i<$con;$i++){
              $keys=$conten[$i]["data_point_key"];
              $ans[]=$conten[$i]["answers"];

              foreach($ans as $key => $val){
                $vals[]=$val["data_point_value"];
              }

              $rnd=array_rand($vals);
              $value=$vals[$rnd];
              $put=[[
                    "values"=> [$value],
                    "data_point_key"=> $keys
                    ]];
              $merge=array_merge($merge,$put);
            }

            $data=["data_point_values"=> $merge,"option_uuid"=> $uuid];

            $path="actions/submit";
            $post=json_encode($data);
            $aksi=post($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }
          }elseif($mc=="photo"){
            $path="actions?option_uuid=$uuid";
            $aksi=gets($path,$token);
            $js=json_decode($aksi,true);
            $uuid=$js["data"]["option_uuid"];
            $path="actions/submit";
            $post="path=https://s3.amazonaws.com/media.bigtoken.com/action/400x400_a27cubbZcZP2iq5wHJxFPhbYfaen3Ok7O6opmblM.jpeg&option_uuid=$uuid";
            $aksi=poto($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }else{
              echo "[error]=[ ".print_r($js);
              exit;
            }
          }

          sleep(5);
        }

      //dinamik
      }elseif($dmact>0){

        for($i=0;$i<$dmact;$i++){
          $path="actions/dashboard";
          $aksi=gets($path,$token);
          $js=json_decode($aksi,true);
          $dm=$js["data"]["dynamic"];
          $mc=$dm["mechanic"];
          $uuid=$dm["option_uuid"];
          $rwd=$dm["reward"];
          echo $tr."[dynamic]=[ ".$br.$mc.$tr." ]=[".$pth."reward: ".$ijo.$rwd." ]".$t;

          if($mc=="question"){
            #echo "[tipe]=[ ".$mc." ]=[reward: ".$rwd." ]".$t;
            $path="actions?option_uuid=$uuid";
            $aksi=gets($path,$token);
            $js=json_decode($aksi,true);
            $keys=$js["data"]["content"]["data_point_key"];
            $ans[]=$js["data"]["content"]["answers"];

            foreach($ans as $key => $val){
              $vals[]=$val["data_point_value"];
            }

            $rnd=array_rand($vals);
            $value=$vals[$rnd];
            $data=["data_point_values"=> [[
                  "values"=> [$value],
                  "data_point_key"=> $keys]],
                  "option_uuid"=> $uuid];
            $path="actions/submit";
            $post=json_encode($data);
            $aksi=post($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }else{
              echo "[•]=[ ".$msg.$t;
            }

          }elseif($mc=="survey"){
            #echo "[tipe]=[ ".$mc." ]=[reward: ".$rwd." ]".$t;
            $path="actions?option_uuid=".$uuid;
            $aksi=gets($path,$token);
            $js=json_decode($aksi,true);
            #print_r($js);exit;
            $conten=$js["data"]["content"]["questions"];
            $con=count($conten);
            $merge=[];

            for($i=0;$i<$con;$i++){
              $keys=$conten[$i]["data_point_key"];
              $ans[]=$conten[$i]["answers"];

              foreach($ans as $key => $val){
                $vals[]=$val["data_point_value"];
              }

              $rnd=array_rand($vals);
              $value=$vals[$rnd];
              $put=[[
                    "values"=> [$value],
                    "data_point_key"=> $keys
                    ]];
              $merge=array_merge($merge,$put);
            }

            $data=["data_point_values"=> $merge,
                  "option_uuid"=> $uuid];
            $path="actions/submit";
            $post=json_encode($data);
            $aksi=post($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }

          }elseif($mc=="photo"){
            $path="actions?option_uuid=$uuid";
            $aksi=gets($path,$token);
            $js=json_decode($aksi,true);
            $uuid=$js["data"]["option_uuid"];
            $path="actions/submit";
            $post="path=https://s3.amazonaws.com/media.bigtoken.com/action/400x400_a27cubbZcZP2iq5wHJxFPhbYfaen3Ok7O6opmblM.jpeg&option_uuid=$uuid";
            $aksi=poto($path,$post,$token);
            $js=json_decode($aksi,true);
            $data=$js["reward_data"];
            $stt=$data["reward"];
            $msg=$data["msg"];

            if($stt==1){
              $rwd=$data["reward_given"];
              echo $pth."[claim: ".$ijo.$rwd.$pth." ]=[".$ijo.$msg."]".$t;
            }else{
              echo "[error]=[ ".print_r($js);
              exit;
            }
          }

          sleep(5);
        }
      }else{
        echo $pth."[•]=[ ".$kn."tidak ada tugas".$t;
        break;
      }

      sleep(15);
  endwhile;
}else{
  echo $pth."[•]=[ ".$kn."wait for update".$t;
  cr();
}

//phone verif
if($verif){
  //login
  echo "[•]=[ verifikasi phone number".$t;
  $path="login";
  $post="email=$email&password=$pass";
  $aksi=defaul($path,$post);
  $js=json_decode($aksi,true);
  $token=$js["token"]["access_token"];

  if($token!=null){
    $hp=readline("phone: +");
    $path="users/account/send-phone-number-verification";
    $post="email=$email&phone_number=".$hp;
    $aksi=poto($path,$post,$token);
    $js=json_decode($aksi,true);
    $hp_err=$js["error"]["errors"]["phone_number"]["message"];
    $e_err=$js["error"]["errors"]["email"]["message"];
    $msg=$js["message"];

    if($e_err==null && $hp_err==null){
      echo "[•]=[ ".$msg.$t;
    }else{
      if($hp_err){
        echo "[error]=[ ".$hp_err.$t;
        exit;
      }elseif($e_err){
        echo "[error]=[ ".$e_err.$t;
        exit;
      }
    }

    $code=readline("[ O T P ] : ");
    $path="users/account/phone-number-verification";
    $post="verification_code=".$code."&phone_number=".$hp;
    $aksi=poto($path,$post,$token);
    echo $aksi;
  }else{
    echo "[•]=[ ".$js["error"]["message"].$t;
    exit;
  }
}

//accept freand
if($facc){
  error_reporting(0);
  $path="users/notifications";
  $aksi=gets($path,$token);
  $js=json_decode($aksi,true);
  #print_r($js);exit;
  $frn=$js["data"]["items"];

  foreach($frn as $keys => $vals){
    $meta[]=$vals["metadata"];

    foreach($meta as $key => $val){
      $from[]=$val["from"];
    }
  }

  $co=count($from);

  if($co>0){
    for($a=0;$a<$co;$a++){
      $id[]=$from[$a]["id"];
      $id=array_unique($id);
    }

    $con=count($id);

    for($i=0;$i<$con;$i++){
      $uid=$id[$i];
      $path="friendship/accept";
      $post="user_id=".$uid;
      $aksi=path($path,$token,$post);
      $js=json_decode($aksi,true);
      $msg=$js["message"];
      echo "[•]=[".$i."]=[".$uid."]=[ ".$msg.$t;
      sleep(1);
    }
  }
}
