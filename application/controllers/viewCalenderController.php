<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCalenderController extends CI_Controller
{
    public function datesOverlap($start_one, $end_one, $start_two, $end_two)
    {

        if ($start_one <= $end_two && $end_one >= $start_two) { //If the dates overlap
            return 1;
        }

        return 0; //Return 0 if there is no overlap
    }

    public function calender()
    {

        $this->load->library('session');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {

            $this->load->model('CalenderModel');
            $listing_no = $_SESSION['hotelno'];

            $roomType = $this->CalenderModel->getRoomTypes($listing_no);
            $bookingStatus = $this->CalenderModel->getBookingStatus();
            $room = $this->CalenderModel->getRooms($listing_no);
            $rooms = array();
            foreach ($room as $row) {
                $room_count = $row->no_of_rooms;
                $label_new = $row->label;
                $id_new = $row->id;
                $val_new = $row->value;
                for ($i = 1; $i <= $room_count; $i++) {
                    $label = $label_new . " - " . $i;
                    $id = $id_new . " - " . $i;
                    $val = $val_new . " - " . $i;
                    $row->label = $label;
                    $row->id = $id;
                    $row->value = $val;
                    $x = clone($row);
                    $rooms[] = $x;
                }

            }
            $roomStatus = $this->CalenderModel->getRoomStatus();
            $collections = array('roomType' => $roomType, 'roomStatus' => $roomStatus, 'bookingStatus' => $bookingStatus, 'room' => $rooms);
            $data1 = $this->CalenderModel->getData($listing_no);
            $data_checkins = array();
            $data=array();
            $room_types = sizeof($room);
            $data_size = sizeof($data1);
            $t = 0;
            for ($i = 0; $i < $data_size; $i++) {
                $count = $data1[$i]->quantity;
                if($count>1){
                    $t++;
                    for($k=1;$k<$count;$k++){
                        $x = clone($data1[$i]);
                        $m = $x->text;
                        $l = $x->room;
                        $m_new = $m . ' - ' . $l.' -  '. $k.' room out of '.$count.' rooms' ;
                        $x->id = $m_new;
                        $x->text = $m_new;
                        $data[] = $x;
                    }
                    $m = $data1[$i]->text;
                    $l = $data1[$i]->room;
                    $m_new = $m . ' - ' . $l.' -  '. $count.' room out of '.$count.' rooms' ;
                    $data1[$i]->id = $m_new;
                    $data1[$i]->text = $m_new;
                }

                $data[]= $data1[$i];
            }
            $sub_array = array();
            for ($i = 1; $i <= $room_types; $i++) {
                $k = array();
                $count = 0;
                foreach ($data as $row) {
                    if($i==1) {
                        $m = $row->text;
                        if (strpos($m, '-') == false){
                            $l = $row->room;
                        $m_new = $m . ' - ' . $l;
                        $row->id = $m_new;
                        $row->text = $m_new;
                    }
                    }
                    if ($row->room == $i) {
                        $count++;
                        $k[] = $row;
                    }
                }
                $sub_array[] = $k;
            }
            foreach ($sub_array as $row) {
                for ($i = 0; $i < sizeof($row); $i++) {
                    $id_new = substr($row[$i]->room, 0, 1);
                    if ($i == 0) {
                        $k = 1;
                        $id = $id_new . " - " . $k;
                        $row[0]->room = $id;
                        // $x = clone($row);
                        //  $data_checkins[] = $x;
                    }
                    for ($j = ($i + 1); $j < sizeof($row); $j++) {
                   //     if($row[$i])
                        $start_one = $row[$i]->start_date;
                        $end_one = $row[$i]->end_date;
                        $start_two = $row[$j]->start_date;
                        $end_two = $row[$j]->end_date;

                        $ret = $this->datesOverlap($start_one, $end_one, $start_two, $end_two);
                      //  echo sizeof($row[$j]->room).'<br>';

                        if ($ret == 1) {
                             if (strlen($row[$j]->room) > 1) {

                                $k = substr($row[$j]->room, -1);

                            } else {
                                $k = 1;
                            }
                            $k++;
                            $id = $id_new . " - " . $k;
    //                        echo 'k'.$k.'<br>';
                            $row[$j]->room = $id;
    //                        echo $row[$j]->room.' - '.$id.'<br>';
                            // $x = clone($row);
                            // $data_checkins[] = $x;
                        } else {
                            if (strlen($row[$j]->room) > 1) {
                                $k = substr($row[$j]->room, -1);
                            } else {
                                $k = 1;
                       //         echo $row[$j]->text.'<br>';

                            }

                            $id = $id_new . " - " . $k;
                            $row[$j]->room = $id;

    //                        echo $row[$j]->room.'<br>';
                        }

                    }
                    $data_checkins[] = $row[$i];

                }
    //            foreach ($row as $k) {
    //              //  echo $k->room . '<br>';
    //                $data_checkins[] = $k;
    //            }
            }


    //           $room_count = $row->quantity;
    //          //  $label_new = $row->label;
    //            $id_new = $row->room;
    //            for($i=1;$i<=$room_count;$i++) {
    //             //   $label=$label_new." - ".$i;
    //                $id=$id_new." - ".$i;
    //             //   $row->label = $label;
    //                $row->id = $id;
    //                $x = clone($row);
    //                $data_checkins[]=$x;
    //            }
    //
    //        }
            $return = array('data' => $data_checkins, 'collections' => $collections);
    //        $this->output->set_content_type('application/json')->set_output(json_encode( $return));
            $data_array = json_encode($return);
            $return_array = array('data_array' => $data_array, 'df' => "fdfd");
            //  return;
            $this->load->view('hotel/viewCalender', $return_array);
            //   $this->load->view('hotel/viewCalender');
        }
        else{
            $_SESSION['error']= 'Time is up, please log in again for your own security.';
            redirect();
        }
    }

    public function saveNoSpaceBookings(){

        $this->load->library('session');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {

            $this->load->model('CalenderModel');
            $listing_no = $_SESSION['hotelno'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $room_id = $_POST['room_id'];
            $status = $_POST['status'];
            $this->CalenderModel->createEvent();
//            $this->AccountModel->editAccountDetails($data2,$login_id);


        }


    }
}