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
  'profile' => '100743134'
);


// Get data

$analytics = getService(
  $google_account[ 'email' ],
  $google_account[ 'key' ]
);




// Create search Query
$results = $analytics->data_ga->get(
  'ga:' . $google_account[ 'profile' ],
  '30daysAgo',
  'today',
  'ga:sessions',
  array(
    'dimensions'  => 'ga:city',
    'sort'        => '-ga:sessions',
    'max-results' => 5
  ) );


$rows = $results->getRows();



// Format data in JSON
$data = array();
foreach( $rows as $row ) {
  $data[] = array(
    'country'   => $row[0],
    'sessions'  => $row[1]
  );
}

$data = json_encode($data);

echo $data;


?>
