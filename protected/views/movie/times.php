
<style>
.line-separator{

height:1px;

background: #e5e5e5;


}
</style>


<div id="time_detail_container" >
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">            
                        <tbody>
                            <tr>
                                <td >
                                    

                                    <p></p>
                                    
                                    
                                    <?php
                                    
                                    
                                    $criteria = new CDbCriteria();
                                    //$criteria->condition = "(movie_id = :m_id ) ";
                                    //$criteria->params = array(':m_id'=>$_GET['m_id']);
                                    $criteria->addInCondition("movie_id", array($_GET['m_id']));
                                    $roomTimes = RoomTime::model()->findAll($criteria);
                                    $room_ids = array();    
                                    foreach ($roomTimes as $roomTime) {
                                            $room_ids[] = $roomTime['room_id'];

                                    }
                                    
                                    $criteriaRooms = new CDbCriteria();
                                    $criteriaRooms->addInCondition("id", $room_ids);
                                    $rooms = Room::model()->findAll($criteriaRooms);
                                    $theater_ids = array(); 
                                    foreach ($rooms as $room) {
                                            $theater_ids[] = $room['theater_id'];
                                    }
                                    
                                    $criteria = new CDbCriteria();
                                    //$criteria->condition = "(city_id = :loc ) ";
                                    //$criteria->params = array(':loc'=>$_GET['loc']);
                                    $criteria->addInCondition("city_id", array($_GET['loc']));
                                    $criteria->addInCondition("id", $theater_ids);
                                    $criteria->order= 'name ASC';
                                    $theaters = Theater::model()->findAll($criteria);
                                    
                                    foreach ($theaters as $theater) {
                                        //$criteriaRooms = new CDbCriteria();
                                        $criteriaRooms = new CDbCriteria();
                                        $criteriaRooms->addInCondition("id", $room_ids);
                                        $criteriaRooms->addInCondition("theater_id", array($theater['id']));
                                        //$criteriaRooms->condition = "(theater_id = :t_id ) ";
                                        //$criteriaRooms->params = array(':t_id'=>$theater['id']);
                                        $criteriaRooms->order= 'name ASC';
                                        $rooms = Room::model()->findAll($criteriaRooms);
                                        print_r('<br/>');
                                        print_r('<b style=" font-family: helvetica; color: #04467e;">'.$theater["name"].'</b>');
                                        print_r('<div class="line-separator" ></div>');
                                        print_r('<div style="background-color: #EEE; display: block; width: 100%;">');
                                       
                                        foreach ($rooms as $room) {
                                                print_r('<span style="font-size: small; font-family: helvetica; color: #999999;">'.$room['name'].'</span><br/>');
                                                
                                                $criteriaTimes = new CDbCriteria();
                                                $criteriaTimes->addInCondition("room_id", array($room['id']));
                                                $criteriaTimes->addInCondition("movie_id", array($_GET['m_id']));
                                                $criteriaTimes->order= 'time ASC';
                                                //$criteriaTimes->condition = "(room_id = :r_id AND movie_id = :m_id) ";
                                                //$criteriaTimes->params = array(':r_id'=>$room['id'], ':m_id'=>$_GET['m_id']);
                                                $roomTimes = RoomTime::model()->findAll($criteriaTimes);
                                                
                                                $i = 0;
                                                $len = count($roomTimes);
                                                print_r('<span style="font-family: helvetica; color: #686868;">');
                                                foreach ($roomTimes as $roomTime) { 
                                                    if ($i == $len - 1) {
                                                        // last
                                                        print_r(DATE("g:i a", STRTOTIME($roomTime['time'])));
                                                    }else{
                                                        print_r(DATE("g:i a", STRTOTIME($roomTime['time'])).' - ');
                                                    }
                                                    // …
                                                    $i++;
                                                    //print_r('1');
                                                }
                                                print_r('</span>');
                                                print_r('<br/>');
                                                print_r('<br/>');
                                            }
                                        print_r('</div>');
                                            /*
                                            foreach ($roomTimes as $roomTime) {
                                                print_r($roomTime['time']);
                                                print_r('<p></p>');
                                            }
                                        print_r('<p></p>');
                                        print_r('<p></p>');
                                             * 
                                             */
                                    }
                                    
                                    ?>
                                    
                                    <!--
                                    <b style="font-size: large; color: #999;">Metrocinemas Metromall</b>
                                    
                                    <div class="line-separator" ></div>
                                        
                                    <p>
                                        <b>Sala 3</b><br/>
                                        10:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM
                                        <br/>
                                        <b>Sala 5</b><br/>
                                        10:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D)
                                        
                                    </p>
                                    
                                    <p></p>
                                    <p></p>
                                    
                                    <b style="font-size: large; color: #999;">Metrocinemas Plaza America</b>
                                    <div class="line-separator" ></div>
                                        
                                    <p>
                                        <b>Sala 3</b><br/>
                                        10:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM
                                        <br/>
                                    </p>
                                    
                                    <p></p>
                                    <p></p>
                                    
                                    <b style="font-size: large; color: #999;">Cinemark Mall Multiplaza</b>
                                    <div class="line-separator" ></div>
                                        
                                    <p>
                                        <b>Sala 3</b><br/>
                                        10:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM
                                        <br/>
                                        <b>Sala 5</b><br/>
                                        10:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D) - 7:00PM - 5:00PM(3D)
                                        
                                    </p>
                                    
                                    <p></p>
                                    -->
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>