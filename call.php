<?php
//satu nomor hanya 3x telepon

function send($phone){
                  $ab = curl_init();
                  curl_setopt($ab, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
                  );
                  
                  
                  curl_setopt($ab, CURLOP_FOLLOWLOCATION, true);
                  curl_setopt($ab, CURLOP_RETURTRANSFER, true);
                  curl_setopt($ab, CURLOP_HEADER, true);
                  curl_setopt($ab CURLOP_POST, 1);
                  curl_setopt($ab, CURLOP_POSTFIELDS, "msisdn=$phone&accept=call");
                  
                  curl_close($ab);
                  
                  echo $abc."\n";
                  }
                  
                  
                  echo "menang nyien : Rusman s \n \n";
                  echo "input nomor :";
                  $nomor = trim(fgets(STDIN));
                  $execute = send($nomor);
                  print $execute;
                  
                  
  ?>
