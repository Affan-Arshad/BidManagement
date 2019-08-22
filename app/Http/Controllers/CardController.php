<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{

    public function index() {
        return json_encode(`
        {
            id: '1',
            type: 'container',
            name: 'prebid',
            props: {
                orientation: 'vertical',
                className: 'card-container',
            },
            children: [
                {
                    type: 'draggable',
                    id: '1',
                    props: {
                        className: 'card',
                        style: {backgroundColor: pickColor()}
                    },
                    data: 'Stelco Bid',
                },
            ]
        }`);
    }
}