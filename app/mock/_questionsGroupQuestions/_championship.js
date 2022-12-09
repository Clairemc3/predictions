module.exports = [
{
    "label": "Championship (if only one group we dont need to show this",
    "order": 1,
    "questions": [
        {
            "type": "Standing",
            "numberInStanding" : 2,
            "answers": [
                {
                    "order" : 1,
                    "value": "Leeds United",
                    "icon": "/assets/images/man-united.png",
                    "results" : {
                        "points": 0,
                        "status" : "final"
                    }
                },
                {
                    "order" : 2,
                    "value": "Fulham",
                    "icon": "/assets/images/man-united.png",
                    "results" : {
                        "points": 0,
                        "status" : "final"
                    }
                }
            ]
        },
        {
            "type": "SingleSelect",
            "label" : "Post Office win",
            "shortLabel" : "p.o win",
            "answer": {
               "value": "CARDIFF",
               "icon": "/assets/images/man-united.png",
               "results" : {
                    "points": 0,
                    "status" : "final"
                }
            }
        },
        {
            "type": "MultiSelect",
            "label" : "Relegated",
            "shortLabel" : "rel",
            "answers": [
            {
               "value": "CARDIFF",
               "icon": "/assets/images/man-united.png",
               "results" : {
                    "points": 0,
                    "status" : "final"
                }
            },
            {
                "value": "Charlton",
                "icon": "/assets/images/man-united.png",
                "results" : {
                     "points": 0,
                     "status" : "final"
                 }
            },
            {
                "value": "Reading",
                "icon": "/assets/images/man-united.png",
                "results" : {
                     "points": 0,
                     "status" : "final"
                 }
            },
        ]
        },
        {
            "type": "SingleSelect",
            "label" : "Top goal scorder",
            "shortLabel" : "Top G/S",
            "answer": {
               "value": "Bobby jackson",
               "results" : {
                    "points": 0,
                    "status" : "final"
                }
            }
        },
    ]
},

]