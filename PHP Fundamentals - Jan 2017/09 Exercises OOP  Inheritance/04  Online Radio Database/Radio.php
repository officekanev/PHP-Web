<?php


class Radio
{

//    private $artistName;
//    private $songName;
    private $minutes;
    private $seconds;
    private $allTime;

    /**
     * Radio constructor.
     * @param $minutes
     */
    public function __construct()
    {

    }

//   public function __construct(//string $artistName,
////                                //string $songName,
//                                int $minutes,
//                                int$seconds)
//    {
////        $this->artistName = $artistName;
////        $this->songName = $songName;
//        $this->minutes = $minutes;
//        $this->seconds = $seconds;
//    }


    public function addTime(int $minutes, int $seconds)
    {
        $this->allTime += ($minutes * 60);
        $this->allTime += $seconds;
        echo "Song added." . PHP_EOL;
    }

    public function calculateTime()
    {
        $init = $this->allTime;
        $hours = floor($init / 3600);
        $minutes = floor(($init / 60) % 60);
        $minutes = $minutes < 10 ? "0" . $minutes : $minutes;
        $seconds = $init % 60;

        return "Playlist length: {$hours}h {$minutes}m {$seconds}s";
    }
//    protected function setArtistName(string $artistName)
//    {
//        if(strlen($artistName) < 3 || strlen($artistName) > 20){
//            echo "Artist name should be between 3 and 20 symbols." . PHP_EOL;
//
//        }
//        $this->artistName = $artistName;
//    }
//
//
//    protected function setSongName(string $songName)
//    {
//        $this->songName = $songName;
//    }
//
//    protected function setMinutes(int $minutes)
//    {
//        $this->minutes = $minutes;
//    }
//
//    protected function setSeconds(int $seconds)
//    {
//        $this->seconds = $seconds;
//    }
}

try{

    $inputSomgs = fgets(STDIN);
    //$inputSomgs = 5;

    //$songs = [];
//    $songs[] = 'ABBA;Mamma Mia;3:35';
//    $songs[] = 'Nasko Mentata;Shopskata salata;4:123';
//    $songs[] = 'Nasko Mentata;Shopskata salata;4:12';


//    $songs[] = 'Nasko Mentata;Shopskata salata;14:59';
//    $songs[] = 'Nasko Mentata;Shopskata salata;14:59';
//    $songs[] = 'Nasko Mentata;Shopskata salata;14:59';
//    $songs[] = 'Nasko Mentata;Shopskata salata;14:59';
//    $songs[] = 'Nasko Mentata;Shopskata salata;0:5';


    $songCount = 0;
    $song = new Radio();

    for ($x = 0; $x < $inputSomgs; $x++) {

       $line = trim(fgets(STDIN));
       //$line = trim($songs[$x]);
       $data = explode(';', $line);
       $time = explode(':', $data[2]);

       $artistName = $data[0];
       $songName = $data[0];
       $minutes = intval($time[0]);
       $seconds = intval($time[1]);

       if(strlen($artistName) < 3 || strlen($artistName) > 20){
           echo "Artist name should be between 3 and 20 symbols." . PHP_EOL;
           continue;
       }elseif (strlen($songName) < 3 || strlen($songName) > 20){
           echo "Song name should be between 3 and 30 symbols." . PHP_EOL;
           continue;
       }elseif ($minutes < 0 || $minutes > 14){
           echo "Song minutes should be between 0 and 14." . PHP_EOL;
           continue;
       }elseif($seconds < 0 || $seconds > 59){
           echo "Song seconds should be between 0 and 59." . PHP_EOL;
           continue;
       }

       $song->addTime($minutes, $seconds);
       $songCount++;
    }

    echo "Songs added: {$songCount}" . PHP_EOL;
    echo $song->calculateTime();

}catch (Exception $e){
    echo $e->getMessage();
}