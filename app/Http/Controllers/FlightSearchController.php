<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightSearchController extends Controller
{
    public function Search(Request $request){

        $data = [
            'OTA_AirLowFareSearchRQ' => [
                'Version' => '4.3.0',
                'POS' => [
                    'Source' => [
                        [
                            'PseudoCityCode' => '{{pcc}}',
                            'RequestorID' => [
                                'Type' => '1',
                                'ID' => '1',
                                'CompanyName' => [
                                    'Code' => 'TN',
                                    'content' => 'TN'
                                ]
                            ]
                        ]
                    ]
                ],
                'OriginDestinationInformation' => [
                    [
                        'RPH' => '1',
                        'DepartureDateTime' => $request->journey_date.'T11:00:00',
                        'OriginLocation' => [
                            'LocationCode' => "$request->from"
                        ],
                        'DestinationLocation' => [
                            'LocationCode' => $request->to
                        ]
                    ],
                    [
                        'RPH' => '2',
                        'DepartureDateTime' => $request->return_date.'T11:00:00',
                        'OriginLocation' => [
                            'LocationCode' => 'MCO'
                        ],
                        'DestinationLocation' => [
                            'LocationCode' => 'MIA'
                        ]
                    ]
                ],
                'TravelPreferences' => [
                    'ValidInterlineTicket' => true,
                    'FlightTypePref' => [
                        'MaxConnections' => '0'
                    ]
                ],
                'TravelerInfoSummary' => [
                    'SeatsRequested' => [1],
                    'AirTravelerAvail' => [
                        [
                            'PassengerTypeQuantity' => [
                                [
                                    'Code' => 'ADT',
                                    'Quantity' => 1
                                ]
                            ]
                        ]
                    ]
                ],
                'TPA_Extensions' => [
                    'IntelliSellTransaction' => [
                        'RequestType' => [
                            'Name' => '50ITINS'
                        ]
                    ]
                ]
            ]
        ];

        $jsondata = json_encode($data);


        dd($data);
        
        
    }
}
