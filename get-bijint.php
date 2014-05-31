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
//sleep(1);
//BijintWGetter::getBijintAll('2012jp');
//sleep(1);
//BijintWGetter::getBijintAll('2011jp');
//sleep(1);
//BijintWGetter::getBijintAll('cc');
//sleep(1);
//BijintWGetter::getBijintAll('hawaii');
//sleep(1);
//BijintWGetter::getBijintAll('taiwan');
//sleep(1);
//BijintWGetter::getBijintAll('tokyo');
//sleep(1);
//BijintWGetter::getBijintAll('hokkaido');
//sleep(1);
//BijintWGetter::getBijintAll('sendai');
//sleep(1);
//BijintWGetter::getBijintAll('akita');
//sleep(1);
//BijintWGetter::getBijintAll('gunma');
//sleep(1);
//BijintWGetter::getBijintAll('niigata');
//sleep(1);
//BijintWGetter::getBijintAll('kanazawa');
//sleep(1);
//BijintWGetter::getBijintAll('fukui');
//sleep(1);
//BijintWGetter::getBijintAll('nagoya');
//sleep(1);
//BijintWGetter::getBijintAll('kyoto');
//sleep(1);
//BijintWGetter::getBijintAll('osaka');
//sleep(1);
//BijintWGetter::getBijintAll('kobe');
//sleep(1);
//BijintWGetter::getBijintAll('okayama');
//sleep(1);
//BijintWGetter::getBijintAll('kagawa');
//sleep(1);
//BijintWGetter::getBijintAll('fukuoka');
//sleep(1);
//BijintWGetter::getBijintAll('kagoshima');
//sleep(1);
//BijintWGetter::getBijintAll('okinawa');
//sleep(1);
//BijintWGetter::getBijintAll('kumamoto');
//sleep(1);
//BijintWGetter::getBijintAll('saitama');
//sleep(1);
//BijintWGetter::getBijintAll('hiroshima');
//sleep(1);
//BijintWGetter::getBijintAll('chiba');
//sleep(1);
//BijintWGetter::getBijintAll('nara');
//sleep(1);
//BijintWGetter::getBijintAll('yamaguchi');
//sleep(1);
//BijintWGetter::getBijintAll('nagano');
//sleep(1);
//BijintWGetter::getBijintAll('shizuoka');
//sleep(1);
//BijintWGetter::getBijintAll('miyazaki');
//sleep(1);
//BijintWGetter::getBijintAll('tottori');
//sleep(1);
//BijintWGetter::getBijintAll('iwate');
//sleep(1);
//BijintWGetter::getBijintAll('yamanashi');
//sleep(1);
//BijintWGetter::getBijintAll('ibaraki');
//sleep(1);
//BijintWGetter::getBijintAll('tochigi');
