<?php

class Location_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function get_last_ten_entries()
    {
        $entries = $this->db->get('location', 10)->result();

        foreach($entries as  $entry){
            $jsonObject = json_decode($entry->response);
            $entry->response = $jsonObject;
        }

        return $entries;
    }


    public function updateLocations()
    {
        $entries = $this->db->get('location', 10);

        $precipintensityLevel = $this->config->item('precipintensity_level');
        $darkSkyApiKey = $this->config->item('dark_sky_api_key');

        $darkSkyApiEndPoint = "https://api.darksky.net/forecast/".$darkSkyApiKey."/";

        foreach($entries->result() as  $entry){

            $requestedUrl = $darkSkyApiEndPoint.$entry->longitude.",".$entry->latitude;
            $content = file_get_contents($requestedUrl);
            echo $requestedUrl.PHP_EOL;

            if (!empty($content)) {

                $entry->response = $content;
                $jsonObject = json_decode($entry->response);

                if($jsonObject->currently->precipIntensity >= $precipintensityLevel){
                    $entry->show = 1;
                }else{
                    $entry->show = 0;
                }


            } else {
                $entry->response = null;
                $entry->show = 0;
            }
            $this->db->where('id', $entry->id);
            $this->db->update('location', $entry);

        }
    }

}