<?php

date_default_timezone_set('UTC');

class BijintWGetter {

    static public function getBijintAll($type) {

        $dirname = date('Ymd') . '_' . $type;

        shell_exec('mkdir ' . $dirname);

        $commandList = array();

        $filename = '';
        for($hour = 0; $hour < 24; $hour++){
            for($minutes = 0; $minutes < 60; $minutes++){
                if($hour < 10){
                    if($minutes < 10){
                        $filename = '0' . $hour . '0' . $minutes . '.jpg';
                    } else {
                        $filename = '0' . $hour . $minutes . '.jpg';
                    }
                } else {
                    if($minutes < 10){
                        $filename = $hour . '0' . $minutes . '.jpg';
                    } else {
                        $filename = $hour . $minutes . '.jpg';
                    }
                }

                $command = 'wget http://www.bijint.com/' . $type . '/tokei_images/' . $filename . ' -P ' . __DIR__ . '/' . $dirname . '/';
                array_push($commandList, $command);

            }
        }

        foreach($commandList as $value) {
            shell_exec($value);
            sleep(1);
        }

    }

}

BijintWGetter::getBijintAll('jp');
#BijintWGetter::getBijintAll('cc');
#BijintWGetter::getBijintAll('niigata');
