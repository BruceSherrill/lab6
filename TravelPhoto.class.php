<?php


class TravelPhoto
    {
    private $date;
    private $fileName;
    private $description;
    private $title;
    private $latitude;
    private $longitude;
    private $ID;
        
    static $photoID = 0;
        
    public function __construct($fileName, $title, $description, $latitude, $longitude)
        {
             $this->fileName = $fileName;
             $this->title = $title;
             $this->description = $description;
             $this->latitude = $latitude;
             $this->longitude = $longitude;
             self::$photoID++;  //increments photoID
             $this->ID = self::$photoID; //sets this photo's ID to the incremented value
 
         }
        
    public function __toString()
        {
            $string = '<a href="detail.php?id=' . $this->ID . '"class="img-responsive">';
            $string .=  '<img src="images/square/' . $this->fileName . '" alt="' . $this->title .'">';
            $string .= '<div class="caption"><div class ="blur"></div><div class="caption-text"><h1>'.$this->title . '</h1></div></div></a>';
            
                #code
            return $string;
            
        }

    }
    
 

?>