in php, from  array :
array1 : [
0
2
3
4
7
]
it is mean child 7 => parent 4 ,  child 4 => parent 3 ,  child 3 => parent 2 , child 2 => parent 0 ;

and the same in array 2 :
array2: [
 0
 2
 6
]
it is mean child 6 => parent 2 ,  child 2 => parent 0 ;

the same in array 3
array3 : array:4 [
 0
 2
 6
 8
]

it is mean child 8 => parent 6, child 6 => parent 2 ,  child 2 => parent 0 ;

I want a array deduce parent 0 => child 2, parent 2 => child 3 .....example return
$ar = [
    0 => [
        2 => [
            3 => [
                4 => [
                    7 => []
                ]
            ] ,
            6 => [
                8 => []
            ]
        ]
    ]
];
I want a general solution in case n arrays input

//        $ar = [
//            0 => [
//                2 => [
//                    3 => [
//                        4 => [
//                            7 => []
//                        ]
//                    ] ,
//                    6 => [
//                        8 => []
//                    ]
//                ]
//            ],
//            1 => []
//        ];