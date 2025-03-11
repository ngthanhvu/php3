<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/lab1', function () {
    $data = [
        'name' => 'Nguyen Thanh Vu',
        'profile' => 'Backend PHP Developer',
        'email' => 'vuntpk03665@gmail.com',
        'phone' => '0987654321',
        'image' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw',
        'about' => 'I am a Backend PHP Developer. I have been working in this field for 2 years. I have experience in PHP, Laravel, MySQL, HTML, CSS, JavaScript, Git, Docker, etc. I am a hard-working person, willing to learn new things, and always ready to face new challenges.',
    ];
    $services = [
        [
            'title' => 'My Services 1',
            'description' => 'I provide the following services 1:'
        ],
        [
            'title' => 'My Services 2',
            'description' => 'I provide the following services 2:'
        ],
        [
            'title' => 'My Services 3',
            'description' => 'I provide the following services 3:'
        ],
        [
            'title' => 'My Services 4',
            'description' => 'I provide the following services 4:'
        ],
        [
            'title' => 'My Services 5',
            'description' => 'I provide the following services 5:'
        ],
        [
            'title' => 'My Services 6',
            'description' => 'I provide the following services 6:'
        ]
    ];
    $tasks = [
        [
            'count' => '100',
            'description' => 'This is task 1'
        ],
        [
            'count' => '200',
            'description' => 'This is task 2'
        ],
        [
            'count' => '300',
            'description' => 'This is task 3'
        ],
        [
            'count' => '400',
            'description' => 'This is task 4'
        ]
    ];

    $portofolios = [
        [
            'title' => 'Project 1',
            'description' => 'This is project 1',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ],
        [
            'title' => 'Project 2',
            'description' => 'This is project 2',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ],
        [
            'title' => 'Project 3',
            'description' => 'This is project 3',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ],
        [
            'title' => 'Project 4',
            'description' => 'This is project 4',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ],
        [
            'title' => 'Project 5',
            'description' => 'This is project 5',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ],
        [
            'title' => 'Project 6',
            'description' => 'This is project 6',
            'image' => 'img/work-2.jpg',
            'time' => '2021-01-01'
        ]
    ];
    $users = [
        [
            'name' => 'User 1',
            'description' => 'lorum ipsum dolor sit amet 1',
            'image' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw'
        ],
        [
            'name' => 'User 2',
            'description' => 'lorum ipsum dolor sit amet 2',
            'image' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw'
        ],
        [
            'name' => 'User 3',
            'description' => 'lorum ipsum dolor sit amet 3',
            'image' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw'
        ],
        [
            'name' => 'User 4',
            'description' => 'lorum ipsum dolor sit amet 4',
            'image' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw'
        ]
    ];
    $blogs = [
        [
            'title' => 'Blog 1',
            'category' => 'php',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'image' => 'https://img-c.udemycdn.com/course/750x422/2704674_4661_15.jpg',
            'img_user' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw',
            'name_user' => 'user 1',
            'time' => '10',
            'author' => 'Author 1'
        ],
        [
            'title' => 'Updated Blog 2',
            'category' => 'js',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'image' => 'https://img-c.udemycdn.com/course/750x422/2704674_4661_15.jpg',
            'img_user' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw',
            'name_user' => 'user 2',
            'time' => '11',
            'author' => 'Author 2'
        ],
        [
            'title' => 'Blog 3',
            'category' => 'laravel',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'image' => 'https://img-c.udemycdn.com/course/750x422/2704674_4661_15.jpg',
            'img_user' => 'https://play-lh.googleusercontent.com/kH-qLQiePDQcNUgzG6TXOgLQZ6280pjyMHlNgrvYQFC1lV-hDEfIR5g65oYAAnrJ7ZJc=w240-h480-rw',
            'name_user' => 'user 3',
            'time' => '12',
            'author' => 'Author 3'
        ],
    ];
    $contacts = [
        'description' => 'If you have any questions, please do not hesitate to contact me. I am always ready to help you.',
        'address' => 'Hanoi, Vietnam',
        'phone' => '0987654321',
        'email' => 'd0N4o@example.com'
    ];
    return view('lab1', compact('data', 'services', 'tasks', 'portofolios', 'users', 'blogs', 'contacts'));
});
