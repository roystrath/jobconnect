<?php

return [

    /*
     * Path to the json file containing the credentials(found in google-calendar folder created in storage/app).
     */
    'service_account_credentials_json' => storage_path('app/google-calendar/jobconnect-a64b6e0dbe93.json'),

    /*
     *  The id of the Google Calendar that will be used by default.
     */
    'calendar_id' => env('GOOGLE_CALENDAR_ID'),
];
