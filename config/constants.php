<?php
return [
    // Roles
    'roles' => [
        'administrator' => 1,
        'user' => 2,
    ],
    'role_labels' => [
        1 => 'Administrator',
        2 => 'User',
    ],
    'status' => [
        'default' => 1,
        'active' => 1,
        'inactive' => 0,
    ],
    'status_label' => [
        0 => 'Inactive',
        1 => 'Active',
    ],

    // attachment
    'attachment_types' => [
        'image' => 0,
        'document' => 1,
        'audio' => 2,
        'video' => 3,
    ],
    'attachment_types_label' => [
        0 => 'Image',
        1 => 'Document',
        2 => 'Audio',
        3 => 'Video',
    ],
    'attachment_path' => 'media/',
    'image_type' => ['jpg', 'jpeg', 'png'],
    'document_type' => ['pdf', 'docs'],
    'audio_type' => ['mp3', 'wav'],
    'video_type' => ['mp4'],
    'allow_attachment_type' => 'jpg,jpeg,png,pdf,docs,mp3,wav,mp4',
    'max_allowed_file_size' => 5 * 1024,

    'attachment_for' => [
        'general' => [
            'profile' => 1,
            'image' => 2,
            'thumbnail' => 3,
            'e_book' => 4
        ],

    ],
];
