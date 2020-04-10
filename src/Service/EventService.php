<?php 
namespace App\Service;

class EventService{

    private $events =[
        [
            "id" => "1",
         "description"  => "Grosse teuf de drogué",
         "picture"      => "https://i.ytimg.com/vi/aPSpscgZB2I/maxresdefault.jpg",
         "name"         => "Awakenings 2021",
         "startAt"      => "2019-03-28",
         "endAt"        => "2021-03-30",
         "price"        => "50€",
         "capacity"     => "4000"
    ],
    [
        "id" => "2",
         "description"  => "Teuf dans un hangar",
         "picture"      => "https://electro-news.eu/wp-content/uploads/2018/06/19983740_10154648595947231_6228965879901531766_o.jpg",
         "name"         => "Kappa festival 2022",
         "startAt"      => "2022-04-28",
         "endAt"        => "2022-05-2",
         "price"        => "240€",
         "capacity"     => "10000"
    ],
    [
        "id" => "3",
         "description"  => "Teuf dans un hangar",
         "picture"      => "https://www.joyeuseprocrastination.com/wp-content/uploads/2018/08/joyeuseProcrastination_Boom_articleinvite2.jpg",
         "name"         => "Boom 2021",
         "startAt"      => "2021-04-28",
         "endAt"        => "2021-05-2",
         "price"        => "20€",
         "capacity"     => "1000"
    ],

];



public function getAll(){

    return $this->events;
}


public function get ($id){

  
}
}