<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewCalenderController extends CI_Controller
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
            for ($i = 1; $i <= $room_count; $i++) {
                $label = $label_new . " - " . $i;
                $id = $id_new . " - " . $i;
                $row->label = $label;
                $row->id = $id;
                $x = clone($row);
                $rooms[] = $x;
            }

        }
        $roomStatus = $this->CalenderModel->getRoomStatus();
        $collections = array('roomType' => $roomType, 'roomStatus' => $roomStatus, 'bookingStatus' => $bookingStatus, 'room' => $rooms);
        $data = $this->CalenderModel->getData($listing_no);
        $data_checkins = array();
        $room_types = 0;
        foreach ($room as $row) {
            $room_types++;
            $room_count = $row->no_of_rooms;
            $room_id = $row->id;

        }
        $sub_array = array();
        for ($i = 1; $i <= $room_types; $i++) {
            $k = array();
            $count = 0;
            foreach ($data as $row) {
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
                    $start_one = $row[$i]->start_date;
                    $end_one = $row[$i]->end_date;
                    $start_two = $row[$j]->start_date;
                    $end_two = $row[$j]->end_date;

                    $ret = $this->datesOverlap($start_one, $end_one, $start_two, $end_two);

                    if ($ret == 1) {
                        if (sizeof($k) > 1) {
                            $k = substr($row[$j]->room, -1);
                        } else {
                            $k = 1;
                        }

                        $id = $id_new . " - " . $k++;
                        $row[$j]->room = $id;

                        // $x = clone($row);
                        // $data_checkins[] = $x;
                    } else {
                        if (sizeof($k) > 1) {
                            $k = substr($row[$j]->room, -1);
                        } else {
                            $k = 1;
                        }
                        $id = $id_new . " - " . $k;
                        $row[$j]->room = $id;
                    }

                }
                echo $row[$i]->room.'<br>';
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


}