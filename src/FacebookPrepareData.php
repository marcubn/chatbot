<?php

namespace App;

class FacebookPrepareData
{

    /**
     * Create JSON data for the play to facebook
     * @param $senderId
     * @param string $message
     * @return string
     */
    public function prepare($senderId, $message)
    {
        return '{
            "recipient":{
                "id":"' . $senderId . '"
            },
            "message":{
                "text":"' . $message . '"
            }
        }';
    }

    public function handToHuman($senderId)
    {
        return '{
              "recipient" : {
                  "id" : "' . $senderId . '" 
              },
              "target_app_id" : 263902037430900,
              "metadata" : "Human action is required" 
         }';
    }
}
