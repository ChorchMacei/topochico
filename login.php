$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://dev-ulvaq5u1.us.auth0.com/api/v2/clients/r9zUSjxpbAVkPK6pNuC167mkHnCG6hn8",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
  CURLOPT_POSTFIELDS => "{\"initiate_login_uri\": \"<login_url>\"}",
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer API2_ACCESS_TOKEN",
    "cache-control: no-cache",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}