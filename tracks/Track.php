<?php

/**
 * Description of Track
 *
 * @author Marine
 */
class Track {
    
    public $track_id;
    public $artist_name;
    public $track_name;
    public $artist_mbid;
    public $track_mbid;
    public $album_mbid;
    public $lf_duration;
    public $lf_listeners;
    public $lf_playcount;
    public $ten_artist_id;
    public $ten_track_id;
    public $ten_duration;
    public $ten_tempo;
    public $ten_loudness;
    public $ten_hotttnesss;
    public $ten_danceability;
    public $ten_energy;
    public $ten_key;
    public $ten_mode;
    public $ten_time_signature;
    public $year;
    
    
    function __construct($track_id, $artist_name, $track_name, $artist_mbid, $track_mbid, $album_mbid, $lf_duration, $lf_listeners, $lf_playcount, $ten_artist_id, $ten_track_id, $ten_duration, $ten_tempo, $ten_loudness, $ten_hotttnesss, $ten_danceability, $ten_energy, $ten_key, $ten_mode, $ten_time_signature, $year) {
        $this->track_id = $track_id;
        $this->artist_name = $artist_name;
        $this->track_name = $track_name;
        $this->artist_mbid = $artist_mbid;
        $this->track_mbid = $track_mbid;
        $this->lbum_mbid = $album_mbid;
        $this->lf_duration = $lf_duration;
        $this->lf_listeners = $lf_listeners;
        $this->lf_playcount = $lf_playcount;
        $this->ten_artist_id = $ten_artist_id;
        $this->ten_track_id = $ten_track_id;
        $this->ten_duration = $ten_duration;
        $this->ten_tempo = $ten_tempo;
        $this->ten_loudness = $ten_loudness;
        $this->ten_hotttnesss = $ten_hotttnesss;
        $this->ten_danceability = $ten_danceability;
        $this->ten_energy = $ten_energy;
        $this->ten_key = $ten_key;
        $this->ten_mode = $ten_mode;
        $this->ten_time_signature = $ten_time_signature;
        $this->year = $year;
    }
    
    function afficherTrack() {
        echo "bonjour";
        echo $this->track_name;
    }
    
    function getInfoXML() {
        
    }
}
