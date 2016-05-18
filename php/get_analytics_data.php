<?php
/**
 * Load Google API library
 */
require_once '../google-api-php-client/src/Google/autoload.php';

/**
 * Start session to store auth data
 */
session_start();

/**
 * Set Google service account details
 */
$google_account = array(
  'email'   => 'kqi-data@kqi-analytics-dashboard.iam.gserviceaccount.com',
  'key'     => file_get_contents( '../kqi_data_key.p12' ),
  'profile' => '100743134'
);

/**
 * Get Analytics API object
 */
function getService( $service_account_email, $key ) {
  // Creates and returns the Analytics service object.

  // Load the Google API PHP Client Library.
  require_once '../google-api-php-client/src/Google/autoload.php';

  // Create and configure a new client object.
  $client = new Google_Client();
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




/**
 * Get Analytics API instance
 */
$analytics = getService(
  $google_account[ 'email' ],
  $google_account[ 'key' ]
);



/**
 * Query the Analytics data
 */
$results = $analytics->data_ga->get(
  'ga:' . $google_account[ 'profile' ],
  '60daysAgo',
  'today',
  'ga:sessions',
  array(
    'dimensions'  => 'ga:country',
    'sort'        => '-ga:sessions',
    'max-results' => 20
  ) );


$rows = $results->getRows();


/**
 * Format and output data as JSON
 */
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
