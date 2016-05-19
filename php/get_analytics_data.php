<?php
session_start();

// Creates and returns the Analytics service object.
function getService( $service_account_email, $key ) {

  // Config the Storage folder
  $config = new Google_Config();
  $config->setClassConfig('Google_Cache_File', array('directory' => '/tmp/kqi_data/'));


  // Create and configure a new client object.
  $client = new Google_Client($config);
  $client->setApplicationName( 'Google Analytics Dashboard' );
  $analytics = new Google_Service_Analytics( $client );


  // Read the generated client_secrets.p12 key.
  $cred = new Google_Auth_AssertionCredentials(
      $service_account_email,
      array( Google_Service_Analytics::ANALYTICS_READONLY ),
      $key
  );


  $client->setAssertionCredentials( $cred );
  if( $client->getAuth()->isAccessTokenExpired() ) {

    $client->getAuth()->refreshTokenWithAssertion( $cred );

  }

  return $analytics;
}



 // Load Library
require_once '../google-api-php-client/src/Google/autoload.php';


 // Set login info

$google_account = array(
  'email'   => 'kqi-data@kqi-analytics-dashboard.iam.gserviceaccount.com',
  'key'     => file_get_contents( '../kqi_data_key.p12' ),
);


// Get data

$analytics = getService(
  $google_account[ 'email' ],
  $google_account[ 'key' ]
);




// Create search Query


$views = array('100743134', '105244851', '118502314','118511914');
$results = array();


foreach ($views as $view) {

$results[] = $analytics->data_ga->get(
  'ga:' . $view,
  '60daysAgo',
  'today',
  'ga:sessions',
  array(
    'dimensions'  => 'ga:date'
  ) );



}

$rows = array();

foreach ($results as $result) {

  $rows[] = $result->getRows();



}

print_r($rows);




$data = array();

// Insert Titles

$data[] = array("Date", "APCalculator", "Spere", "Flashpilot", "Gamez4school");

echo sizeof($rows[0]);


/*

for ($data = )

foreach( $rows as $row ) {
  $data[] = array(
    'date'   => $row,
    'sessions_1'  => $row[0],
    'sessions_2' => $row[1],
    'sessions_3' => $row[2],
    'session_4' => $row[3]

  );
}


print_r($data);



// Convert Data to csv for visualization

$file = fopen('../analytics_data_files/data.csv', 'w');

foreach ($data as $fields) {
    fputcsv($file, $fields);
}

fclose($file);

*/



?>
